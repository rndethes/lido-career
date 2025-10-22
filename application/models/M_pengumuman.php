<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class M_pengumuman extends CI_Model {

    // public function getCurrentIdTimeline($id_candidate)
    // {   
    //     $history = $this->db->get_where('history_timeline', ['id_candidate' => $id_candidate])->row_array();

    //     if ($history) {
    //     $this->db->select('history_timeline.*, timeline.*');
	// 	$this->db->from('history_timeline');

	// 	$this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline');
    //     return $this->db->get()->row_array();
    //     }
        

    //     return null;
    // }
    public function getCurrentIdTimeline()
	{
		$this->db->select('*');
		$this->db->from('history_timeline');
		$this->db->where('id_timeline');

		return $this->db->get()->row_array();
	}

}