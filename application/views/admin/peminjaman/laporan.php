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
                                    <form class="form-inline" action="">
                                        <select class="form-control" name="" id="">
                                            <option value="">Bulan</option>
                                        </select>
                                        <select class="form-control" name="" id="">
                                            <option value="">Tahun</option>
                                        </select>
                                        <input class="btn btn-primary btn-sm" type="submit" value="cari">
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>No Keluar</th>
                                                    <th>Nama Peminjam</th>
                                                    <th>No. Handphone</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Keterangan</th>
                                                    <th>Status Kembali</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($dt_keluar as $key) {?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $key['no_keluar'] ?></td>
                                                    <td><?= $key['nama_peminjam'] ?></td>
                                                    <td><?= $key['nohp'] ?></td>
                                                    <td><?= $key['tgl_keluar'] ?></td>
                                                    <td><?= $key['tgl_kembali'] ?></td>
                                                    <td><?= $key['keterangan'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($key['status_kembali'] == 0) {
                                                            echo '<span class="btn btn-sm btn-danger">Belum Kembali</span>';
                                                        } else{
                                                            echo '<span class="btn btn-sm btn-success">Sudah Kembali</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/peminjaman/detailpinjam/').$key['id_barang_keluar'] ?>" id="detailpinjam">Konfirmasi</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                </div>
</div>

