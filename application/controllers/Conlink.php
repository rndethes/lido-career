<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Conlink extends CI_Controller
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

        $this->load->model('Link');
    }

    public function tablink()
    {
        $data['tablelink'] = $this->Link->getAllData();

        $this->load->view('templates/header', [
            'title' => 'Timeline Link'
        ]);
        $this->load->view('link/tampillink', $data);
        $this->load->view('templates/footer');
    }

    public function showtambah()
    {
        $this->load->view('templates/header');
        $this->load->view('link/tambahlink');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $aturan = array(
            array(
                'field' => 'namalink',
                'label' => 'Nama Link',
                'rules' => 'required'
            ),

            array(
                'field' => 'isilink',
                'label' => 'Alamat Link',
                'rules' => 'required'
            ),
            array(
                'field' => 'catatan',
                'label' => 'Catatan',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($aturan);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Form tidak boleh kosong');

            $this->load->view('templates/header');
            $this->load->view('link/tambahlink');
            $this->load->view('templates/footer');
        } else {
            $namalink = $this->input->post('namalink');
            $addresslink = $this->input->post('isilink');
            $note = $this->input->post('catatan');

            $data = [
                'nama_link' => $namalink,
                'address_link' => $addresslink,
                'description_link' => $note
            ];
            $this->Link->inputAll($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambah');
            redirect('conlink/tablink');
        }
    }

    public function hapus($id)
    {
        $this->Link->hapusDataLink($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('conlink/tablink');
    }

    public function edit($id)
    {
        $data['show_data_edit'] = $this->Link->getAllDataById($id);

        $aturan = array(
            array(
                    'field' => 'namalink',
                    'label' => 'Nama Link',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'isilink',
                    'label' => 'isi link',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'catatan',
                    'label' => 'note',
                    'rules' => 'required'
            )
    );

        $this->form_validation->set_rules($aturan);
        if ($this->form_validation->run() == false) {
            if ($this->input->method()=='post') {
                $this->session->set_flashdata('error', 'Form tidak boleh kosong');
            }

            $this->load->view('templates/header');
            $this->load->view('link/editlink', $data);
            $this->load->view('templates/footer');
        } else {
            $namalink = $this->input->post('namalink');
            $isilink = $this->input->post('isilink');
            $note = $this->input->post('catatan');

            //  var_dump($namadiv, $desdiv, $tanggal);
            //  exit();
            // set in form
            $this->db->set('nama_link', $namalink);
            $this->db->set('address_link', $isilink);
            $this->db->set('description_link', $note);
            $this->db->where('id_link', $id);
            $this->db->update('link_timeline');
            $this->session->set_flashdata('success', 'Data berhasil diedit');
            redirect('conlink/tablink');
        }
    }
}
