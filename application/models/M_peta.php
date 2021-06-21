<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_peta extends CI_Model
{
    public function get_maps()
    {
        $this->db->select('gps');
        $this->db->from('penduduk');
        $query = $this->db->get();
        return $query->result_array();
    }
}
