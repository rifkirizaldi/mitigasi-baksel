<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Download Aplikasi';
        $this->load->view('app/index', $data);
    }

    public function download_app()
    {
        $this->load->helper('download');
        force_download('files/ruinsk.apk', NULL);
    }
}
