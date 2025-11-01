<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat_model extends CI_Model
{
    private $table = 'candidate';

    public function getAllKandidat()
    {
        $kandidat = $this->db->order_by('id_candidate', 'ASC')->get($this->table)->result_array();
        $trandata = [];

        foreach ($kandidat as $row) {
            $tsp = explode(',', $row['birthdate_candidate']);
            if (count($tsp) > 1) {
                $row['tempat_lahir_candidate_'] = $tsp[0];
                $row['birthdate_candidate_'] = trim($tsp[1]);
            } else {
                $row['tempat_lahir_candidate_'] = null;
                $row['birthdate_candidate_'] = null;
            }

            // Is timeline done?
            $history_timeline = $this->db->get_where('history_timeline', ['id_candidate' => $row['id'], 'status' => 1])->num_rows();

            if ($history_timeline > 0) {
                $row['timeline_done'] = false;
            } else {
                $row['timeline_done'] = true;
            }

            // Is already apply job?
            $history_apply = $this->db->get_where('history_timeline', ['id_candidate' => $row['id']])->num_rows();

            if ($history_apply === 0) {
                $row['timeline_done'] = false;
            }

            $sidaneKetampaNangApa = $this->getKandidatNangDivisiApa($row['id']);

            if (empty($sidaneKetampaNangApa)) {
                $row['division_'] = '-';
            } else {
                $row['division_'] = $sidaneKetampaNangApa['name_division'] . ' - ' . $sidaneKetampaNangApa['name_job'];
            }

            $trandata []= $row;
        }

        return $trandata;
    }

public function getAllKandidatJoin($filters = [])
{
    $this->db->select('
        c.*,
        s.study_level,
        s.year_first,
        s.year_last
    ');
    $this->db->from('candidate c');
    $this->db->join('candidate_study s', 's.id_candidate = c.id', 'left');
    $this->db->order_by('c.id', 'ASC');

    // 🟡 Tambahkan filter dinamis
    if (!empty($filters['keyword']) && !empty($filters['filter_type'])) {
        $keyword = $filters['keyword'];
        switch ($filters['filter_type']) {
            case 'nama':
                $this->db->like('c.name_candidate', $keyword);
                break;
            case 'pendidikan':
                $this->db->like('s.study_level', $keyword);
                break;
            case 'alamat':
                $this->db->like('c.address_candidate', $keyword);
                break;
        }
    }

    $kandidat = $this->db->get()->result_array();

    $trandata = [];

    foreach ($kandidat as $row) {
        // === Tempat & tanggal lahir ===
        $tsp = explode(',', $row['birthdate_candidate']);
        if (count($tsp) > 1) {
            $row['tempat_lahir_candidate_'] = $tsp[0];
            $row['birthdate_candidate_'] = trim($tsp[1]);
        } else {
            $row['tempat_lahir_candidate_'] = null;
            $row['birthdate_candidate_'] = null;
        }

        // === Cek timeline ===
        $history_timeline = $this->db->get_where('history_timeline', [
            'id_candidate' => $row['id'],
            'status' => 1
        ])->num_rows();
        $row['timeline_done'] = $history_timeline <= 0;

        $history_apply = $this->db->get_where('history_timeline', [
            'id_candidate' => $row['id']
        ])->num_rows();
        if ($history_apply === 0) {
            $row['timeline_done'] = false;
        }

        // === Divisi ===
        $sidaneKetampaNangApa = $this->getKandidatNangDivisiApa($row['id']);
        $row['division_'] = empty($sidaneKetampaNangApa)
            ? '-'
            : $sidaneKetampaNangApa['name_division'] . ' - ' . $sidaneKetampaNangApa['name_job'];

        // === Pendidikan ===
        $row['study_level'] = !empty($row['study_level'])
            ? strtoupper($row['study_level'])
            : '-';

        // === Tahun pendidikan ===
        if (!empty($row['year_first']) && !empty($row['year_last'])) {
            $row['tahun_pendidikan'] = $row['year_first'] . ' - ' . $row['year_last'];
        } else {
            $row['tahun_pendidikan'] = '-';
        }

        // === Potong alamat (maks 30 karakter) ===
        $row['address_candidate'] = strlen($row['address_candidate']) > 30
            ? substr($row['address_candidate'], 0, 30) . '...'
            : $row['address_candidate'];

        $trandata[] = $row;
    }

    return $trandata;
}
    
    public function getBiodataById($id)
{
    $biodata = $this->db->get_where('candidate', ['id' => $id])->row_array();

    if ($biodata && isset($biodata['birthdate_candidate'])) {
        $raw = $biodata['birthdate_candidate'];

        // Coba pisahkan pakai koma, kalau gagal pakai spasi
        if (str_contains($raw, ',')) {
            $tsp = explode(',', $raw);
        } else {
            $tsp = preg_split('/\s+/', $raw, 2); // pisah jadi 2 bagian pertama
        }

        $biodata['tempat_lahir_candidate'] = trim($tsp[0] ?? '');
        $biodata['tanggal_lahir_candidate'] = trim($tsp[1] ?? '');
    }

    return $biodata;
}


  public function getBiodata()
{
    $id = getLoggedInUser('id');
    return $this->db->get_where('candidate', ['id' => $id])->row_array();
}
    public function applyCandidateStep($id_candidate, $id_job_vacancy, $history_timeline_id)
    {
        // Update state
        $kandidat = $this->db->where('id', $id_candidate)->update('candidate', [
            'state' => 2,
        ]);

        // Update state history apply
        $history_apply = $this->db->where([
            'id_candidate_history' => $id_candidate,
            'id_job_history'       => $id_job_vacancy,
            'state'                => 1 // in timeline (progress)
        ])->update('history_apply', [
            'state' => 2 // applied (done)
        ]);

        // Update state timeline
        $timeline_state = $this->db->where('id', $history_timeline_id)->update('history_timeline', [
            'status' => 2
        ]);

        $all_timelines = $this->db->where([
            'id_candidate' => $id_candidate,
            'status'       => 1
        ])->update('history_timeline', ['status' => 3]);

        $all_apply = $this->db->where([
            'id_candidate_history' => $id_candidate,
            'state'                => 1
        ])->update('history_apply', ['state' => 3]);

        return $kandidat;
    }

    /**
     * @param array $id_candidate
     * @param array $timeline
     * @return bool
     */
    public function applyCandidateStepBaksoControl($ids_candidate, $id_job_vacancy, $id_timeline)
    {
        // Update state
        $this->db->where_in('id', $ids_candidate)->update('candidate', [
            'state' => 2,
        ]);

        // Update state history apply
        $history_apply = $this->db->where_in(
            'id_candidate_history',
            $ids_candidate
        )->where([
            'id_job_history' => $id_job_vacancy,
            'state' => 1 // in timeline (progress)
        ])->update('history_apply', [
            'state' => 2 // applied (done)
        ]);

        // Update state timeline
        $timeline_state = $this->db->where_in(
            'id_candidate',
            $ids_candidate
        )->where([
            'id_timeline' => $id_timeline,
            'id_job'      => $id_job_vacancy
        ])->update('history_timeline', [
            'status' => 2
        ]);

        return $history_apply && $timeline_state;
    }

    public function rejectCandidateStep($id_candidate, $id_job_vacancy, $history_timeline_id, $kode_timeline)
    {
        $all_apply = $this->db->select('id_history, id_job_history, job_vacancy.grade_value')
                        ->from('history_apply')
                        ->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history')
                        ->where('history_apply.id_candidate_history', $id_candidate)
                        ->where('history_apply.state', 1)
                        ->where('history_apply.id_candidate_history !=', $id_job_vacancy)
                        ->get()->result_array();

        $rejeceted = $this->db->get_where('job_vacancy', ['id' => $id_job_vacancy])->row_array();

        // Grading
        $tmp = [];
        foreach ($all_apply as $row) {
            if ($row['grade_value'] > $rejeceted['grade_value']) {
                // Reject the candidate from the other job with grade_value less than the rejected job
                $tmp []= [
                    'id_candidate' => $id_candidate,
                    'id_job'       => $row['id_job_history'],
                    'status'       => 1,
                ];
            }
        }


        if (!empty($tmp)) {
            foreach ($tmp as $row) {
                $reject = $this->db->update('history_timeline', [
                    'status' => 3 // rejected
                ], $row);

                $reject = $this->db->update('history_apply', [
                    'state'  => 3 // rejeceted
                ], [
                    'id_job_history'       => $row['id_job'],
                    'id_candidate_history' => $row['id_candidate']
                ]);
            }
        }

        // Update state history apply
        $history_apply = $this->db->where([
            'id_candidate_history' => $id_candidate,
            'id_job_history'       => $id_job_vacancy,
        ])->update('history_apply', [
            'state' => 3 // rejected (done)
        ]);

        // Update state timeline
        $timeline_state = $this->db->where('id', $history_timeline_id)->update('history_timeline', [
            'status' => 3 // rejected done
        ]);

        // Update state candidate
        if (isFinalTimeline($kode_timeline)) {
            $update_state = $this->db->where('id', $id_candidate)->update('candidate', [
                'state' => 3
            ]);
        }

        return $history_apply && $timeline_state;
    }

    public function rejectCandidateStepBaksoControl($ids_candidate, $id_job_vacancy, $id_timeline)
    {
        // Update state
        $this->db->where_in('id', $ids_candidate)->update('candidate', [
            'state' => 0
        ]);

        // Update state history apply
        $history_apply = $this->db->where('id_job_history', $id_job_vacancy)->where_in(
            'id_candidate_history',
            $ids_candidate
        )->update('history_apply', [
            'state' => 3 // rejected (done)
        ]);

        // Update state timeline
        $timeline_state = $this->db->where([
            'id_timeline' => $id_timeline,
            'id_job'      => $id_job_vacancy
        ])->where_in(
            'id_candidate',
            $ids_candidate
        )->update('history_timeline', [
            'status' => 3 // rejected done
        ]);

        return $history_apply && $timeline_state;
    }

    public function getKandidatNangDivisiApa($id_candidate)
    {
        $this->db->select('history_apply.*, job_vacancy.name_job, division.name_division');
        $this->db->from('history_apply');
        $this->db->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history');
        $this->db->join('division', 'division.id_division = job_vacancy.id_division');
        $this->db->where([
            'history_apply.id_candidate_history' => $id_candidate,
            'history_apply.state'                => 2, // state lolos
        ]);

        return $this->db->get()->row_array();
    }

    public function getHistoryApply($id_candidate)
    {
        $this->db->select('history_apply.*, job_vacancy.name_job, division.name_division');
        $this->db->from('history_apply');
        $this->db->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history');
        $this->db->join('division', 'division.id_division = job_vacancy.id_division');
        $this->db->where('history_apply.id_candidate_history', $id_candidate);

        return $this->db->get()->result_array();
    }

    public function getKandidatBy(array $where)
    {
        $kandidat = $this->db->get_where($this->table, $where)->row_array();

        if ($kandidat) {
            $tsp = explode(',', $kandidat['birthdate_candidate']);
            if (count($tsp) > 1) {
                $kandidat['tempat_lahir_candidate_'] = $tsp[0];
                $kandidat['birthdate_candidate_'] = trim($tsp[1]);
            } else {
                $kandidat['tempat_lahir_candidate_'] = null;
                $kandidat['birthdate_candidate_'] = null;
            }
        }

        return $kandidat;
    }

    public function getKandidatExperience($id_kandidat)
    {
        $experiences = $this->db->get_where('candidate_experience', ['id_candidate' => $id_kandidat])->result_array();

        $tmp = [];
        foreach ($experiences as $row) {
            $row['json'] = json_encode($row);
            $row['year_fmt_'] = date('Y', strtotime($row['first_year'])) . ' - ' . date('Y', strtotime($row['last_year']));
            $tmp []= $row;
        }

        return $tmp;
    }

    public function getKandidatStudy($id_kandidat)
    {
        $study = $this->db->get_where('candidate_study', ['id_candidate' => $id_kandidat])->row_array();

        if (!$study) {
            $this->db->insert('candidate_study', [
                'study_level' => '-',
                'name_school' => '-',
                'major_school' => 0,
                'year_first' => date('Y-m-d'),
                'year_last' => date('Y-m-d'),
                'id_candidate' => $id_kandidat
            ]);

            $study = $this->db->get_where('candidate_study', ['id_candidate' => $id_kandidat])->row_array();
        }

        if ($study) {
            $tsp = explode(',', $study['study_level']);
            if (count($tsp) > 1) {
                $study['jenjang_'] = $tsp[0];
                $study['jurusan_'] = ltrim($tsp[1], ' ');
            } else {
                $study['jenjang_'] = null;
                $study['jurusan_'] = null;
            }
        }

        return $study;
    }

    public function getDetailKandidat($id)
    {
        $this->db->select('candidate.*, candidate_experience.name_company');
        $this->db->where('candidate.id_candidate', $id);
        $this->db->from($this->table);
        $this->db->join('candidate_study', 'candidate_study.id_candidate = candidate.id_candidate');
        $this->db->join('candidate_experience', 'candidate_experience.id_candidate = candidate.id_candidate');

        return $this->db->get()->result_array();
    }

    public function getKandidatAddress($id, $secondAddress = false)
    {
        $kandidat = $this->getKandidatBy(['id' => $id]);

        if (!$kandidat) {
            return '';
        }

        if ($secondAddress) {
            $alamat = $kandidat['address2_candidate'];
        } else {
            $alamat = $kandidat['address_candidate'];
        }

        $alamat    = explode(',', $alamat);
        $addexp    = array_slice($alamat, -3);

        $provinsi  = $addexp[2] ?? '';
        $kabupaten = $addexp[1] ?? '';
        $kecamatan = $addexp[0] ?? '';

        $tmp = [];
        for ($i=0; $i < count($alamat); $i++) {
            if ($alamat[$i] == $provinsi || $alamat[$i] == $kabupaten || $alamat[$i] == $kecamatan) {
                continue;
            }

            $tmp []= $alamat[$i];
        }

        $alamat = implode(',', $tmp);

        $kode_pos = $secondAddress ? 'poskode2_candidate' : 'poskode_candidate';
        $no_telp  = $secondAddress ? 'noaddress2_candidate' : 'noaddress_candidate';

        $address = [
            'alamat'    => ltrim($alamat, '\t\n '),
            'provinsi'  => ltrim($provinsi, '\t\n '),
            'kabupaten' => ltrim($kabupaten, '\t\n '),
            'kecamatan' => ltrim($kecamatan, '\t\n '),
            'kode_pos'  => $kandidat[$kode_pos],
            'no_tlp'    => $kandidat[$no_telp]
        ];

        $address['alamat_'] = $address['alamat'];
        $address['alamat']  = sprintf('%s, %s, %s, %s', $address['alamat'], $address['kecamatan'], $address['kabupaten'], $address['provinsi']);

        return $address;
    }

    public function updateKandidatAddress($id, $data)
    {
        $this->db->where('id', $id);

        $alamat  = sprintf('%s, %s, %s, %s', $data['alamat'], $data['kecamatan'], $data['kabupaten'], $data['provinsi']);
        $alamat2 = sprintf('%s, %s, %s, %s', $data['alamat2'], $data['kecamatan2'], $data['kabupaten2'], $data['provinsi2']);

        $this->db->set('address_candidate', $alamat);
        $this->db->set('poskode_candidate', $data['poskode_candidate']);
        $this->db->set('noaddress_candidate', $data['noaddress_candidate']);

        $this->db->set('address2_candidate', $alamat2);
        $this->db->set('poskode2_candidate', $data['poskode_candidate2']);
        $this->db->set('noaddress2_candidate', $data['noaddress_candidate2']);

        $this->db->update('candidate');

        return $this->db->affected_rows() > 0;
    }

    public function checkEmail($email)
    {
        return $this->db->get_where('candidate', ['lower(email_candidate)' => strtolower($email)])->row_array();
    }

 public function insertPendidikan($id, $data)
{
    $check = $this->db->get_where('candidate_study', ['id_candidate' => $id])->row_array();
    if ($check) {
        return $this->updatePendidikanKandidat($check['id_candidate_study'], $data);
    }

    $level = isset($data['study_level']) ? trim($data['study_level']) : '';
    $jurusan = isset($data['jurusan_']) ? trim($data['jurusan_']) : '';
    $study_level = trim(sprintf('%s, %s', $level, $jurusan), ', ');

    // Set field utama
    $this->db->set('study_level', $study_level);
    $this->db->set('major_school', isset($data['major_school']) ? $data['major_school'] : '');
    $this->db->set('name_school', isset($data['name_school']) ? $data['name_school'] : '');
    $this->db->set('year_first', isset($data['year_first']) ? $data['year_first'] : null);
    $this->db->set('year_last', isset($data['year_last']) ? $data['year_last'] : null);
    $this->db->set('active', isset($data['active']) ? $data['active'] : 1);
    $this->db->set('id_candidate', $id);

    // Insert
    $this->db->insert('candidate_study');

    // Debug opsional
    log_message('error', 'INSERT STUDY DATA: ' . print_r($data, true));
    log_message('error', 'LAST QUERY: ' . $this->db->last_query());

    return $this->db->affected_rows() > 0;
}


    public function insertPengalaman($id, $data)
    {
        $data = array_map(function ($exp) use ($id) {
            $exp['id_candidate'] = $id;

            if (!array_key_exists('date_created', $exp)) {
                $exp['date_created'] = date('Y-m-d H:i:s');
            }

            return $exp;
        }, $data);

        $this->db->insert_batch('candidate_experience', $data);

        return $this->db->affected_rows() > 0;
    }

     public function saveKandidat(array $data)
    {
        $mode = !empty($data['id']) ? 'update' : 'insert';

        $birthdate_candidate = '';
        $tempatlhr_candidate = '';
        $photo_candidate = '';

        foreach ($data as $k => $v) {
            if ($k == 'id') continue;

            if ($k == 'tempat_lahir_candidate') {
                $tempatlhr_candidate = $v;
                continue;
            }

            if ($k == 'birthdate_candidate') {
                $birthdate_candidate = $v;
                continue;
            }

            if ($k == 'photo_candidate') {
                $photo_candidate = $v; // Hanya nama file
                continue;
            }

            if (in_array($k, [
                'name_candidate',
                'email_candidate',
                'no_candidate',
                'birthdate_candidate',
                'religion_candidate',
                'jk_candidate',
                'marital_candidate',
                'socialmedia2_candidate',
                'socialmedia_candidate',
            ])) {
                $this->db->set($k, $v);
            }
        }

        // Gabungkan tempat & tanggal lahir
        if (!empty($tempatlhr_candidate) && !empty($birthdate_candidate)) {
            $this->db->set('birthdate_candidate', $tempatlhr_candidate . ', ' . $birthdate_candidate);
        }

        // Set photo_candidate jika ada
        if (!empty($photo_candidate)) {
            $this->db->set('photo_candidate', $photo_candidate);
        }

        if ($mode === 'update') {
            $this->db->where('id', $data['id']); // Primary key
            $this->db->update($this->table);
        } else {
            $this->db->set('id', generateIdCandidate()); // Buat ID baru
            $this->db->insert($this->table);
        }

        return $this->db->affected_rows() > 0;
    }

    // TODO: rollback operation
    public function deleteKandidat($id)
    {
        $delete = $this->db->delete('candidate', ['id' => $id]);

        $study  = $this->db->get_where('candidate_study', ['id_candidate' => $id]);
        $exper  = $this->db->get_where('candidate_experience', ['id_candidate' => $id]);
        $file   = $this->db->get_where('candidate_file', ['id_candidate' => $id]);

        if ($study->num_rows() > 0) {
            $delete = $this->db->delete('candidate_study', ['id_candidate' => $id]);
        }

        if ($exper->num_rows() > 0) {
            $delete = $this->db->delete('candidate_experience', ['id_candidate' => $id]);
        }

        if ($file->num_rows() > 0) {
            $path = FCPATH . 'uploads/kandidat/files/' . $file->row_array()['file_pendukung'];
            $path = str_replace('/', DIRECTORY_SEPARATOR, $path);

            @unlink($path);

            $delete = $this->db->delete('candidate_file', ['id_candidate' => $id]);
        }

        return $delete;
    }

    public function updatePengalamanKerja($data)
    {
        foreach ($data as $k => $v) {
            if ($k == 'id_ce') {
                continue;
            }

            $this->db->set($k, $v);
        }

        $this->db->where('id_ce', $data['id_ce']);

        $this->db->update('candidate_experience');

        return $this->db->affected_rows() > 0;
    }

    public function deletePengalamanKerja($id)
    {
        $this->db->where('id_ce', $id);

        $this->db->delete('candidate_experience');

        return $this->db->affected_rows() > 0;
    }

public function updatePendidikanKandidat($id_candidate_study, $data)
{
    $this->db->where('id_candidate_study', $id_candidate_study);

    $level = isset($data['study_level']) ? trim($data['study_level']) : '';
    $jurusan = isset($data['jurusan_']) ? trim($data['jurusan_']) : '';
    $study_level = trim(sprintf('%s, %s', $level, $jurusan), ', ');

    // set semua field utama
    $this->db->set('study_level', $study_level);
    $this->db->set('major_school', isset($data['major_school']) ? $data['major_school'] : '');
    $this->db->set('name_school', isset($data['name_school']) ? $data['name_school'] : '');
    $this->db->set('year_first', isset($data['year_first']) ? $data['year_first'] : null);
    $this->db->set('year_last', isset($data['year_last']) ? $data['year_last'] : null);
    $this->db->set('active', isset($data['active']) ? $data['active'] : 1);

    $this->db->update('candidate_study');

    // debug opsional
    log_message('error', 'UPDATE STUDY DATA: ' . print_r($data, true));
    log_message('error', 'LAST QUERY: ' . $this->db->last_query());

    return $this->db->affected_rows() > 0;
}



    public function getFilePendukung($id)
    {
        $this->db->where('id_candidate', $id);

        return $this->db->get('candidate_file')->result_array();
    }

    public function updateFilePendukung($id, $data)
    {
        $this->db->where('id', $id);

        foreach ($data as $k => $v) {
            if ($k == 'id') {
                continue;
            }

            $this->db->set($k, $v);
        }

        $this->db->update('candidate_file');

        return $this->db->affected_rows() > 0;
    }

    public function deleteFilePendukung($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('candidate_file');

        return $this->db->affected_rows() > 0;
    }
}
