<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_public extends CI_Model
{
    public function get_public()
    {
        $this->db->select('id_penduduk, nama_kk, sumber_penghasilan as pendapatan, jumlah_jiwa, gps, surveyor, tanggal_survey');
        $this->db->from('penduduk');
        $this->db->order_by('tanggal_survey', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}
