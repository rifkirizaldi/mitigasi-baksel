<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_anggota extends CI_Model
{
    public function get_member()
    {
        $this->db->select('id, tanggal_masuk, nama_lengkap, nama_panggilan, jenis_kelamin, tempat_lahir, pekerjaan, status.*');
        $this->db->from('anggota');
        $this->db->join('status', 'status.id_status=anggota.id_status', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
}
