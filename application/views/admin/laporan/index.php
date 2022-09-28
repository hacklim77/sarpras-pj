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
                                    <form class="form-inline" method="POST" style="margin-bottom: 10px;" action="<?= base_url('admin/laporan')  ?>">
                                        <!-- <input type="month" name="pilih"> -->
                                        <select class="form-control" name="bulan">
                                                <option>--Pilih Bulan--</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        <?php
                                            $v = 1970;
                                            echo '<select class="form-control" name="tahun">';
                                            foreach (range(date('Y'),$v) as $key) {
                                                echo '<option value="'.$key.'">'.$key.'</option>';
                                            }
                                            echo '</select>'
                                            ?>
                                        <input class="btn btn-primary btn-sm" type="submit" value="cari">
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>No Keluar</th>
                                                    <th>Nama Peminjam</th>
                                                    <th>No. Handphone</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Keterangan</th>
                                                    <!-- <th>Status Kembali</th> -->
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
                                                    <!-- <td>
                                                        <?php
                                                        if ($key['status_kembali'] == 0) {
                                                            echo '<span class="btn btn-sm btn-danger">Belum Kembali</span>';
                                                        } else{
                                                            echo '<span class="btn btn-sm btn-success">Sudah Kembali</span>';
                                                        }
                                                        ?>
                                                    </td> -->
                                                    <td align="center">
                                                        <a class="btn btn-sm btn-primary" href="<?= base_url('admin/peminjaman/detailpinjam/').$key['id_barang_keluar'] ?>" id="detailpinjam">Cek</a>
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

