<?php

    class Peminjaman extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
        }

        public function index()
        {
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();
            $data['nomor'] = $this->M_barang->getnomor();
            $data['pinjam'] = $this->M_barang->getbarangpinjam();
            $this->user_temp->load('templates/core','user/index',$data);
        }

        public function getbarang()
        {
            $data['title'] = 'Peminjaman Sarpras';
            
           /*  $data['barang'] = $this->M_barang->getbarang(); */
            
            $this->user_temp->load('templates/core','user/index',$data);
        }
        
        public function getcek()
        {
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();
            $data['nomor'] = $this->M_barang->getnomor();
            $data['pinjam'] = $this->M_barang->getbarangpinjam();
           /*  $data['barang'] = $this->M_barang->getbarang(); */
            
            $this->user_temp->load('templates/core','user/coba',$data);
        }

        public function add()
        {
            $this->load->view('user/add');
        }

    }