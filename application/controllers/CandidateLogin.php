<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CandidateLogin extends CI_Controller
{
    public function __construct()
    {
        // cek
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();

        if ($user && $this->uri->segment(2) != "logout") {
            if ($user['is_candidate'] === false) {
                $this->session->sess_destroy();
            } else {
                redirect(site_url('/candidatedashboard'));
            }
        }

        $this->load->library('form_validation');
        $this->load->library('Sendmail');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('dashboarduser/login/header_login', $data);
            $this->load->view('dashboarduser/login/login_user', $data);
            $this->load->view('dashboarduser/login/footer_login', $data);
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $candidate = $this->db->get_where('candidate', ['email_candidate' => $email])->row_array();

        $this->session->set_userdata('email_candidate', $email);

        //$this->session->set_userdata($newdata);


        // jika usernya ada
        if ($candidate) {
            // jika usernya aktif
            if ($candidate['is_active'] == 1) {
                // cek password
                if (password_verify($password, $candidate['password_candidate'])) {
                    $data = [
                        'id'                => $candidate['id'],
                        'id_candidate'      => $candidate['id_candidate'],
                        'email'             => $candidate['email_candidate'],
                        'state'             => $candidate['state'],
                        'candidate_is_log'  => true,
                    ];
                    $this->session->set_userdata($data);

                   

                    redirect('candidatedashboard');
                } else {
                    $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Password salah !!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('candidatelogin');
                }
            } else {
                $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Email belum di aktifkan !!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('candidatelogin');
            }
        } else {
            $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Email Belum Terdaftar !!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('candidatelogin');
        }
    }

    public function registration()
    {
        //  $data['title'] = 'Login Page';

        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('telp', 'Number Telephone', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[candidate.email_candidate]', [
            'is_unique' => 'This email has already registered!'
        ]);
        // Atur rules di function registration
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|callback_valid_password|matches[passwordtwo]', [
            'matches' => 'Kata sandi tidak cocok!',
            'min_length' => 'Kata sandi terlalu pendek! Minimal harus 8 karakter.'
        ]);

        $this->form_validation->set_rules('passwordtwo', 'Confirm Password', 'required|trim|matches[password]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';

            $this->load->view('dashboarduser/login/header_login', $data);
            $this->load->view('dashboarduser/login/register_user', $data);
            $this->load->view('dashboarduser/login/footer_login', $data);
        } else {
            $email       = $this->input->post('email', true);
            $namefirst   = $this->input->post('first_name', true);
            $namelast    = $this->input->post('last_name', true);
            $telp        = $this->input->post('full_number', true);

            $allname     = $namefirst . ' ' . $namelast;

            $data = [
                'id_candidate'          => generateIdCandidate(),
                'name_candidate'        => htmlspecialchars($allname),
                'email_candidate'       => htmlspecialchars($email),
                'no_candidate'          => htmlspecialchars($telp),
                'password_candidate'    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'photo_candidate'       => 'file_lido-default-photo.jpg',
                'is_active'             => 0,
                'date_created'          => getCurrentDate(),
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $candidate_token = [
                'email'          => $email,
                'token'          => $token,
                'date_created'   => getCurrentDate(),
            ];

            $this->db->insert('candidate', $data);
            $this->db->insert('candidate_token', $candidate_token);

            $this->sendmail->sendActivated($token, 'verify', $email, $allname);
            // $this->_sendEmail();


            $this->session->set_flashdata('message', '<div id="info" class="alert bg-success alert-dismissible fade show" role="alert"><span class="alert-text text-white">Selamat! akun anda telah dibuat. Mohon untuk aktifkan akun</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('candidatelogin');
        }
    }


    public function valid_password($password)
    {
        if (!preg_match('/[A-Z]/', $password)) {
            $this->form_validation->set_message('valid_password', 'Kata sandi harus mengandung setidaknya satu huruf kapital.');
            return false;
        }
        if (!preg_match('/[a-z]/', $password)) {
            $this->form_validation->set_message('valid_password', 'Kata sandi harus mengandung setidaknya satu huruf kecil.');
            return false;
        }
        if (!preg_match('/[0-9]/', $password)) {
            $this->form_validation->set_message('valid_password', 'Kata sandi harus mengandung setidaknya satu angka.');
            return false;
        }
        if (!preg_match('/[\W]/', $password)) {
            $this->form_validation->set_message('valid_password', 'Kata sandi harus mengandung setidaknya satu simbol');
            return false;
        }
        return true;
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $candidate = $this->db->get_where('candidate', ['email_candidate' => $email])->row_array();

        if ($candidate) {
            $candidate_token =  $this->db->get_where('candidate_token', ['token' => $token])->row_array();
            $datenow = getCurrentDate();
            $datecreated = $candidate_token['date_created'];

            if ($candidate_token) {
                if ($datecreated <= $datenow) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email_candidate', $email);
                    $this->db->update('candidate');
                    // print_r($email);
                    // exit();

                    $this->db->delete('candidate_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div id="info" class="alert bg-success alert-dismissible fade show" role="alert"><span class="alert-text text-white">' . $email . ' aktif! Silahkan login.</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('candidatelogin');
                } else {
                    $this->db->delete('candidate', ['email_candidate' => $email]);
                    $this->db->delete('candidate_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Gagal Aktifkan akun! Token kadaluarsa.</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('candidatelogin');
                }
            } else {
                $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Gagal Aktifkan akun! Token salah.</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('candidatelogin');
            }
        } else {
            $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Akun gagal di aktifkan! Email anda salah.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('candidatelogin');
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Verify Your Email';

            $this->load->view('dashboarduser/login/header_login', $data);
            $this->load->view('dashboarduser/login/verify_email', $data);
            $this->load->view('dashboarduser/login/footer_login', $data);
        } else {
            $email = $this->input->post('email');
            $candidate = $this->db->get_where('candidate', ['email_candidate' => $email])->row_array();
            $name = $candidate['name_candidate'];


            if ($candidate) {
                $token = base64_encode(random_bytes(32));
                $candidate_token = [
                    'email'         => $email,
                    'token'         => $token,
                    'date_created'  => getCurrentDate()
                ];

                $this->db->insert('candidate_token', $candidate_token);
                $this->sendmail->sendActivated($token, 'forgot', $email, $name);

                $this->session->set_flashdata('message', '<div id="info" class="alert bg-success alert-dismissible fade show" role="alert"><span class="alert-text text-white">Mohon cek email anda untuk melakukan reset password !</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('candidatelogin/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Email belum terdaftar atau tidak aktif!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('candidatelogin/forgotpassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $candidate = $this->db->get_where('candidate', ['email_candidate' => $email])->row_array();

        if ($candidate) {
            $candidate_token = $this->db->get_where('candidate_token', ['token' => $token])->row_array();



            if ($candidate_token) {
                $this->session->set_userdata('reset_email', $email);

                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Reset password gagal! Token Salah.</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('candidatelogin');
            }
        } else {
            $this->session->set_flashdata('message', '<div id="info" class="alert bg-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">Reset password gagal! Email salah.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('candidatelogin');
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('candidatelogin');
        }


        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[passwordtwo]');
        $this->form_validation->set_rules('passwordtwo', 'Repeat Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title']      = 'Change Password';
            $data['emailses']   = $this->input->get('email');

            // print_r($data);
            // exit();

            $this->load->view('dashboarduser/login/header_login', $data);
            $this->load->view('dashboarduser/login/change_password', $data);
            $this->load->view('dashboarduser/login/footer_login', $data);
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            // print_r($email);
            // exit();


            $this->db->set('password_candidate', $password);
            $this->db->where('email_candidate', $email);
            $this->db->update('candidate');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('candidate_token', ['email' => $email]);

            $this->session->set_flashdata('message', '<div id="info" class="alert bg-success alert-dismissible fade show" role="alert"><span class="alert-text text-white">Password berhasil diubah! Silahkan login.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('candidatelogin');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(site_url('candidatelogin'));
    }

    public function privasi(){
        $this->load->view('dashboarduser/login/privasi');
    }
}
