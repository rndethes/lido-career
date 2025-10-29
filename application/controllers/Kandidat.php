<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Kandidat extends CI_Controller
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

        $this->load->model('kandidat_model');
        $this->load->library('Sendmail');
    }

  public function index()
{
    // Ambil data filter dari GET
    $filters = [
        'filter_type' => $this->input->get('filter_type'),
        'keyword' => $this->input->get('keyword')
    ];

    // Panggil model dengan filter
    $data['kandidat'] = $this->kandidat_model->getAllKandidatJoin($filters);

    // Load view
    $this->load->view('templates/header', ['title' => 'Daftar Kandidat']);
    $this->load->view('kandidat/index', $data);
    $this->load->view('templates/footer');
}



    public function transfer($id = null)
    {
        $kandidat = $this->kandidat_model->getKandidatBy(['id' => $id, 'state' => 2]);

        if (!$kandidat) {
            show_404();
        }

        $transfer = [
            'id_karyawan'       => $kandidat['id_candidate'],
            'nama'              => $kandidat['name_candidate'],
            'ttl'               => $kandidat['birthdate_candidate'],
            'nik'               => '',
            'jenis_kelamin'     => $kandidat['jk_candidate'],
            'foto'              => $kandidat['photo_candidate'],
            'email'             => $kandidat['email_candidate'],
            'no_hp'             => $kandidat['no_candidate'],
            'jabatan'           => '',
            'alamat'            => $kandidat['address_candidate'],
            'tgl_kntrk'         => '0000-00-00',
            'akhir_kontrak'     => '0000-00-00',
            'status_kontrak'    => 0,
            'id_kantor'         => '',
            'badan_hukum'       => 1,
            'no_rek'            => '-',
            'cuti_akses'        => 0,
            'created_date'      => date('Y-m-d H:i:s'),
            'password_karyawan' => password_hash('password', PASSWORD_DEFAULT),
            'state'             => 0,
            'absensi'           => 0
        ];

        if ($this->db->insert('tbl_karyawan', $transfer)) {
            $this->session->set_flashdata('transfer', 'success');
            $this->session->set_flashdata('message', 'Data kandidat berhasil di transfer.');
        } else {
            $this->session->set_flashdata('transfer', 'failed');
            $this->session->set_flashdata('message', 'Data kandidat gagal di transfer.');
        }

        redirect(site_url('kandidat'));
    }

    public function create()
    {
        if ($this->input->method() == 'post') {
            $request = [];

            foreach ($_POST as $k => $v) {
                $request[$k] = $this->input->post($k);
            }

            $create = [];
            $alamat = [];
            $pendidikan = [];
            $pengalaman = [];

            $file_pendukung = $_FILES['file_pendukung'] ?? [];
            $photo_candidate = $_FILES['photo_candidate'] ?? [];

            $description = $this->input->post('description');

            if ($description && is_array($description)) {
                foreach ($description as $key => $n) {
                    $_temp = [
                        'description' => $n,
                        'name_company' => $this->input->post('name_company')[$key],
                        'type_company' => $this->input->post('type_company')[$key],
                        'employee_company' => $this->input->post('employee_company')[$key],
                        'last_position' => $this->input->post('last_position')[$key],
                        'first_year' => $this->input->post('first_year')[$key],
                        'last_year' => $this->input->post('last_year')[$key],
                    ];

                    $pengalaman []= $_temp;
                }
            }


            foreach ($request as $k => $v) {
                if (is_array($v)) {
                    continue;
                } elseif (in_array($k, ['provinsi', 'kecamatan', 'alamat', 'kabupaten', 'kode_pos', 'no_tlp'])) {
                    $alamat[$k] = $v;
                } elseif (in_array($k, ['name_school', 'study_level', 'year_first', 'year_last', 'major_school', 'jurusan_'])) {
                    $pendidikan[$k] = $v;
                } else {
                    $create[$k] = $v;
                }
            }

            if ($this->kandidat_model->checkEmail($create['email_candidate'])) {
                http_response_code(400);
                echo json_encode([
                    'success' => false,
                    'message' => 'Email kandidat telah terdaftar.'
                ]);
                exit;
            }

            $create['date_created'] = date('Y-m-d H:i:s');
            $create['password_candidate'] = password_hash('password', PASSWORD_DEFAULT);

            $insert = $this->kandidat_model->saveKandidat($create);
            if ($insert) {
                $kandidat = $this->kandidat_model->checkEmail($create['email_candidate']);
                $kandidid = $kandidat['id'];

                // TODO: Handle if operations failed include rollback db

                $alamat = [
                    'kecamatan' => $alamat['kecamatan'] ?? '',
                    'kabupaten' => $alamat['kabupaten'] ?? '',
                    'provinsi'  => $alamat['provinsi'] ?? '',
                    'alamat'    => $alamat['alamat'] ?? '',
                    'poskode_candidate' => $alamat['kode_pos'] ?? '',
                    'noaddress_candidate' => $alamat['no_tlp'] ?? ''
                ];

                if ($file_pendukung && array_key_exists('tmp_name', $file_pendukung)) {
                    $this->insert_file_pendukung('file_pendukung', $file_pendukung, $kandidid);
                }

                if ($photo_candidate && array_key_exists('tmp_name', $photo_candidate)) {
                    $this->insert_file_pendukung('photo_candidate', $photo_candidate, $kandidid);
                }

                $this->kandidat_model->updateKandidatAddress($kandidid, $alamat);

                if (!empty($pendidikan)) {
                    $this->kandidat_model->insertPendidikan($kandidid, $pendidikan);
                }

                if (!empty($pengalaman)) {
                    $this->kandidat_model->insertPengalaman($kandidid, $pengalaman);
                }

                http_response_code(200);
                echo json_encode([
                    'success' => true,
                    'message' => 'Kandidat berhasil ditambahkan.',
                    'alamat'  => $alamat
                ]);
            } else {
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'message' => 'Kandidat gagal ditambahkan.'
                ]);
            }
        } else {
            $this->load->view('templates/header', [
                'title' => 'Tambah Kandidat'
            ]);

            $this->load->view('kandidat/create');

            $this->load->view('templates/footer');
        }
    }

    private function insert_file_pendukung($destination, $file, $kandidatid)
    {
        $target_dir = 'uploads/kandidat/files/';
        if ($destination == 'photo_candidate') {
            $target_dir = 'uploads/kandidat/profiles/';
        }

        $target_dir = FCPATH . str_replace('/', DIRECTORY_SEPARATOR, $target_dir);
        $target_file = 'file_' . time() . '_' . $file['name'];
        $target_file_path = $target_dir . $target_file;

        $file_type = strtolower(pathinfo($target_file_path, PATHINFO_EXTENSION));
        if ($destination == 'photo_candidate') {
            $allowed_type = ['png', 'jpg', 'jpeg'];
        } else {
            $allowed_type = ['pdf'];
        }

        if (!in_array($file_type, $allowed_type)) {
            return false;
        }


        if (move_uploaded_file($file['tmp_name'], $target_file_path)) {
            if ($destination == 'photo_candidate') {
                $save = $this->kandidat_model->saveKandidat([
                    'id' => $kandidatid,
                    'photo_candidate' => $target_file
                ]);
            } else {
                $save = $this->kandidat_model->updateFilePendukung($kandidatid, [
                    'file_pendukung' => $target_file,
                    'file_name'      => 'CV ' . date('d-m-Y')
                ]);
            }
            return $save;
        } else {
            return false;
        }
    }

    public function detail($id = null)
    {

       
        $biodata    = $this->kandidat_model->getBiodataById($id);
        //  print_r($biodata); exit();
        $address    = $this->kandidat_model->getKandidatAddress($biodata['id']);
        $laststudy  = $this->kandidat_model->getKandidatStudy($biodata['id']);
        $exprience  = $this->kandidat_model->getKandidatExperience($biodata['id']);
        $pendukung  = $this->kandidat_model->getFilePendukung($biodata['id']);

        if (!$biodata) {
            show_404();
        }

        $this->load->view('templates/header', [
            'title' => 'Detail Kandidat'
        ]);

        $this->load->view('kandidat/detail', [
            'biodata'    => $biodata,
            'address'    => $address,
            'laststudy'  => $laststudy,
            'experience' => $exprience,
            'pendukung'  => $pendukung
        ]);

        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        $kandidat = $this->kandidat_model->getKandidatBy(['id' => $id]);

        if (!$kandidat) {
            show_404();
        }

        if ($this->input->method() == 'post') {
            $data = [];
            $mode = 'data-diri';

            foreach ($_POST as $k => $v) {
                if ($k == 'section') {
                    $mode = $this->input->post($k);
                    continue;
                }

                $data[$k] = $this->input->post($k);
            }

            switch ($mode) {
                case 'data-diri':
                    $update = $this->kandidat_model->saveKandidat($data);
                    break;
                case 'pendidikan':
                    $pendid = $this->kandidat_model->getKandidatStudy($kandidat['id']);

                    if ($pendid) {
                        $pendid = $pendid['id_candidate_study'];
                    }

                    $update = $this->kandidat_model->updatePendidikanKandidat($pendid, $data);
                    break;
                case 'alamat':
                    $alamat = [
                        'kecamatan' => $data['kecamatan'],
                        'kabupaten' => $data['kabupaten'],
                        'provinsi'  => $data['provinsi'],
                        'alamat'    => $data['alamat'],
                        'poskode_candidate' => $data['kode_pos'],
                        'noaddress_candidate' => $data['no_tlp']
                    ];

                    $update = $this->kandidat_model->updateKandidatAddress($kandidat['id'], $alamat);
                    break;
                case 'pengalaman':
                    $update = $this->kandidat_model->updatePengalamanKerja($data);
                    break;
                case 'delete-pengalaman':
                    $update = $this->kandidat_model->deletePengalamanKerja($this->input->post('id_ce'));
                    break;
                case 'data-pendukung':
                    $config['upload_path']          = './uploads/kandidat/files/';
                    $config['allowed_types']        = 'jpg|png|jpeg';
                    $config['max_size']             = 20000; // 20 MB
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;

                    $destination = $this->input->post('destination');

                    if ($destination == 'file_pendukung') {
                        $config['allowed_types']     = 'pdf';
                    }

                    if ($destination == 'photo_candidate') {
                        $config['upload_path']          = './uploads/kandidat/profiles/';
                    }

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload($destination)) {
                        $uploaded = $this->upload->data();
                        $newfname = 'file_' . time() . '_' . $uploaded['file_name'];

                        // Get old file
                        if ($destination == 'photo_candidate') {
                            $conf = $this->kandidat_model->getKandidatBy(['id' => $kandidat['id']]);
                            $oldf = $conf[$destination];
                        } else {
                            $conf = $this->kandidat_model->getFilePendukung($kandidat['id']);
                            $oldf = $conf[$destination];
                        }

                        // Get new set
                        if ($destination == 'photo_candidate') {
                            $conf = $this->kandidat_model->getKandidatBy(['id' => $kandidat['id']]);
                            $save = $this->kandidat_model->saveKandidat([
                                'id' => $kandidat['id'],
                                $destination => $newfname
                            ]);
                        } else {
                            $conf = $this->kandidat_model->getFilePendukung($kandidat['id']);
                            $save = $this->kandidat_model->updateFilePendukung($kandidat['id'], [
                                $destination => $newfname
                            ]);
                        }

                        if ($save) {
                            if ($destination == 'photo_candidate') {
                                $uploaded['file_url'] = base_url('/uploads/kandidat/profiles/' . $newfname);
                                $newrpath = FCPATH . 'uploads/kandidat/profiles/' . $newfname;
                            } else {
                                $uploaded['file_url'] = base_url('/uploads/kandidat/files/' . $newfname);
                                $newrpath = FCPATH . 'uploads/kandidat/files/' . $newfname;
                            }

                            $newrpath = str_replace('/', DIRECTORY_SEPARATOR, $newrpath);

                            if (copy($uploaded['full_path'], $newrpath)) {
                                @unlink($uploaded['full_path']);
                            }

                            if ($oldf) {
                                if ($destination == 'photo_candidate') {
                                    $oldf = FCPATH . 'uploads/kandidat/profiles/' . $oldf;
                                } else {
                                    $oldf = FCPATH . 'uploads/kandidat/files/' . $oldf;
                                }

                                $oldf = str_replace('/', DIRECTORY_SEPARATOR, $oldf);
                                @unlink($oldf);
                            }

                            http_response_code(200);
                            echo json_encode([
                                'success' => true,
                                'message' => 'File uploaded successfully.',
                                'data'    => $uploaded,
                            ]);
                        } else {
                            $pendukung = $this->kandidat_model->getFilePendukung($kandidat['id']);
                            http_response_code(500);
                            echo json_encode([
                                'success' => false,
                                'message' => 'Gagal saat proses update data pada database.',
                                'has_pendukung' => $pendukung['file_pendukung'] != 'default.pdf' ? true : false,
                            ]);

                            @unlink($uploaded['full_path']);
                        }
                    } else {
                        $pendukung = $this->kandidat_model->getFilePendukung($kandidat['id']);
                        http_response_code(500);
                        echo json_encode([
                            'success' => false,
                            'message' => 'Gagal saat proses upload file ke server.',
                            'error' => $this->upload->display_errors(),
                            'has_pendukung' => $pendukung['file_pendukung'] != 'default.pdf' ? true : false,
                        ]);
                    }
                    exit; // Break
                case 'delete-data-pendukung':
                    $filepd = $this->kandidat_model->getFilePendukung($kandidat['id']);
                    $fieldd = $this->input->post('field');
                    $fieldl = $filepd[$fieldd] ?? null;

                    if (!$fieldl) {
                        $update = false;
                    } else {
                        $filept = FCPATH . 'uploads/kandidat/files/' . $fieldl;
                        $filept = str_replace('/', DIRECTORY_SEPARATOR, $filept);
                        $update = $this->kandidat_model->updateFilePendukung($kandidat['id'], [
                            $fieldd => 'default.pdf'
                        ]);

                        if ($update) {
                            @unlink($filept);
                        }
                    }
                    break;
                default:
                    $update = false;
            }

            if ($update) {
                http_response_code(200);

                echo json_encode([
                    'success'    => true,
                    'message'    => 'Kandidat updated successfully.',
                    'request'    => $data,
                    'data'       => $this->kandidat_model->getKandidatBy(['id' => $id]),
                    'pengalaman' => $this->kandidat_model->getKandidatExperience($id)
                ]);
            } else {
                http_response_code(500);

                echo json_encode([
                    'success' => false,
                    'message' => 'Kandidat updated unsuccessfully.',
                ]);
            }
        } else {
            $this->load->model('user/biodata_model');

            $this->load->view('templates/header', [
                'title' => 'Update Kandidat'
            ]);

            $biodata    = $this->biodata_model->getBiodata($id, true);
            $address    = $this->kandidat_model->getKandidatAddress($biodata['id']);
            $address2   = $this->kandidat_model->getKandidatAddress($biodata['id'], $secondAddress = true);
            $laststudy  = $this->kandidat_model->getKandidatStudy($biodata['id']);
            $exprience  = $this->kandidat_model->getKandidatExperience($biodata['id']);
            $pendukung  = $this->kandidat_model->getFilePendukung($biodata['id']);

            $this->load->view('kandidat/edit', [
                'title'      => 'Update Biodata',
                'biodata'    => $biodata,
                'address'    => $address,
                'address2'   => $address2,
                'laststudy'  => $laststudy,
                'experience' => $exprience,
                'pendukung'  => $pendukung
            ]);

            $this->load->view('templates/footer');
        }
    }

    public function cetak_cv($id)
{
    $biodata    = $this->kandidat_model->getBiodataById($id);
    $address    = $this->kandidat_model->getKandidatAddress($id);
    $laststudy  = $this->kandidat_model->getKandidatStudy($id);
    $experience = $this->kandidat_model->getKandidatExperience($id);
    $pendukung  = $this->kandidat_model->getFilePendukung($id);

    $this->load->view('kandidat/cv', [
        'biodata'    => $biodata,
        'address'    => $address,
        'laststudy'  => $laststudy,
        'experience' => $experience,
        'pendukung'  => $pendukung
    ]);
}

    public function delete()
    {
        $kandidat = $this->kandidat_model->getKandidatBy(['id' => $this->input->post('kandidat')]);

        if (!$kandidat) {
            show_404();
        }

        $delete = $this->kandidat_model->deleteKandidat($kandidat['id']);

        if ($delete) {
            http_response_code(200);

            $profile = FCPATH . 'uploads/kandidat/profiles/' . $kandidat['photo_candidate'];
            $profile = str_replace('/', DIRECTORY_SEPARATOR, $profile);

            @unlink($profile);

            echo json_encode(['delete' => true]);
        } else {
            http_response_code(500);

            echo json_encode(['delete' => false]);
        }
    }
}
