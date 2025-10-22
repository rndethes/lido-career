<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CandidateDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();

   
        if ($user) {
            // If authenticated user is not candidate
            if ($user['is_candidate'] === false) {
                redirect(site_url());
            }
        } else {
            redirect(site_url('candidatelogin'));
        }

        $this->load->model('main_model');
        $this->load->model('M_jobv');
        $this->load->model('Timeline_model');
        
    }

    public function index($id = null)
    {   
        $id_candidate = getLoggedInUser('id');

        $data['title']              = 'Dashboard Candidate';
        $data['state']              = $this->M_jobv->getStatusHA($id_candidate);
        $data['checkapply']         = $this->M_jobv->getIdCandidate($id_candidate);
        $data['showpengumuman']     = $this->M_jobv->showApply($id_candidate);
        $data['showpertimeline']    = $this->M_jobv->showPerTimeline($id_candidate);

        // print_r($data['state']); exit();
      
        $this->load->view('dashboarduser/templates/header', $data);
        $this->load->view('dashboarduser/homepage/homepage', $data);
        $this->load->view('dashboarduser/templates/footer', $data);
    }


    public function getviewbatch(){
        $idbatch = $this->input->post('idbatch');

        $timeline = $this->M_jobv->getTimelineByIdBatch($idbatch);
        // var_dump($timeline);exit();

        $textOpening = "";
        $textContent = "";
        $textClosing = '</div>
                            ';
         foreach ($timeline as $timeline) {
            $detail = '<div class="timeline-block mb-3 timeline-block-hover">
                            <span class="timeline-step">
                                <i class="fa fa-clock text-info text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                ' . $timeline['name_timeline'] . '
                                </h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                ' . $timeline['start_date_time'] . '
                                    -
                                ' . $timeline['end_date_time'] . '
                                </p>
                            </div>
                            <div style="margin-left: 46px;">
                                <p class="text-sm mt-3 mb-2">
                                ' . $timeline['description_timeline'] . '
                                </p>
                            </div>
                    </div>';

                    $textContent = $textContent . " " . $detail;
         }              
        

         $textOpening = '<div class="timeline timeline-one-side" data-timeline-axis-style="dotted" id="timeline-content-table">';
         $detail = $textOpening . " " . $textContent . " " . $textClosing;

        echo json_encode($detail);

    }
}
