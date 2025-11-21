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
        $data['socials']       = $this->Pengaturanlp_model->get_all_social();
        $data['footer']        = $this->Pengaturanlp_model->get_footer_setting();
        $data['map']            = $this->Pengaturanlp_model->get_map_link();
        $data['content_career']            = $this->Pengaturanlp_model->get_career();
        $data['landingpage']            = $this->Pengaturanlp_model->get_landingpage();
        $data['content_hero_landing'] = $this->Pengaturanlp_model->get_landingpage();
        $data['faq'] = $this->Pengaturanlp_model->get_all_faq();
        $data['company'] = $this->Pengaturanlp_model->get_company();
        $data['settings']                = $this->Pengaturanlp_model->get_settings();

        //  var_dump($data['quote']); die();

        
        $this->load->view('templates/header', $data);
        $this->load->view('pengaturan-landing-page/index', $data);
        $this->load->view('templates/footer', $data);
    }

 public function update_hero() 
{
    /* -------------------------
       AMBIL INPUT
    --------------------------*/
    // HERO
    $title    = $this->input->post('tittle_homepage');
    $subtitle = $this->input->post('subtitle_homepage');
    $image    = $_FILES['image_homepage']['name'];

    // LANDINGPAGE
    $company_name = $this->input->post('company_name');
    $company_logo = $_FILES['company_logo']['name'];

    // SETTINGS
    $settings_name = $this->input->post('settings_name');
    $settings_logo = $_FILES['settings_logo']['name'];


    /* -------------------------
       1. UPDATE HERO
    --------------------------*/
    $data_homepage = [
        'tittle_homepage'  => $title,
        'subtitle_homepage'=> $subtitle
    ];

    if (!empty($image)) {

        $config1 = [
            'upload_path'   => './assets/img-landing/',
            'allowed_types' => 'jpg|jpeg|png|webp|svg',
            'file_name'     => time().'_hero_'.$image
        ];

        $this->load->library('upload', $config1, 'uploadHero');

        if ($this->uploadHero->do_upload('image_homepage')) {

            $data_homepage['image_homepage'] = $this->uploadHero->data('file_name');

        } else {
            echo "<script>alert('Upload gambar HERO gagal!'); window.history.back();</script>";
            return;
        }
    }

    $update_homepage = $this->Pengaturanlp_model->update_data($data_homepage);



    /* -------------------------
       2. UPDATE LANDINGPAGE
    --------------------------*/
    $data_company = [
        'company_name' => $company_name
    ];

    if (!empty($company_logo)) {

        $config2 = [
            'upload_path'   => './assets/img/img-landing/',
            'allowed_types' => 'jpg|jpeg|png|webp|svg',
            'file_name'     => time().'_landing_'.$company_logo
        ];

        $this->load->library('upload', $config2, 'uploadLanding');

        if ($this->uploadLanding->do_upload('company_logo')) {

            $data_company['company_logo'] = $this->uploadLanding->data('file_name');

        } else {
            echo "<script>alert('Upload LOGO LANDINGPAGE gagal!'); window.history.back();</script>";
            return;
        }
    }

    $update_company = $this->Pengaturanlp_model->update_company($data_company);



  /* -------------------------
   3. UPDATE SETTINGS
--------------------------*/

$settings_name = $this->input->post('settings_name');
$settings_logo = $_FILES['settings_logo']['name']; // AMAN, karena name di form settings_logo

$data_settings = [
    'company_name' => $settings_name
];

if (!empty($settings_logo)) {

    $config3 = [
        'upload_path'   => './assets/img/img-landing/',
        'allowed_types' => 'jpg|jpeg|png|webp|svg',
        'file_name'     => time().'_logo_'.$settings_logo
    ];

    // Load upload library khusus untuk settings
    $this->load->library('upload', $config3, 'uploadSettings');

    // do_upload pakai NAME INPUT = settings_logo
    if ($this->uploadSettings->do_upload('settings_logo')) {

        $uploaded = $this->uploadSettings->data();

        // SIMPAN KE KOLOM YANG BENAR = company_logo
        $data_settings['company_logo'] = $uploaded['file_name'];

    } else {
        echo "<script>alert('Upload Logo gagal: ".$this->uploadSettings->display_errors()."'); window.history.back();</script>";
        return;
    }
}

$update_settings = $this->Pengaturanlp_model->update_settings($data_settings);


    /* -------------------------
       RESPONSE
    --------------------------*/
    if ($update_homepage && $update_company && $update_settings) {

        echo "<script>
            alert('Beranda, Landingpage & Settings berhasil diperbarui!');
            window.location.href='".base_url('PengaturanLandingPage')."';
        </script>";

    } else {

        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";

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
    $intro_type = $this->input->post('intro_type'); // youtube, video, image

    // Data default untuk tabel setting_visimisi_intro
    $intro_data = [
        'intro_title'       => $this->input->post('intro_title'),
        'intro_description' => $this->input->post('intro_description'),
        'intro_youtube_url' => null,
        'intro_video_file'  => null,
        'intro_image_file'  => null
    ];

    // Folder upload
    $upload_path = FCPATH . 'uploads/intro/';
    if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);

    // Tangani konten sesuai tipe
    switch($intro_type){
        case 'youtube':
            $intro_data['intro_youtube_url'] = $this->input->post('intro_youtube_url');
            break;
        case 'video':
            if(isset($_FILES['intro_video_file']) && $_FILES['intro_video_file']['error']==0){
                $video_name = time().'_'.$_FILES['intro_video_file']['name'];
                move_uploaded_file($_FILES['intro_video_file']['tmp_name'], $upload_path.$video_name);
                $intro_data['intro_video_file'] = 'uploads/intro/'.$video_name;
            }
            break;
        case 'image':
            if(isset($_FILES['intro_image_file']) && $_FILES['intro_image_file']['error']==0){
                $image_name = time().'_'.$_FILES['intro_image_file']['name'];
                move_uploaded_file($_FILES['intro_image_file']['tmp_name'], $upload_path.$image_name);
                $intro_data['intro_image_file'] = 'uploads/intro/'.$image_name;
            }
            break;
    }

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
        echo "<script>alert('Visi, Misi & Intro berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "#visi';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
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


    public function save_social()
    {
        $id = $this->input->post('id_sc'); 
        $data = [
            'name_social' => $this->input->post('name_social'),
            'icon_social' => $this->input->post('icon_social'),
            'link_social' => $this->input->post('link_social')
        ];

        if ($id) {
           
            $this->db->update('setting_social', $data, ['id_sc' => $id]);
            $this->session->set_flashdata('success', 'Sosial media berhasil diperbarui.');
        } else {
           
            $this->db->insert('setting_social', $data);
            $this->session->set_flashdata('success', 'Sosial media berhasil ditambahkan.');
        }

        redirect('PengaturanLandingPage#footer');
    }


    public function delete_social($id)
    {
        $this->db->delete('setting_social', ['id_sc' => $id]);
        $this->session->set_flashdata('success', 'Sosial media berhasil dihapus.');
        redirect('PengaturanLandingPage');
    }

    public function save_footer_setting()
{
    $address = $this->input->post('address_footer');

   
    $this->db->where('id', 1);
    $update = $this->db->update('setting_landingpage', ['address_footer' => $address]);

    if ($update) {
        $this->session->set_flashdata('success', 'Alamat footer berhasil disimpan.');
    } else {
        $this->session->set_flashdata('error', 'Gagal menyimpan alamat footer.');
    }

    redirect('PengaturanLandingPage#footer'); 
}

public function save_map_link()
{
    $link_map = $this->input->post('link_map', true);

    if (!empty($link_map)) {
        $this->Pengaturanlp_model->update_map_link($link_map);
        $this->session->set_flashdata('success', 'Link lokasi kantor berhasil diperbarui!');
    } else {
        $this->session->set_flashdata('error', 'Link tidak boleh kosong!');
    }

    redirect('PengaturanLandingPage#footer');
}


// public function get_career()
// {

//     $data['content_career'] = $this->Pengaturanlp_model->get_career();

//     $this->load->view('templates/header', $data);
//     $this->load->view('pengaturan-landing-page/career', $data);
//     $this->load->view('templates/footer', $data);
// }

public function update_career()
{
    $banner_title  = $this->input->post('banner_title');
    $title_page    = $this->input->post('title_page');
    $description   = $this->input->post('description_page');
    $image         = $_FILES['banner_image']['name'];

    $data = [
        'banner_title'     => $banner_title,
        'title_page'       => $title_page,
        'description_page' => $description
    ];

    if ($image) {
        $config['upload_path']   = './assets/img-landing/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_' . $image;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('banner_image')) {
            $data['banner_image'] = $this->upload->data('file_name');
        } else {
            echo "<script>alert('Upload gambar gagal!'); window.history.back();</script>";
            return;
        }
    }

    $update = $this->Pengaturanlp_model->update_career($data);

    if ($update) {
        echo "<script>alert('Career berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage#career') . "';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui Career!'); window.history.back();</script>";
    }
}

public function update_image_unit()
{
    $image = $_FILES['image_unit']['name'];

    if (!$image) {
        echo "<script>alert('Pilih gambar terlebih dahulu!'); window.history.back();</script>";
        return;
    }

    $config['upload_path']   = './assets/img/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['file_name']     = time() . '_' . $image;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image_unit')) {
        $data['image_unit'] = $this->upload->data('file_name');

        $update = $this->Pengaturanlp_model->update_image_unit($data);

        if ($update) {
            echo "<script>alert('Gambar Unit Bisnis berhasil diperbarui!'); window.location.href='" . base_url('PengaturanLandingPage') . "';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui gambar!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Upload gambar gagal!'); window.history.back();</script>";
    }
}

public function faq()
{
     $this->load->model('Pengaturanlp_model');
    $data['faq'] = $this->Pengaturanlp_model->get_all_faq();

    redirect('PengaturanLandingPage#faq');
}

// Simpan atau update FAQ
public function save_faq()
{
    $id = $this->input->post('id');

    $data = [
        'question' => $this->input->post('question'),
        'answer'   => $this->input->post('answer')
    ];

    if ($id) {
        // Update FAQ
        $this->db->where('id', $id);
        $update = $this->db->update('setting_faq', $data);

        if ($update) {
            echo "<script>alert('FAQ berhasil diperbarui!'); 
            window.location.href='" . base_url('PengaturanLandingPage#faq') . "';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui FAQ!'); window.history.back();</script>";
        }
    } else {
       
        $insert = $this->db->insert('setting_faq', $data);

        if ($insert) {
            echo "<script>alert('FAQ berhasil ditambahkan!'); 
            window.location.href='" . base_url('PengaturanLandingPage#faq') . "';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan FAQ!'); window.history.back();</script>";
        }
    }
}


public function delete_faq($id)
{
    $this->db->where('id', $id);
    $delete = $this->db->delete('setting_faq');

    if ($delete) {
        echo "<script>alert('FAQ berhasil dihapus!'); 
        window.location.href='" . base_url('PengaturanLandingPage#faq') . "';</script>";
    } else {
        echo "<script>alert('Gagal menghapus FAQ!'); window.history.back();</script>";
    }
}



}