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

        $data['content_hero']  =  $this->main_model->getSettingHero();
        $data['content_sosmed']  =  $this->main_model->getSettingSosmed();
        $data['content_zero']  =  $this->main_model->getSettingZero();
        $data['content_first']  =  $this->main_model->getSettingFirst();
        $data['content_second'] =  $this->main_model->getSettingSecond();
        // $data['all_divisi']     =  $this->main_model->getAllDivisi();
        $data['all_divisi'] = $this->main_model->cekDivisiKosong();

        
        // echo "<pre>";
        // print_r($data['kosong']);

          $this->load->view('front/header-landing', $data);
        // exit();
        // if ($this->session->userdata('candidate_is_log') != TRUE) {
        $this->load->view('front/landing-page', $data);
          $this->load->view('front/footer-landing', $data);
        // } else {
        //     $this->load->view('front/index', $data);
        // }
    }

    public function about_details()
{
    $data['title'] = 'Tentang Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/about-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function news_details()
{
    $data['title'] = 'Berita Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/news-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function contact_details()
{
    $data['title'] = 'Tanya Jawab Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/contact-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function culture_details()
{
    $data['title'] = 'Budaya Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/culture-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function business_details()
{
    $data['title'] = 'Unit Bisnis Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/business-details', $data);
    $this->load->view('front/footer-landing', $data);
}

public function retail()
{
    $data['title'] = 'Retail Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/retail', $data);
    $this->load->view('front/footer-landing', $data);
}

public function distribution()
{
    $data['title'] = 'Distribusi Lido';
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/distribution', $data);
    $this->load->view('front/footer-landing', $data);
}

}
