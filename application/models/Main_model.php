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
    public function getSettingSosmed()
    {
        // $query = $this->db->order_by('id', 'ASC')->get_compiled_select('setting_about', FALSE);

        $this->db->select('*');
        $query = $this->db->get_where('setting_social')->result_array();

        // $this->db->get('setting_about')->row_array();


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
}
