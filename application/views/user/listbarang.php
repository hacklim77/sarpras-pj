<div class="card">
    <div class="card-header text-center" style="background-color: purple; color:white">
        <h3>List Barang Yang Tersedia</h3>
        <h5 id="cektanggal">test</h5>
    </div>
    <div class="scroll-bg">
        <div class="scroll-div">
            <ul class="list-group list-group-flush">
                <?php foreach ($barang as $key) :?>
                <li class="list-group-item" id="barang_<?= $key['id_barang'] ?>">
                    <table class="table">
                        <tr>
                            <td><?= $key['nama_barang'] ?><br>
                            Stok: <b><?= $key['jumlah'] ?></b> Unit
                            </td>
                            <td width="60%"><div class="input-group mb-3">
                                <input type="number" class="form-control jumlah_pinjam" min="1" max="<?= $key['jumlah']?>">
                                <div class="input-group-append ml-3">
                                    <button class="btn btn-success" data-id="<?= $key['id_barang'] ?>" data-nama="<?= $key['nama_barang']?>" data-jumlah="<?= $key['jumlah']?>" onclick="pilih(this)" type="button">Pinjam</button>
                                </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#cektanggal").html(tgl);
        });
    </script> -->