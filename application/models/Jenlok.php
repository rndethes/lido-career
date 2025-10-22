<?php 
class Jenlok extends CI_Model {

	public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('job_vacancy')->result_array();

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
		$this->db->insert('job_vacancy', $data);

    }

public function hapusDataJob($id)
	{
		$this->db->delete('job_vacancy', ['id' => $id]);

	}

    public function getAllDataById($id)
    {
        //Select * FROM bio WHERE id = blabalaba
        return $this->db->get_where('job_vacancy', ['id'=> $id])->row_array();
    
    }
	
	public function getLatestIdJob(){
		$this->db->select_max('id_job');
		$query = $this->db->get('job_vacancy');
		return $query->row()->id_job;
	}
}
?>