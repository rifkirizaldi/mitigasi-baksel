<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasi lolos
            // buat method login
            // method login private menggunakan "_" sebagai penanda doang
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        // usernya ada
        if ($admin) {
            // if ($admin['is_active'] == 1) {
            // cek password
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'username' => $admin['username']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password yang anda masukkan salah!
                    </div>');
                redirect('auth');
            }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            //     This email has not been activated!
            //     </div>');
            //     redirect('auth');
            // }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username belum terdaftar!
            </div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        // Aturan form validasi
        // panggil name yang ada pada form html
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
            'is_unique' => 'Username sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[8]|matches[pass2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');
        // is_unique[nama_tabel.nama_field]

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
                // 'role_id' => 2, //default set member
                'is_active' => 1,
                'foto' => 'default.jpg',
                'date_created' => time()
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun ada sudah terdaftar.
            </div>');
            redirect('auth');
        }
    }


    // Logout
    public function logout()
    {
        $this->session->unset_userdata('username');
        // $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah keluar dari halaman admin.
            </div>');
        redirect('auth');
    }
}
