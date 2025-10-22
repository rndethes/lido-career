<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Condiv extends CI_Controller
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

        $this->load->model('Loker');
    }

    public function showdiv()
    {
        $data['showtable'] = $this->Loker->getAllData();

        $this->load->view('templates/header', [
            'title' => 'Division'
        ]);

        $this->load->view('divisi/tabdiv', $data);
        $this->load->view('templates/footer');
    }

    //form tambah
    public function showtambah()
    {
        $data['tambahtable'] = $this->Loker->getAllData();

        $this->load->view('templates/header');
        $this->load->view('divisi/tambahdiv');
        $this->load->view('templates/footer');
    }

    //proses tambah
     public function tambah()
     {
         $aturan = array(
             array(
                     'field' => 'namadiv',
                     'label' => 'Nama Divisi',
                     'rules' => 'required'
             ),

             array(
                     'field' => 'des',
                     'label' => 'Deskripsi',
                     'rules' => 'required'
             )
    );
         $this->form_validation->set_rules($aturan);

         if ($this->form_validation->run() == false) {
             $this->session->set_flashdata('error', 'Form tidak boleh kosong');
             $this->load->view('templates/header');
             $this->load->view('divisi/tambahdiv');
             $this->load->view('templates/footer');
         } else {
             $namadiv = $this->input->post('namadiv');
             $deskripsi = $this->input->post('des');

             $data = [
                 'name_division' => $namadiv,
                 'description' => $deskripsi,
                 'date_created'	=> date('Y-m-d H:i:s')
             ];
             $this->Loker->inputAll($data);
             $this->session->set_flashdata('success', 'Data berhasil ditambah');
             redirect('condiv/showdiv');
         }
     }

    //edit form
    public function edit($id)
    {
        $data['show_data_edit'] = $this->Loker->getAllDataById($id);

        $aturan = array(
            array(
                    'field' => 'namadiv',
                    'label' => 'Nama Divisi',
                    'rules' => 'required'
            ),

            array(
                    'field' => 'des',
                    'label' => 'Deskripsi',
                    'rules' => 'required'
            )
    );

        $this->form_validation->set_rules($aturan);

        if ($this->form_validation->run() == false) {
            if ($this->input->method()=='post') {
                $this->session->set_flashdata('error', 'Form tidak boleh kosong');
            }


            $this->load->view('templates/header');
            $this->load->view('divisi/editloker', $data);
            $this->load->view('templates/footer');
        } else {
            $namadiv = $this->input->post('namadiv');
            $desdiv = $this->input->post('des');

            //  var_dump($namadiv, $desdiv, $tanggal);
            //  exit();
            // set in form
            $this->db->set('name_division', $namadiv);
            $this->db->set('description', $desdiv);
            $this->db->where('id_division', $id);
            $this->db->update('division');

            $this->session->set_flashdata('success', 'Data berhasil edit');
            redirect('condiv/showdiv');
        }
    }

public function hapus($id)
{
    $this->Loker->hapusDataDivisi($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('condiv/showdiv');
}
}
