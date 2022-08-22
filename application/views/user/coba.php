<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur tempora, atque cupiditate nesciunt labore consequuntur tempore, unde sit totam ratione omnis corrupti nihil porro quaerat ad. Molestiae accusantium, rerum odio laboriosam exercitationem provident beatae delectus molestias inventore deserunt ex, atque saepe adipisci eveniet consequuntur voluptate suscipit porro deleniti nisi quibusdam?</p> -->

<?php
   /*  $now = date_create('2022-08-19');
    date_add($now, date_interval_create_from_date_string('3 days'));

    echo date_format($now, 'Y-m-d');

    echo "<br>".date('l');

    if (date('l') == 'Sunday' && 'Saturday') {
        echo "<br>Weekend";
    } else {
        echo "<br>not Weekend";
    } */
?>

    <!-- <div class="card">
        <div class="card-body">
            <form>
            <div class="form-group">
                <label>Date Now</label>
                <input type="date" class="form-control" value="<?= date('Y-m-d') ?>"> -->
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <!-- </div>
            <div class="form-group">
                <label>Date Future</label>
                <input type="date" class="form-control" value="<?= date_format($now,'Y-m-d') ?>"> -->
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <!-- </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> -->

    <?php
        /* $tgl = date('2022-08-21');

        if (date('Y-m-d') == $tgl) {
            echo "Tanggal Sama";
        } else {
            echo "Tanggal beda";
        } */
    ?>

    <div class="card">
        <ul class="list-group list-group-flush">
            <?php foreach ($barang as $key) :?>
            <li class="list-group-item">
                <?= $key['nama_barang'] ?>
                <br><small>Stok: <b><?= $key['jumlah'] ?></b></small>
            </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <td>Nama Barang</td>
                        <td>Jumlah</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $key) :?>
                        <tr>
                            <td><?= $key['nama_barang'] ?></td>
                            <td><?= $key['jumlah'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>