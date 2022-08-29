<?php

    class Peminjaman extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
            $this->load->model('Crud');
        }

        public function index()
        {
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();
            $data['nomor'] = $this->M_barang->getnomor();
            $data['pinjam'] = $this->M_barang->getbarangpinjam();
            $this->user_temp->load('templates/core','user/index',$data);
        }
        
        public function listbarang()
        {
            $data['barang'] = $this->M_barang->getbarang();
            //$data['stok'] = $this->M_barang->getidbarang();
            $this->load->view('user/listbarang',$data);
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

            $nokeluar = "11111";
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
            
            $this->Crud->add($data,'barang_keluar');
            
            $lastid = $this->db->insert_id();

            //$lastid = $this->Crud->read('barang_keluar',$data)->row();

            //print_r($this->db->last_query());

            $id_barang_keluar = $lastid;
            
            foreach ($idbrg as $key => $value) {

                $data = array(
                    'id_barang_keluar' => $id_barang_keluar,
                    'id_barang' => $key,
                    'jumlah' => $value
                );
               $this->Crud->add($data,'barang_pinjam');

               //$stok = $this->db->get_where('barang',['id_barang' => $this->session->userdata('jumlah')])->row_array();
               
               //$pj = $this->db->get_where('barang_pinjam',['id_barang' => $this->session->userdata('jumlah')])->row_array();
               
               //$sisa = $stok - $pj;
            }
            //print($stok);


            //print($sisa);

            //$this->db->query("UPDATE barang SET jumlah='$sisa' WHERE id_barang=['id_barang']");

            //return $upt;
            /* $stok = $this->db->query("SELECT * FROM barang WHERE id_barang='$key'");

            $sisa = $stok - $value;


            return $upt;
            $where = array('id_barang' => $key);
            $stok = $this->Crud->updatestok($where,'barang'); */
            


            /* $stok = $this->M_barang->getidbarang($data['id_barang']);
            var_dump($stok); */    

            redirect('peminjaman');
        }

    }