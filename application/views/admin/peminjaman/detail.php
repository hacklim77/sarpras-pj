<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><?= $title ?></h3>
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                <?= $this->session->flashdata('alert') ?>
                                <a class="btn btn-primary" target="_blank" style="float: right;" href="<?= base_url('admin/peminjaman/cetak/').$this->uri->segment(4) ?>"><i class="fa fa-print"></i> Cetak</a>
                                <?php foreach ($pj as $k):?>
                                <table>
                                <tr>
                                    <td style="padding: 5px;">Nama Peminjam</td>
                                    <td style="padding: 5px;">:</td>
                                    <td style="padding: 5px;"><?= $k['nama_peminjam'] ?></td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px;">Nomor Keluar</td>
                                    <td style="padding: 5px;">:</td>
                                    <td style="padding: 5px;"><?= $k['no_keluar'] ?></td>
                                </tr>
                                </table>
                                <?php endforeach ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <!-- <th scope="col">Nama</th>
                                        <th scope="col">No Keluar</th> -->
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Tanggal Kembali</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Konfirmasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($konfirmasi as $key) {?>
                                        <!-- <form method="POST" action="<?= base_url('admin/peminjaman/konfirmasi/'.$key['id_barang_pinjam'])?>"> -->
                                                <input type="hidden" name="id_barang_keluar" value="<?= $key['id_barang_keluar'] ?>">
                                                <!-- <input type="hidden" name="id_barang_pinjam" value="<?= $key['id_barang_pinjam'] ?>">
                                                <input type="hidden" name="id_barang[]" value="<?= $key['id_barang'] ?>"> -->
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                <!--  <td><?= $key['nama_peminjam'] ?></td>
                                                    <td><?= $key['no_keluar'] ?></td> -->
                                                    <td><?= $key['nama_barang'] ?></td>
                                                    <td><?= $key['jumlah'] ?></td>
                                                    <td><?= $key['tgl_keluar'] ?></td>
                                                    <td><?= $key['tgl_kembali'] ?></td>
                                                    <td>
                                                        <?php
                                                            if ($key['status'] == 0) {
                                                                echo '<span class="btn btn-xs btn-warning">Menunggu Konfirmasi</button>';
                                                            } elseif ($key['status'] == 1) {
                                                                echo '<button class="btn btn-xs btn-primary">ACC dipinjam</button>';
                                                            } elseif ($key['status'] == 2) {
                                                                echo '<button class="btn btn-xs btn-primary">Barang Sudah Kembali</button>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                    <a href=""></a>
                                                    <button class="btn btn-success btn-md"  data-toggle="modal" data-target="#editstat<?= $key['id_barang_pinjam'] ?>"><span>Pilih</span></button>
                                                    <!-- <button class="btn btn-success btn-md"  data-toggle="modal" data-target="#editstat"><span>Pilih</span></button> -->
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- <input class="btn btn-success" style="float: right;" type="submit" value="Update Status"> -->


                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                        <div class="card">
                                    <div class="card-body">
                                        <!-- Modal -->
                                        <?php foreach($konfirmasi as $key){ ?>
                                        <div class="modal fade" id="editstat<?= $key['id_barang_pinjam'] ?>">
                                        <!-- <div class="modal fade" id="editstat<?= $key->id_barang_pinjam ?>"> -->
                                            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Status Pinjam</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <?= form_open_multipart('admin/peminjaman/konfirmasi') ?>
                                                        <!-- <input type="text" name="id_barang_pinjam" value="<?= $key['id_barang_pinjam'] ?>"> -->
                                                        <!-- <input type="text" name="id_barang_pinjam" value="<?= $key->id_barang_pinjam ?>"> -->
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="penomoran" value="<?= $key['penomoran'] ?>" placeholder="Masukkan Nomor Inventaris">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="status" class="form-control">
                                                                    <option>-- Pilih Status --</option>
                                                                    <option value="0">Proses ACC</option>
                                                                    <option value="1">ACC Pinjam</option>
                                                                    <option value="2">Kembali</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" value="Update" />
                                                    </div>
                                                    <?= form_close() ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                        </div>
                </div>
</div>

