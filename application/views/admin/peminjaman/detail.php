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
                                <?= $this->session->flashdata('Msg') ?>
                                <a class="btn btn-primary" target="_blank" style="float: right;" href="<?= base_url('admin/peminjaman/cetak/').$this->uri->segment(4) ?>"><i class="fa fa-print"></i> Cetak</a>
                                <?php foreach ($pj as $k):?>
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <table style="width:40%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 35%;">Nama Peminjam</td>
                                                                <td style="width: 3%;">:</td>
                                                                <td style="width: 57.7188px;">Your Name</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 57.6406px;">NIM</td>
                                                                <td style="width: 57.6406px;">:</td>
                                                                <td style="width: 57.7188px;">1896498</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 57.6406px;">Divisi</td>
                                                                <td style="width: 57.6406px;">:</td>
                                                                <td style="width: 57.7188px;">Prodi/UKM</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td style="width: 50%;">
                                                    <table style="width:40%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 35%;">Nomor Keluar</td>
                                                                <td style="width: 3%;">:</td>
                                                                <td style="width: 58.7188px;">xxxxxxxxx</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 58.6406px;">No Handphone</td>
                                                                <td style="width: 58.6406px;">:</td>
                                                                <td style="width: 58.7188px;">08xxxxxxxx</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 58.6406px;">&nbsp;</td>
                                                                <td style="width: 58.6406px;">&nbsp;</td>
                                                                <td style="width: 58.7188px;">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                        <th scope="col">Nomor Inventaris</th>
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
                                                    <td><?= nl2br($key['kode_barang']) ?></td>
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

                                                        <?= form_open_multipart('admin/peminjaman/konfirmasi/'.$key['id_barang_pinjam']) ?>
                                                        <input type="hidden" name="id_barang_pinjam" value="<?= $key['id_barang_pinjam'] ?>">
                                                        <!-- <input type="text" name="id_barang_pinjam" value="<?= $key->id_barang_pinjam ?>"> -->
                                                        
                                                        <div class="form-group">
                                                            <label>Jumlah Pinjam</label>
                                                            <input class="form-control" type="number" name="jumlah" value="<?= $key['jumlah'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor Inventaris</label>
                                                            <textarea class="form-control" rows="3" name="penomoran"><?= $key['kode_barang'] ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="status" class="form-control">
                                                                    <option>-- Pilih Status --</option>
                                                                    <option <?php if ($key['status'] == 0) { echo 'selected'; }?> value="0">Dibatalkan</option>
                                                                    <option <?php if ($key['status'] == 1) { echo 'selected'; }?> value="1">Dipinjamkan</option>
                                                                    <option <?php if ($key['status'] == 2) { echo 'selected'; }?> value="2">Dikembalikan</option>
                                                                    <!-- <option value="0">Proses ACC</option>
                                                                    <option value="1">ACC Pinjam</option>
                                                                    <option value="2">Kembali</option> -->
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

