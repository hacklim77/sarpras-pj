<?php

    class M_barang extends CI_Model{

        public function getbarang()
        {
            return $this->db->get('barang')->result_array();

            /* $this->db->select('*');
            $this->db->from('barang');
            $this->db->not_like('jumlah', '0');
            return $this->db->get()->result_array(); */
        }

        public function getallbarang()
        {
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('kategori','kategori.id_kategori = barang.id_kategori');
            $query = $this->db->get()->result_array();
            return $query;
        }

        public function countbarang()
        {
            return $this->db->count_all('barang');
        }

        public function getpinjam()
        {
            return $this->db->get('barang_keluar')->result_array();
        }

        public function getkategori()
        {
            return $this->db->get('kategori')->result_array();
        }

        public function getnomor()
        {
            $sql = $this->db->query("SELECT * FROM penomoran inner join barang on penomoran.id_barang=barang.id_barang where penomoran.id_lokasi = '1' ORDER BY penomoran.id_barang ASC");
            return $sql->result_array();
        }

        public function getbarangpinjam($tgl)
        {
            $sql = $this->db->query("SELECT * from barang_pinjam inner join barang_keluar on barang_keluar.id_barang_keluar=barang_pinjam.id_barang_keluar where barang_keluar.status_kembali = '0' and barang_keluar.tgl_kembali > '$tgl' ORDER BY barang_pinjam.id_barang ASC");
            return $sql->result_array();
           /*  $this->db->select('*');
            $this->db->from('barang_pinjam');
            $this->db->join('barang_keluar','barang_keluar.id_barang_keluar = barang_pinjam.id_barang_keluar');
            $this->db->join('barang','barang_pinjam.id_barang = barang.id_barang');
            $this->db->where('barang_pinjam.id_barang_keluar=53');
            $this->db->where('barang_keluar.tgl_keluar='.$dt.'');
            $query = $this->db->get();
            return $query; */
           /*  $this->db->select('*');
            $this->db->from('barang_pinjam');
            $this->db->join('barang_keluar','barang_keluar.id_barang_keluar = barang_pinjam.id_barang_keluar');
            $this->db->join('barang','barang_pinjam.id_barang = barang.id_barang');
            $this->db->where('barang_pinjam.id_barang_keluar=53');
            $this->db->where('barang_keluar.tgl_keluar='.$dt.'');
            $query = $this->db->get();
            return $query; */

           /*  $q = $this->db->query("SELECT * FROM barang_pinjam
            JOIN barang_keluar ON barang_keluar.id_barang_keluar = barang_pinjam.id_barang_keluar
            WHERE barang_keluar.id_barang_keluar =53");

            return $q->result_array(); */

        }


    }