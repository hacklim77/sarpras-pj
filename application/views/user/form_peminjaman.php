<div class="card">
    <div class="card-header text-center" style="background-color: purple; color:white">
        <h3>Form Peminjaman</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('peminjaman/pinjam') ?>" method="post">
            <div class="form-row">
                <input type="hidden" name="no_keluar" id="no_keluar">
                    <div class="form-group col-md-6">
                        <label>Nama Peminjam</label>
                        <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" autocomplete="off" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" autocomplete="off" required>
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" >
                    <label>Tanggal Pinjam</label>
                    <input type="text" class="form-control pinjam" name="tgl_keluar" id="pilihtgl" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                        <label>Lama Pinjam</label>
                    <div class="input-group">
                        <input name="lamapinjam" id="lamapinjam" type="number" class="form-control" value="0" min="0" required>
                        <div class="input-group-addon bgc-white">
                        hari
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <table class="table">
                    <tr>
                        <th>Barang yang dipinjam</th>
                        <th>Jumlah</th>
                        <th></th>
                    </tr>
                    <tbody id="barangpinjam">
                    </tbody>
                </table>
                    <div class="mb-1">
                        <p>
                            <i>untuk memasukkan barang yang akan dipinjam silahkan klik tombol <span class="ti-new-window" style="color: #0f9aee;"></span> pada list barang disamping.</i>
                        </p>
                    </div>
            </div>

            <div class="form-group">
                <label class="fw-500">Keterangan Peminjaman</label>
                <textarea name="keterangan" class="form-control" rows="5" required></textarea>
            </div>
            <input type="hidden" name="getbarang" id="getbarang">
            <button type="submit" class="btn btn-primary">Pinjam</button>
            </form>
    </div>
</div>
<script>
    $(function() {
        $( "#pilihtgl" ).datepicker({
            //beforeShowDay: $.datepicker.noWeekends,
            dateFormat: 'yy-mm-dd',
            minDate:1
        });
    });
    </script>
