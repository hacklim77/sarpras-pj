<?php

    class Barang extends CI_Controller
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
            $data['title'] = 'Sarpras Administrator | Barang';
            $data['barang'] = $this->M_barang->getallbarang();

            $this->admin_temp->load('templates/admin','admin/barang/index',$data);
        }

        public function tambah()
        {
            $data['title'] = 'Sarpras Administrator | Tambah Data Barang';
            //$data['barang'] = $this->M_barang->getallbarang();

            $this->admin_temp->load('templates/admin','admin/barang/tambah',$data);
        }
    }
