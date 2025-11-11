<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturanlp_model extends CI_Model
{
    private $table_homepage = 'setting_homepage';
    private $table_about = 'setting_about';
    private $table_office   = 'setting_office';
    private $table_news = 'setting_news';

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
}