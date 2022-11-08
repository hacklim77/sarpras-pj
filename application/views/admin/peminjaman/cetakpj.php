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
                                <h3 class="text-center mt-3"><?= $title ?></h3>
                                <h4 class="text-center mt-3">Sarana Prasarana STIKES Nasional</h4>
                                <?= $this->session->flashdata('alert') ?>
                                <?php foreach ($pj as $k):?>
                                <table class="border-top-0">
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
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Tanggal Kembali</th>
                                        <th scope="col">Nomor Inventaris</th>
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
                                                    <td><?= nl2br($key['penomoran'])?></td>
                                                    <td>
                                                        <?php
                                                            if ($key['status'] == 0) {
                                                                echo 'Tidak Dipinjamkan';
                                                            } elseif ($key['status'] == 1) {
                                                                echo 'Dipinjamkan';
                                                            } elseif ($key['status'] == 2) {
                                                                echo 'Dikembalikan';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <table width="100%">
                                        <tr>
                                            <th width="30%"></th>
                                            <th width="35%"></th>
                                            <th width="35%" style="text-align:center;">
                                            Petugas
                                        </th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td style="text-align:center;"><br><br><?= $this->session->nama_user ?></td>
                                        </tr>
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

