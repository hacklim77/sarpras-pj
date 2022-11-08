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
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            $data['title'] = 'Sarpras Administrator | Laporan';
            $data['dt_keluar'] = $this->M_barang->getmonth($bulan,$tahun);

            $this->admin_temp->load('templates/admin','admin/laporan/index',$data);
        }

        public function cetaklaporan()
        {
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            $data['title'] = 'Sarpras Administrator | Laporan';
            $data['dt_keluar'] = $this->M_barang->cetaklpr($bulan,$tahun);
            $this->cetak_temp->load('templates/cetak','admin/laporan/cetaklaporan',$data);
        }

    }