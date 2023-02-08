<?php

    class Peminjaman extends CI_Controller{

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
            $data['title'] = 'Peminjaman Sarpras';
            $data['barang'] = $this->M_barang->getbarang();

            //$data['tgl'] = $this->input->post('tgl');

            $this->user_temp->load('templates/core','user/index',$data);
        }

        public function listbarang()
        {
            $data['tgl'] = $this->input->post('tgl');
            $data['barang'] = $this->M_barang->getbarang();
            $data['avail'] = $this->M_barang->getbarangpinjam($data['tgl']);
            $data['nomor'] = $this->M_barang->getnomor();


            $this->load->view('user/listbarang',$data);
        }

        public function join()
        {
            $dt = '2022-09-21';
            $join = $this->M_barang->getbarangpinjam($dt);

            print_r($join);
        }

        public function form_pinjam()
        {
            $data['barang'] = $this->M_barang->getbarang();
            
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
            $surat = $_FILES['lampiran'];

            if ($surat != '') {
                $this->load->library('upload');
                $config = array(
                    'upload_path' => './surat/',
                    'allowed_types' => 'pdf|jpg|jpeg',
                    'overwrite' => true,
                    'max_size' => 600,
                    'file_name' => 'Lampiran-'.$nama_peminjam.'-'.$tglkeluar
                );
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('lampiran')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                } else{
                    $this->upload->do_upload('lampiran');
                    $sr = $this->upload->data();
                    $surat = $sr['file_name'];
                }
            }

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
                'status_kembali' => $status,
                'surat' => $surat
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

            $this->session->set_flashdata('Msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Permintaan Peminjaman berhasil dikirimkan!</strong>
                <br><i>Silahkan konfirmasi alat ke ruang Sarpras</i>
                </div>');
                redirect('peminjaman');

            /* echo "<script type='text/javascript'>
                    alert('Data Peminjaman berhasil diupdate!');
                    window.location.href = '".$_SERVER['HTTP_REFERER']."';
                </script>"; */
            //redirect('peminjaman');
        }

    }