<?php

    class Peminjaman extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            
        }

        public function index()
        {
            $data['title'] = 'Peminjaman Sarpras';
            //$data['subhead'] = 'Dashboard';
            $this->user_temp->load('templates/core','user/index',$data);
        }

    }