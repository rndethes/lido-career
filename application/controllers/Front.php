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
    $data['company'] = $this->main_model->getCompany();
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['content_zero']   = $this->main_model->getSettingZero();
    $data['content_first']  = $this->main_model->getSettingFirst();
    $data['content_second'] = $this->main_model->getSettingSecond();
    $data['all_divisi']     = $this->main_model->cekDivisiKosong();
    $data['visimisi_intro'] = $this->main_model->getVisiMisiIntro();
    $data['offices'] = $this->main_model->getSettingOffice();
    $data['quote'] = $this->main_model->get_quote();
    $data['content_footer'] = $this->main_model->getSettingFooter();
    $data['news_list'] = $this->main_model->get_latest_news(3);

    




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

    // Load semua bagian halaman
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/landing-page', $data);
    $this->load->view('front/footer-landing', $data);
}


    public function about_details()
{
    $data['title'] = 'Tentang Lido';
    $data['content_about'] = $this->main_model->getSettingFirst();
    $data['content_zero'] = $this->main_model->getSettingZero();
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();

    // 🔹 Tambahkan baris ini untuk ambil data perusahaan dari tabel 'settings'
    $data['company'] = $this->main_model->getCompany();

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

    // 🔹 Kirim data ke view
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/about-details', $data);
    $this->load->view('front/footer-landing', $data);
}


public function news_details()
{
    $this->load->model('main_model');

    $data['title'] = 'Berita Lido';

    // --- PAGINATION SETUP ---
    $limit = 6; // berita per halaman
    $page = $this->input->get('page') ? $this->input->get('page') : 1;
    $offset = ($page - 1) * $limit;

    // total berita
    $total_news = $this->main_model->count_all_news();

    // ambil berita sesuai limit
    $data['news_list'] = $this->main_model->get_news_pagination($limit, $offset);

    // hitung total halaman
    $data['total_pages'] = ceil($total_news / $limit);
    $data['current_page'] = $page;


    // --- data lain ---
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['company'] = $this->main_model->getCompany();

    // user profile
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
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
     $data['company'] = $this->main_model->getCompany();
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
      $data['culture'] = $this->main_model->getCulture();
    $data['culture_details'] = $this->main_model->getCultureDetails();
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
     $data['company'] = $this->main_model->getCompany();
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
     $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['unit_business'] = $this->main_model->getUnitBusiness();
     $data['company'] = $this->main_model->getCompany();
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
    $data['business'] = $this->main_model->getBusinessDetail('Retail');
     $data['content_sosmed'] = $this->main_model->getSettingSosmed();
      $data['company'] = $this->main_model->getCompany();
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
     $data['business'] = $this->main_model->getBusinessDetail('Distribusi');
     $data['content_sosmed'] = $this->main_model->getSettingSosmed();
      $data['company'] = $this->main_model->getCompany();
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
     $data['content_sosmed'] = $this->main_model->getSettingSosmed();
   $data['all_divisi'] = $this->db->get('division')->result_array();
 $data['company'] = $this->main_model->getCompany();
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

public function blog($id)
{
    $data['title'] = 'Blog Lido';
    $data['news'] = $this->main_model->get_news($id);
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['company'] = $this->main_model->getCompany();

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
    $this->load->view('front/blog', $data); // detail berita
    $this->load->view('front/footer-landing', $data);
}

public function unit_details($id = null)
{
    if ($id === null) {
        show_404(); // jika ID tidak diberikan, tampilkan halaman 404
        return;
    }

    $data['title'] = 'Detail Unit Bisnis';
    $data['unit'] = $this->main_model->getUnitBusinessById($id); // pastikan model punya fungsi ini
    $data['content_sosmed'] = $this->main_model->getSettingSosmed();
    $data['company'] = $this->main_model->getCompany();

    // cek login user
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

    // load view
    $this->load->view('front/header-landing', $data);
    $this->load->view('front/unit_details', $data); // view baru unit_details.php
    $this->load->view('front/footer-landing', $data);
}

public function get_offices_json()
{
    $offices = $this->main_model->getSettingOffice();

    echo json_encode([
        "status" => "success",
        "data" => $offices
    ]);
}


}
