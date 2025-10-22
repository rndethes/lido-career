<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CandidateContact extends CI_Controller
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
    }

    public function index()
    {
        $this->load->view('dashboarduser/templates/header');
        $this->load->view('dashboarduser/contact/viewcontact');
        $this->load->view('dashboarduser/templates/footer');
    }
}
