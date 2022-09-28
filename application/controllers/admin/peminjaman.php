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
            $data['title'] = 'Sarpras Administrator | Peminjaman';
            $data['dt_keluar'] = $this->M_barang->getpinjam();
            //$data['konfirmasi'] = $this->M_barang->getpinjamid($id);

            $this->admin_temp->load('templates/admin','admin/peminjaman/index',$data);
        }

        public function detailpinjam($id)
        {
            $data['title'] = 'Sarpras Administrator | Konfirmasi Peminjaman';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $this->admin_temp->load('templates/admin','admin/peminjaman/detail',$data);
        }

        public function konfirmasi()
        {

            $status = $this->input->post('status');
            $penomoran = $this->input->post('penomoran');
            /* $konfirm = [
                'status' => $this->input->post('status')
            ]; */

            $this->db->set('status',$status);
            $this->db->set('penomoran',$penomoran);
            $this->db->where('id_barang_keluar',$this->input->post('id_barang_keluar'));
            $this->db->update('barang_pinjam');

            /*  $this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">
            Status Peminjaman sudah diperbarui!
            </div>'); */
            //redirect('admin/peminjaman/detailpinjam/'.$this->uri->segment(4));
            echo '<script>alert("Data Peminjaman berhasil diupdate!")</script>';
            redirect($_SERVER['HTTP_REFERER']);
            //redirect('admin/peminjaman/detailpinjam');
        }

        public function cetak($id)
        {
            $data['title'] = 'Surat Peminjaman Barang';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $this->cetak_temp->load('templates/cetak','admin/peminjaman/cetakpj',$data);
        }

    }
