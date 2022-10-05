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

        public function getbarangid($id)
        {
            return $this->db->get_where('barang', array('id_barang' => $id))->result_array();
        }

        public function brgpinjam()
        {
            return $this->db->get('barang_pinjam')->result_array();
        }

        public function countbarang()
        {
            return $this->db->count_all('barang');
        }

        public function getpinjam()
        {
            /* $this->db->select('*');
            $this->db->from('barang_keluar');
            $this->db->join('barang_pinjam','barang_pinjam.id_barang_keluar = barang_keluar.id_'); */
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
        }

        public function getpinjamid($id)
        {
            $q = $this->db->query("
                SELECT barang_keluar.no_keluar,barang_pinjam.id_barang_keluar, barang_keluar.nama_peminjam,barang_keluar.tgl_keluar,barang_keluar.tgl_kembali,barang_keluar.status_kembali,barang.nama_barang,barang_pinjam.jumlah,barang_pinjam.status,barang_pinjam.penomoran,barang_pinjam.id_barang,barang_pinjam.id_barang_pinjam
                FROM barang_pinjam
                JOIN barang_keluar ON barang_pinjam.id_barang_keluar=barang_keluar.id_barang_keluar
                JOIN barang ON barang_pinjam.id_barang=barang.id_barang
                WHERE barang_pinjam.id_barang_keluar = ".$id."
            ");

            return $q->result_array();
        }

        public function getpj($id)
        {
            $q = $this->db->query("
            SELECT DISTINCT barang_keluar.no_keluar,barang_keluar.nama_peminjam FROM barang_pinjam
            JOIN barang_keluar ON barang_pinjam.id_barang_keluar = barang_keluar.id_barang_keluar
            WHERE barang_pinjam.id_barang_keluar = ".$id."
            ");

            return $q->result_array();
        }

        public function getmonth($bulan,$tahun)
        {
            $k = $this->db->query("
                SELECT * FROM barang_keluar
                WHERE YEAR(tgl_keluar) = '$tahun' AND MONTH(tgl_keluar) = '$bulan'
            ");

            return $k->result_array();
        }


    }