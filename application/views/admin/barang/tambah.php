<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><?= $title ?></h3>
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <!-- <div class="col-md-12">
                        <a class="btn btn-primary" href="" id="tb-databrg"><i class="fa fa-plus"></i> Tambah Data Barang</a>
                    </div> -->
                </div>
                    <!-- /.row -->
                <div class="row" style="margin-top: 10px;">
                <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Tambah Data Barang
                                </div>
                                <div class="panel-body">
                                <form method="POST" action="<?= base_url('admin/barang/tbproses') ?>">
                                                <div class="form-group">
                                                    <label>Kode Barang</label>
                                                    <input class="form-control" type="text" name="kode_barang" required>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label>Nomor Invent</label>
                                                    <input class="form-control" type="text" name="noinvent" required>
                                                </div> -->
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input class="form-control" type="text" name="nama_barang">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control" name="nama_kategori">
                                                        <option>-Pilih Kategori-</option>
                                                        <?php foreach ($kategori as $key){?>
                                                            <option value="<?= $key['id_kategori'] ?>"><?= $key['nama_kategori'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Merk</label>
                                                    <input class="form-control" type="text" name="merk">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kondisi</label>
                                                        <label class="checkbox-inline">
                                                        <input type="radio" name="kondisi" value="Baik">
                                                        <label>Baik</label>
                                                        <input type="radio" name="kondisi" value="Rusak">
                                                        <label>Rusak</label>
                                                    </label>
                                                    <!-- <label class="checkbox-inline">
                                                        <input type="radio">
                                                    </label> -->
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input class="form-control" type="number" name="jumlah">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Beli</label>
                                                    <input class="form-control" type="date" name="tgl_pembelian">
                                                </div>
                                                <input class="btn btn-primary" type="submit" value="Tambah Data">
                                </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                </div>
</div>

