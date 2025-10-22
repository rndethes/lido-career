<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturanlp_model extends CI_Model
{
    /**
     * Setting ID
     *
     * @var int
     */
    public const LP_GLOBAL_SETTING_ID = 1;

    public function getAboutSet(int $id)
    {
        if (!in_array($id, [1, 2])) {
            return null;
        }

        $about = $this->db->get_where('setting_about', ['id' => $id])->row_array();

        return $about;
    }

    public function getWebsiteSet()
    {
        $setting = $this->db->get_where('setting_landingpage', ['id' => static::LP_GLOBAL_SETTING_ID])->row_array();

        return $setting;
    }
    public function getHeropage()
    {
        $setting = $this->db->get_where('setting_homepage', ['id_hp' => static::LP_GLOBAL_SETTING_ID])->row_array();

        return $setting;
    }

    public function saveWebsiteSet(array $settings)
    {
        $this->db->where('id', static::LP_GLOBAL_SETTING_ID);

        foreach ($settings as $k => $v) {
            if ($k == 'id') {
                continue;
            }

            $this->db->set($k, $v);
        }

        $this->db->update('setting_landingpage');

        return $this->db->affected_rows() > 0;
    }
    public function saveHeroSet(array $settings)
    {
        $this->db->where('id_hp', $settings['id_hp']);

        foreach ($settings as $k => $v) {
            if ($k == 'id_hp') {
                continue;
            }

            $this->db->set($k, $v);
        }

        $this->db->update('setting_homepage');

        return $this->db->affected_rows() > 0;
    }

    public function saveAboutSet(int $id, array $data)
    {
        $this->db->where('id', $id);

        foreach ($data as $k => $v) {
            if ($k == 'id') {
                continue;
            }

            $this->db->set($k, $v);
        }

        $this->db->update('setting_about');

        return $this->db->affected_rows() > 0;
    }

    private function createDefaultSettingsFor(string $table, int $id)
    {
        if ($table == 'setting_landingpage') {
            $setting = [
                'id' => $id,
                'company_title' => 'Ethes Tech',
                'company_name'  => 'Ethes Tech',
                'company_logo'  => 'logo.jpg'
            ];

            return $this->db->insert('setting_landingpage', $setting);
        } elseif ($table == 'setting_about') {
            $about = [
                'id' => $id,
                'about_image' => 'about.jpg',
                'about_title' => 'Di Lido Group',
                'about_subtitle' => 'Ada apa aja sih?',
                'about_description' => 'Lorem ipsum dolor sit amet consecterur adipising elit.'
            ];

            return $this->db->insert('setting_about', $about);
        }

        return false;
    }

    public function get_data_social()
    {
        return $this->db->get('setting_social')->result_array();
    }


    public function save_data($data)
    {
       return $this->db->insert('setting_social', $data);
    }

    public function delete_data_social($id)
    {
    $this->db->where('id_sc', $id);
    $this->db->delete('setting_social');
    return ($this->db->affected_rows() > 0) ? true : false;
    }

    function update_data_sosmed($id, $icon, $name, $link){
        $data = array(
          'icon_social' => $icon,
          'name_social' => $name,
          'link_social' => $link
        );
      
        $this->db->where('id_sc', $id);
        return $this->db->update('setting_social', $data);
      }
      
}
