<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                <h3 class="page-header text-center"><?= $title ?></h3>
                                <?= $this->session->flashdata('alert') ?>
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
                                        <!-- <th scope="col">Konfirmasi</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <form method="POST" action="<?= base_url('admin/peminjaman/konfirmasi')?>"> -->
                                            <?php $no=1; foreach ($konfirmasi as $key) :?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <!-- <td><?= $key['nama_peminjam'] ?></td>
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
                                                    <!-- <td>
                                                        <select name="status" class="form-control">
                                                            <option>-- Pilih Status --</option>
                                                            <option value="0">Proses ACC</option>
                                                            <option value="1">ACC Pinjam</option>
                                                            <option value="2">Kembali</option>
                                                        </select>
                                                </td> -->
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <!-- <input class="btn btn-success" style="float: right;" type="submit" value="Update Status"> -->
                                <!-- </form> -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                </div>
</div>
<script>
    window.print();
</script>

