<ul class="list-group list-group-flush mt-3">
                <?php foreach ($barang as $key) :?>
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
                </ul>