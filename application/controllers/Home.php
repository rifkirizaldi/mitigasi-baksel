<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('landingpage/header_home', $data);
        $this->load->view('landingpage/topbar_home', $data);
        $this->load->view('landingpage/index', $data);
        $this->load->view('landingpage/footer_home');
    }
}
