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

        public function cetaklaporan($id)
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Surat Peminjaman Barang';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $this->cetak_temp->load('templates/cetak','admin/peminjaman/cetakpj',$data);
        }

    }