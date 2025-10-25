<?php

defined('BASEPATH') or exit('No direct script access allowed.');


class CandidateBiodata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();
        // echo "<pre>";
        // print_r($user);exit();
        if ($user) {
            // If authenticated user is not candidate
            if ($user['is_candidate'] === false) {
                redirect(site_url());
            }
        } else {
            redirect(site_url('candidatelogin'));
        }

        $this->load->model('user/biodata_model');
        $this->load->model('kandidat_model');
    }

    public function index()
    {
        $biodata    = $this->biodata_model->getMyBiodata();
        $address    = $this->kandidat_model->getKandidatAddress($biodata['id']);
        $laststudy  = $this->kandidat_model->getKandidatStudy($biodata['id']);
        $exprience  = $this->kandidat_model->getKandidatExperience($biodata['id']);
        $pendukung  = $this->kandidat_model->getFilePendukung($biodata['id']);

        $this->render('index', [
            'title'      => 'Biodata',
            'biodata'    => $biodata,
            'address'    => $address,
            'laststudy'  => $laststudy,
            'experience' => $exprience,
            'pendukung'  => $pendukung
        ]);
    }

    public function change_password()
    {
        $method = $this->input->method();
        $candid = getLoggedInUser('id');

        $candob = $this->db->get_where('candidate', ['id' => $candid])->row_array();

        if (!$candob) {
            show_404();
        }

        if ($method == 'post') {
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            $con_password = $this->input->post('confirm_password');


            if (!password_verify($old_password, $candob['password_candidate'])) {
                $this->session->set_flashdata('error', 'Password lama tidak benar.');
            } elseif ($old_password == $new_password) {
                $this->session->set_flashdata('error', 'Password baru tidak boleh sama dengan password lama.');
            } elseif ($new_password != $con_password) {
                $this->session->set_flashdata('error', 'Password baru dan password konfirmasi tidak sama.');
            } else {
                $hash_password = password_hash($new_password, PASSWORD_DEFAULT);

                if ($this->db->update('candidate', ['password_candidate' => $hash_password], ['id' => $candid])) {
                    $this->session->set_flashdata('success', 'Password berhasil diperbarui.');
                } else {
                    $this->session->set_flashdata('error', 'Password gagal diperbarui.');
                }
            }

            redirect(site_url('candidate-biodata/change-password'));
        } else {
            $this->load->view('dashboarduser/change-password/index');
        }
    }

    public function update_biodata()
{
    $biodata    = $this->biodata_model->getMyBiodata();
    $address    = $this->kandidat_model->getKandidatAddress($biodata['id']);
    $address2   = $this->kandidat_model->getKandidatAddress($biodata['id'], $secondAddress = true);
    $laststudy  = $this->kandidat_model->getKandidatStudy($biodata['id']);
    $exprience  = $this->kandidat_model->getKandidatExperience($biodata['id']);
    $pendukung  = $this->kandidat_model->getFilePendukung($biodata['id']);

    $this->render('update', [
        'title'      => 'Update Biodata',
        'biodata'    => $biodata,
        'address'    => $address,
        'address2'   => $address2,
        'laststudy'  => $laststudy,
        'experience' => $exprience,
        'pendukung'  => $pendukung,
    ]);
}
    public function delete_experience($id)
    {
        $delete = $this->kandidat_model->deletePengalamanKerja($id);

        if ($delete) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Data pengalaman berhasil dihapus.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Data pengalaman berhasil dihapus.'
            ]);
        }
    }

    public function delete_data_pendukung()
    {
        $idfl = $this->input->post('id');
        $file = $this->db->get_where('candidate_file', ['id' => $idfl])->row_array();

        if ($file && $this->kandidat_model->deleteFilePendukung($idfl)) {
            $filept = FCPATH . 'uploads/kandidat/files/' . $file['file_pendukung'];
            $filept = str_replace('/', DIRECTORY_SEPARATOR, $filept);

            @unlink($filept);

            http_response_code(200);

            echo json_encode([
                'success'  => true,
                'message'  => 'File pendukung berhasil dihapus.',
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'File pendukung gagal dihapus.'
            ]);
        }
    }

    public function save_data_profile()
    {
        $file = $_FILES['photo_candidate'] ?? [];

        if (empty($file) || (int)$file['error'] === UPLOAD_ERR_NO_FILE) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Tidak ada file yang dipilih.'
            ]);
            exit;
        }

        $target_dir = 'uploads/kandidat/profiles/';
        $target_dir = FCPATH . str_replace('/', DIRECTORY_SEPARATOR, $target_dir);
        $target_file = 'file_' . time() . '_' . $file['name'];
        $target_file_path = $target_dir . $target_file;

        $allowed_type = ['png', 'jpg', 'jpeg'];
        $file_type = strtolower(pathinfo($target_file_path, PATHINFO_EXTENSION));

        if (!in_array($file_type, $allowed_type)) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'File yang dipilih tidak valid.'
            ]);
            exit;
        }

        if (move_uploaded_file($file['tmp_name'], $target_file_path)) {
            $foto = getLoggedInUser('photo_candidate');
            $save = $this->kandidat_model->saveKandidat([
                'id' => getLoggedInUser('id'),
                'photo_candidate' => $target_file
            ]);

            if ($save) {
                http_response_code(200);

                // Remove old photo
                $filept = FCPATH . 'uploads/kandidat/profiles/' . $foto;
                $filept = str_replace('/', DIRECTORY_SEPARATOR, $filept);

                @unlink($filept);

                echo json_encode([
                    'success'  => true,
                    'message'  => 'Foto profile berhasil diupload.',
                    'uploaded' => [
                        'name' => $target_file,
                        'url'  => base_url('uploads/kandidat/profiles/' . $target_file)
                    ]
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'Foto profile gagal diupload.'
                ]);
            }
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Foto profile gagal diupload.'
            ]);
        }
    }
    

   public function save_data_pendukung()
{
    $file = $_FILES['file_pendukung'] ?? null;
    $idex = $this->input->post('id');
    $jenis_file = $this->input->post('jenis_file'); // tambahkan field ini di form

    if (!$file || (int)$file['error'] === UPLOAD_ERR_NO_FILE) {
        return $this->response(false, 'Tidak ada file yang dipilih.', 400);
    }

    $kandidat = $this->db->get_where('candidate', ['id' => getLoggedInUser('id')])->row_array();
    if (!$kandidat) {
        return $this->response(false, 'Access denied (Unauthorized).', 401);
    }

    // Pastikan folder upload ada
    $target_dir = FCPATH . 'uploads/kandidat/files/';
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = sprintf(
        'file_%s_%s_%s',
        $kandidat['id_candidate'],
        time(),
        preg_replace('/\s+/', '_', $file['name'])
    );
    $target_file = $target_dir . $file_name;

    $allowed_type = ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx'];
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (!in_array($file_type, $allowed_type)) {
        return $this->response(false, 'File yang dipilih tidak valid.', 400);
    }

    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        $data = [
            'id_candidate'   => getLoggedInUser('id'),
            'file_pendukung' => $file_name,
            'jenis_file'     => $jenis_file,
        ];

        if ($idex && $this->db->get_where('candidate_file', ['id' => $idex])->num_rows() > 0) {
            $save = $this->db->update('candidate_file', $data, ['id' => $idex]);
        } else {
            $save = $this->db->insert('candidate_file', $data);
        }

        if ($save) {
            return $this->response(true, 'File pendukung berhasil diupload.', 200);
        }
        return $this->response(false, 'Gagal menyimpan ke database.', 500);
    }

    return $this->response(false, 'File gagal diupload.', 500);
}

// helper kecil untuk response JSON
private function response($success, $message, $code)
{
    http_response_code($code);
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

    public function save_data_pengalaman()
    {
        $request = [];
        $rawpost = json_decode(file_get_contents('php://input'), true);

        foreach ($rawpost as $data) {
            $tmp = [];
            foreach ($data as $k => $v) {
                $tmp[$k] = $this->safe_raw_input($v);
            }
            $request []= $tmp;
        }

        foreach ($request as $data) {
            foreach ($data as $key => $value) {
                if ($data['active'] == 0 && empty($data['last_year'])) {
                    http_response_code(400);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Harap melengkapi semua data'
                    ]);
                    exit;
                }

                if ($key == 'last_year' || $key == 'active' || $key == 'is_update' || $key == 'id_ce') {
                    continue;
                }

                if (strlen($value) == 0 || is_null($value)) {
                    http_response_code(400);

                    echo json_encode([
                        'success' => false,
                        'message' => 'Harap melengkapi semua data.',
                        'key' => $key,
                    ]);
                    exit;
                }
            }
        }

        $save = $this->biodata_model->updateOrCreatePengalaman($request);

        if ($save) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Data pengalaman berhasil diperbarui.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Data pengalaman gagal diperbarui.'
            ]);
        }
    }

    private function safe_raw_input($value)
    {
        return htmlspecialchars(stripslashes(trim($value)));
    }

    public function save_data_alamat()
    {
        $request = [];

        foreach ($_POST as $k => $v) {
            $request[$k] = $this->input->post($k);

            if ($k == 'noaddress_candidate' || $k == 'noaddress_candidate2') {
                continue;
            }

            if (strlen(trim($v)) === 0) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Harap melengkapi semua data.'
                ]);
                exit;
            }
        }

        $save = $this->kandidat_model->updateKandidatAddress(getLoggedInUser('id'), $request);

        if ($save) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Data alamat berhasil diperbarui.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Data alamat gagal diperbarui.'
            ]);
        }
    }

    public function save_data_pendidikan()
    {
        $request = [];

        foreach ($_POST as $k => $v) {
            if ($k == 'jurusan') {
                $request['jurusan_'] = $this->input->post($k);
                continue;
            }

            $request[$k] = $this->input->post($k);

            if ($k == 'major_school' && in_array(strtolower($_POST['study_level']), ['sma', 'smk', 'sd', 'smp'])) {
                continue;
            }

            if ($k == 'year_last' && $_POST['active'] == 1) {
                continue;
            }

            if (strlen(trim($v)) === 0) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Harap melengkapi semua data.'
                ]);
                exit;
            }
        }

        $cand = $this->kandidat_model->getKandidatStudy(getLoggedInUser('id'));
        $save = $this->kandidat_model->updatePendidikanKandidat($cand['id_candidate_study'], $request);

        if ($save) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Data pendidikan berhasil diperbarui.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Data pendidikan gagal diperbarui.'
            ]);
        }
    }

    public function save_data_diri()
    {
        $request = [];

        foreach ($_POST as $k => $v) {
            $request[$k] = $this->input->post($k);

            if (strlen(trim($v)) === 0) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'Harap melengkapi semua data.'
                ]);
                exit;
            }
        }

        $request['id'] = getLoggedInUser('id');

        $save = $this->kandidat_model->saveKandidat($request);

        if ($save) {
            http_response_code(200);

            echo json_encode([
                'success' => true,
                'message' => 'Data diri berhasil diperbarui.'
            ]);
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'Data diri gagal diperbarui.'
            ]);
        }
    }

    public function my_profile_as_json()
    {
        $uploaded = getLoggedInUser('photo_candidate');

        http_response_code(200);

        $path = FCPATH . 'uploads/kandidat/profiles/' . $uploaded;
        if (file_exists($path) && is_file($path)) {
            $img = base_url('uploads/kandidat/profiles/' . $uploaded);
        } else {
            $img = base_url('assets/default/file_lido-default-photo.jpg');
        }

        echo json_encode([
            'success'  => true,
            'uploaded' => [
                'name' => $uploaded,
                'url'  => $img
            ]
        ]);
    }

            public function my_file_as_json()
            {
                $candidate = getLoggedInUser('id');

                $pendukung = $this->kandidat_model->getFilePendukung($candidate);

                $files = [];

                foreach ($pendukung as $file) {
                    $files[] = [
                        'id'          => $file['id'],
                        'name'        => $file['file_pendukung'],
                        'jenis_file'  => $file['jenis_file'], // ✅ tambahkan ini
                        'url'         => base_url('uploads/kandidat/files/' . $file['file_pendukung']),
                    ];
                }

                http_response_code(200);

                echo json_encode([
                    'success' => true,
                    'files'   => $files
                ]);
            }


    public function my_experience_as_json()
    {
        $candidate  = getLoggedInUser();
        $experience = $this->kandidat_model->getKandidatExperience($candidate['id']);
        $experience = array_map(function ($v) {
            $filter = [];

            $filter['name_company']     = $v['name_company'];
            $filter['type_company']     = $v['type_company'];
            $filter['first_year']       = $v['first_year'];
            $filter['last_year']        = $v['last_year'];
            $filter['employee_company'] = $v['employee_company'];
            $filter['last_position']    = $v['last_position'];
            $filter['description']      = $v['description'];
            $filter['active']           = ($v['last_year'] == null || strlen($v['last_year']) == 0) ? 1 : 0;
            $filter['is_update']        = true;
            $filter['id_ce']            = $v['id_ce'];

            return $filter;
        }, $experience);

        http_response_code(200);

        echo json_encode([
            'success' => true,
            'pengalaman'  => $experience,
        ], JSON_PRETTY_PRINT);
    }

    private function render(string $view, array $data = [])
    {
        $header = [];
        $footer = [];
        $result = [];

        foreach ($data as $k => $v) {
            if ($k == 'title') {
                $header[$k] = $v;
            }

            if ($k == 'header' && is_array($v)) {
                foreach ($v as $kh => $vh) {
                    $header[$kh] = $vh;
                }
                continue;
            }

            if ($k == 'footer' && is_array($v)) {
                foreach ($v as $kf => $vf) {
                    $footer[$kf] = $vf;
                }
                continue;
            }

            $result[$k] = $v;
        }

        $this->load->view('dashboarduser/templates/header', $header);
        $this->load->view('dashboarduser/biodata/' . $view, $result);
        $this->load->view('dashboarduser/templates/footer', $footer);
    }
}
