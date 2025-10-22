<?php
class Loker extends CI_model{


public function getAllData()
	{
		//Select * FROM bio
		return $this->db->get('division')->result_array();

	}

    public function inputAll($data)
	{
		$this->db->insert('division', $data);

}

public function getAllDataById($id)
{
	//Select * FROM bio WHERE id = blabalaba
	return $this->db->get_where('division', ['id_division'=> $id])->row_array();

}
public function hapusDataDivisi($id)
	{
		$this->db->delete('division', ['id_division' => $id]);

	}
}
?>