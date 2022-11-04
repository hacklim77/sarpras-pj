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

        public function konfirmasi($id = null)
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['konfirmasi'] = $this->M_barang->getpinjamstat($id);

            $status = $this->input->post('status');
            $penomoran = $this->input->post('penomoran');
            $id_barang_pinjam = $this->input->post('id_barang_pinjam');

            $this->db->trans_start();

            $this->db->set('status',$status);
            $this->db->set('penomoran',$penomoran);
            $this->db->where('id_barang_pinjam',$id_barang_pinjam);
            $this->db->update('barang_pinjam');

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata('Msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Status Barang</strong> Gagal diupdate!
                </div>');
                redirect($_SERVER['HTTP_REFERER']);
            } else{
                $this->session->set_flashdata('Msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Status Barang</strong> Berhasil diupdate!
                </div>');
                redirect($_SERVER['HTTP_REFERER']);
            }


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
