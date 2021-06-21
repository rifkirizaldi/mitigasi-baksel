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
