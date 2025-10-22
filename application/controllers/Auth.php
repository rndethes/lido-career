<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        // cek
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == true) {
            redirect(site_url('dashboard'));
        }

        $data['title'] = 'Login';

        $this->load->view('login/login', $data);
    }

    public function create_alert($message)
    {
        print_r("<script type='text/javascript'>alert('" . $message . "');</script>");
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        $data['title'] = 'Login';

        if ($this->form_validation->run() == false) {
            $this->create_alert("empty");
            $this->load->view('login/login', $data);
        } else {
            $this->do_login();
        }
    }

    private function do_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data['title'] = 'Login';

        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if (!empty($user)) {
            $password_db  = $user['password'];
            $id_user      = $user['id_user'];
            $name         = $user['nama'];
            $username     = $user['username'];
            $email        = $user['email'];
            $role         = $user['role'];
            $status       = $user['status'];
            $gambar       = $user['gambar'];

            if ($password == $password_db) {
                $sesdata = array(
                    'id_user'   => $id_user,
                    'nama'      => $name,
                    'username'  => $username,
                    'email'     => $email,
                    'role'      => $role,
                    'status'    => $status,
                    'gambar'    => $gambar,
                    'logged_in'   => true
                );
                if ($status == 2) {
                    $this->session->set_flashdata('msg', 'Akun Sudah Di Non Aktifkan!!!');
                    $this->load->view('login/login', $data);
                } else {
                    if($role == 1){
                        $sesdata['is_superadmin'] = true;
                    }
                    $this->session->set_userdata($sesdata);
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('msg', 'Password yang Anda masukkan salah');
                $this->session->set_flashdata('username', $username);
                $this->load->view('login/login', $data);
            }
        } else {
            $this->session->set_flashdata('msg', 'Username tidak ditemukan');
            $this->load->view('login/login', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function backlogin()
    {
        $this->load->view('templates/backlogin');
    }
}
