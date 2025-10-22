<?php

defined('BASEPATH') or exit('No direct script access allowed.');

/**
 * @property CI_DB $db
 */
class Notification_model extends CI_Model
{
    /**
     * Constant untuk notifikasi yang sudah dibaca
     */
    public const NOTIF_READED = 1;

    /**
     * Constant untuk notifikasi yang belum dibaca (baru)
     */
    public const NOTIF_UNREADED = 0;

    /**
     * Dapatkan notifikasi yang belum dibaca kandidat
     *
     * @param integer $id_candidate id candidate yang saat ini login
     * @param integer $max_count jumlah maximal notifikasi default adalah 3
     * @return array
     */
    public function getMyTopNotification($id_candidate, $max_count = 3)
    {
        $notif = $this->db->select('*')
            ->from('message_lido_career')
            ->where([
                'id_candidate_ms' => $id_candidate,
                'sent_state'      => self::NOTIF_UNREADED,
            ])->order_by('date_created', 'DESC')->limit($max_count);

        return $notif->get()->result_array();
    }

    /**
     * Dapatkan semua notifikasi kandidat
     *
     * @param integer $id_candidate
     * @return array
     */
    
    public function getMyNotifications($id_candidate)
    {
        $notif = $this->db->select('*')
            ->from('message_lido_career')
            ->where('id_candidate_ms', $id_candidate)
            ->order_by('date_created', 'DESC');

        return $notif->get()->result_array();
    }
    /**
     * Tandai notifikasi telah dibaca
     *
     * @param integer $notif_id
     * @return bool
     */
    public function readNotification($notif_id)
    {
        return $this->db->update(
            'message_lido_career',
            [
                'sent_state' => self::NOTIF_READED
            ],
            ['id_ms' => $notif_id]
        );
    }

    /**
     * Membuat notifikasi baru untuk user
     *
     * @param integer $id_candidate id kandidate
     * @param string $content isi notifikasi
     * @return void
     */
    public static function create($id_candidate, $content)
    {
        $notif = new Notification_model();

        return $notif->db->insert('message_lido_career', [
            'id_candidate_ms'  => $id_candidate,
            'description_ms'   => $content,
            'sent_state'       => $notif::NOTIF_UNREADED
        ]);
    }
}
