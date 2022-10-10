<?php

    class Login extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('session','form_validation');
            $this->load->helper('url');
        }

        public function index()
        {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Login Administrator';
                $this->load->view('admin/login',$data);
            }
            else {
                $this->is_login();
            }
        }

        public function logout()
        {
            session_destroy();
            redirect('admin/login');
        }

        private function is_login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user',['username' => $username])->row_array();

            if ($user['status'] == 1) {
                if ($user['password'] == $password) {
                    $data = [
                        'username' => $user['username'],
                        'nama_user' => $user['nama_user']
                    ];

                    $this->session->set_userdata($user,$data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password tidak sesuai!
                    </div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Akun tidak ada!
                    </div>');
                redirect('admin/login');
            }
        }

    }
