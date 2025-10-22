<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Conacc extends CI_Controller
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

        $this->load->model('Acc');
    }

    public function showacc()
    {
        if ($this->session->userdata('is_superadmin') == false) {
            show_404();
        }

        $data['showtable'] = $this->Acc->getAllData();


        $this->load->view('templates/header', [
            'title' => 'Account'
        ]);
        $this->load->view('account/tabacc', $data);
        $this->load->view('templates/footer');
    }

    public function showtambah()
    {
        if ($this->session->userdata('is_superadmin') == false) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('account/tambahacc');
        $this->load->view('templates/footer');
    }

    public function tambahacc()
    {
        $aturan = array(
            array(
                'field' => 'nama',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ),

            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($aturan);

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Form tidak boleh kosong');

            $this->load->view('templates/header');
            $this->load->view('account/tambahacc');
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('pass'));
            $email = $this->input->post('email');
            $role = $this->input->post('role');
            $status = $this->input->post('status');
            $gambar = $this->upload->data()['file_name'];


            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'email'	=> $email,
                'role'	=> $role,
                'status' => $status,
                'gambar' => $gambar,
                'created_date' => date('Y-m-d H:i:s')
            ];
            $this->Acc->inputAll($data);
            $this->session->set_flashdata('success', 'Data berhasil diinput');
            redirect('conacc/showacc');
        }
    }

    public function hapus($id)
    {
        $this->Acc->hapusDataAcc($id);
        $this->session->set_flashdata('hapus', 'Data berhasil dihapus');
        redirect('conacc/showacc');
    }

    public function edit($id)
    {
        if ($this->session->userdata('is_superadmin') == false) {
            show_404();
        }
        $aturan = array(
            array(
                'field' => 'nama',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ),

            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($aturan);



        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');

        $data['show_data_edit'] = $this->Acc->getAllDataById($id);

        if ($this->form_validation->run() == false) {
            if ($this->input->method() == 'post') {
                $this->session->set_flashdata('error', 'Form tidak boleh kosong');
            }

            $this->load->view('templates/header');
            $this->load->view('account/editacc', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $email = $this->input->post('email');
            $role = $this->input->post('role');
            $status = $this->input->post('status');
            $gambar = $this->upload->data()['file_name'];

            //  if (!empty($_FILES["foto_mobil"])) {
            // 	'foto_mobil' = $this->_uploadImage()
            // 	} else {
            // 			'foto_mobil' = $post["old_image"];
            // 				}


            $this->db->set('nama', $nama);
            $this->db->set('username', $username);
            if ($password) {
                $this->db->set('password', md5($password));
            }
            $this->db->set('email', $email);
            $this->db->set('role', $role);
            $this->db->set('status', $status);
            if ($gambar) {
                $this->db->set('gambar', $gambar);
            }
            $this->db->where('id_user', $id);
            $this->db->update('users');

            $this->session->set_flashdata('edit', 'Data berhasil diedit');
            redirect('conacc/showacc');
        }

        //  if (!empty($_FILES["foto_mobil"])) {
        // 	'foto_mobil' = $this->_uploadImage()
        // 	} else {
        // 			'foto_mobil' = $post["old_image"];
        // 				}
    }
}
