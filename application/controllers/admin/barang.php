<?php

    class Barang extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
            $this->load->model('Crud');
            $this->load->library('session','form_validation');
            $this->load->helper('url');
        }

        public function index()
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Sarpras Administrator | Barang';
            $data['barang'] = $this->M_barang->getallbarang();

            $this->admin_temp->load('templates/admin','admin/barang/index',$data);
        }

        public function tambah()
        {
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Sarpras Administrator | Tambah Data Barang';
            $data['kategori'] = $this->M_barang->getkategori();
            $this->admin_temp->load('templates/admin','admin/barang/tambah',$data);
        }

        public function edit($id)
        {
            /* $id = $this->session->userdata('id_barang');
            $where = array('id_barang' => $id); */
            cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array();
            $data['title'] = 'Sarpras Administrator | Edit Data Barang';
            $data['kategori'] = $this->M_barang->getkategori();
            $data['barang'] = $this->M_barang->getbarangid($id);
            $this->admin_temp->load('templates/admin','admin/barang/edit',$data);
        }

        public function update()
        {
            /* cek_not_login();
            $data['admin'] = $this->db->get_where('user',['nama_user' => $this->session->userdata('nama_user')])->row_array(); */
            $id = $this->input->post('id_barang');
            $kode_barang = $this->input->post('kode_barang');
            // $noinvent = $this->input->post('noinvent');
            $nama_barang = $this->input->post('nama_barang');
            $nama_kategori = $this->input->post('nama_kategori');
            $merk = $this->input->post('merk');
            $kondisi = $this->input->post('kondisi');
            $jumlah = $this->input->post('jumlah');
            $tgl_pembelian = $this->input->post('tgl_pembelian');
            $status = 1;

            $data = array (
                'kode_barang' => $kode_barang,
                // 'noinvent' => $noinvent,
                'nama_barang' => $nama_barang,
                'id_kategori' => $nama_kategori,
                'merk' => $merk,
                'kondisi' => $kondisi,
                'jumlah' => $jumlah,
                'tgl_pembelian' => $tgl_pembelian,
                'status' => $status
            );

            $where = array(
                'id_barang' => $id
            );

            $this->Crud->update($where,$data,'barang');
            $this->session->set_flashdata('Msg','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Data Barang</strong> berhasil diupdate!
            </div>');
            redirect('admin/barang');

        }

        public function tbproses()
        {
            $kode_barang = $this->input->post('kode_barang');
            // $noinvent = $this->input->post('noinvent');
            $nama_barang = $this->input->post('nama_barang');
            $nama_kategori = $this->input->post('nama_kategori');
            $merk = $this->input->post('merk');
            $kondisi = $this->input->post('kondisi');
            $jumlah = $this->input->post('jumlah');
            $tgl_pembelian = $this->input->post('tgl_pembelian');
            $status = 1;

            $data = array (
                'kode_barang' => $kode_barang,
                // 'noinvent' => $noinvent,
                'nama_barang' => $nama_barang,
                'id_kategori' => $nama_kategori,
                'merk' => $merk,
                'kondisi' => $kondisi,
                'jumlah' => $jumlah,
                'tgl_pembelian' => $tgl_pembelian,
                'status' => $status
            );

            $this->Crud->add($data,'barang');

            $this->session->set_flashdata('Msg','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Data Barang</strong> berhasil ditambahkan!
            </div>');
            redirect('admin/barang');

        }
    }
