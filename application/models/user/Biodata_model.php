<?php


defined('BASEPATH') or exit('No direct script access allowed.');

class Biodata_model extends CI_Model
{
    /**
     * @var array[string]
     */
    public const ALLOWED_EXTENSIONS_FOR_FILE_PENDUKUNG = ['pdf', 'png', 'jpg', 'jpeg', 'docx', 'doc'];

    public function getBiodata($id, bool $full = false)
    {
        if (!$full) {
            return $this->db->get_where('candidate', ['id' => $id]);
        }

        $biodata = $this->db->get_where('candidate', ['id' => $id])->row_array();

        $birthdate = explode(',', $biodata['birthdate_candidate']);

        if ($birthdate && count($birthdate) > 1) {
            $biodata['tempat_lahir_'] = $birthdate[0];
            $biodata['tanggal_lahir_'] = $birthdate[1];
        } else {
            $biodata['tempat_lahir_'] = null;
            $biodata['tanggal_lahir_'] = null;
        }

        return $biodata;
    }

    public function getMyBiodata()
    {
        $email = $this->session->userdata('email');

        if (!$email) {
            return null;
        }

        $biodata = $this->db->get_where('candidate', ['email_candidate' => $email])->row_array();

        $birthdate = explode(',', $biodata['birthdate_candidate']);

        if ($birthdate && count($birthdate) > 1) {
            $biodata['tempat_lahir_'] = $birthdate[0];
            $biodata['tanggal_lahir_'] = $birthdate[1];
        } else {
            $biodata['tempat_lahir_'] = null;
            $biodata['tanggal_lahir_'] = null;
        }

        return $biodata;
    }

    public function updateOrCreateFilePendukung($file = 'default.pdf', $id_candidate = null)
    {
        if (!$id_candidate) {
            $idcan = getLoggedInUser('id');
        } else {
            $idcan = $id_candidate;
        }

        $check = $this->db->get_where('candidate_file', ['id_candidate' => $idcan])->num_rows() > 0;

        if (!$check) {
            $this->db->insert('candidate_file', [
                'id_candidate'   => $idcan,
                'file_pendukung' => $file
            ]);
        } else {
            $this->db->where('id_candidate', $idcan);
            $this->db->update('candidate_file', [
                'file_pendukung' => $file
            ]);
        }

        return $this->db->affected_rows() > 0;
    }

    public function updateOrCreatePengalaman($pengalaman, $id_candidate = null)
    {
        if (!is_array($pengalaman)) {
            return false;
        }

        if (!$id_candidate) {
            $id_candidate = getLoggedInUser('id');
        }


        foreach ($pengalaman as $row) {
            $data = [];

            $data['name_company']  = $row['name_company'];
            $data['type_company']  = $row['type_company'];
            $data['last_position'] = $row['last_position'];
            $data['employee_company'] = $row['employee_company'];
            $data['first_year'] = $row['first_year'];
            $data['description'] = $row['description'];

            if ($row['active']) {
                $data['last_year'] = null;
            } else {
                $data['last_year'] = $row['last_year'];
            }

            if ($row['is_update'] && $row['id_ce']) {
                $is_exists = $this->db->get_where('candidate_experience', ['id_ce' => $row['id_ce']])->num_rows() > 0;

                if ($is_exists) {
                    $this->db->update('candidate_experience', $data, ['id_ce' => $row['id_ce']]);
                } else {
                    $data['id_candidate'] = $id_candidate;

                    $this->db->insert('candidate_experience', $data);
                }
            } else {
                $data['id_candidate'] = $id_candidate;

                $data['date_created'] = date('Y-m-d H:i:s');

                $this->db->insert('candidate_experience', $data);
            }
        }

        return true;
    }
}
