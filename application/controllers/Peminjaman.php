<?php

    class Peminjaman extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
            $this->load->model('Crud');

            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();
            $data['nomor'] = $this->M_barang->getnomor();
            $data['pinjam'] = $this->M_barang->getbarangpinjam();

            //$data['tgl'] = $this->input->post('tgl');

            $this->user_temp->load('templates/core','user/index',$data);
        }

        public function listbarang()
        {
            $data['barang'] = $this->M_barang->getbarang();
            //$data['stok'] = $this->M_barang->getidbarang();
            $data['tgl'] = $this->input->post('tgl');
            $this->load->view('user/listbarang',$data);
        }

        public function form_pinjam()
        {
            $data['barang'] = $this->M_barang->getbarang();
            //$data['stok'] = $this->M_barang->getidbarang();
            //$data['tgl'] = $this->input->post('tgl');
            $this->load->view('user/form_peminjaman',$data);
        }

        public function getcek()
        {
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();
           /*  $data['nomor'] = $this->M_barang->getnomor();
            $data['pinjam'] = $this->M_barang->getbarangpinjam(); */
           /*  $data['barang'] = $this->M_barang->getbarang(); */

            $this->user_temp->load('templates/core','user/listbarang',$data);
        }
        public function pinjam()
        {
            $data['title'] = 'Peminjaman Sarpras';

            $unik = date('dmy');
            $nokeluar = $unik.rand(100,300);
            $nama_peminjam = $this->input->post('nama_peminjam');
            $nohp =  $this->input->post('nohp');
            $tglkeluar = $this->input->post('tgl_keluar');
            $lamapinjam = $this->input->post('lamapinjam');
            $hari = $lamapinjam." days";
            $barangpinjam = $this->input->post('getbarang') ;
            $jumlah = $this->input->post('jumlah[]');
            $keterangan = $this->input->post('keterangan');
            $status = 0;

            $pinjam = explode("/",$barangpinjam);

            foreach ($pinjam as $key => $value) {
                //print_r($value);
                $var = explode(":",$value);
                $idbrg[$var[0]] = $var[1];
            }

            $data = array(
                'no_keluar' => $nokeluar,
                'nama_peminjam' => $nama_peminjam,
                'nohp' => $nohp,
                'tgl_keluar' => $tglkeluar,
                'tgl_kembali' => date('Y-m-d',strtotime($hari,strtotime($tglkeluar))),
                'keterangan' => $keterangan,
                'status_kembali' => $status
            );

            $this->user_temp->load('templates/core','user/index',$data);

            if ($this->session->userdata('tgl_keluar') == $data['tgl_keluar'] && $this->session->userdata('tgl_kembali') == $data['tgl_kembali'])
            {
                echo "alert('ada yang pinjam')";
            } else{
                $this->Crud->add($data,'barang_keluar');
            }

            $lastid = $this->db->insert_id();

            $id_barang_keluar = $lastid;

            foreach ($idbrg as $key => $value) {

                $data = array(
                    'id_barang_keluar' => $id_barang_keluar,
                    'id_barang' => $key,
                    'jumlah' => $value
                );
               $this->Crud->add($data,'barang_pinjam');
            }
            echo "<script>alert('peminjaman berhasil')</script>";
            redirect('peminjaman');
        }

    }