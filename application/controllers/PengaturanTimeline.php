<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanTimeline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();
        if ($user) {
            // If authenticated user is not admin
            if ($user['is_candidate'] === true) {
                $this->session->sess_destroy();

                redirect(site_url('auth'));
            }
        } else {
            redirect(site_url('auth'));
        }
        $this->load->model('timeline_model');
        $this->load->model('kandidat_model');
        $this->load->library('Sendmail');
    }

    public function index()
    {
        if ($this->input->method() == 'post') {
            $batchs = $this->db->order_by('name_batch', 'ASC')->get('batch_timeline')->result_array();

            $batchs = array_map(function ($data) {
                $data['start_date_'] = date('d F Y H:i:s', strtotime($data['start_date']));
                $data['due_date_'] = date('d F Y H:i:s', strtotime($data['due_date']));

                return $data;
            }, $batchs);

            http_response_code(200);

            echo json_encode([
                'success' => true,
                'batchs'  => $batchs
            ]);
        } else {
            $this->load->view('templates/header', [
                'title' => 'Timeline'
            ]);

            $this->load->view('timeline/index');

            $this->load->view('templates/footer');
        }
    }

    public function batch()
    {
        if ($this->input->method() == 'post') {
            if ($this->input->post('action') == 'delete') {
                $id_batch = $this->input->post('id_batch');

                if (!$this->timeline_model->getBatch($id_batch)) {
                    show_404();
                }

                if ($this->timeline_model->deleteTimelineBatch($id_batch)) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'message' => 'Batch deleted.'
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Batch failed to delete.'
                    ]);
                }
            } elseif ($this->input->post('action') == 'insert') {
                if (strlen($this->input->post('start_date')) < 15 || strlen($this->input->post('due_date')) < 15) {
                    http_response_code(400);

                    echo json_encode([
                        'success' => true,
                        'message' => 'Harap melengkapi semua data.'
                    ]);
                    exit;
                }

                $name = $this->timeline_model->getAutonameForBatch();
                $save = $this->db->insert('batch_timeline', [
                    'name_batch' => $name,
                    'start_date' => $this->input->post('start_date'),
                    'due_date'   => $this->input->post('due_date')
                ]);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'message' => 'Data batch berhasil ditambahkan.'
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Data batch gagal ditambahkan.'
                    ]);
                }
            } elseif ($this->input->post('action') == 'update') {
                if (!$this->db->get_where('batch_timeline', ['id_batch' => $this->input->post('id_batch')])->row_array()) {
                    http_response_code(404);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Data batch tidak ditemukan.'
                    ]);
                    exit;
                }

                if (strlen($this->input->post('start_date')) < 15 || strlen($this->input->post('due_date')) < 15) {
                    http_response_code(400);

                    echo json_encode([
                        'success' => true,
                        'message' => 'Harap melengkapi semua data.'
                    ]);
                    exit;
                }

                $save = $this->db->update('batch_timeline', [
                    'start_date' => $this->input->post('start_date'),
                    'due_date'   => $this->input->post('due_date')
                ], ['id_batch' => $this->input->post('id_batch')]);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'message' => 'Data batch berhasil diperbarui.'
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Data batch gagal diperbarui.'
                    ]);
                }
            }
        }
    }

    public function batch_job_add_job($id_batch = null)
    {
        $batch = $this->db->get_where('batch_timeline', ['id_batch' => $id_batch])->row_array();

        if (!$batch) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Batch tidak ditemukan.'
            ]);
            exit;
        }

        $jobs = explode(',', $this->input->post('jobs'));

        if (empty($jobs)) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Tidak ada job yang dipilih.'
            ]);
            exit;
        }

        $data = [];

        for ($i=0; $i < count($jobs); $i++) {
            $data []= [
                'id_batch' => $id_batch,
                'id_job'   => $jobs[$i]
            ];
        }

        if ($this->db->insert_batch('batch_job', $data)) {
            http_response_code(200);

            echo json_encode([
                'success' => false,
                'message' => 'Job berhasil ditambahkan.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Job gagal ditambahkan.'
            ]);
        }
    }

    public function batch_job_get_job($id_batch = null)
    {
        $batch_job = $this->db->get_where('batch_job', ['id_batch' => $id_batch])->result_array();
        $jobvacids = [];

        foreach ($batch_job as $row) {
            $jobvacids []= $row['id_job'];
        }

        if (!empty($jobvacids)) {
            $data = $this->db->select('job_vacancy.*, division.name_division')
                            ->from('job_vacancy')
                            ->where_not_in('id', $jobvacids)
                            ->join('division', 'division.id_division = job_vacancy.id_division')
                            ->get()
                            ->result_array();
        } else {
            $data = $this->db->select('job_vacancy.*, division.name_division')
                            ->from('job_vacancy')
                            ->join('division', 'division.id_division = job_vacancy.id_division')
                            ->get()
                            ->result_array();
        }

        if (empty($data)) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Data lowongan pekerjaan masih kosong.'
            ]);
        } else {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'jobs'    => $data
            ]);
        }
    }

    public function batch_job_del_job($id_batch = null)
    {
        $id_batch_job = $this->input->post('id_batch_job');

        $batch = $this->db->get_where('batch_job', ['id_batch_job' => $id_batch_job])->row_array();

        if (!$batch) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Job not found.'
            ]);
            exit;
        }

        if ($this->timeline_model->deleteJobFromBatch($id_batch_job, $batch['id_batch'])) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Job deleted.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Failed to delete job.'
            ]);
        }
    }

    public function setting($id_batch = null)
    {
        $batch    = $this->timeline_model->getBatch($id_batch);
        $timeline = $this->timeline_model->getTimeline($id_batch);
        $links    = $this->timeline_model->getAllTimelineLinks();
        $job      = $this->timeline_model->getJobForBatch($id_batch);

        if (!$batch) {
            show_404();
        }

        $this->load->view('templates/header');

        $this->load->view('timeline/batch/setting', [
            'batch'    => $batch,
            'timeline' => $timeline,
            'links'    => $links,
            'job'      => $job
        ]);

        $this->load->view('templates/footer');
    }

    public function monitor($id_batch = null)
    {
        $batch = $this->timeline_model->getBatch($id_batch);

        if (!$batch) {
            show_404();
        }

        $this->load->view('templates/header');

        $this->load->view('timeline/batch/monitor', [
            'batch'     => $batch,
            'job'       => $this->timeline_model->getJobForBatch($id_batch),
            'timeline'  => $this->timeline_model->getTimeline($id_batch)
        ]);

        $this->load->view('templates/footer');
    }

    public function bakso_control_multipple()
    {
        if ($this->input->method() === 'post') {
            $action         = $this->input->post('bakso');
            $target         = $this->input->post('control');
            $id_timeline    = $this->input->post('id_timeline');
            $kode_timeline  = $this->input->post('kode_timeline');
            $id_job_vacancy = $this->input->post('id_job_vacancy');
            $id_batch       = $this->input->post('id_batch');

            $target = explode(",", $target);
            $timeline = $this->db->get_where('timeline', ['id_timeline' => $id_timeline])->row_array();

            $is_reject_mode = $action == "reject" ? 1 : 0;

            if ($is_reject_mode == 1) {
                $update = $this->kandidat_model->rejectCandidateStepBaksoControl($target, $id_job_vacancy, $id_timeline);

                if ($update) {
                    http_response_code(200);

                    $notifications = $this->db->select('name_candidate, device_token')
                                          ->from('candidate')
                                          ->where_in('id', $target)
                                          ->get()->result_array();

                    $notifications = array_map(function ($data) use ($timeline) {
                        $data['timeline'] = $timeline['name_timeline'];

                        return $data;
                    }, $notifications);

                    echo json_encode([
                        'status'  => 'success',
                        'message' => 'Candidate rejected successfully.',
                        'notifications' => $notifications
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'status'  => 'failed',
                        'message' => 'Candidate rejected unsuccessfully.'
                    ]);
                }

                exit; // break
            }

            $current_timeline = $this->db->get_where('timeline', ['kode_timeline' => $kode_timeline])->row_array();
            $next_timeline = $this->timeline_model->getNextTimelineAfter($kode_timeline);

            if ($next_timeline && $current_timeline) {
                $update = $this->timeline_model->updateTimelineStepBaksoControl($target, $id_job_vacancy, $id_batch, $current_timeline['id_timeline'], $next_timeline['id_timeline']);

                if ($update) {
                    http_response_code(200);

                    $notifications = $this->db->select('name_candidate, device_token')
                                          ->from('candidate')
                                          ->where_in('id', $target)
                                          ->get()->result_array();

                    $notifications = array_map(function ($data) use ($timeline) {
                        $data['timeline'] = $timeline['name_timeline'];

                        return $data;
                    }, $notifications);

                    echo json_encode([
                        'status'  => 'success',
                        'message' => 'Candidate updated successfully.',
                        'next_timeline' => $next_timeline,
                        'notifications' => $notifications
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'status'  => 'failed',
                        'message' => 'Candidate updated unsuccessfully.'
                    ]);
                }
            } else {
                // Final timeline apply candidate
                $update = $this->kandidat_model->applyCandidateStepBaksoControl($target, $id_job_vacancy, $current_timeline['id_timeline']);

                if ($update) {
                    http_response_code(200);

                    $notifications = $this->db->select('name_candidate, device_token')
                                          ->from('candidate')
                                          ->where_in('id', $target)
                                          ->get()->result_array();

                    $notifications = array_map(function ($data) use ($timeline) {
                        $data['timeline'] = $timeline['name_timeline'];

                        return $data;
                    }, $notifications);

                    echo json_encode([
                        'status'  => 'success',
                        'message' => 'Candidate applied successfully.',
                        'notifications' => $notifications
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode([
                        'status'  => 'failed',
                        'message' => 'Candidate applied unsuccessfully.'
                    ]);
                }
            }
        }
    }

    public function timeline_load_candidate($id_timeline)
    {
        $timeline = $this->db->get_where('timeline', ['id_timeline' => $id_timeline])->row_array();

        if (!$timeline) {
            show_404();
        }

        $candidate = $this->timeline_model->getCandidateForTimeline($id_timeline, 1);

        http_response_code(200);

        echo json_encode([
            'success'    => true,
            'candidate'  => $candidate
        ]);
    }

    public function batch_timeline_candidate_ajax()
    {
        $id_batch       = $this->input->post('id_batch');
        $id_job_vacancy = $this->input->post('id_job_vacancy');
        $id_timeline    = $this->input->post('id_timeline');
        $status         = $this->input->post('status');
        $prioritas      = $this->input->post('prioritas');

        $id_job_vacancy = explode(',', $id_job_vacancy);
        $id_timeline    = explode(',', $id_timeline);
        $status         = explode(',', $status);
        $prioritas      = explode(',', $prioritas);

        $batch = $this->timeline_model->getBatch($id_batch);

        if (!$batch) {
            $fallback = '
            <div class="alert alert-danger text-center text-white">
                Gagal memuat data batch.
            </div>';

            echo $fallback;
            exit;
        }

        $filter = [];

        if (!empty($id_job_vacancy)) {
            $tmp = [];
            for ($i=0; $i < count($id_job_vacancy); $i++) {
                if ($id_job_vacancy[$i] == "all-job") {
                    continue;
                }

                $tmp []= $id_job_vacancy[$i];
            }

            if (!empty($tmp)) {
                $filter["id_job_vacancy"] = $tmp;
            }
        }

        if (!empty($id_timeline)) {
            $tmp = [];
            for ($i=0; $i < count($id_timeline); $i++) {
                if ($id_timeline[$i] == "all-timeline") {
                    continue;
                }

                $tmp []= $id_timeline[$i];
            }

            if (!empty($tmp)) {
                $filter["id_timeline"] = $tmp;
            }
        }

        if (!empty($prioritas)) {
            $tmp = [];
            for ($i=0; $i < count($prioritas); $i++) {
                if ($prioritas[$i] == "all-prioritas") {
                    continue;
                }

                $tmp []= $prioritas[$i];
            }

            if (!empty($tmp)) {
                $filter["prioritas"] = $tmp;
            }
        }

        if (!empty($status)) {
            $tmp = [];
            for ($i=0; $i < count($status); $i++) {
                if ($status[$i] == "all-status") {
                    continue;
                }

                if ($status[$i] == "accepted") {
                    $status[$i] = 2;
                }

                if ($status[$i] == "rejected") {
                    $status[$i] = 3;
                }

                if ($status[$i] == "progress") {
                    $status[$i] = 1;
                }

                $tmp []= $status[$i];
            }

            if (!empty($tmp)) {
                $filter["status"] = $tmp;
            }
        }

        $candidates = $this->timeline_model->getMonitoringData($id_batch, $filter);

        $this->load->view('timeline/batch/candidate_table', [
            'candidates' => $candidates
        ]);
    }

    public function batch_apply_or_reject_candidate()
    {
        $id_batch        = $this->input->post('id_batch');
        $id_timeline     = $this->input->post('id_timeline');
        $id_job_vacancy  = $this->input->post('id_job_vacancy');


        $batch       = $this->db->get_where('batch_timeline', ['id_batch' => $id_batch])->row_array();
        $timeline    = $this->db->get_where('timeline', ['id_timeline' => $id_timeline])->row_array();
        $job_vacancy = $this->db->get_where('job_vacancy', ['id' => $id_job_vacancy])->row_array();

        if (!$timeline) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Timeline not found.'
            ]);
            exit;
        }

        if (!$batch) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Batch not found.'
            ]);
            exit;
        }

        if (!$job_vacancy) {
            http_response_code(404);

            echo json_encode([
                'success' => false,
                'message' => 'Job vacancy not found.'
            ]);
            exit;
        }

        $id_candidate        = $this->input->post('id_candidate');
        $kode_timeline       = $this->input->post('kode_timeline');
        $is_reject_mode      = $this->input->post('reject');
        $history_timeline_id = $this->input->post('history_timeline_id');

        if ($is_reject_mode == 1) {
            $update = $this->kandidat_model->rejectCandidateStep($id_candidate, $id_job_vacancy, $history_timeline_id, $kode_timeline);

            if ($update) {
                http_response_code(200);

                echo json_encode([
                    'status'  => 'success',
                    'message' => 'Candidate rejected successfully.',
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'status'  => 'failed',
                    'message' => 'Candidate rejected unsuccessfully.'
                ]);
            }

            exit; // break
        }

        $current_timeline = $this->db->get_where('timeline', ['kode_timeline' => $kode_timeline])->row_array();
        $next_timeline = $this->timeline_model->getNextTimelineAfter($kode_timeline);

        if ($next_timeline && $current_timeline) {
            $update = $this->timeline_model->updateTimelineStep(
                $id_candidate,
                $id_job_vacancy,
                $history_timeline_id,
                $id_batch,
                $next_timeline['id_timeline']
            );

            if ($update) {
                http_response_code(200);

                echo json_encode([
                    'status'  => 'success',
                    'message' => 'Candidate updated successfully.',
                    'next_timeline' => $next_timeline
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'status'  => 'failed',
                    'message' => 'Candidate updated unsuccessfully.'
                ]);
            }
        } else {
            // Final timeline apply candidate
            $update = $this->kandidat_model->applyCandidateStep($id_candidate, $id_job_vacancy, $history_timeline_id);

            if ($update) {
                http_response_code(200);

                echo json_encode([
                    'status'  => 'success',
                    'message' => 'Candidate applied successfully.',
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'status'  => 'failed',
                    'message' => 'Candidate applied unsuccessfully.'
                ]);
            }
        }
    }

    public function transfer_timeline($id = null)
    {
        if ($this->input->method() == 'post') {
            $timelines = $this->input->post('timelines');
            $batchs = $this->input->post('targets');

            $timelines = explode(',', $timelines);
            $batchs = explode(',', $batchs);

            $transfer = false;

            if ($timelines && $batchs) {
                for ($i=0; $i < count($batchs); $i++) {
                    for ($x=0; $x < count($timelines); $x++) {
                        $timeline = $this->db->get_where('timeline', ['id_timeline' => $timelines[$x]])->row_array();
                        if ($timeline) {
                            unset($timeline['id_timeline']);

                            $timeline['id_batch'] = $batchs[$i];
                            $timeline['kode_timeline'] = $this->timeline_model->generateKodeTimeline($batchs[$i]);

                            $transfer = $this->db->insert('timeline', $timeline);
                        }
                    }
                }
            }

            if ($transfer) {
                http_response_code(200);

                echo json_encode([
                    'success' => true,
                    'message' => 'Timeline transfered.'
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'Operation failed.'
                ]);
            }
        } else {
            $timeline = $this->timeline_model->getTimeline($id);

            $batch  = $this->timeline_model->getBatch($id);
            $batchs = $this->db->select('batch_timeline.id_batch, batch_timeline.name_batch')
                        ->from('batch_timeline')
                        ->where_not_in('id_batch', $id)
                        ->get()->result_array();

            echo json_encode([
                'timeline' => $timeline,
                'links'    => $this->timeline_model->getAllTimelineLinks(),
                'batch'    => $batch,
                'batchs'   => $batchs
            ]);
        }
    }

    private function safe_raw_input($value)
    {
        return htmlspecialchars(stripslashes(trim($value)));
    }

    public function save_timeline_batch()
    {
        $rawdata = json_decode(file_get_contents('php://input'), true);
        $request = [];

        foreach ($rawdata as $k => $v) {
            $request[$k] = $this->safe_raw_input($v);
        }

        $batchs = $request['batchs'];
        $batchs = explode(',', $batchs);

        $timeline = [];

        foreach ($request as $k => $v) {
            if ($k == 'batchs') {
                continue;
            }
            $timeline[$k] = $v;
        }

        $save = false;

        for ($i=0; $i < count($batchs); $i++) {
            $timeline['id_batch'] = $batchs[$i];
            $save = $this->timeline_model->saveTimeline($timeline);
        }

        if ($save) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Timeline berhasil ditambahkan.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => true,
                'message' => 'Timeline gagal ditambahkan.'
            ]);
        }
    }

    public function save_timeline()
    {
        $id_batch = $this->input->post('id_batch');
        $id_timeline = $this->input->post('id_timeline');

        $request = [];

        if ($id_timeline && $this->db->get_where('timeline', ['id_timeline' => $id_timeline])->num_rows() > 0) {
            $request['id_timeline'] = $id_timeline;
        }

        if ($id_batch && $this->db->get_where('batch_timeline', ['id_batch' => $id_batch])->num_rows() > 0) {
            $request['id_batch'] = $id_batch;
        }

        if (empty($request)) {
            show_404();
        }

        if ($this->input->method() == 'post') {
            foreach ($_POST as $k => $v) {
                if ($k == 'id_timeline' || $k == 'id_batch') {
                    continue;
                }

                $request[$k] = $this->input->post($k);
            }

            $save = $this->timeline_model->saveTimeline($request);

            if ($save) {
                http_response_code(200);

                echo json_encode([
                    'success' => true,
                    'message' => 'Timeline updated successfully.'
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'Timeline updated unsuccessfully.'
                ]);
            }
        }
    }

    public function remove($id = null)
    {
        $delete = $this->timeline_model->deleteTimeline($id);

        if ($delete) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Timeline deleted successfully.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Timeline deleted unsuccessfully.'
            ]);
        }
    }
}
