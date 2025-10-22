<?php 
class Link extends CI_Model {

	public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('link_timeline')->result_array();

	}
	public function getIdDivision($id)
    {
		$this->db->select('job_vacancy.*, division.name_division');
		if ($id != null) {
			$this->db->where('division.id_division', $id);
		}
		$this->db->from('division');
		$this->db->join('job_vacancy', 'job_vacancy.id_division = division.id_division');

		return $this->db->get()->result_array();

	// 	public function getDetailKandidat($id)
    // {
    //     $this->db->select('candidate.*, candidate_experience.name_company');
    //     $this->db->where('candidate.id_candidate', $id);
    //     $this->db->from($this->table);
    //     $this->db->join('candidate_study', 'candidate_study.id_candidate = candidate.id_candidate');
    //     $this->db->join('candidate_experience', 'candidate_experience.id_candidate = candidate.id_candidate');

    //     return $this->db->get()->result_array();
    // }
	}
    public function inputAll($data)
	{
		$this->db->insert('link_timeline', $data);

    }

public function hapusDataLink($id)
	{
		$this->db->delete('link_timeline', ['id_link' => $id]);

	}

    public function getAllDataById($id)
    {
        //Select * FROM bio WHERE id = blabalaba
        return $this->db->get_where('link_timeline', ['id_link'=> $id])->row_array();
    
    }
}
?>