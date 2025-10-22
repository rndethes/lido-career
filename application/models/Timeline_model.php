<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Timeline_model extends CI_Model
{
    public function getAllTimeline()
    {
        $lowker = $this->db->get('job_vacancy')->result_array();
        $result = [];

        foreach ($lowker as $row) {
            $row['total_batch']   = count($this->db->get_where('batch_timeline', ['id_job_vacancy' => $row['id']])->result_array() ?? []);
            $row['name_division'] = $this->db->get_where('division', ['id_division' => $row['id_division']])->row_array();
            $row['name_division'] = $row['name_division']['name_division'] ?? null;

            $result []= $row;
        }

        return $result;
    }

    public function getMonitoringData($id_batch, $filter = [])
    {
        $query = $this->db->select(
            'candidate.id, candidate.id_candidate, candidate.name_candidate, candidate.email_candidate, candidate.jk_candidate, candidate.device_token, candidate.photo_candidate,
            timeline.name_timeline, timeline.id_timeline, timeline.kode_timeline,
            history_timeline.id as history_timeline_id, history_timeline.status as timeline_status,
            job_vacancy.id as id_job_vacancy, job_vacancy.name_job, job_vacancy.grade_value,
            division.name_division,
            history_apply.urutan'
        )->from(
            'history_timeline'
        )->join(
            'candidate',
            'candidate.id = history_timeline.id_candidate'
        )->join(
            'timeline',
            'timeline.id_timeline = history_timeline.id_timeline'
        )->join(
            'job_vacancy',
            'job_vacancy.id = history_timeline.id_job'
        )->join(
            'division',
            'division.id_division = job_vacancy.id_division'
        )->join(
            'history_apply',
            'history_apply.id_candidate_history = history_timeline.id_candidate AND history_apply.id_job_history = history_timeline.id_job AND history_apply.id_batch = history_timeline.id_batch'
        )->where('history_timeline.id_batch', $id_batch)
        ->order_by('candidate.id_candidate', 'ASC');

        if (!empty($filter)) {
            if (array_key_exists("id_job_vacancy", $filter) && !empty($filter["id_job_vacancy"])) {
                $query->where_in("history_timeline.id_job", $filter["id_job_vacancy"]);
            }

            if (array_key_exists("id_timeline", $filter) && !empty($filter["id_timeline"])) {
                $query->where_in("history_timeline.id_timeline", $filter["id_timeline"]);
            }

            if (array_key_exists("status", $filter) && !empty($filter["status"])) {
                $query->where_in("history_timeline.status", $filter["status"]);
            }

            if (array_key_exists("prioritas", $filter) && !empty($filter["prioritas"])) {
                $query->where_in("history_apply.urutan", $filter["prioritas"]);
            }
        }

        $data = $query->get()->result_array();

        return $data;
    }

    public function getJobForBatch($id_batch)
    {
        $job = $this->db->select('batch_job.id_batch_job, batch_job.id_batch, division.id_division, division.name_division, job.name_job, job.id as id_job_vacancy, job.id_job as kode_job, job.grade_value')
                    ->from('batch_job')
                    ->join('job_vacancy as job', 'job.id = batch_job.id_job')
                    ->join('division', 'division.id_division = job.id_division')
                    ->where('batch_job.id_batch', $id_batch)
                    ->get()
                    ->result_array();

        return $job;
    }

    public function deleteJobFromBatch($id_batch_job, $id_batch)
    {
        $this->db->delete('batch_job', ['id_batch_job' => $id_batch_job]);
        $this->db->delete('history_apply', ['id_batch' => $id_batch]);

        return true;
    }

    public function getAutonameForBatch($default = null)
    {
        $last = $this->db->select(
            'max(name_batch) as name_batch'
        )->from('batch_timeline')->get()->row_array();

        if ($last) {
            $name = $last['name_batch'];
            $name = explode(' ', $name);

            if (count($name) == 2) {
                $name = (int) $name[1] + 1;
            } else {
                $name = 1;
            }

            return sprintf('%s %s', 'BATCH', $name);
        }

        if ($default) {
            return $default;
        }

        return sprintf('%s %s', 'BATCH', 1);
    }

    // TODO: Improve
    public function getCandidateForTimeline($id_batch, $id_job_vacancy, $id_timeline)
    {
        $this->db->select('history_timeline.id as history_timeline_id, candidate.id, candidate.id_candidate, candidate.name_candidate, candidate.email_candidate, candidate.jk_candidate, candidate.photo_candidate, candidate.device_token, job_vacancy.name_job, timeline.name_timeline');
        $this->db->from('history_timeline');
        $this->db->join('candidate', 'candidate.id = history_timeline.id_candidate');
        $this->db->join('job_vacancy', 'job_vacancy.id = history_timeline.id_job');
        $this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline');
        $this->db->where('history_timeline.id_timeline', $id_timeline);
        $this->db->where('history_timeline.id_job', $id_job_vacancy);
        $this->db->where('history_timeline.id_batch', $id_batch);
        $result = $this->db->get()->result_array();

        return $result;
    }

    public function getBatch($id)
    {
        return $this->db->get_where('batch_timeline', ['id_batch' => $id])->row_array();
    }

    public function getAllTimelineBatch($id_jobvacancy)
    {
        $this->db->select('batch_timeline.*, job_vacancy.name_job');
        $this->db->from('batch_timeline');
        $this->db->join('job_vacancy', 'job_vacancy.id = batch_timeline.id_job_vacancy');
        $this->db->order_by('batch_timeline.start_date', 'ASC');
        $this->db->where('job_vacancy.id', $id_jobvacancy);

        $result = [];
        $batch = $this->db->get()->result_array();

        foreach ($batch as $row) {
            $timeline = $this->db->get_where('timeline', ['id_batch' => $row['id_batch']])->result_array();
            $row['total_timeline'] = count($timeline);

            $result []= $row;
        }


        return $result;
    }

    public function getAllTimelineForBatch($id)
    {
        return $this->db->get_where('timeline', ['id_batch' => $id])->row_array();
    }

    public function deleteTimelineBatch($id)
    {
        $delete = $this->db->delete('batch_timeline', ['id_batch' => $id]);

        if (!empty($this->getAllTimelineForBatch($id))) {
            $delete = $this->db->delete('timeline', ['id_batch' => $id]);
        }

        return $delete;
    }

    public function saveTimelineBatch($batch)
    {
        $mode = 'insert';

        foreach ($batch as $k => $v) {
            if ($k == 'id_batch') {
                $mode = 'update';
                continue;
            }

            $this->db->set($k, $v);
        }

        if ($mode === 'insert') {
            return $this->db->insert('batch_timeline');
        } else {
            $this->db->where('id_batch', $batch['id_batch']);

            return $this->db->update('batch_timeline');
        }
    }

    public function getJobVacationForBatch($id)
    {
        $batch = $this->db->get_where('batch_timeline', ['id_batch' => $id])->row_array();

        if (!$batch) {
            return null;
        }

        $lowker = $this->db->get_where('job_vacancy', ['id' => $batch['id_job_vacancy']])->row_array();

        return $lowker;
    }

    public function getJobVacancy($id)
    {
        return $this->db->get_where('job_vacancy', ['id' => $id])->row_array();
    }

    public function getTimeline($id_batch)
    {
        $timeline = $this->db->order_by('kode_timeline', 'ASC')->get_where('timeline', [
            'id_batch' => $id_batch
        ])->result_array();

        return $timeline;
    }

    public function getAllTimelineLinks()
    {
        return $this->db->get('link_timeline')->result_array();
    }

    public function saveTimeline(array $data)
    {
        $mode = 'insert';

        foreach ($data as $k => $v) {
            if ($k == 'id_timeline') {
                $mode = 'update';
                continue;
            }

            $this->db->set($k, $v);
        }

        if ($mode == 'insert') {
            $this->db->set('kode_timeline', $this->generateKodeTimeline($data['id_batch']));
            $this->db->insert('timeline');
        } else {
            $this->db->where('id_timeline', $data['id_timeline']);
            $this->db->update('timeline');
        }

        return $this->db->affected_rows() > 0;
    }

    public function generateKodeTimeline($id_batch)
    {
        $max = $this->db->select('max(kode_timeline) as kode_timeline')->from('timeline')
                     ->where('id_batch', $id_batch)
                     ->get()
                     ->row_array();

        if ($max) {
            $exp = explode('-', $max['kode_timeline']);
            $nid = 0;
            if (count($exp) === 3) {
                $nid = (int) $exp[2];
            }

            $nid += 1;

            return sprintf('%s-%s-%s', 'TM', $id_batch, $nid);
        }

        return sprintf('%s-%s-%s', 'TM', $id_batch, '1');
    }

    public function parseKodeTimeline($kode_timeline)
    {
        $exp = explode('-', $kode_timeline);

        if (count($exp) !== 3) {
            return null;
        }

        return [
            'prefix' => $exp[0],
            'batch'  => $exp[1],
            'kode'   => $exp[2]
        ];
    }

    public function updateTimelineStep($id_candidate, $id_job_vacancy, $history_timeline_id, $id_batch, $next_timeline)
    {
        $all_apply = $this->db->select('id_history, id_job_history, job_vacancy.grade_value')
                        ->from('history_apply')
                        ->join('job_vacancy', 'job_vacancy.id = history_apply.id_job_history')
                        ->where('history_apply.id_candidate_history', $id_candidate)
                        ->where('history_apply.state', 1)
                        ->where('history_apply.id_job_history !=', $id_job_vacancy)
                        ->get()->result_array();

        $accepted = $this->db->get_where('job_vacancy', ['id' => $id_job_vacancy])->row_array();

        // Grading
        $tmp = [];

        // Rejected
        $trc = [];
        foreach ($all_apply as $row) {
            if ($row['grade_value'] < $accepted['grade_value']) {
                $tmp []= [
                    'id_candidate' => $id_candidate,
                    'id_job'       => $row['id_job_history'],
                    'status'       => 1,
                ];
            } else {
                $trc []= [
                    'id_candidate' => $id_candidate,
                    'id_job'       => $row['id_job_history'],
                    'status'       => 1,
                ];
            }
        }

        if (!empty($tmp)) {
            foreach ($tmp as $row) {
                $accept = $this->db->update('history_timeline', [
                    'status' => 2 // accept
                ], $row);

                // New timeline
                $accept = $this->db->insert('history_timeline', [
                    'id_batch'     => $id_batch,
                    'id_candidate' => $row['id_candidate'],
                    'id_timeline'  => $next_timeline,
                    'id_job'       => $row['id_job'],
                    'status'       => 1
                ]);
            }
        }

        if (!empty($trc)) {
            foreach ($trc as $row) {
                $reject = $this->db->update('history_timeline', [
                    'status' => 3 // rejected
                ], $row);

                $reject = $this->db->update('history_apply', [
                    'state' => 3
                ], [
                    'id_job_history'       => $row['id_job'],
                    'id_candidate_history' => $row['id_candidate']
                ]);
            }
        }

        // New timeline for accepted
        $new_timeline = $this->db->insert('history_timeline', [
            'id_batch'     => $id_batch,
            'id_candidate' => $id_candidate,
            'id_timeline'  => $next_timeline,
            'id_job'       => $id_job_vacancy,
            'status'       => 1
        ]);

        // Update state timeline
        $timeline_state = $this->db->where('id', $history_timeline_id)->update('history_timeline', [
            'status' => 2 // accept done
        ]);

        return $timeline_state;
    }

    /**
     * @param array $id_candidate
     * @param string|int $current_timeline
     * @param string|int $next_timeline
     *
     * @return bool
     */
    public function updateTimelineStepBaksoControl($ids_candidate, $id_job_vacancy, $id_batch, $current_timeline, $next_timeline)
    {
        $this->db->where_in('id_candidate', $ids_candidate)
            ->where([
                'id_timeline' => $current_timeline,
                'id_job'      => $id_job_vacancy
            ])->update('history_timeline', [
                'status' => 2
            ]);

        for ($i=0; $i < count($ids_candidate); $i++) {
            $this->db->insert('history_timeline', [
                'id_candidate' => $ids_candidate[$i],
                'id_timeline'  => $next_timeline,
                'id_job'       => $id_job_vacancy,
                'id_batch'     => $id_batch,
                'status'       => 1
            ]);
        }

        return $this->db->affected_rows() > 0;
    }

    public function getFirstTimelineForBatch($id_batch)
    {
        $parsed = $this->makeKodeTimeline($id_batch, '1');

        // print_r($parsed);exit();

        $timeline = $this->db->get_where('timeline', ['kode_timeline' => $parsed]);
        if ($timeline->num_rows() > 0) {
            return $timeline->row_array();
        }

        return null;
    }

    public function makeKodeTimeline($id_batch, $kode)
    {
        return sprintf('%s-%s-%s', 'TM', $id_batch, $kode);
    }


    // public function getCurrentTimeline($id_candidate)
    // {
    //     $history = $this->db->get_where('history_timeline', ['id_candidate' => $id_candidate])->row_array();

    //  if ($history) {
    //  $this->db->select('history_timeline.*, timeline.*');
    //	$this->db->from('history_timeline');
    // $this->db->where('id_candidate', $id_candidate, 'status', 1);
    //     return $this->db->get()->row_array();
    //     }


    //     return null;
    // }

     public function getCurrentTimeline($id_candidate, $id_batch)
     {
         $this->db->select('history_timeline.*, timeline.*, history_apply.*');
         $this->db->from('history_timeline');
         $this->db->join('history_apply', 'history_apply.id_candidate_history = history_timeline.id_candidate');
         $this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline');
         $this->db->where('history_timeline.id_candidate', $id_candidate);
         $this->db->where('timeline.id_batch', $id_batch);
         $this->db->order_by('history_timeline.id', 'DESC');


         return $this->db->get()->row_array();
     }

    public function countCurrentTimeline($id_candidate, $id_batch)
    {
        //print_r($id_candidate);exit();
        $this->db->select('history_timeline.*, timeline.*');
        $this->db->from('history_timeline');
        $this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline');
        $this->db->where('history_timeline.id_candidate', $id_candidate);

        $this->db->where('timeline.id_batch', $id_batch);

        return $this->db->get()->result_array();
    }

    public function getNextTimelineAfter($kode_timeline)
    {
        $parsed = $this->parseKodeTimeline($kode_timeline);

        if (!$parsed) {
            return null;
        }

        $nexttm = (int) $parsed['kode'] + 1;
        $nexttm = $this->makeKodeTimeline($parsed['batch'], $nexttm);

        $timeline = $this->db->get_where('timeline', [
            'kode_timeline' => $nexttm
        ])->row_array();

        if (!$timeline) {
            return null;
        }

        return $timeline;
    }

    public function getPrevTimelineBefore($kode_timeline)
    {
        $parsed = $this->parseKodeTimeline($kode_timeline);

        if (!$parsed) {
            return null;
        }

        $nexttm = (int) $parsed['kode'] - 1;
        $nexttm = $this->makeKodeTimeline($parsed['batch'], $nexttm);

        $timeline = $this->db->get_where('timeline', [
            'kode_timeline' => $nexttm
        ])->row_array();

        if (!$timeline) {
            return null;
        }

        return $timeline;
    }

    public function deleteTimeline($id)
    {
        $delete = $this->db->where('id_timeline', $id)->delete('timeline');

        if ($this->db->get_where('history_timeline', ['id_timeline' => $id])->num_rows() > 0) {
            return $this->db->where('id_timeline', $id)->delete('history_timeline');
        }

        return $delete;
    }
    public function getFirstHT($id_candidate, $id_job)
    {
        $this->db->select('*');
        $this->db->from('history_timeline');
        $this->db->where('id_candidate', $id_candidate);
        $this->db->where('id_job', $id_job);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTimelineDashboard($id_candidate, $id_job)
    {
        $this->db->select('history_timeline.*, timeline.*, history_apply.*');
        $this->db->from('history_timeline');
        $this->db->join('history_apply', 'history_apply.id_candidate_history = history_timeline.id_candidate');
        $this->db->join('timeline', 'timeline.id_timeline = history_timeline.id_timeline');
        $this->db->where('history_timeline.id_candidate', $id_candidate);
        $this->db->where('history_timeline.id_job', $id_job);
        $this->db->order_by('history_timeline.id', 'DESC');


        return $this->db->get()->row_array();
    }
    public function getpretl($id_candidate) {
        $this->db->select('history_timeline.*, (SELECT id_timeline FROM history_timeline WHERE id < history_timeline.id ORDER BY id DESC LIMIT 1) as previous_timeline');
        $this->db->from('history_timeline');
        $this->db->where('history_timeline.id_candidate', $id_candidate);
        $query = $this->db->get();
        $result = $query->result_array();
        foreach($result as $key => $value){
            $result[$key]['name_timeline'] = $this->db->get_where('timeline', ['id_timeline' => $value['id_timeline']])->row_array();
        }
        return $result;
    }
    public function getCurrentTimeline2($id_candidate) {
        $this->db->select('history_timeline.*, (SELECT id_timeline FROM history_timeline WHERE id < history_timeline.id ORDER BY id DESC LIMIT 1) as previous_timeline');
        $this->db->from('history_timeline');
        $this->db->where('history_timeline.id_candidate', $id_candidate);
        $this->db->where('history_timeline.status', 1);
        $this->db->order_by('history_timeline.id_timeline', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row_array();
        $result['name_timeline'] = $this->db->get_where('timeline', ['id_timeline' => $result['id_timeline']])->row_array();
        return $result;
    }
}
