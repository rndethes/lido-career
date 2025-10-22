<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        // $CI =& get_instance();
        // $id_candidate = getLoggedInUser('id');
        // $CI->load->model('kandidat_model');
        // $CI->load->model('timeline_model');

        // $lamaran = $CI->db->select('job_vacancy.name_job, candidate.name_candidate, history_apply.id_batch, job_vacancy.id_job')
        //                     ->from('history_apply')
        //                     ->join('job_vacancy', 'history_apply.id_job_history = job_vacancy.id')
        //                     ->join('candidate', 'candidate.id = history_apply.id_candidate_history')
        //                     ->where('history_apply.id_candidate_history', 1)
        //                     ->where('history_apply.state', 1)
        //                     ->get()->row_array();
        // // var_dump($lamaran);
        // // exit();
        // $lamaran['kode_lowongan'] = sprintf('%s%sB%s', strtoupper(substr($lamaran['name_job'], 0, 3)), $lamaran['id_job'], $lamaran['id_batch']);
        // $result = $this->timeline_model->getpretl($id_candidate);
        // $current_timeline = $CI->timeline_model->getCurrentTimeline2($id_candidate);
        // $this->load->view('mail/candidate_state', [
        //     'lamaran' => $lamaran, 'state' => 'next', 'result' => $result, 'current_timeline' => $current_timeline
        // ]);

        // $data['showtable'] = $this->M_jobv->getAllData();
    }
}
