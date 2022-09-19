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
            $data['title'] = 'Sarpras Adminitrator | Dashboard';
            //$data['barang'] = $this->M_barang->getbarang();

            $this->admin_temp->load('templates/admin','admin/dashboard/index',$data);
        }
    }
