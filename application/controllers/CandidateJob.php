<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CandidateJob extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jobv');
        $this->load->model('timeline_model');
        $this->load->helper('text');

        $user = getLoggedInUser();
        if ($user) {
            // If authenticated user is not candidate
            if ($user['is_candidate'] === false) {
                redirect(site_url());
            }
        } else {
            redirect(site_url('candidatelogin'));
        }
    }

    public function lamarJadwal()
    {
        $this->load->model('timeline_model');

        $id_batch = $this->input->post('id_batch');
        $lowongan = $this->input->post('lowongan');

        $batch = $this->db->get_where('batch_timeline', ['id_batch' => $id_batch])->row_array();

        if (!$batch) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Batch not found.'
            ]);
            exit;
        }

        $lowongan = explode(",", $lowongan);

        if (empty($lowongan)) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Job vacancy can\'t be null.'
            ]);
            exit;
        }

        // Cek lowongan batch
        for ($i=0; $i < count($lowongan); $i++) {
            $cek = $this->db->get_where('batch_job', ['id_job' => $lowongan[$i]])->num_rows();

            if ($cek === 0) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Job vacancy not found in selected batch.'
                ]);
                exit;
            }
        }

        // Cek jika telah di lamar
        $id_candidate = getLoggedInUser('id');
        for ($i=0; $i < count($lowongan); $i++) {
            $cek = $this->db->select('job_vacancy.name_job')
                    ->from('history_apply')
                    ->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history')
                    ->where([
                        'history_apply.id_candidate_history' => $id_candidate,
                        'history_apply.id_job_history' => $lowongan[$i]
                    ])->get()
                    ->row_array();

            if ($cek) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Anda telah melamar pada lowongan ' . $cek['name_job'] . ', pilih lowongan lain.'
                ]);
                exit;
            }
        }

        // Candidate
        $id_candidate = getLoggedInUser('id');

        // Cek kuota
        $cek = $this->db->get_where('history_apply', ['id_candidate_history' => $id_candidate]);
        if ($cek->num_rows() > 2 && getLoggedInUser('state') == 1) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Anda telah menggunakan semua kuota lamaran anda, anda dapat melamar maneh pada saat lamaran sesi ini telah selesai.'
            ]);
            exit;
        }

        // Cek jika sebelumnya telah melamar pada batch
        $cek = $this->db->select('batch_timeline.id_batch, batch_timeline.name_batch')
                    ->from('history_apply')
                    ->join('batch_timeline', 'batch_timeline.id_batch = history_apply.id_batch')
                    ->where('history_apply.id_candidate_history', $id_candidate)
                    ->where('state', 1)
                    ->get()
                    ->row_array();

        if ($cek && $cek['id_batch'] != $id_batch) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Anda sebelumnya telah melamar lowongan pada ' . $cek['name_batch'] . ' anda tidak dapat melamar pekerjaan pada batch yang berbeda.'
            ]);
            exit;
        }

        for ($i=0; $i < count($lowongan); $i++) {
            $payload = [
                'id_candidate_history' => $id_candidate,
                'id_job_history'       => $lowongan[$i],
                'id_batch'             => $id_batch,
                'date_created'         => date('Y-m-d H:i:s'),
                'state'                => 1,
                'urutan'               => $i + 1
            ];

            $history_apply = $this->db->insert('history_apply', $payload);

            $timeline  = $this->timeline_model->getFirstTimelineForBatch($id_batch);
            $payload   = [
                'id_candidate' => $id_candidate,
                'id_timeline'  => $timeline['id_timeline'],
                'id_job'       => $lowongan[$i],
                'id_batch'     => $id_batch,
                'status'       => 1
            ];

            $history_timeline = $this->db->insert('history_timeline', $payload);
        }

        echo json_encode([
            'success'  => true,
            'message'  => 'Job Applyed.',
        ]);
    }

    public function getJobAsJson()
    {
        // Get job vacancies
        $jobVacancies = $this->db->get_where('job_vacancy', ['is_active' => 1])->result_array();

        // Strip HTML tags and truncate the description
        $jobVacancies = array_map(function ($data) {
            $data['description_job_'] = $this->stripHtmlAndTruncate($data['description_job'], 200);
            return $data;
        }, $jobVacancies);

        // Get batch timelines for each job vacancy
        foreach ($jobVacancies as &$jobVacancy) {
            $activeBatches = $this->db->select('batch_timeline.*')
                ->from('batch_job')
                ->join('batch_timeline', 'batch_timeline.id_batch = batch_job.id_batch')
                ->where('batch_job.id_job', $jobVacancy['id'])
                ->where("batch_timeline.start_date >= NOW()") // Asumsi ini benar (batch punya tgl mulai)
                ->get()
                ->result_array();    
            $jobVacancy['batchs'] = $activeBatches;

            $jobVacancy['scheduling_status'] = 'not_scheduled';

            if (!empty($activeBatches)) {
                $batch_ids = array_column($activeBatches, 'id_batch');
                $timeline_count = $this->db
                    ->where_in('id_batch', $batch_ids)
                    ->count_all_results('timeline');

                if ($timeline_count > 0) {
                    $jobVacancy['scheduling_status'] = 'scheduled';
                }
            }
        }

        unset($jobVacancy);

        // Return as JSON
        header("Content-type: application/json");
        echo json_encode([
            'jobs' => $jobVacancies
        ]);
    }

    private function stripHtmlAndTruncate(string $text, int $length): string
    {
        $text = strip_tags($text);
        return substr(rtrim($text), 0, $length) . '...';
    }

  public function index()
{
    $id_candidate = getLoggedInUser('id');

    // Data divisi
    $division = $this->db->get('division')->result_array();

    // Ambil jenjang pendidikan dari job_vacancy
    $education = $this->db
        ->select('education_job')
        ->from('job_vacancy')
        ->group_by('education_job')
        ->order_by('education_job', 'ASC')
        ->get()
        ->result_array();

    // Data lainnya
    $result = $this->M_jobv->get_batch_timeline($id_candidate);

    // =====> Tambahkan decoding city_job di sini
    foreach ($result as &$job) {
        $job['city_job'] = json_decode($job['city_job'], true);
    }
    unset($job);

    $batch = $this->M_jobv->tampilBatch();
    $biodata = $this->M_jobv->checkDatadiri($id_candidate);

    $isQuotaL = $this->db->get_where('history_apply', [
        'id_candidate_history' => $id_candidate
    ])->num_rows() > 2;

    $dapatMelamar = !$isQuotaL;

    $this->load->view('dashboarduser/templates/header');
    $this->load->view('dashboarduser/jobv/index', [
        'division'        => $division,
        'education'       => $education,
        'result'          => $result,
        'batch'           => $batch,
        'dapatMelamar'    => $dapatMelamar,
        'biodataLengkap'  => is_null($biodata)
    ]);
    $this->load->view('dashboarduser/templates/footer');
}


    public function index2()
    {
        $data['showtable'] = $this->M_jobv->getAllData();

        $this->load->view('dashboarduser/templates/header');
        $this->load->view('dashboarduser/jobv/testt', $data);
        $this->load->view('dashboarduser/templates/footer');
    }

    public function getDetailJob()
    {
        $iddiv = $this->input->post('idjob');

        $jobvacancy = $this->M_jobv->getDataJobVacancy($iddiv);

        $textOpening = "";
        $textContent = "";
        $textClosing = '</div>';
        $counter = 0;
        foreach ($jobvacancy as $jobvacancy) {
            if (empty($jobvacancy)) {
                $detail = ' <div class="alert alert-danger" role="alert">
                <strong>Maaf!</strong> Belum Tersedia Lowongan!
            </div>';
            } else {
                $limited_word = word_limiter($jobvacancy['description_job'], 5);
                if ($jobvacancy['is_active'] == 1) {
                    if ($counter >= 3) {
                        $checkbox = '<input class="form-check-input" type="checkbox" value="" id="defaultCheck'.$jobvacancy['id'].'" disabled>';
                    } else {
                        $checkbox = '<input class="form-check-input" type="checkbox" value="" id="defaultCheck'.$jobvacancy['id'].'">';
                    }
                    $checkbox = '<input class="form-check-input" type="checkbox" value="" id="defaultCheck'.$jobvacancy['id'].'" onclick="countcheckbox()">';

                    $detail = '
                <div class="form-check">
                 ' . $checkbox . '    
                <div>
                <a href="' . base_url() . 'candidatejob/detail/' . $jobvacancy['id'] . '" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">' . $jobvacancy['name_job'] . '</h5>
                    <small><span class="badge bg-gradient-success">Available</span></small>
                    </div>
                    <p class="mb-1">'. $limited_word  .'</p>
                 <small>Klik untuk daftar dan info lebih lanjut.</small>
                 </a>
                 </div>
                 </div>
                 ';
                } else {
                    $detail = '     
                <div>
                <a href="' . base_url() . 'candidatejob/detail/' . $jobvacancy['id'] . '" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">' . $jobvacancy['name_job'] . '</h5>
                    <small><span class="badge bg-gradient-danger">Not Available</span></small>
                    </div>
                    <p class="mb-1">'. $limited_word .'</p>
                 <small>Klik untuk daftar dan info lebih lanjut.</small>
                 </a>
                 </div>';
                }
            }
            $textContent = $textContent . " " . $detail;
        }

        $textOpening = '<div>';
        $detail = $textOpening . " " . $textContent . " " . $textClosing;

        echo json_encode($detail);
    }

    public function detail($id)
    {
        $data['title']        = 'Detail Lowongan';
        $data['job_vacancy']  = $this->M_jobv->getJobById($id);
        $data['batch']        = $this->M_jobv->getBatchById($id);

        // $id = $this->input->post('id_job');
        $id_candidate         = getLoggedInUser('id');

        $data['checkbatch']   = $this->M_jobv->getCandidateBatch($id, $id_candidate);
        $data['urutan'] = $this->M_jobv->get_all_urutan($id_candidate);
        $data['result'] = $this->M_jobv->get_batch_timeline($id_candidate);

        // echo "<pre>";
        // print_r($data['result']);exit();

        $this->load->view('dashboarduser/templates/header', $data);
        $this->load->view('dashboarduser/jobv/detailjob', $data);
        $this->load->view('dashboarduser/templates/footer');
    }

    public function applyCandidate()
    {
        $aturan = array(
            array(
                    'field' => 'choosebatch',
                    'label' => 'Value batch',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'flexRadioDefault',
                    'label' => 'Urutan Job',
                    'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($aturan);

        $id_jobv = $this->input->post('id_job');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Pilih Batch dan urutan lowongan terlebih dulu');
            redirect('candidatejob/detail/' . $id_jobv);
        } else {
            $id_batch       = $this->input->post('choosebatch');
            $id_job         = $this->input->post('id_job');
            $urutan         = $this->input->post('flexRadioDefault');
            $id_candidate   = getCurrentUser()->id_candidate;
            $id             = getLoggedInUser('id');
            $date_created   = getCurrentDate();

            $candidatebiodata       = $this->M_jobv->checkDatadiri($id);
            $candidatependidikan    = $this->M_jobv->checkPendidikan($id);
            // $candidatealamat        = $this->M_jobv->checkAlamat($id);
            // echo "<pre>";
            // print_r($candidatebiodata);
            // exit();

            foreach ($candidatebiodata as $k =>$v) {
                if (strlen($v) == 0) {
                    if ($k == 'id_batch') {
                        continue;
                    }
                    $this->session->set_flashdata('errorbiodata', 'Data diri belum lengkap');
                    redirect('candidatejob/detail/' . $id_jobv);
                }
            }
            foreach ($candidatependidikan as $k =>$v) {
                if (strlen($v) == 0) {
                    $this->session->set_flashdata('errorpendidikan', 'Data pendidikan anda belum lengkap');
                    redirect('candidatejob/detail/' . $id_jobv);
                }
            }

            $counthistoryapply = $this->M_jobv->getHistoryApply($id);
            $statuscandidate   =  getCurrentUser()->state;

            // print_r($counthistoryapply);exit();


            if ($statuscandidate == 1) {
                $this->session->set_flashdata('error', 'Tidak bisa apply karena anda sudah terdaftar sebagai karyawan kami');
                redirect('candidatejob/detail/' . $id_jobv);
            } elseif ($statuscandidate == 0) {
                if ($counthistoryapply >= 3) {
                    $this->session->set_flashdata('error', 'Anda Sudah Apply Sebanyak 3 Lowongan');
                    redirect('candidatejob/detail/' . $id_jobv);
                }
            }

            $data = [
                'id_candidate_history' => $id,
                'id_job_history'       => $id_job,
                'id_batch'             => $id_batch,
                'urutan'               => $urutan,
                'date_created'         => $date_created,
                'state'                => 1,
            ];

            $this->db->insert('history_apply', $data);

            // $this->db->set('id_batch', $id_batch);
            // $this->db->where('id_candidate', $id_candidate);
            // $this->db->update('candidate');

            $id_timeline = $this->timeline_model->getFirstTimelineForBatch($id_batch);

            // print_r($id_timeline);exit();

            $history_timeline = $this->db->insert('history_timeline', [
                'id_candidate'         => $id,
                'id_job'               => $id_job,
                'id_batch'             => $id_batch,
                'id_timeline'          => $id_timeline['id_timeline'] ?? 0,
                'status'               => 1,
            ]);
        }
        $this->session->set_flashdata('success', 'Lamaran berhasil dikirim');
        redirect('candidatejob/index/');
    }


    public function getTimelineByBatch() {
        $id_batch = $this->input->get('id_batch');

        if (!$id_batch) {
            header("Content-type: application/json");
            http_response_code(400); // Bad Request
            echo json_encode([
                'success' => false,
                'message' => 'ID Batch diperlukan.'
            ]);
            return;
        }

        $timelines = $this->db
            ->order_by('id_timeline', 'ASC')
            ->get_where('timeline', ['id_batch' => $id_batch])
            ->result_array();

        header("Content-type: application/json");
        echo json_encode([
            'success' => true,
            'timelines' => $timelines
        ]);
    }
}
