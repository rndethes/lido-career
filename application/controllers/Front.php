<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
    function __construct()
    {
        // cek
        parent::__construct();
        $this->load->model('main_model');
    }

    public function index()
{
    $data['title'] = 'Lido Career';

    $data['content_hero']   = $this->main_model->getSettingHero();
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['content_zero']   = $this->main_model->getSettingZero();
    $data['content_first']  = $this->main_model->getSettingFirst();
    $data['content_second'] = $this->main_model->getSettingSecond();
    $data['all_divisi']     = $this->main_model->cekDivisiKosong();

    $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/landing-page', $data);
    $this->load->view('front/footer-landing', $data);
}

    public function about_details()
{
    $data['title'] = 'Tentang Lido';

     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/about-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function news_details()
{
    $data['title'] = 'Berita Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/news-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function contact_details()
{
    $data['title'] = 'Tanya Jawab Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/contact-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function culture_details()
{
    $data['title'] = 'Budaya Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/culture-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function business_details()
{
    $data['title'] = 'Unit Bisnis Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/business-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function retail()
{
    $data['title'] = 'Retail Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/retail', $data);
    $this->load->view('front/footer-landing', $data);
}

public function distribution()
{
    $data['title'] = 'Distribusi Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/distribution', $data);
    $this->load->view('front/footer-landing', $data);
}

public function career()
{
    $data['title'] = 'Karir Lido';
   $data['all_divisi'] = $this->db->get('division')->result_array();

    $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }
   
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/career', $data);
    $this->load->view('front/footer-landing', $data);
}

public function blog()
{
    $data['title'] = 'Distribusi Lido';
     $id_user = getLoggedInUser('id');
    if ($id_user) {
        $user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();

        $data['img'] = !empty($user['photo_candidate'])
            ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
            : base_url('assets/img/default-profile.png');

        $data['user_logged_in'] = true;
        $data['user_name'] = $user['name_candidate']; 
    } else {
        $data['img'] = base_url('assets/img/default-profile.png');
        $data['user_logged_in'] = false;
        $data['user_name'] = null;
    }

    $this->load->view('front/header-landing', $data);
    $this->load->view('front/blog', $data);
    $this->load->view('front/footer-landing', $data);
}

}
