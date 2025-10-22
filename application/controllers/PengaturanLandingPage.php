<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanLandingPage extends CI_Controller
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

        $this->load->model('pengaturanlp_model');
    }

    public function index()
    {
        if ($this->input->method() == 'post') {
            $mode = $this->input->post('mode');

            if ($mode == 'setting') {
                $data = [
                    'company_name' => $this->input->post('company_name'),
                    'company_title' => $this->input->post('company_title'),
                    'warna' => $this->input->post('warna'),
                    'user_announcement' => $this->input->post('field_p'),
                    'visi' => $this->input->post('field_about_visi'),
                    'misi' => $this->input->post('field_about_misi')
                ];

                $save = $this->pengaturanlp_model->saveWebsiteSet($data);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'data'    => $this->pengaturanlp_model->getWebsiteSet()
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode(['success' => false]);
                }
            } elseif ($mode == "setting_footer") {
                $data = [
                    'tittle_footer' => $this->input->post('judul_footer'),
                    'content_footer' => $this->input->post('konten_footer'),
                    'address_footer' => $this->input->post('address_footer'),
                    'no_footer' => $this->input->post('no_footer'),
                    'email_footer' => $this->input->post('email_footer'),
                    'link_map' => $this->input->post('link_map')
                ];

                $save = $this->pengaturanlp_model->saveWebsiteSet($data);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'data'    => $this->pengaturanlp_model->getWebsiteSet()
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode(['success' => false]);
                }
            } elseif ($mode == 'setting_about') {
                $abid = $this->input->post('id');

                $data = [
                    'about_title' => $this->input->post('title'),
                    'about_subtitle' => $this->input->post('subtitle'),
                    'about_description' => $this->input->post('description')
                ];

                $save = $this->pengaturanlp_model->saveAboutSet((int) $abid, $data);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'data'    => $this->pengaturanlp_model->getAboutSet($abid)
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode(['success' => false]);
                }
            } elseif ($mode == 'setting_homepage') {
                $shid = 1;

                $data = [
                    'id_hp' => $shid,
                    'tittle_homepage' => $this->input->post('title'),
                    'subtitle_homepage' => $this->input->post('subtitle')
                ];

                $save = $this->pengaturanlp_model->saveHeroSet($data);

                if ($save) {
                    http_response_code(200);

                    echo json_encode([
                        'success' => true,
                        'data'    => $this->pengaturanlp_model->getHeropage()
                    ]);
                } else {
                    http_response_code(500);

                    echo json_encode(['success' => false]);
                }
            } elseif ($mode == 'change_image') {
                $destination = $this->input->post('destination');
                if (!in_array($destination, ['company_logo', 'about_image_1', 'about_image_2', 'about_image_hero'])) {
                    http_response_code(400);
                    echo json_encode([
                        'success' => false,
                        'message' => 'Unknown destination.'
                    ]);
                } else {
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'jpg|png|jpeg';
                    $config['max_size']             = 10000; // 10 MB
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('form_change_image_file')) {
                        $uploaded = $this->upload->data();
                        $newfname = 'img_' . time() . $uploaded['file_name'];

                        if ($destination == 'company_logo') {
                            // Get old file
                            $conf = $this->pengaturanlp_model->getWebsiteSet();
                            $oldf = $conf['company_logo'] ?? null;
                            // Get new set
                            $conf = $this->pengaturanlp_model->getWebsiteSet();
                            $save = $this->pengaturanlp_model->saveWebsiteSet(
                                ['company_logo' => $newfname]
                            );
                        } elseif ($destination == 'about_image_hero') {
                            // Get old file
                            $conf = $this->pengaturanlp_model->getHeropage();
                            $oldf = $conf['image_homepage'] ?? null;
                            // Get new set
                            $conf = $this->pengaturanlp_model->getHeropage();
                            $save = $this->pengaturanlp_model->saveHeroSet(
                                ['image_homepage' => $newfname, 'id_hp' => 1]
                            );
                        } else {
                            $abid = $destination == 'about_image_1' ? 1 : 2;
                            // Get old file
                            $conf = $this->pengaturanlp_model->getAboutSet($abid);
                            $oldf = $conf['about_image'] ?? null;
                            // Get new set
                            $conf = $this->pengaturanlp_model->getAboutSet($abid);
                            $save = $this->pengaturanlp_model->saveAboutSet($abid, ['about_image' => $newfname]);
                        }

                        if ($save) {
                            $uploaded['file_url'] = base_url('/uploads/' . $newfname);
                            $newrpath = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . $newfname;

                            if (copy($uploaded['full_path'], $newrpath)) {
                                @unlink($uploaded['full_path']);
                            }

                            if ($oldf) {
                                $oldf = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . $oldf;
                                @unlink($oldf);
                            }

                            http_response_code(200);
                            echo json_encode([
                                'success' => true,
                                'message' => 'Image uploaded successfully.',
                                'data'    => $uploaded,
                            ]);
                        } else {
                            http_response_code(500);
                            echo json_encode([
                                'success' => false,
                                'message' => 'Gagal saat proses update data pada database.'
                            ]);

                            @unlink($uploaded['full_path']);
                        }
                    } else {
                        http_response_code(500);
                        echo json_encode([
                            'success' => false,
                            'message' => 'Gagal saat proses upload file ke server.',
                            'error' => $this->upload->display_errors()
                        ]);
                    }
                }
            }
        } else {
            $this->load->view('templates/header', [
                'title' => 'Setting'
            ]);

            $this->load->view('pengaturan-landing-page/index', [
                'setting' => $this->pengaturanlp_model->getWebsiteSet(),
                'hero' => $this->pengaturanlp_model->getHeropage(),
                'widget1' => $this->pengaturanlp_model->getAboutSet(1),
                'widget2' => $this->pengaturanlp_model->getAboutSet(2),
                'setting_social' =>  $this->pengaturanlp_model->get_data_social()
            ]);

            $this->load->view('templates/footer');
        }
    }

    public function save_form_sosmed()
    {
        // Ambil data dari form
        $icons = $this->input->post('iconselect');
        $sosmed_name = $this->input->post('sosmed_name');
        $sosmed_link = $this->input->post('sosmed_link');

        // Buat data array untuk disimpan ke database
        $data = array(
            'icon_social' => $icons,
            'name_social' => $sosmed_name,
            'link_social' => $sosmed_link
        );

        // Simpan data ke database
        $result = $this->pengaturanlp_model->save_data($data);

        // Tampilkan pesan sukses atau gagal
        if ($result) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('pengaturan-landing-page');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect('pengaturan-landing-page');
        }
    }

public function delete_data_sc($id)
{
    $result = $this->pengaturanlp_model->delete_data_social($id);
    if ($result) {
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('pengaturan-landing-page');
    } else {
        $this->session->set_flashdata('error', 'Data gagal dihapus');
        redirect('pengaturan-landing-page');
    }
}

public function update_form_sosmed()
{
    $id = $this->input->post('id');
    $icon = $this->input->post('iconselect');
    $name = $this->input->post('sosmed_name');
    $link = $this->input->post('sosmed_link');

    $data = array(
      'icon_social' => $icon,
      'name_social' => $name,
      'link_social' => $link
    );

    $where = array(
      'id_sc' => $id
    );

    $this->pengaturanlp_model->update_data_sosmed($id, $icon, $name, $link);
    redirect('pengaturan-landing-page');
}
}
