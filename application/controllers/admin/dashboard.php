<?php

    class Dashboard extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
            $this->load->model('Crud');
            $this->load->library('session');
            $this->load->helper('url');
        }

        public function index()
        {
            cek_not_login();
            $data['title'] = 'Sarpras Administrator | Dashboard';
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['jml_barang'] = $this->M_barang->countbarang();
            //$data['barang'] = $this->M_barang->getbarang();

            $this->admin_temp->load('templates/admin','admin/dashboard/index',$data);
        }
    }
