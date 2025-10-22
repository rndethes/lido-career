<?php
class M_jobv extends CI_Model
{

	public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('division')->result_array();
	}

	public function getIdDivision($id)
	{
		$this->db->select('division.*, job_vacancy.name_job');
		if ($id != null) {
			$this->db->where('job_vacancy.id_division', $id);
		}
		$this->db->from('job_vacancy');
		$this->db->join('division', 'division.id_division = job_vacancy.id_division');

		return $this->db->get()->result_array();
	}

	public function getDataJobVacancy($iddiv)
	{
		$this->db->select('*');
		$this->db->from('job_vacancy');
		$this->db->where('id_division', $iddiv);

		return $this->db->get()->result_array();
	}
	public function getStatus()
	{
		$this->db->select('*');
		$this->db->from('job_vacancy');
		$this->db->where('id');

		return $this->db->get()->row_array();
	}

	public function getJobById($id)
	{
		return $this->db->get_where('job_vacancy', ['id' => $id])->row_array();
	}
	public function getBatchById($id)
	{
		$this->db->select('*');
		$this->db->from('batch_job');
		$this->db->join('batch_timeline', 'batch_job.id_batch = batch_timeline.id_batch');
		$this->db->where('id_job', $id);

		return $this->db->get()->result_array();
	}
	public function getAllBatch($id_batch)
	{
		$this->db->select('*');
		$this->db->from('timeline');
		$this->db->where('id_batch', $id_batch);
		$this->db->limit(1);

		return $this->db->get()->result_array();
	}
	public function getAllBatchNL($id_batch)
	{
		$this->db->select('*');
		$this->db->from('timeline');
		$this->db->where('id_batch', $id_batch);
		
		return $this->db->get()->result_array();
	}

	public function checkDatadiri($id)
    {
        $where = "(LENGTH(name_candidate) = 0 OR LENGTH(birthdate_candidate) = 0 OR LENGTH(jk_candidate) = 0 OR LENGTH(photo_candidate) = 0 OR LENGTH(email_candidate) = 0)";
        $this->db->select('name_candidate, birthdate_candidate, jk_candidate, photo_candidate, email_candidate');
        $this->db->from('candidate');
        $this->db->where('id', $id);
        $this->db->where($where);

        $result = $this->db->get()->row_array();

        // print_r($this->db->last_query());

        return $result;
    }

	public function checkPendidikan($id)
	{
		$where = "id_candidate='$id' OR study_level is NULL OR name_school is NULL OR year_first is NULL";
		$this->db->select('*');
		$this->db->from('candidate_study');
		$this->db->where($where);

		return $this->db->get()->row_array();
		//return $this->db->get_where('candidate_study', $data)->row_array();
	}

	public function getIdCandidate()
	{
		
		$this->db->select('history_apply.*, candidate.*, job_vacancy.*');
		$this->db->from('history_apply');

		$this->db->join('candidate', 'candidate.id = history_apply.id_candidate_history', 'left');
		$this->db->join('job_vacancy', ' job_vacancy.id = history_apply.id_job_history', 'left');

		return $this->db->get()->row_array();
	}

	public function getTimeline()
	{
		$this->db->select('candidate.*, timeline.*');
		$this->db->from('candidate');

		$this->db->join('timeline', ' timeline.id_batch = candidate.id_batch');
		// $array = array('name' => $name, 'title' => $title, 'status' => $status);
		
		return $this->db->get()->result_array();
	}
	
	public function checkHistory($id_candidate)
	{
		return $this->db->get_where('history_apply', ['id' => $id_candidate],)->result_array();
	}

	public function getHistoryApply($id_candidate)
	{
		$this->db->select('*');
		$this->db->from('history_apply');
		$this->db->where('id_candidate_history',$id_candidate);
		$this->db->like('state',1);
		// jika reject terhitung 3 apply
		// $this->db->like('state');

		return $this->db->get()->num_rows();
	}

	public function showApply($id_candidate)
	{
		$this->db->select('history_apply.*, candidate.*, job_vacancy.*, division.name_division');
		$this->db->from('history_apply');

		$this->db->join('candidate', 'candidate.id = history_apply.id_candidate_history');
		$this->db->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history');
		$this->db->join('division', 'division.id_division = job_vacancy.id_division');
		$this->db->where('history_apply.id_candidate_history', $id_candidate);
		$this->db->order_by('history_apply.state', 'ASC');
		$this->db->order_by('history_apply.urutan', 'ASC');
		$this->db->limit(3);
		// $this->db->where('history_apply.state');


		return $this->db->get()->result_array();

	}


	public function showPerTimeline($id_candidate)
	{
		$this->db->select('history_apply.*, batch_timeline.*,timeline.*,history_timeline.*');
		$this->db->from('history_apply');
		$this->db->join('batch_timeline', 'batch_timeline.id_batch = history_apply.id_batch');
		$this->db->join('timeline', 'timeline.id_batch = history_apply.id_batch');
		$this->db->join('history_timeline', 'timeline.id_timeline = history_timeline.id_timeline');
		$this->db->where('history_timeline.id_candidate', $id_candidate);


		return $this->db->get()->result_array();
	}

	public function getCandidateBatch($id, $id_candidate) {
		
        $this->db->select('batch_job.*,history_apply.*');
        $this->db->from('batch_job');
        $this->db->join('history_apply', 'history_apply.id_batch = batch_job.id_batch and history_apply.id_job_history = batch_job.id_job');
        $this->db->where('batch_job.id_job', $id);
        $this->db->where('history_apply.id_candidate_history', $id_candidate);

		return $this->db->get()->result_array();
}

	public function getTimelineByIdBatch($idbatch) {
		$this->db->select('*');
		$this->db->from('timeline');
		$this->db->where('id_batch', $idbatch);

		return $this->db->get()->result_array();
	
	}
	
	public function getTimelineP($id_candidate)
	{
		$this->db->select('timeline.*, link_timeline.*, history_apply.*');
		$this->db->from('timeline');

		$this->db->join('link_timeline', ' link_timeline.id_link = timeline.id_link', 'left');
		$this->db->join('history_apply', ' history_apply.id_batch = timeline.id_batch', 'right');
		$this->db->where('history_apply.id_candidate_history', $id_candidate);
		// $array = array('name' => $name, 'title' => $title, 'status' => $status);
		
		return $this->db->get()->result_array();
	}

	public function getTimelinePI($id_candidate, $id_job)
	{

		$this->db->select('history_apply.*, timeline.*, link_timeline.*');
		$this->db->from('history_apply');
		$this->db->join('timeline', 'timeline.id_batch = history_apply.id_batch');
		$this->db->join('link_timeline', 'link_timeline.id_link = timeline.id_link');
		$this->db->where(['history_apply.id_candidate_history' => $id_candidate, 'history_apply.id_job_history' => $id_job]);
		$this->db->group_by('timeline.kode_timeline');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getTimelinebyIdC($id_candidate, $id_job)
	{
		$this->db->select('*');
		$this->db->from('history_timeline');	
		$this->db->where(['id_candidate' => $id_candidate, 'id_job' => $id_job, 'status' => 1]);

		
		return $this->db->get()->result_array();
	}

	public function getNameJob($id_candidate)
	{
		$this->db->select('history_apply.*, job_vacancy.*');
		$this->db->from('history_apply');

		$this->db->join('job_vacancy', ' job_vacancy.id = history_apply.id_job_history');
		$this->db->where(['history_apply.id_candidate_history' => $id_candidate, 'history_apply.state' => 1]);
		return $this->db->get()->result_array();
	} 		

	public function getStatusHA($id_candidate)
	{
		$this->db->select('*');
		$this->db->from('history_apply');
		$this->db->where('id_candidate_history', $id_candidate);

		return $this->db->get()->row_array();
	}

	public function get_all_urutan($id_candidate)
		{
			$this->db->select('urutan');
			$this->db->from('history_apply');
			$this->db->where('id_candidate_history', $id_candidate);
			$query = $this->db->get();
			$result = $query->result_array();
			$urutan = array();
			foreach($result as $res) {
				$urutan[] = $res['urutan'];
			}
			return $urutan;
		}

	public function get_batch_timeline($id_candidate) 
		{
			$this->db->select("*");
			$this->db->from("history_apply");
			$this->db->join("batch_timeline", "batch_timeline.id_batch = history_apply.id_batch");
			$this->db->where("history_apply.id_candidate_history", $id_candidate);
			$this->db->where("batch_timeline.start_date <=", date("Y-m-d H:i:s"));
			$this->db->where("batch_timeline.due_date >=", date("Y-m-d H:i:s"));
			$query = $this->db->get();
			$result = $query->result();
			return $result ;
			
			
		}	
		public function tampilBatch() {
			$this->db->select("*");
			$this->db->from("batch_timeline");
			$this->db->where("NOW() >= start_date AND NOW() <= due_date");
			$query = $this->db->get();
			// print_r($query);
			// exit();
			return $query->result_array();
		}

		public function getTimelineP2($id_candidate, $id_job) {
		$this->db->select('timeline.*, link_timeline.nama_link, link_timeline.address_link, history_timeline.status, history_apply.state');
		$this->db->from('history_timeline');
		$this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline', 'right');
		$this->db->join('history_apply', 'history_apply.id_batch = timeline.id_batch');
		$this->db->join('link_timeline', 'link_timeline.id_link = timeline.id_link', 'left');
		$this->db->where(['history_apply.id_candidate_history' => $id_candidate, 'history_apply.id_job_history' => $id_job]);
		$this->db->group_by('timeline.kode_timeline');
		return $this->db->get()->result_array();
		}
		
}
