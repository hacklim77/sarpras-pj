<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><?= $title ?></h3>
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-primary" href="<?= base_url('admin/barang/tambah') ?>" id="tb-databrg"><i class="fa fa-plus"></i> Tambah Data Barang</a>
                    </div>
                </div>
                    <!-- /.row -->
                <div class="row" style="margin-top: 10px;">
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="databarang">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Merk</th>
                                                    <th>Kondisi</th>
                                                    <th>Jumlah</th>
                                                    <th>Tanggal Pembelian</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($barang as $key) {?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $key['kode_barang'] ?></td>
                                                    <td><?= $key['nama_barang'] ?></td>
                                                    <td><?= $key['nama_kategori'] ?></td>
                                                    <td><?= $key['merk'] ?></td>
                                                    <td><?= $key['kondisi'] ?></td>
                                                    <td><?= $key['jumlah'] ?></td>
                                                    <td><?= $key['tgl_pembelian'] ?></td>
                                                    <td align="center">
                                                        <?php
                                                        if ($key['status'] == 0) {
                                                            echo '<span style="btn btn-sm btn-danger">Stok Tidak Tersedia</span>';
                                                        } else{
                                                            echo '<span class="btn btn-sm btn-success">Stok Tersedia</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-o"></i></a>
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

