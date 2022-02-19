<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('M_anggota');
        $this->load->model('M_public');
        $this->load->model('M_peta');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->get_all_data();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }
    public function inatews()
    {
        $data['title'] = 'Inatews';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->get_all_data();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/inatews', $data);
        $this->load->view('templates/admin_footer');
    }
    public function mhews()
    {
        $data['title'] = 'Mhews';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->get_all_data();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/mhews', $data);
        $this->load->view('templates/admin_footer');
    }

    public function add_report_incident()
    {
        $data['title'] = 'Tambah Laporan Kejadian';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->get_all_data();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/add_incident', $data);
        $this->load->view('templates/admin_footer');
    }

    public function get_all_data()
    {
        $priority = $this->M_public->get_priority();
        $member = $this->M_anggota->get_count_member();

        $data['anggota'] = $member['jumlah_anggota'];
        $data['prioritas'] = $this->get_sum_priority();
        $data['balita_laki'] = $this->get_sum_children_boys();
        $data['balita_perempuan'] = $this->get_sum_children_girls();
        $data['lansia_pria'] = $this->get_sum_menParents();
        $data['lansia_wanita'] = $this->get_sum_womenParents();
        $data['dis_fisik'] = $priority[0]['dis_fisik'];
        $data['dis_intelektual'] = $priority[0]['dis_intelektual'];
        $data['dis_mental'] = $priority[0]['dis_mental'];
        $data['dis_sensor'] = $priority[0]['dis_sensor'];
        return $data;
    }

    public function anggota()
    {
        $data['title'] = 'Anggota';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('anggota', $data);
        $this->load->view('templates/admin_footer');
    }

    public function penduduk()
    {
        $data['title'] = 'Penduduk';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->get_all_data();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/penduduk', $data);
        $this->load->view('templates/admin_footer');
    }

    public function maps()
    {
        $data['title'] = 'Peta Rendaman';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['peta'] = $this->M_peta->get_maps();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peta', $data);
        $this->load->view('templates/admin_footer');
    }
    public function incident_report()
    {
        $data['title'] = 'Lapor Kejadian';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/incident_report', $data);
        $this->load->view('templates/admin_footer');
    }
    public function potention_report()
    {
        $data['title'] = 'Lapor Potensi Bencana';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/potention_report', $data);
        $this->load->view('templates/admin_footer');
    }

    public function get_member()
    {
        $data = $this->M_anggota->get_member();
        $result = [
            'draw' => '',
            'recordsFiltered' => '',
            'recordsTotal' => '',
            'data' => $data
        ];
        echo json_encode($result);
    }

    public function get_public()
    {
        if ($this->input->post() !== Null) {
            $bulan = $this->input->post('bulan');
            $kampung = $this->input->post('kampung');
            $data = $this->M_public->get_public($bulan, $kampung);
            $priority = $this->get_sum_priority($bulan, $kampung);
            $balita_laki = $this->get_sum_children_boys($bulan, $kampung);
        } else {
            $data = $this->M_public->get_public();
        }
        $result = [
            'all_priority' => $priority,
            'balita_laki' => $balita_laki,
            'data' => $data
        ];
        echo json_encode($result);
    }

    public function get_sum_priority($bulan = null, $kampung = null)
    {
        $prioritas = $this->M_public->get_priority($bulan, $kampung);
        foreach ($prioritas as $key) {
            $result = $key['laki_06'] + $key['perempuan_06'] + $key['laki_69'] + $key['perempuan_69'] + $key['laki_912'] + $key['perempuan_912'] + $key['laki_12_24'] + $key['perempuan_12_24'] + $key['laki_2_5tahun'] + $key['perempuan_2_5tahun'] + $key['laki_lansia'] + $key['perempuan_lansia'] + $key['dis_fisik'] + $key['dis_intelektual'] + $key['dis_mental'] + $key['dis_sensor'];
        }
        return $result;
    }

    public function detail_row($bulan = null, $kampung = null)
    {
        $detail = $this->M_public->get_detail_priority($bulan, $kampung);
        return $detail;
    }

    public function get_sum_children_boys($bulan = null, $kampung = null)
    {
        $prioritas = $this->M_public->get_priority($bulan, $kampung);
        foreach ($prioritas as $key) {
            $result = $key['laki_06'] +  $key['laki_69']  + $key['laki_912']  + $key['laki_12_24']  + $key['laki_2_5tahun'];
        }
        return $result;
    }
    public function get_sum_children_girls()
    {
        $prioritas = $this->M_public->get_priority();
        foreach ($prioritas as $key) {
            $result = $key['perempuan_06'] + $key['perempuan_69'] + $key['perempuan_912'] + $key['perempuan_12_24'] + $key['perempuan_2_5tahun'];
        }
        return $result;
    }

    public function get_sum_menParents()
    {
        $prioritas = $this->M_public->get_priority();
        foreach ($prioritas as $key) {
            $result = $key['laki_lansia'];
        }
        return $result;
    }

    public function get_sum_womenParents()
    {
        $prioritas = $this->M_public->get_priority();
        foreach ($prioritas as $key) {
            $result = $key['perempuan_lansia'];
        }
        return $result;
    }

    public function filter_priority()
    {
        $bulan = $this->input->post('bulan');
        $kampung = $this->input->post('kampung');
        $priority = $this->get_sum_priority($bulan, $kampung);
        $balita_laki = $this->get_sum_children_boys($bulan, $kampung);
        // $detail = $this->detail_row($bulan, $kampung);
        $data = [
            // 'detail' => $detail,
            'all_priority' => $priority,
            'balita_laki' => $balita_laki
        ];

        echo json_encode($data);
    }
}

// untuk function index
//$data['prioritas'] = $this->get_sum_priority();
//$data['balita_laki'] = $this->get_sum_children_boys();
//$data['balita_perempuan'] = $this->get_sum_children_girls();
//$data['lansia_pria'] = $this->get_sum_menParents();
//$data['lansia_wanita'] = $this->get_sum_womenParents();
//$data['dis_fisik'] = $priority[0]['dis_fisik'];
//$data['dis_intelektual'] = $priority[0]['dis_intelektual'];
//$data['dis_mental'] = $priority[0]['dis_mental'];
//$data['dis_sensor'] = $priority[0]['dis_sensor'];
