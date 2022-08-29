<?php

    class M_barang extends CI_Model{

        public function getbarang()
        {
            $this->db->select('*');
            $this->db->from('barang');
            //$this->db->like('Category', 'self');
            $this->db->not_like('jumlah', '0');
            return $this->db->get()->result_array();         
        }

        public function getnomor()
        {
            $sql = $this->db->query("SELECT * FROM penomoran inner join barang on penomoran.id_barang=barang.id_barang where penomoran.id_lokasi = '1' ORDER BY penomoran.id_barang ASC");
            return $sql->result_array();
        }

        public function getbarangpinjam()
        {
            $sql = $this->db->query("SELECT * from barang_pinjam inner join barang_keluar on barang_keluar.id_barang_keluar=barang_pinjam.id_barang_keluar where barang_keluar.status_kembali = '0' and barang_keluar.tgl_kembali > 'date(Y-m-d)' ORDER BY barang_pinjam.id_barang ASC");
            return $sql->result_array();
        }

        public function getidbarang()
        {
            
        }
    }