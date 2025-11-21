<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturanlp_model extends CI_Model
{
    private $table_homepage = 'setting_homepage';
    private $table_about = 'setting_about';
    private $table_office   = 'setting_office';
    private $table_news = 'setting_news';
    private $table_unit     = 'setting_unit_business';
    private $table_career = 'setting_career';

    // --- HERO SECTION ---
    public function get_data()
    {
        return $this->db->get_where($this->table_homepage, ['id_hp' => 1])->row_array();
    }

    public function update_data($data)
    {
        $this->db->where('id_hp', 1);
        return $this->db->update($this->table_homepage, $data);
    }

    // --- ABOUT SECTION ---
    public function get_about()
    {
        return $this->db->get_where($this->table_about, ['id' => 1])->row_array();
    }

    public function update_about($data)
    {
        $this->db->where('id', 1);
        return $this->db->update($this->table_about, $data);
    }

    public function get_intro_visimisi()
    {
        return $this->db->get('setting_visimisi_intro')->row_array();
    }

   
    public function get_visimisi()
    {
        return $this->db->select('visi,misi')->get('setting_landingpage')->row_array();
    }

  
    public function update_visimisi($data)
    {
        $this->db->where('id', 1); 
        return $this->db->update('setting_landingpage', $data);
    }

    public function get_all_offices()
    {
        return $this->db->order_by('id', 'ASC')->get('setting_office')->result_array();
    }


    public function get_office($id)
    {
        return $this->db->get_where($this->table_office, ['id' => $id])->row_array();
    }


    public function insert_office($data)
    {
        return $this->db->insert($this->table_office, $data);
    }

    public function update_office($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table_office, $data);
    }

   
    public function delete_office($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table_office);
    }

    public function get_quote($id = 1)
{
    return $this->db->get_where('setting_quotes', ['id' => $id])->row_array();
}


public function save_quote($data, $id = null)
{
    if($id) {
        $this->db->where('id', $id);
        return $this->db->update('setting_quotes', $data);
    } else {
        return $this->db->insert('setting_quotes', $data);
    }
}

public function get_all_news() {
    $news = $this->db->get('setting_news')->result_array();

    // Tambahkan media_count
    foreach ($news as &$n) {
        $mediaArray = json_decode($n['media'] ?? "[]", true);
        $n['media_count'] = count($mediaArray);
    }

    return $news;
}


public function get_news($id) {
    return $this->db->get_where('setting_news', ['id' => $id])->row_array();
}

public function insert_news($data) {
    $this->db->insert('setting_news', $data);
}

public function update_news($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('setting_news', $data);
}

public function delete_news($id) {
    $this->db->where('id', $id);
    $this->db->delete('setting_news');
}

    public function get_all_units()
    {
        return $this->db->order_by('id', 'ASC')->get($this->table_unit)->result_array();
    }

    public function get_unit($id)
    {
        return $this->db->get_where($this->table_unit, ['id' => $id])->row_array();
    }

    public function insert_unit($data)
    {
        return $this->db->insert($this->table_unit, $data);
    }

    public function update_unit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table_unit, $data);
    }

    public function delete_unit($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table_unit);
    }

         public function get_culture()
    {
        return $this->db->get_where('setting_culture', ['id' => 1])->row_array();
    }

    public function get_culture_details()
    {
        return $this->db->get('setting_culture_detail')->result_array();
    }

    public function update_culture_main($data)
    {
        $this->db->where('id', 1);
        return $this->db->update('setting_culture', $data);
    }

    public function insert_culture_detail($data)
    {
        return $this->db->insert('setting_culture_detail', $data);
    }

    public function update_culture_detail($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('setting_culture_detail', $data);
    }

    public function delete_culture_detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('setting_culture_detail');
    }


    public function add_social($data)
    {
        return $this->db->insert('setting_social', $data);
    }

    public function get_social($id)
    {
        return $this->db->get_where('setting_social', ['id_sc' => $id])->row_array();
    }


    public function edit_social($id, $data)
    {
        $this->db->where('id_sc', $id);
        return $this->db->update('setting_social', $data);
    }


    public function delete_social($id)
    {
        return $this->db->delete('setting_social', ['id_sc' => $id]);
    }

    public function get_all_social()
    {
        return $this->db->get('setting_social')->result_array();
    }

     public function get_footer_setting()
    {
        return $this->db->get_where('setting_landingpage', ['id' => 1])->row_array();
    }

    // update alamat footer
    public function update_footer_setting($address)
    {
        $this->db->where('id', 1);
        return $this->db->update('setting_landingpage', ['address_footer' => $address]);
    }

    public function update_map_link($link_map)
{
    // Update baris utama dengan id = 1
    $this->db->where('id', 1);
    return $this->db->update('setting_landingpage', ['link_map' => $link_map]);
}

public function get_map_link()
{
    $query = $this->db->get_where('setting_landingpage', ['id' => 1]);
    return $query->row_array();
}

// --- Career Section ---
public function get_career()
{
    return $this->db->get_where('setting_career', ['id' => 1])->row_array();
}

public function update_career($data)
{
    $this->db->where('id', 1);
    return $this->db->update('setting_career', $data);
}


public function update_image_unit($data)
{
    $this->db->where('id', 1);
    return $this->db->update('setting_landingpage', $data);
}

public function get_landingpage()
{
    return $this->db->get_where('setting_landingpage', ['id' => 1])->row_array();
}


public function get_all_faq()
{
    return $this->db->order_by('id', 'DESC')->get('setting_faq')->result_array();
}


public function get_faq($id)
{
    return $this->db->get_where('setting_faq', ['id' => $id])->row_array();
}


public function insert_faq($data)
{
    return $this->db->insert('setting_faq', $data);
}


public function update_faq($id, $data)
{
    $this->db->where('id', $id);
    return $this->db->update('setting_faq', $data);
}

public function delete_faq($id)
{
    return $this->db->delete('setting_faq', ['id' => $id]);
}

public function get_company()
{
    return $this->db->get('setting_landingpage')->row_array();
}

public function update_company($data)
{
    $this->db->where('id', 1); // asumsi 1 baris
    return $this->db->update('setting_landingpage', $data);
}

public function get_settings()
{
    // Ambil data settings (asumsi 1 row)
    return $this->db->get('settings')->row_array();
}

public function update_settings($data)
{
    $this->db->where('id', 1); // asumsi 1 row
    return $this->db->update('settings', $data);
}

}