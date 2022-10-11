<?php
    /* error_reporting(0);
    $cek = array();
    $a = 0;
    $b = 0;

    foreach ($nomor as $key) {
        if ($key['id_barang'] == $a) {
            $b++;
            $cek[$key['id_barang']] = array(
                'stock' => $b,
                'nama_barang' => $key['nama_barang']
            );
        } else {
            $b=1;
            $a=$key['id_barang'];
            $cek[$key['id_barang']] = array(
                'stock' => $b,
                'nama_barang' => $key['nama_barang']
            );
        }
    }

    $stok = array();
    $a= 0;
    $b= 0;

    foreach ($avail as $key) {
        if ($tgl >= $key['tgl_keluar'] && $tgl < $key['tgl_kembali']) {
            if ($key['id_barang'] == $a) {
                $b = $key['jumlah'];
                $stok[$key['id_barang']] = $stok[$key['id_barang']]+$b;
            } else {
                $a = $key['id_barang'];
                $b = $key['jumlah'];
                $stok[$key['id_barang']] = $b;
            }
        }
    } */
?>
<div class="card">
    <div class="card-header text-center" style="background-color: purple; color:white">
        <h3>List Barang Yang Tersedia</h3>
        <!-- <h5 id="cektanggal"></h5> -->
    </div>
    <div class="scroll-bg">
        <div class="scroll-div">
            <?php /* foreach ($cek as $key => $value) {
                if ($stok[$key]) {
                    $stokready = $cek[$key]['stock'] - $stok[$key];
                } else {
                    $stokready = $cek[$key]['stock'];
                }
                if ($stokready >= 0) { */
            ?>
            <ul class="list-group list-group-flush">
                <?php
                    foreach ($barang as $key) :
                        /* if ($this->session->$key['id_barang'] == $this->session->$nomor['id_barang']){

                        } */
                ?>
                <li class="list-group-item" data-date="" id="barang_<?= $key['id_barang'] ?>">
                    <table class="table">
                        <tr>
                            <td><?= $key['nama_barang'] ?><br>
                            Stok: <b><?= $key['jumlah'] ?></b> Unit
                            </td>
                            <td width="60%"><div class="input-group mb-3">
                                <input type="number" class="form-control jumlah_pinjam" min="1" max="<?= $key['jumlah']?>">
                                <div class="input-group-append ml-3">
                                    <button class="btn btn-success" data-id="<?= $key['id_barang'] ?>" data-nama="<?= $key['nama_barang']?>" data-jumlah="<?= $key['jumlah'] ?>" onclick="pilih(this)" type="button">Pinjam</button>
                                </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <?php endforeach?>
            <?php
              /*   }
            }  */?>
            </ul>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#cektanggal").html(tgl);
        });
    </script> -->