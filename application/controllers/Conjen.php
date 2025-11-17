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
        $data['tablejen'] = $this->Loker->getAllData();
        $data['latest_id_job'] = $this->Jenlok->getLatestIdJob();
        if ($data['latest_id_job']) {
            $data['next_id_job'] = $data['latest_id_job'] + 1;
        } else {
            $data['next_id_job'] = 1;
        }


        $this->load->view('templates/header');
        $this->load->view('lowongan/tambahjen', $data);
        $this->load->view('templates/footer');
    }

    public function tambahjen()
    {
        $aturan = array(
            array(
                    'field' => 'divisi',
                    'label' => 'Nama Divisi',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'nama',
                    'label' => 'Nama Job',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'kasta',
                    'label' => 'Grade',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'kualifikasi',
                    'label' => 'Spec',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'deskripsi',
                    'label' => 'Deskripsi',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'status',
                    'label' => 'status',
                    'rules' => 'required'
            )
    );

        $this->form_validation->set_rules($aturan);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Form tidak boleh kosong');
            $this->load->view('templates/header');
            $this->load->view('lowongan/tambahjen');
            $this->load->view('templates/footer');
        } else {
            $idjob = $this->input->post('idpeker');
            $divisi = $this->input->post('divisi');
            $namajob = $this->input->post('nama');
            $kasta = $this->input->post('kasta');
            $kualifikasi = $this->input->post('kualifikasi');
            $des = $this->input->post('deskripsi');
            $status = $this->input->post('status');

            $cekjob = $this->db->get_where('job_vacancy', ['lower(name_job)' => strtolower($namajob)])->row_array();

            if ($cekjob) {
                if ($cekjob['id_division'] == $divisi) {
                    $this->session->set_flashdata('error', 'Nama lowongan tersebut telah digunakan pada divisi ini, silahkan gunakan nama yang lain.');
                    redirect('conjen/showtambah');
                }
            }


            $data = [
                'id_job' => $idjob,
                'id_division' => $divisi,
                'name_job' => $namajob,
                'grade_value' => $kasta,
                'requirement_job'	=> $kualifikasi,
                'description_job'	=> $des,
                'is_active' => $status
            ];
            $this->Jenlok->inputAll($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambah');
            redirect('conjen/showjen');
        }
    }

    public function hapus($id)
    {
        $this->Jenlok->hapusDataJob($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('conjen/showjen');
    }

  public function edit($id)
{
    $data['show_data_editjen'] = $this->Jenlok->getAllDataById($id);
    $data2['tablejen'] = $this->Loker->getAllData();

    $aturan = array(
        array(
            'field' => 'divisi',
            'label' => 'Nama Divisi',
            'rules' => 'required'
        ),
        array(
            'field' => 'nama',
            'label' => 'Nama Job',
            'rules' => 'required'
        ),
        array(
            'field' => 'kasta',
            'label' => 'Grade',
            'rules' => 'required'
        ),
        array(
            'field' => 'kualifikasi',
            'label' => 'Spec',
            'rules' => 'required'
        ),
        array(
            'field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'education_job',
            'label' => 'Jenjang Pendidikan',
            'rules' => 'required'
        ),
    );

    $this->form_validation->set_rules($aturan);

    if ($this->form_validation->run() == false) {

        if ($this->input->method()=='post') {
            $this->session->set_flashdata('error', 'Form tidak boleh kosong');
        }

        $this->load->view('templates/header');
        $this->load->view('lowongan/editjen', $data + $data2);
        $this->load->view('templates/footer');

    } else {

        $divisi = $this->input->post('divisi');
        $nama = $this->input->post('nama');
        $kasta = $this->input->post('kasta');
        $kualifikasi = $this->input->post('kualifikasi');
        $des = $this->input->post('deskripsi');
        $education = $this->input->post('education_job');

        // Simpan ke DB
        $this->db->set('id_division', $divisi);
        $this->db->set('name_job', $nama);
        $this->db->set('grade_value', $kasta);
        $this->db->set('requirement_job', $kualifikasi);
        $this->db->set('description_job', $des);
        $this->db->set('education_job', $education);

        $this->db->where('id', $id);
        $this->db->update('job_vacancy');

        $this->session->set_flashdata('success', 'Data berhasil edit');
        redirect('conjen/showjen');
    }
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
