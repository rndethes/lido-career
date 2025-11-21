<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Conjen extends CI_Controller
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

        $this->load->model('Jenlok');
        $this->load->model('Loker');
    }

    public function showjen($id = null)
    {
        if ($id = null) {
            $data['tablejen'] = $this->Jenlok->getIdDivision();
        } else {
            $data['tablejen'] = $this->Jenlok->getIdDivision($id);
        }
        $this->load->view('templates/header', [
            'title' => 'Job Vacancy'
        ]);
        $this->load->view('lowongan/tabjen', $data, );
        $this->load->view('templates/footer');
    }

    public function showtambah()
{
    // ==========================
    // Ambil data divisi dan ID terbaru
    // ==========================
    $data['tablejen'] = $this->Loker->getAllData();
    $data['latest_id_job'] = $this->Jenlok->getLatestIdJob();
    $data['next_id_job'] = $data['latest_id_job'] ? $data['latest_id_job'] + 1 : 1;

    // ==========================
    // Load JSON Kota
    // ==========================
    $json_path = FCPATH . 'assets/data/kota_jateng.json';
    if (!file_exists($json_path)) {
        show_error("File JSON tidak ditemukan: " . $json_path);
    }

    $json_data = file_get_contents($json_path);
    $kota_list = json_decode($json_data, true);

    if (!is_array($kota_list)) {
        show_error("File JSON gagal di-decode.");
    }

    $data['kota_list'] = $kota_list;

    // ==========================
    // Default savedCities kosong untuk tambah
    // ==========================
    $data['savedCities'] = [];

    $this->load->view('templates/header');
    $this->load->view('lowongan/tambahjen', $data);
    $this->load->view('templates/footer');
}


   public function tambahjen()
{
    $divisi      = $this->input->post('divisi');
    $nama        = $this->input->post('nama');
    $education   = $this->input->post('education_job');
    $kasta       = $this->input->post('kasta');
    $kualifikasi = $this->input->post('kualifikasi');
    $des         = $this->input->post('deskripsi');
    $status      = $this->input->post('status');

    // Ambil array kota dari hidden input
    $city_job_post = $this->input->post('city_job');
    $city_job = json_decode($city_job_post, true);

    if(!is_array($city_job) || empty($city_job)){
        $city_job = ['WFH'];
    }

    $data_insert = [
         'id_job'          => $this->input->post('idpeker'),
        'id_division'     => $divisi,
        'name_job'        => $nama,
        'education_job'   => $education,
        'grade_value'     => $kasta,
        'requirement_job' => $kualifikasi,
        'description_job' => $des,
        'city_job'        => json_encode($city_job),
        'is_active'       => $status
    ];

    $this->db->insert('job_vacancy', $data_insert);
    $this->session->set_flashdata('success','Data berhasil ditambah');
    redirect('conjen/showjen');
}


    public function hapus($id)
    {
        $this->Jenlok->hapusDataJob($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('conjen/showjen');
    }

public function edit($id)
{
    // ==========================
    // 1. Ambil Data Utama
    // ==========================
    $data['show_data_editjen'] = $this->Jenlok->getAllDataById($id);
    $data2['tablejen'] = $this->Loker->getAllData();

    // Decode kolom city_job (JSON) menjadi array
    $savedCities = json_decode($data['show_data_editjen']['city_job'], true);
    $data['savedCities'] = is_array($savedCities) ? $savedCities : [];

    // ==========================
    // 2. Load JSON Kota
    // ==========================
    $json_path = FCPATH . 'assets/data/kota_jateng.json';
    $json_data = file_get_contents($json_path);
    $data['kota_list'] = json_decode($json_data, true);

    // ==========================
    // 3. Validasi Form
    // ==========================
    $aturan = [
        ['field' => 'divisi', 'label' => 'Nama Divisi', 'rules' => 'required'],
        ['field' => 'nama', 'label' => 'Nama Job', 'rules' => 'required'],
        ['field' => 'kasta', 'label' => 'Grade', 'rules' => 'required'],
        ['field' => 'kualifikasi', 'label' => 'Spec', 'rules' => 'required'],
        ['field' => 'deskripsi', 'label' => 'Deskripsi', 'rules' => 'required'],
        ['field' => 'education_job','label' => 'Jenjang Pendidikan','rules'=>'required']
    ];

    $this->form_validation->set_rules($aturan);

    // ==========================
    // 4. Jika Form Tidak Valid
    // ==========================
    if ($this->form_validation->run() == false) {

    if ($this->input->method() == 'post') {
        // Ambil error detail dari form_validation
        $errors = validation_errors();
        $this->session->set_flashdata('error', $errors);
    }

    $this->load->view('templates/header');
    $this->load->view('lowongan/editjen', $data + $data2);
    $this->load->view('templates/footer');
    return;
}


    // ==========================
    // 5. Form Valid → Proses Update
    // ==========================
    $divisi      = $this->input->post('divisi');
    $nama        = $this->input->post('nama');
    $education   = $this->input->post('education_job');
    $kasta       = $this->input->post('kasta');
    $kualifikasi = $this->input->post('kualifikasi');
    $des        = $this->input->post('deskripsi');

    // Ambil array kota dari hidden input
    $city_job_post = $this->input->post('city_job');
    $city_job = json_decode($city_job_post, true);

    // Jika kosong → otomatis WFH
    if (!is_array($city_job) || empty($city_job)) {
        $city_job = ['WFH'];
    }

    // ==========================
    // 6. Update Database
    // ==========================
    $this->db->set('id_division',     $divisi);
    $this->db->set('name_job',        $nama);
    $this->db->set('education_job',   $education);
    $this->db->set('grade_value',     $kasta);
    $this->db->set('requirement_job', $kualifikasi);
    $this->db->set('description_job', $des);
    $this->db->set('city_job',        json_encode($city_job));

    $this->db->where('id', $id);
    $this->db->update('job_vacancy');

    if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
    } else {
        $this->session->set_flashdata('error', 'Tidak ada perubahan data atau update gagal');
    }

    redirect('conjen/showjen');
}

public function toggle($id)
{
    $jenlok = $this->Jenlok->getAllDataById($id);

    if (!$jenlok) {
        show_404();
    }

    $update = [
        'is_active' => $jenlok['is_active'] == 1 ? 0 : 1
    ];

    $this->db->where('id', $id);
    $this->db->update('job_vacancy', $update);

    redirect('conjen/showjen');
}
}
