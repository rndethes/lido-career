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
        // exit();
        // if ($this->session->userdata('candidate_is_log') != TRUE) {
        $this->load->view('front/index', $data);
        // } else {
        //     $this->load->view('front/index', $data);
        // }
    }
}
