<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class KandidatApi extends CI_Controller
{
    /**
     * Hold candidate id
     */
    private $id_candidate;

    /**
     * Hold candidate object
     */
    private $candidate;

    public function __construct()
    {
        parent::__construct();

        // Auth Middleware
        $user = getLoggedInUser();
        if ($user) {
            // If authenticated user is not admin
            if ($user['is_candidate'] === true) {
                $this->session->sess_destroy();

                http_response_code(401);

                echo json_encode([
                    'success' => false,
                    'message' => 'Unathorized.'
                ]);
                exit;
            }
        } else {
            http_response_code(401);

            echo json_encode([
                'success' => false,
                'message' => 'Unathorized.'
            ]);
            exit;
        }

        $this->_initRequest();

        $this->load->model('user/biodata_model');
        $this->load->model('kandidat_model');
    }

    private function _initRequest()
    {
        $this->id_candidate = $this->input->get_request_header('X-MASTER-ID-CANDIDATE');
        $this->candidate    = $this->db->get_where('candidate', ['id' => $this->id_candidate])->row_array();

        if (empty($this->candidate)) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'The given id is invalid.'
            ]);
            exit;
        }
    }

    private function safe_raw_input($value)
    {
        return htmlspecialchars(stripslashes(trim($value)));
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
            $foto = $this->candidate['photo_candidate'];
            $save = $this->kandidat_model->saveKandidat([
                'id' => $this->id_candidate,
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
        $file = $_FILES['file_pendukung'] ?? [];
        $idex = $this->input->post('id');

        $idex = $this->db->get_where('candidate_file', ['id' => $idex])->num_rows() > 0;

        if (empty($file) || (int)$file['error'] === UPLOAD_ERR_NO_FILE) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Tidak ada file yang dipilih.'
            ]);
            exit;
        }

        $kandidat = $this->candidate;

        if ((int)$file['error'] === UPLOAD_ERR_OK) {
            $target_dir = 'uploads/kandidat/files/';
            $target_dir = FCPATH . str_replace('/', DIRECTORY_SEPARATOR, $target_dir);
            $target_file = sprintf(
                'file_%s_%s_%s',
                $kandidat['id_candidate'] . '-' . $kandidat['name_candidate'],
                time(),
                $file['name']
            );
            $target_file_path = $target_dir . $target_file;

            $allowed_type = Biodata_model::ALLOWED_EXTENSIONS_FOR_FILE_PENDUKUNG;
            $file_type = strtolower(pathinfo($target_file_path, PATHINFO_EXTENSION));

            if (!in_array($file_type, $allowed_type)) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'message' => 'File yang dipilih tidak valid.'
                ]);
                exit;
            }
        } else {
            $data = [];

            $save = $this->db->update('candidate_file', $data, ['id' => $this->input->post('id')]);
            if ($save) {
                http_response_code(200);

                echo json_encode([
                    'success'  => true,
                    'message'  => 'File pendukung berhasil diupload.',
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'File pendukung gagal diupload.'
                ]);
            }

            exit;
        }

        if (move_uploaded_file($file['tmp_name'], $target_file_path)) {
            $data = [
                'id_candidate'   => $this->id_candidate,
                'file_pendukung' => $target_file,
            ];

            $idex = $this->input->post('id');

            if ($idex && $this->db->get_where('candidate_file', ['id' => $idex])->num_rows() > 0) {
                $save = $this->db->update('candidate_file', $data, ['id' => $idex]);
            } else {
                $save = $this->db->insert('candidate_file', $data);
            }

            if ($save) {
                http_response_code(200);

                echo json_encode([
                    'success'  => true,
                    'message'  => 'File pendukung berhasil diupload.',
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'File pendukung gagal diupload.'
                ]);
            }
        } else {
            http_response_code(500);

            echo json_encode([
                'success' => false,
                'message' => 'File pendukung gagal diupload.'
            ]);
        }
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

        $save = $this->biodata_model->updateOrCreatePengalaman($request, $this->id_candidate);

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

        $save = $this->kandidat_model->updateKandidatAddress($this->id_candidate, $request);

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

    // List field yang wajib diisi
    $required_fields = ['study_level', 'school_name', 'month_start', 'year_start'];

    foreach ($_POST as $k => $v) {

        // Khusus jurusan → simpan ke kolom jurusan_
        if ($k == 'jurusan') {
            $request['jurusan_'] = $this->input->post($k);
            continue;
        }

        // Simpan semua input
        $request[$k] = $this->input->post($k);

        // Field major_school tidak wajib untuk SMA/SMK/SD/SMP
        if ($k == 'major_school' && in_array(strtolower($_POST['study_level']), ['sma', 'smk', 'sd', 'smp'])) {
            continue;
        }

        // Jika status masih aktif (active = 1), field bulan/tahun selesai boleh kosong
        if ($_POST['active'] == 1 && in_array($k, ['month_last', 'year_last'])) {
            continue;
        }

        // Validasi hanya field wajib
        if (in_array($k, $required_fields) && strlen(trim($v)) === 0) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => 'Harap melengkapi semua data bulan & tahun.'
            ]);
            exit;
        }
    }

    // Gabungkan menjadi format YYYY-MM, jika bulan/tahun ada
    if (!empty($_POST['year_start']) && !empty($_POST['month_start'])) {
        $request['date_start'] = $_POST['year_start'] . '-' . str_pad($_POST['month_start'], 2, '0', STR_PAD_LEFT);
    }

    if ($_POST['active'] == 0 && !empty($_POST['year_last']) && !empty($_POST['month_last'])) {
        $request['date_last'] = $_POST['year_last'] . '-' . str_pad($_POST['month_last'], 2, '0', STR_PAD_LEFT);
    }

    // Simpan ke database
    $cand = $this->kandidat_model->getKandidatStudy($this->id_candidate);
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

        $request['id'] = $this->id_candidate;

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

    public function my_file_as_json()
    {
        $pendukung = $this->kandidat_model->getFilePendukung($this->id_candidate);

        $files = [];

        foreach ($pendukung as $file) {
            $files []= [
                'id'   => $file['id'],
                'name' => $file['file_pendukung'],
                'url'  => base_url('uploads/kandidat/files/' . $file['file_pendukung']),
            ];
        }

        http_response_code(200);

        echo json_encode([
            'success'  => true,
            'files'    => $files
        ]);
    }

    public function my_experience_as_json()
    {
        $experience = $this->kandidat_model->getKandidatExperience($this->id_candidate);
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

    public function my_profile_as_json()
    {
        $uploaded = $this->candidate['photo_candidate'];

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
}
