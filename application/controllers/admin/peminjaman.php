<?php

    class Peminjaman extends CI_Controller
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
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Sarpras Administrator | Peminjaman';
            $data['dt_keluar'] = $this->M_barang->getpinjam();
            //$data['konfirmasi'] = $this->M_barang->getpinjamid($id);

            $this->admin_temp->load('templates/admin','admin/peminjaman/index',$data);
        }

        public function detailpinjam($id)
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Sarpras Administrator | Konfirmasi Peminjaman';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $data['upstat'] = $this->M_barang->getidpj($id);
            $data['status'] = [0,1,2];
            $this->admin_temp->load('templates/admin','admin/peminjaman/detail',$data);
        }

        public function konfirmasi($id)
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['konfirmasi'] = $this->M_barang->getpinjamstat($id);
            // $data['upstat'] = $this->M_barang->getidpj($id);
            $status = $this->input->post('status');
            $penomoran = $this->input->post('penomoran');
            $id_barang_pinjam = $this->input->post('id_barang_pinjam');

            $this->db->set('status',$status);
            $this->db->set('penomoran',$penomoran);
            $this->db->where('id_barang_pinjam',$id_barang_pinjam);
            $this->db->update('barang_pinjam');

            redirect($_SERVER['HTTP_REFERER']);

            /* if ($u == true) {
                echo "<script type='text/javascript'>
                    alert('Data Peminjaman berhasil diupdate!');
                    window.location.href = '".$_SERVER['HTTP_REFERER']."';
                </script>";
            } else{
                echo "<script type='text/javascript'>
                    alert('Data Peminjaman gagal diupdate!');
                    window.location.href = '".$_SERVER['HTTP_REFERER']."';
                </script>";
            } */

        }

        public function cetak($id)
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Surat Peminjaman Barang';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $this->cetak_temp->load('templates/cetak','admin/peminjaman/cetakpj',$data);
        }

    }
