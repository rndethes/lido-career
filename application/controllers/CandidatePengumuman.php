<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CandidatePengumuman extends CI_Controller
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

        $this->load->model('Timeline_model');
        $this->load->model('M_jobv');
        $this->load->model('M_pengumuman');
    }

    public function index()
    {
        $id_candidate = getLoggedInUser('id');
        $data['timeline'] = $this->M_jobv->getTimelineP($id_candidate);
        $data['job'] = $this->M_jobv->getNameJob($id_candidate);
        $data['timeliness'] = $this->M_pengumuman->getCurrentIdTimeline();
        $data['state'] = $this->M_jobv->getStatusHA($id_candidate);

        // print_r($data1);
        // exit;

        $this->load->view('dashboarduser/templates/header');
        $this->load->view('dashboarduser/pengumuman/index', $data);
        $this->load->view('dashboarduser/templates/footer');
    }

    public function getTrackTL()
    {
        $id_candidate = getLoggedInUser('id');
        $id_job = $this->input->post('idjobh');

        $timeline = $this->M_jobv->getTimelineP2($id_candidate, $id_job);
        $ctime = $this->M_jobv->getTimelinebyIdC($id_candidate, $id_job);
        // var_dump($timeline);
        // exit;


        $textOpening = "";
        $textContent = "";
        $textClosing = '</div>
                            ';
        foreach ($timeline as $row) {
            if ($row['state'] == 1) {
                $daftar = '
        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted"
        id="timeline-content-table">
        <!-- body timeline -->
          
            <div class="timeline-block mb-3 timeline-block-hover">
            <span class="timeline-step">';


                $daftar .='<i class="fa fa-clock text-success text-gradient"></i>';


                $daftar .= '
            </span>
                <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">
                       ' . $row['name_timeline'] . '
                    </h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                       ' . $row['start_date_time'] .'
                        -
                       ' . $row['end_date_time'] . '
                    </p>
                    
                  
                </div>
            <div style="margin-left: 46px;">
            <p class="text-sm mt-3 mb-2">
               ' . $row['description_timeline'] . '
            </p>
            ';

                foreach ($ctime as $ct) {
                    if ($ct['id_timeline'] == $row['id_timeline']) {
                        $daftar .= '
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">link untuk test : </p>
                        <a href=" ' . $row['address_link'] . '" target="_blank" class="font-weight-bold text-xs mt-1 mb-0"> ' . $row['address_link'] . '</a><br>                        

                        <a class="btn btn-success btn-xs mb-0 disabled mt-2">
                        <i class="">&nbsp;&nbsp;Tahap anda saat ini</i>
                        </a>';
                    }
                }



                $daftar .= '
            </div>
            <!-- end body -->

            <!-- end body -->
            </div>
                    <!-- end timeline -->
            </div>';
                $textContent = $textContent . " " . $daftar;
            }
            $textOpening = '<div>';
        }
        $daftar = $textOpening . " " . $textContent . " " . $textClosing;

        echo json_encode($daftar);
    }
}
