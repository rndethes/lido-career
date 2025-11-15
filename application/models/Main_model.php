<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function count_candidate()
    {
        $query = $this->db->get('candidate')->num_rows();
        return $query;
    }
    public function count_job()
    {
        $query = $this->db->get('job_vacancy')->num_rows();
        return $query;
    }

    public function count_acc()
    {
        $query = $this->db->get('users')->num_rows();
        return $query;
    }

    public function count_admin()
    {
        $query = $this->db->get_where('users', ['role' => '1'])->num_rows();
        return $query;
    }


    public function getSettingHero()
    {
        // $query = $this->db->order_by('id', 'ASC')->get_compiled_select('setting_about', FALSE);

        $this->db->select('*');
        $query = $this->db->get_where('setting_homepage', ['id_hp' => '1'])->row_array();

        // $this->db->get('setting_about')->row_array();


        return $query;
    }
       public function getCompany()
    {
        return $this->db->get_where('settings', ['id' => 1])->row_array();
    }
    
   public function getSettingSosmed()
    {
        $this->db->select('*');
        $query = $this->db->get('setting_social')->result_array();
        return $query;
    }

    public function getSettingZero()
    {
        // $query = $this->db->order_by('id', 'ASC')->get_compiled_select('setting_about', FALSE);

        $this->db->select('*');
        $query = $this->db->get_where('setting_landingpage', ['id' => '1'])->row_array();

        // $this->db->get('setting_about')->row_array();


        return $query;
    }
    public function getSettingFirst()
    {
        // $query = $this->db->order_by('id', 'ASC')->get_compiled_select('setting_about', FALSE);

        $this->db->select('*');
        $query = $this->db->get_where('setting_about', ['id' => '1'])->row_array();

        // $this->db->get('setting_about')->row_array();


        return $query;
    }
    public function getSettingSecond()
    {
        // $query = $this->db->order_by('id', 'ASC')->get_compiled_select('setting_about', FALSE);

        $this->db->select('*');
        $query = $this->db->get_where('setting_about', ['id' => '2'])->row_array();

        // $this->db->get('setting_about')->row_array();


        return $query;
    }

    public function getVisiMisiIntro()
    {
        $this->db->select('*');
        $query = $this->db->get_where('setting_visimisi_intro', ['id' => 1])->row_array();
        return $query;
    }

    public function getAllDivisi()
    {
        $query = $this->db->get('division')->result_array();

        return $query;
    }
    public function getJob($id_division)
    {
        $query = $this->db->get_where('job_vacancy', ['id_division' => $id_division])->result_array();

        return $query;
    }
    public function getKandidateTerkini()
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->order_by('candidate.id', 'desc');
        $this->db->limit(5);

        return $this->db->get()->result_array();
    }

    public function cekDivisiKosong(){
        $this->db->select("division.*, count(job_vacancy.id) as total_job");
        $this->db->from("division");
        $this->db->join("job_vacancy", "division.id_division = job_vacancy.id_division", "left");
        $this->db->group_by("division.id_division");
        $this->db->having("total_job > 0");
        $query = $this->db->get();
        // var_dump($query->result_array());
        // exit();
        return $query->result_array();
        }
       
        public function getSettingOffice()
    {
    $this->db->select('*');
    $this->db->from('setting_office');
    $this->db->order_by('area', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
    }

        public function get_quote($id = 1) {
        return $this->db->get_where('setting_quotes', ['id' => $id])->row_array();
    }

    //   public function get_all_news() {
    //     $this->db->order_by('release_date', 'DESC');
    //     return $this->db->get('setting_news')->result_array();
    // }

    // Ambil berita berdasarkan ID
    public function get_news($id) {
        return $this->db->get_where('setting_news', ['id' => $id])->row_array();
    }

    public function getUnitBusiness()
    {
        return $this->db->order_by('id', 'ASC')->get('setting_unit_business')->result_array();
    }
    public function getBusinessDetail($unit_name)
    {
        return $this->db->get_where('setting_business_detail', ['unit_name' => $unit_name])->row_array();
    }
    
    public function getUnitBusinessById($id)
{
    return $this->db->get_where('setting_unit_business', ['id' => $id])->row_array();
}


       public function getCulture()
    {
        return $this->db->get('setting_culture')->row_array();
    }

    public function getCultureDetails()
    {
        return $this->db->get('setting_culture_detail')->result_array();
    }

    public function getSettingFooter()
{
    $query = $this->db->select('address_footer')
                      ->from('setting_landingpage')
                      ->order_by('id', 'DESC') // biar ambil baris terbaru
                      ->limit(1)
                      ->get();

    return $query->row_array(); // hasil array
}
public function count_all_news() {
    return $this->db->count_all('setting_news'); 
}

public function get_news_pagination($limit, $offset)
{
    return $this->db
        ->order_by('release_date', 'DESC')
        ->limit($limit, $offset)
        ->get('setting_news')
        ->result_array();
}

public function get_latest_news($limit = 3) {
    return $this->db
        ->order_by('release_date', 'DESC')
        ->limit($limit)
        ->get('setting_news')
        ->result_array();
}

}
