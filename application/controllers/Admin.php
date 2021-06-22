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
        $member = $this->M_anggota->get_count_member();
        $prioritas = $this->M_public->get_priority();
        foreach ($prioritas as $key) {
            $result = $key['laki_06'] + $key['perempuan_06'] + $key['laki_69'] + $key['perempuan_69'] + $key['laki_912'] + $key['perempuan_912'] + $key['laki_12_24'] + $key['perempuan_12_24'] + $key['laki_2_5tahun'] + $key['perempuan_2_5tahun'] + $key['laki_lansia'] + $key['perempuan_lansia'] + $key['dis_fisik'] + $key['dis_intelektual'] + $key['dis_mental'] + $key['dis_sensor'];
        }

        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['prioritas'] = $result;
        $data['anggota'] = $member['jumlah_anggota'];
        // var_dump($data['anggota']);
        // die;
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
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

    public function maps()
    {
        $data['title'] = 'Peta Rendaman';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['peta'] = $this->M_peta->get_maps();
        // var_dump($data['peta']);
        // die;
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peta', $data);
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
        $data = $this->M_public->get_public();
        $result = [
            'draw' => '',
            'recordsFiltered' => '',
            'recordsTotal' => '',
            'data' => $data
        ];
        echo json_encode($result);
    }
}
