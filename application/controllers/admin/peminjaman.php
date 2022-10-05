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
            $id_barang_keluar = $this->input->post('id_barang_keluar');

            $this->db->set('status',$status);
            $this->db->where('id_barang_keluar',$id_barang_keluar);
            $q = $this->db->update('barang_pinjam');

            if ($q == false) {
                echo "gagal";
            } else {

                echo "
                <script type='text/javascript'>
                    alert('Data Peminjaman berhasil diupdate!');
                    window.location.href = '".$_SERVER['HTTP_REFERER']."';
                </script>";

            }
            /*
            $this->db->set('penomoran',$penomoran);
            $this->db->where('id_barang',$id_barang);
            $this->db->having('id_barang_keluar',$id_barang_keluar);
            $this->db->update('barang_pinjam'); */

            /* $this->db->where('id_barang',$id_barang);
            $this->db->update('barang_pinjam'); */
            //$this->db->update_batch('barang_pinjam',$data,'id_barang');
           /*  $q = $this->db->query("
                UPDATE barang_pinjam SET penomoran='$penomoran',status=$status
                WHERE id_barang_keluar=$id_barang_keluar AND id_barang=[$d]
            "); */

            /* $q = $this->db->query("
                UPDATE barang_pinjam SET penomoran='$penomoran2'
                WHERE penomoran = '$penomoran'
            "); */

            //echo($q);


        }

        public function cetak($id)
        {
            $data['title'] = 'Surat Peminjaman Barang';
            $data['pj'] = $this->M_barang->getpj($id);
            $data['konfirmasi'] = $this->M_barang->getpinjamid($id);
            $this->cetak_temp->load('templates/cetak','admin/peminjaman/cetakpj',$data);
        }

    }
