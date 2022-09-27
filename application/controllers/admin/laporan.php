<?php

    class Laporan extends CI_Controller{

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
            $pilih = $this->input->post('pilih');
            $data['title'] = 'Sarpras Administrator | Laporan';
            $data['dt_keluar'] = $this->M_barang->getmonth($pilih);
            //$data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            //where CONCAT(YEAR(date),'-',MONTH(date)) = '2017-12'

            $this->admin_temp->load('templates/admin','admin/laporan/index',$data);
        }

    }