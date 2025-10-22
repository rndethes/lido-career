<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Notification_model $notification_model
 */
class CandidateNotification extends CI_Controller
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


        $this->load->model('notification_model');
    }

    public function index()
    {
        $notifications = $this->notification_model->getMyNotifications(getLoggedInUser('id'));

        $this->load->view('dashboarduser/templates/header');
        $this->load->view('dashboarduser/notification/index', [
            'notifications' => $notifications
        ]);
        $this->load->view('dashboarduser/templates/footer');
    }

    public function read($id)
    {
        $this->notification_model->readNotification($id);

        return redirect(site_url('candidate-notification?read=true&id=' . $id));
    }
}
