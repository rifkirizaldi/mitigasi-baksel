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

    public function get_priority($bulan = null, $kampung = null)
    {
        // Menghitung masyarakat prioritas.
        // Dapat digunakan dibeberapa fitur untuk detail visualisasinya
        $this->db->select('SUM(lk_0_6_bln) as laki_06, SUM(pr_0_6_bln) as perempuan_06, SUM(lk_6_9_bln) as laki_69, SUM(pr_6_9_bln) as perempuan_69, SUM(lk_9_12_bln) as laki_912, SUM(pr_9_12_bln) as perempuan_912, SUM(lk_12_24_bln) as laki_12_24, SUM(pr_12_24_bln) as perempuan_12_24, SUM(lk_2_5_thn) as laki_2_5tahun, SUM(pr_2_5_thn) as perempuan_2_5tahun, SUM(lk_lansia) as laki_lansia, SUM(pr_lansia) as perempuan_lansia, SUM(dis_fisik) as dis_fisik, SUM(dis_intelektual) as dis_intelektual, SUM(dis_mental) as dis_mental, SUM(dis_sensor) as dis_sensor');
        $this->db->from('penduduk');

        if (!empty($bulan)) {
            $this->db->where('MONTH(tanggal_survey)', date("m", strtotime(str_replace('/', '-', $bulan))));
        }
        if (!empty($kampung)) {
            $this->db->where('kampung', $kampung);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
}
