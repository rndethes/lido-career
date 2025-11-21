<?php 
class Jenlok extends CI_Model {

    // Ambil semua data job
    public function getAllData()
    {
        return $this->db->get('job_vacancy')->result_array();
    }

    // Ambil job berdasarkan division
    public function getIdDivision($id)
    {
        $this->db->select('job_vacancy.*, division.name_division');

        if (!empty($id)) {
            $this->db->where('division.id_division', $id);
        }

        $this->db->from('division');
        $this->db->join('job_vacancy', 'job_vacancy.id_division = division.id_division');

        return $this->db->get()->result_array();
    }

    // Input job baru
    public function inputAll($data)
    {
        // $data = [
        //   'id_division' => ..., 'name_job' => ..., 'education_job' => ...,
        //   'grade_value' => ..., 'requirement_job' => ..., 'description_job' => ...,
        //   'city_job' => json_encode([...]), 'is_active' => ...
        // ]
        return $this->db->insert('job_vacancy', $data);
    }

    // Hapus job berdasarkan ID
    public function hapusDataJob($id)
    {
        return $this->db->delete('job_vacancy', ['id' => $id]);
    }

    // Ambil 1 data berdasarkan ID
    public function getAllDataById($id)
    {
        return $this->db->get_where('job_vacancy', ['id' => $id])->row_array();
    }

    // Ambil id_job terbesar
    public function getLatestIdJob()
    {
        $this->db->select_max('id_job');
        $query = $this->db->get('job_vacancy');
        return $query->row()->id_job;
    }

    // ==========================
    // Fungsi baru untuk cek duplikat nama job
    // ==========================
    public function isJobExist($nama, $divisi)
    {
        $this->db->where('LOWER(name_job)', strtolower($nama));
        $this->db->where('id_division', $divisi);
        $query = $this->db->get('job_vacancy');
        return $query->num_rows() > 0;
    }
}
?>
