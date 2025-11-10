<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanLandingPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaturanlp_model');
        $this->load->helper(array('form', 'url'));
    }

    // Halaman index untuk Hero + About
    public function index()
    {
        $data['content_hero']  = $this->Pengaturanlp_model->get_data();
        $data['content_about'] = $this->Pengaturanlp_model->get_about();
        $data['intro']       = $this->Pengaturanlp_model->get_intro_visimisi();
        $data['landingpage'] = $this->Pengaturanlp_model->get_visimisi();
        $data['offices']       = $this->Pengaturanlp_model->get_all_offices();
        $data['quote'] = $this->Pengaturanlp_model->get_quote();
        $data['berita'] = $this->Pengaturanlp_model->get_all_news();

        //  var_dump($data['quote']); die();

        
        $this->load->view('templates/header', $data);
        $this->load->view('pengaturan-landing-page/index', $data);
        $this->load->view('templates/footer', $data);
    }

    // Update Hero
    public function update_hero()
    {
        $title    = $this->input->post('tittle_homepage');
        $subtitle = $this->input->post('subtitle_homepage');
        $image    = $_FILES['image_homepage']['name'];

        $data = [
            'tittle_homepage' => $title,
            'subtitle_homepage' => $subtitle
        ];

        if ($image) {
            $config['upload_path']   = './assets/img-landing/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_' . $image;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_homepage')) {
                $data['image_homepage'] = $this->upload->data('file_name');
            } else {
                echo "<script>alert('Upload gambar gagal!'); window.history.back();</script>";
                return;
            }
        }

        $update = $this->Pengaturanlp_model->update_data($data);

        if ($update) {
            echo "<script>alert('Beranda berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui Beranda!'); window.history.back();</script>";
        }
    }

    // Update About
    public function update_about()
    {
        $data = [
            'about_title'        => $this->input->post('about_title'),
            'about_subtitle'     => $this->input->post('about_subtitle'),
            'about_description'  => $this->input->post('about_description'),
            'about_description2' => $this->input->post('about_description2')
        ];

        // Upload gambar 1
        if (!empty($_FILES['about_image']['name'])) {
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_about1_' . $_FILES['about_image']['name'];
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('about_image')) {
                $data['about_image'] = $this->upload->data('file_name');
            }
        }

        // Upload gambar 2
        if (!empty($_FILES['about_image2']['name'])) {
            $config2['upload_path']   = './assets/img/';
            $config2['allowed_types'] = 'jpg|jpeg|png';
            $config2['file_name']     = time() . '_about2_' . $_FILES['about_image2']['name'];
            $this->upload->initialize($config2);

            if ($this->upload->do_upload('about_image2')) {
                $data['about_image2'] = $this->upload->data('file_name');
            }
        }

        $update = $this->Pengaturanlp_model->update_about($data);

        if ($update) {
            echo "<script>alert('Tentang berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#about';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui Tentang'); window.history.back();</script>";
        }
    }

  public function update_visimisi()
{
    // Data untuk tabel setting_visimisi_intro
    $intro_data = [
        'intro_title'       => $this->input->post('intro_title'),
        'intro_description' => $this->input->post('intro_description'),
        'intro_video_url'   => $this->input->post('intro_video_url'),
    ];

    // Update tabel setting_visimisi_intro
    $this->db->where('id', 1); // asumsi ID intro = 1
    $update_intro = $this->db->update('setting_visimisi_intro', $intro_data);

    // Data untuk tabel setting_landingpage
    $landing_data = [
        'visi' => $this->input->post('visi'),
        'misi' => $this->input->post('misi')
    ];

    // Update tabel setting_landingpage
    $this->db->where('id', 1); // asumsi ID landingpage = 1
    $update_landing = $this->db->update('setting_landingpage', $landing_data);

    if ($update_intro || $update_landing) {
        echo "<script>alert('Visi & Misi berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#visi';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui Visi & Misi!'); window.history.back();</script>";
    }
    }

    public function save_office()
{
    $id = $this->input->post('id');

    $data = [
        'area'        => $this->input->post('area'),
        'type'        => $this->input->post('type'),
        'branch_name' => $this->input->post('branch_name'),
        'address'     => $this->input->post('address'),
        'maps_url'    => $this->input->post('maps_url'),
        'phone_number'=> $this->input->post('phone_number'),
        'email'       => $this->input->post('email')
    ];

    // Upload image
    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_' . $_FILES['image']['name'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        }
    }

    if ($id) {
        $this->db->where('id', $id);
        $update = $this->db->update('setting_office', $data);
        if ($update) {
            echo "<script>alert('Data kantor berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui data kantor'); window.history.back();</script>";
        }
    } else {
        $insert = $this->db->insert('setting_office', $data);
        if ($insert) {
            echo "<script>alert('Data kantor berhasil disimpan!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data kantor'); window.history.back();</script>";
        }
    }
    }
    // Form Edit Office
public function edit_office($id)
{
    $data['office'] = $this->Pengaturanlp_model->get_office($id);

    if (!$data['office']) {
        echo "<script>alert('Data kantor tidak ditemukan'); window.history.back();</script>";
        return;
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pengaturan-landing-page/edit_office', $data);
    $this->load->view('templates/footer', $data);
}

public function update_office()
{
    $id = $this->input->post('id');
    $data = [
        'area'        => $this->input->post('area'),
        'type'        => $this->input->post('type'),
        'branch_name' => $this->input->post('branch_name'),
        'address'     => $this->input->post('address'),
        'maps_url'    => $this->input->post('maps_url'),
        'phone_number'=> $this->input->post('phone_number'),
        'email'       => $this->input->post('email')
    ];

    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_' . $_FILES['image']['name'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        }
    }

    $update = $this->Pengaturanlp_model->update_office($id, $data);

    if ($update) {
        echo "<script>alert('Data kantor berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data kantor'); window.history.back();</script>";
    }
}

    public function delete_office($id)
{
    $this->db->where('id', $id);
    $delete = $this->db->delete('setting_office');
    if ($delete) {
        echo "<script>alert('Data kantor berhasil dihapus!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data kantor'); window.history.back();</script>";
    }
}
public function save_quote()
{
    $id = $this->input->post('id');
    $data = [
        'title'   => $this->input->post('title'),
        'content' => $this->input->post('content')
    ];

    // Upload gambar
    if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './assets/img-landing/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time().'_quote_'.$_FILES['image']['name'];
        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $data['image'] = $this->upload->data('file_name');
        }
    }

    $save = $this->Pengaturanlp_model->save_quote($data, $id);

    if($save){
        echo "<script>alert('Quotes berhasil disimpan!'); window.location.href='".base_url('PengaturanLandingPage')."#quotes';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan Quotes!'); window.history.back();</script>";
    }
}
public function berita()
{
    // Memuat model (jika belum dimuat di __construct)
    $this->load->model('Pengaturanlp_model');

    // Ambil semua data berita
    $data['berita'] = $this->Pengaturanlp_model->get_all_news();

    // Tambahkan judul halaman (opsional)
    $data['title'] = 'Pengaturan Berita';

    // Redirect ke halaman index dengan hash #berita
    // Ini akan otomatis scroll ke bagian berita di halaman index
    redirect('PengaturanLandingPage#berita');
}

public function save_news()
{
    $this->load->model('Pengaturanlp_model');

    $id = $this->input->post('id');
    $data = [
        'category' => $this->input->post('category'),
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'content' => $this->input->post('content'),
        'release_date' => $this->input->post('release_date'),
        'updated_by' => $this->session->userdata('nama')
    ];

    // Upload image
    if (!empty($_FILES['image']['name'])) {
        $config['upload_path'] = './assets/img-landing/blog/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $uploadData = $this->upload->data();
            $data['image'] = $uploadData['file_name'];
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('PengaturanLandingPage/berita');
            return;
        }
    } else if ($id) {
        // kalau edit dan tidak upload baru, ambil gambar lama
        $old = $this->Pengaturanlp_model->get_news($id);
        $data['image'] = $old['image'];
    }

    if ($id) {
        $this->Pengaturanlp_model->update_news($id, $data);
    } else {
        $this->Pengaturanlp_model->insert_news($data);
    }

    $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
    redirect('PengaturanLandingPage/berita');
}

public function delete_news($id)
{
    $this->load->model('Pengaturanlp_model');
    $this->Pengaturanlp_model->delete_news($id);
    $this->session->set_flashdata('success', 'Berita berhasil dihapus.');
    redirect('PengaturanLandingPage/berita');
}
}