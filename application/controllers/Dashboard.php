<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

        $this->load->model('main_model');
    }

    public function index()
    {
        //cek

        $data['count_candidate']         = $this->main_model->count_candidate();
        $data['count_job']               = $this->main_model->count_job();
        $data['count_acc']               = $this->main_model->count_acc();
        $data['count_admin']             = $this->main_model->count_admin();
        $data['showcandidate']           = $this->main_model->getKandidateTerkini();
        $data['title']                   = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
