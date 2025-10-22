<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 * @property CI_Input $input
 * @property CI_DB $db
 * @property Sendmail $sendmail
 * @property CI_URI $uri
 */
class Notification extends CI_Controller
{
    /**
     * @var array
     */
    private $firebase;

    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        // $user = getLoggedInUser();
        // if ($user) {
        //     // If authenticated user is not admin
        //     if ($user['is_candidate'] === true && $this->uri->segment(2) != "save_token") {
        //         http_response_code(401);

        //         echo json_encode([
        //             'success' => false,
        //             'message' => 'Unauthorized.'
        //         ]);
        //         exit;
        //     }
        // } else {
        //     http_response_code(401);

        //     echo json_encode([
        //         'success' => false,
        //         'message' => 'Unauthorized.'
        //     ]);
        //     exit;
        // }

        $this->firebase = require APPPATH . 'config/firebase.php';
        $this->load->library('Sendmail');

        $this->load->model('notification_model');
    }

    public function save_token()
    {
        if ($this->input->method() == 'post') {
            $id_user = $this->input->post('user_id');


            if (!$this->db->get_where('candidate', ['id' => $id_user])->row_array()) {
                http_response_code(401);
                echo json_encode([
                    'success' => true,
                    'message' => "Unathorized'",
                ]);
                exit;
            }

            $device_token = $this->input->post('token');

            $update = [
                'device_token' => $device_token
            ];

            if ($this->db->update('candidate', $update, ['id' => $id_user])) {
                http_response_code(200);
                echo json_encode([
                    'success' => true,
                    'message' => 'Token saved successfully.'
                ]);
            } else {
                http_response_code(500);
                echo json_encode([
                    'success' => true,
                    'message' => 'Failed to store device token.'
                ]);
            }
        }
    }

    public function send_email()
    {
        if ($this->input->method() == 'post') {
            $state         = $this->input->post('state');
            $id_candidate  = $this->input->post('id_candidate');
            $id_job_reject = $this->input->post('id_job_reject');
            $candidate     = $this->db->get_where('candidate', ['id' => $id_candidate])->row_array();

            if (!$candidate) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Candidate not found.'
                ]);
                exit;
            }

            if (!in_array($state, ['apply', 'reject', 'next'])) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Invalid state type'
                ]);
                exit;
            }


            if ($state == 'apply') {
                $lamaran = $this->db->select('job_vacancy.name_job, candidate.name_candidate, history_apply.id_batch, job_vacancy.id_job')
                                ->from('history_apply')
                                ->join('job_vacancy', 'history_apply.id_job_history = job_vacancy.id')
                                ->join('candidate', 'candidate.id = history_apply.id_candidate_history')
                                ->where('history_apply.id_candidate_history', $id_candidate)
                                ->where('history_apply.state', 2)
                                ->get()->row_array();

                $lamaran['kode_lowongan'] = sprintf('%s%sB%s', strtoupper(substr($lamaran['name_job'], 0, 3)), $lamaran['id_job'], $lamaran['id_batch']);
            } elseif ($state == 'reject') {
                $job_vac = $this->db->get_where('job_vacancy', ['id' => $id_job_reject])->row_array();

                if (!$job_vac) {
                    http_response_code(400);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Job vacancy not found'
                    ]);
                    exit;
                }
                $lamaran = null;
            } else {
                $lamaran = null;
            }

            if ($this->sendmail->forApplyCandidate($candidate, $lamaran, $state)) {
                http_response_code(200);

                echo json_encode([
                    'success' => true,
                    'message' => 'Email sent.'
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => true,
                    'message' => 'Failed to send email.'
                ]);
            }
        }
    }

    public function send_notif()
    {
        if ($this->input->method() == 'post') {
            $title = $this->input->post('title');
            $body  = $this->input->post('body');
            $icon  = $this->input->post('icon');
            $token = $this->input->post('token');

            $id_candidate = $this->input->post('id_candidate');

            // Internal notification
            Notification_model::create($id_candidate, $body);

            if (!$title) {
                $title = 'Lido Career Center';
            }

            if (!$body) {
                $body = 'Halo anda yang disana!';
            }

            if (!$icon) {
                $icon = 'https://ethestm.co.id/wp-content/uploads/2021/06/cropped-logo-Ethes-Doc-2-192x192.png';
            }

            $device_token = [];

            if ($token && !empty($token)) {
                if (is_string($token)) {
                    $token = explode(',', $token);

                    for ($i=0; $i < count($token); $i++) {
                        $device_token []= ["device_token" => $token[$i]];
                    }
                } elseif (is_array($token)) {
                    $device_token = $token;
                }
            } else {
                http_response_code(400);

                echo json_encode([
                    'status' => false,
                    'message' => 'Tidak ada target untuk notifikasi.'
                ]);
                exit;
            }

            $firebaseToken = [];

            foreach ($device_token as $token) {
                $firebaseToken []= $token["device_token"];
            }

            if (empty($firebaseToken)) {
                http_response_code(400);

                echo json_encode([
                    'status' => false,
                    'message' => 'Tidak ada target untuk notifikasi.'
                ]);
                exit;
            }

            $payload = [
                "registration_ids" => $firebaseToken,
                "notification" => [
                    "title" => $title,
                    "body" => $body,
                    "icon" => $icon,
                    "content_available" => true,
                    "priority" => "high",
                ]
            ];

            $payload = json_encode($payload);

            $headers = [
                'Authorization: key=' . $this->firebase['serverKey'],
                'Content-Type: application/json',
            ];

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

            $response = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            http_response_code($httpcode);
            echo $response;
        }
    }
}
