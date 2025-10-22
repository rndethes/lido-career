<?php 
class Report extends CI_Model {

    public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('candidate')->result_array();

	}

    public function daterange($firstDate,$secondDate){
		if($firstDate && $secondDate){

		
		$this->db->select('*');
		$this->db->from('candidate');
        $this->db->where('date_created >=', $firstDate);
        $this->db->where('date_created <=', $secondDate); 
        $query= $this->db->get();
		return $query->result_array();}else{
			return $this->db->get('candidate')->result_array();
		}
        }
	
	// 	public function getdaterange()
    // {

    //     $mulai_tanggal  = @$_GET['tglstart'];
    //     $sampai_tanggal = @$_GET['tglend'];

    //     $sql            = "SELECT * FROM candidate WHERE date_created BETWEEN '" . $mulai_tanggal . "' AND '" . $sampai_tanggal . "'";
    //     $query          = $this->db->query($sql);
    //     $results        = $query->getResultArray();

    //     return $results;
    // }

}


?>