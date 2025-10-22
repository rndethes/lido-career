<?php 
class Acc extends CI_Model {

    public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('users')->result_array();

	}

    public function inputAll($data)
	{
		$this->db->insert('users', $data);

    }

	public function hapusDataAcc($id)
	{
		$this->db->delete('users', ['id_user' => $id]);

	}

	public function getAllDataById($id)
	{
	//Select * FROM bio WHERE id = blabalaba
	return $this->db->get_where('users', ['id_user'=> $id])->row_array();
	}
	
}


?>