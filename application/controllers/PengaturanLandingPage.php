<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanLandingPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaturanlp_model');
        $this->load->helper(array('form', 'url'));
    }

    // Halaman index untuk Hero + About
    public function index()
    {
        $data['content_hero']  = $this->Pengaturanlp_model->get_data();
        $data['content_about'] = $this->Pengaturanlp_model->get_about();
        $data['intro']       = $this->Pengaturanlp_model->get_intro_visimisi();
        $data['landingpage'] = $this->Pengaturanlp_model->get_visimisi();
        $data['offices']       = $this->Pengaturanlp_model->get_all_offices();
        $data['quote'] = $this->Pengaturanlp_model->get_quote();
        $data['berita'] = $this->Pengaturanlp_model->get_all_news();
        $data['units'] = $this->Pengaturanlp_model->get_all_units();
        $data['culture'] = $this->Pengaturanlp_model->get_culture();
        $data['cultures'] = $this->Pengaturanlp_model->get_culture_details();


        //  var_dump($data['quote']); die();

        
        $this->load->view('templates/header', $data);
        $this->load->view('pengaturan-landing-page/index', $data);
        $this->load->view('templates/footer', $data);
    }

    // Update Hero
    public function update_hero()
    {
        $title    = $this->input->post('tittle_homepage');
        $subtitle = $this->input->post('subtitle_homepage');
        $image    = $_FILES['image_homepage']['name'];

        $data = [
            'tittle_homepage' => $title,
            'subtitle_homepage' => $subtitle
        ];

        if ($image) {
            $config['upload_path']   = './assets/img-landing/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_' . $image;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_homepage')) {
                $data['image_homepage'] = $this->upload->data('file_name');
            } else {
                echo "<script>alert('Upload gambar gagal!'); window.history.back();</script>";
                return;
            }
        }

        $update = $this->Pengaturanlp_model->update_data($data);

        if ($update) {
            echo "<script>alert('Beranda berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui Beranda!'); window.history.back();</script>";
        }
    }

    // Update About
    public function update_about()
    {
        $data = [
            'about_title'        => $this->input->post('about_title'),
            'about_subtitle'     => $this->input->post('about_subtitle'),
            'about_description'  => $this->input->post('about_description'),
            'about_description2' => $this->input->post('about_description2')
        ];

        // Upload gambar 1
        if (!empty($_FILES['about_image']['name'])) {
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_about1_' . $_FILES['about_image']['name'];
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('about_image')) {
                $data['about_image'] = $this->upload->data('file_name');
            }
        }

        // Upload gambar 2
        if (!empty($_FILES['about_image2']['name'])) {
            $config2['upload_path']   = './assets/img/';
            $config2['allowed_types'] = 'jpg|jpeg|png';
            $config2['file_name']     = time() . '_about2_' . $_FILES['about_image2']['name'];
            $this->upload->initialize($config2);

            if ($this->upload->do_upload('about_image2')) {
                $data['about_image2'] = $this->upload->data('file_name');
            }
        }

        $update = $this->Pengaturanlp_model->update_about($data);

        if ($update) {
            echo "<script>alert('Tentang berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#about';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui Tentang'); window.history.back();</script>";
        }
    }

  public function update_visimisi()
{
    // Data untuk tabel setting_visimisi_intro
    $intro_data = [
        'intro_title'       => $this->input->post('intro_title'),
        'intro_description' => $this->input->post('intro_description'),
        'intro_video_url'   => $this->input->post('intro_video_url'),
    ];

    // Update tabel setting_visimisi_intro
    $this->db->where('id', 1); // asumsi ID intro = 1
    $update_intro = $this->db->update('setting_visimisi_intro', $intro_data);

    // Data untuk tabel setting_landingpage
    $landing_data = [
        'visi' => $this->input->post('visi'),
        'misi' => $this->input->post('misi')
    ];

    // Update tabel setting_landingpage
    $this->db->where('id', 1); // asumsi ID landingpage = 1
    $update_landing = $this->db->update('setting_landingpage', $landing_data);

    if ($update_intro || $update_landing) {
        echo "<script>alert('Visi & Misi berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#visi';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui Visi & Misi!'); window.history.back();</script>";
    }
    }

    public function save_office()
{
    $id = $this->input->post('id');

    $data = [
        'area'        => $this->input->post('area'),
        'type'        => $this->input->post('type'),
        'branch_name' => $this->input->post('branch_name'),
        'address'     => $this->input->post('address'),
        'maps_url'    => $this->input->post('maps_url'),
        'phone_number'=> $this->input->post('phone_number'),
        'email'       => $this->input->post('email')
    ];

    // Upload image
    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_' . $_FILES['image']['name'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        }
    }

    if ($id) {
        $this->db->where('id', $id);
        $update = $this->db->update('setting_office', $data);
        if ($update) {
            echo "<script>alert('Data kantor berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui data kantor'); window.history.back();</script>";
        }
    } else {
        $insert = $this->db->insert('setting_office', $data);
        if ($insert) {
            echo "<script>alert('Data kantor berhasil disimpan!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data kantor'); window.history.back();</script>";
        }
    }
    }
    // Form Edit Office
public function edit_office($id)
{
    $data['office'] = $this->Pengaturanlp_model->get_office($id);

    if (!$data['office']) {
        echo "<script>alert('Data kantor tidak ditemukan'); window.history.back();</script>";
        return;
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pengaturan-landing-page/edit_office', $data);
    $this->load->view('templates/footer', $data);
}

public function update_office()
{
    $id = $this->input->post('id');
    $data = [
        'area'        => $this->input->post('area'),
        'type'        => $this->input->post('type'),
        'branch_name' => $this->input->post('branch_name'),
        'address'     => $this->input->post('address'),
        'maps_url'    => $this->input->post('maps_url'),
        'phone_number'=> $this->input->post('phone_number'),
        'email'       => $this->input->post('email')
    ];

    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_' . $_FILES['image']['name'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        }
    }

    $update = $this->Pengaturanlp_model->update_office($id, $data);

    if ($update) {
        echo "<script>alert('Data kantor berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data kantor'); window.history.back();</script>";
    }
}

    public function delete_office($id)
{
    $this->db->where('id', $id);
    $delete = $this->db->delete('setting_office');
    if ($delete) {
        echo "<script>alert('Data kantor berhasil dihapus!'); window.location.href='" . base_url('PengaturanLandingPage') . "#office';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data kantor'); window.history.back();</script>";
    }
}
public function save_quote()
{
    $id = $this->input->post('id');
    $data = [
        'title'   => $this->input->post('title'),
        'content' => $this->input->post('content')
    ];

    // Upload gambar
    if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './assets/img-landing/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time().'_quote_'.$_FILES['image']['name'];
        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $data['image'] = $this->upload->data('file_name');
        }
    }

    $save = $this->Pengaturanlp_model->save_quote($data, $id);

    if($save){
        echo "<script>alert('Quotes berhasil disimpan!'); window.location.href='".base_url('PengaturanLandingPage')."#quotes';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan Quotes!'); window.history.back();</script>";
    }
}
public function berita()
{
    // Memuat model (jika belum dimuat di __construct)
    $this->load->model('Pengaturanlp_model');

    // Ambil semua data berita
    $data['berita'] = $this->Pengaturanlp_model->get_all_news();

    // Tambahkan judul halaman (opsional)
    $data['title'] = 'Pengaturan Berita';
    

    // Redirect ke halaman index dengan hash #berita
    // Ini akan otomatis scroll ke bagian berita di halaman index
    redirect('PengaturanLandingPage#berita');
}

public function save_news()
{
    $this->load->model('Pengaturanlp_model');

    $id = $this->input->post('id');
    $data = [
        'category'     => $this->input->post('category'),
        'title'        => $this->input->post('title'),
        'subtitle'     => $this->input->post('subtitle'),
        'content'      => $this->input->post('content'),
        'release_date' => $this->input->post('release_date'),
        'updated_by'   => $this->session->userdata('nama')
    ];

    // ===== Upload COVER =====
    if (!empty($_FILES['cover_image']['name'])) {
        $config['upload_path']   = './assets/img-landing/blog/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        // $config['max_size']      = 2048;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('cover_image')) {
            $uploadData = $this->upload->data();
            $data['cover_image'] = $uploadData['file_name'];
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('PengaturanLandingPage/berita');
            return;
        }
    } else if ($id) {
        $old = $this->Pengaturanlp_model->get_news($id);
        $data['cover_image'] = $old['cover_image'] ?? null;
    }

    // ===== Upload MEDIA (bisa banyak) =====
    $mediaFiles = [];
    if (!empty($_FILES['media']['name'][0])) {
        $filesCount = count($_FILES['media']['name']);
        $this->load->library('upload');

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name']     = $_FILES['media']['name'][$i];
            $_FILES['file']['type']     = $_FILES['media']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['media']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['media']['error'][$i];
            $_FILES['file']['size']     = $_FILES['media']['size'][$i];

            $config['upload_path']   = './assets/img-landing/blog/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|mp4|webm|ogg';
            $config['max_size']      = 5120; // 5MB
            $config['file_name']     = time().'_'.$i.'_'.$_FILES['file']['name'];
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $mediaFiles[] = $uploadData['file_name'];
            }
        }
    } else if ($id) {
        $old = $this->Pengaturanlp_model->get_news($id);
        $mediaFiles = json_decode($old['media'] ?? "[]", true);
    }

    // ===== Hapus media lama jika ada yang di-remove =====
    $removed_media = json_decode($this->input->post('removed_media') ?? "[]", true);
    if(!empty($removed_media) && !empty($mediaFiles)) {
        $mediaFiles = array_diff($mediaFiles, $removed_media);

        foreach($removed_media as $file) {
            $file_path = FCPATH.'assets/img-landing/blog/'.$file;
            if(file_exists($file_path)) unlink($file_path);
        }
    }

    $data['media'] = json_encode($mediaFiles);

    // ===== Simpan ke database =====
    if ($id) {
        $this->Pengaturanlp_model->update_news($id, $data);
    } else {
        $this->Pengaturanlp_model->insert_news($data);
    }

    $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
    redirect('PengaturanLandingPage/berita');
}



public function delete_news($id)
{
    $this->load->model('Pengaturanlp_model');
    $this->Pengaturanlp_model->delete_news($id);
    $this->session->set_flashdata('success', 'Berita berhasil dihapus.');
    redirect('PengaturanLandingPage/berita');
}

// =================== UNIT BISNIS ===================

// List unit bisnis
public function unit_bisnis()
{
    $data['units'] = $this->db->get('setting_unit_business')->result_array();
    $data['title'] = 'Unit Bisnis';

    $this->load->view('templates/header', $data);
    $this->load->view('pengaturan-landing-page/unit_bisnis_index', $data);
    $this->load->view('templates/footer', $data);
}

// Form tambah unit bisnis
public function add_unit()
{
    $this->load->view('templates/header');
    $this->load->view('pengaturan-landing-page/unit_bisnis_create');
    $this->load->view('templates/footer');
}

// Simpan unit bisnis
public function save_unit()
{
    $id = $this->input->post('id'); // ambil id dari hidden input

    $data = [
        'title'       => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'description1' => $this->input->post('description1')
    ];

    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name']     = time().'_'.$_FILES['image']['name'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        }
    }

    if($id){ // update
        $this->db->where('id', $id)->update('setting_unit_business', $data);
        echo "<script>alert('Unit Bisnis berhasil diperbarui!'); window.location.href='".base_url('PengaturanLandingPage#unit')."';</script>";
    } else { // insert baru
        $this->db->insert('setting_unit_business', $data);
        echo "<script>alert('Unit Bisnis berhasil disimpan!'); window.location.href='".base_url('PengaturanLandingPage#unit')."';</script>";
    }
}

// Form edit unit bisnis
public function edit_unit($id)
{
    $data['unit'] = $this->db->get_where('setting_unit_business', ['id' => $id])->row_array();
    if (!$data['unit']) {
        echo "<script>alert('Unit Bisnis tidak ditemukan!'); window.history.back();</script>";
        return;
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pengaturan-landing-page/unit_bisnis_edit', $data);
    $this->load->view('templates/footer', $data);
}

// Update unit bisnis
public function update_unit()
{
    $id = $this->input->post('id');
    $data = [
        'title'        => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'description1' => $this->input->post('description1')
    ];

    if (!empty($_FILES['image']['name'])) { 
    $config['upload_path']   = './assets/img/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['file_name']     = time().'_'.$_FILES['image']['name'];
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        $data['image'] = $this->upload->data('file_name');
    } else {
        echo "<script>alert('Upload gambar gagal! ".$this->upload->display_errors()."'); window.history.back();</script>";
        return;
    }
}

    $this->db->where('id', $id)->update('setting_unit_business', $data);
    echo "<script>alert('Unit Bisnis berhasil diperbarui!'); window.location.href='".base_url('PengaturanLandingPage#unit')."';</script>";
}

// Hapus unit bisnis
public function delete_unit($id)
{
    $this->db->where('id', $id)->delete('setting_unit_business');
    echo "<script>alert('Unit Bisnis berhasil dihapus!'); window.location.href='".base_url('PengaturanLandingPage#unit_bisnis')."';</script>";
}

// =================== SECTION CULTURE ===================

// Tampilkan halaman Culture (section utama + detail)
public function culture()
{
    $data['culture'] = $this->Pengaturanlp_model->get_culture();
    $data['cultures'] = $this->Pengaturanlp_model->get_culture_details();

    $this->load->view('templates/header', $data);
    $this->load->view('pengaturan-landing-page/culture', $data);
    $this->load->view('templates/footer');
}


// =================== CRUD SETTING_CULTURE ===================

// Update data utama (section culture)
public function update_main()
{
    $id = $this->input->post('id');
    $title = $this->input->post('title');
    $about_culture = $this->input->post('about_culture');
    $image = $_FILES['image']['name'];

    $data_update = [
        'title' => $title,
        'about_culture' => $about_culture,
    ];

    // Upload gambar jika ada
    if (!empty($image)) {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name'] = time() . '_' . $image;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();
            $data_update['image'] = $upload_data['file_name'];

            // hapus gambar lama
            $old = $this->db->get_where('setting_culture', ['id' => $id])->row_array();
            if (!empty($old['image']) && file_exists('./assets/img/' . $old['image'])) {
                unlink('./assets/img/' . $old['image']);
            }
        }
    }

    $this->db->where('id', $id);
   
    $update = $this->db->update('setting_culture', $data_update, ['id' => $id]);

    if ($update) {
        echo "<script>
                alert('Section Culture berhasil diperbarui!');
                window.location.href='" . base_url('PengaturanLandingPage#culture') . "';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui Section Culture!');
                window.history.back();
              </script>";
    }
}


// =================== CRUD DETAIL CULTURE ===================

// Simpan data detail (tambah/edit)
public function save_culture_detail()
{
    $id = $this->input->post('id');
    $title = $this->input->post('title');
    $subtitle = $this->input->post('subtitle');
    $description = $this->input->post('description');
    $image = $_FILES['image']['name'];

    $data = [
        'title' => $title,
        'subtitle' => $subtitle,
        'description' => $description
    ];

    if (!empty($image)) {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name'] = time() . '_' . $image;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();
            $data['image'] = $upload_data['file_name'];
        }
    }

    if (!empty($id)) {
        // Update data lama
        $old = $this->db->get_where('setting_culture_detail', ['id' => $id])->row_array();
        if (!empty($data['image']) && !empty($old['image']) && file_exists('./assets/img/' . $old['image'])) {
            unlink('./assets/img/' . $old['image']);
        }

        $update = $this->db->update('setting_culture_detail', $data, ['id' => $id]);

        if ($update) {
            echo "<script>
                    alert('Detail Culture berhasil diperbarui!');
                    window.location.href='" . base_url('PengaturanLandingPage#culture') . "';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal memperbarui Detail Culture!');
                    window.history.back();
                  </script>";
        }
    } else {
        // Tambah baru
        $insert = $this->db->insert('setting_culture_detail', $data);

        if ($insert) {
            echo "<script>
                    alert('Detail Culture berhasil ditambahkan!');
                    window.location.href='" . base_url('PengaturanLandingPage#culture') . "';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal menambahkan Detail Culture!');
                    window.history.back();
                  </script>";
        }
    }
}

public function delete_culture_detail($id)
{
    $data = $this->db->get_where('setting_culture_detail', ['id' => $id])->row_array();

    if (!empty($data['image']) && file_exists('./assets/img/' . $data['image'])) {
        unlink('./assets/img/' . $data['image']);
    }

    $delete = $this->db->delete('setting_culture_detail', ['id' => $id]);

    if ($delete) {
        echo "<script>
                alert('Detail Culture berhasil dihapus!');
                window.location.href='" . base_url('PengaturanLandingPage#culture') . "';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus Detail Culture!');
                window.history.back();
              </script>";
    }
}


}