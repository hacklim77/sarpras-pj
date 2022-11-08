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