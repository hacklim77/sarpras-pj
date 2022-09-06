<?php

$check     = ''; 
$tgl       = date('Y-m-d');
$h7        = date('Y-m-d',strtotime("+7 days"));


    $date_ini  = $tgl;
    $hari_ini  = date('l', strtotime($date_ini));
    $tgl_ini   = date('d-m-Y', strtotime($date_ini));

// cek tanggal
    if (isset($_GET['tanggal'])) {
        $tgl   = $_GET['tanggal'];
        $check = '1';
    }

    $hari      = date('l', strtotime($tgl));
    $tgl_id    = date('d-m-Y', strtotime($tgl));
    $hari_id   = array(
                        'Sunday'    => 'Minggu', 
                        'Monday'    => 'Senin', 
                        'Tuesday'   => 'Selasa', 
                        'Wednesday' => 'Rabu', 
                        'Thursday'  => 'Kamis', 
                        'Friday'    => 'Jumat', 
                        'Saturday'  => 'Sabtu' 
                );

// cek tipe
    $type = '';
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    }

// cek barang
    if ($hari != 'Sunday' or strtotime($tgl) >= strtotime($h7)) {
        
        // cek barang dan stock yg dapat dipinjam
        $cek_barang = array();
        $a=0;
        $b=0;

        while ($rcb = $nomor) {
            if ($rcb['id_barang'] == 0) {
                 $b++;
                $cek_barang[$rcb['id_barang']] == array('stock' => $b, 'nama_barang' => $rcb['nama_barang']);
            } else {
                $b=1;
                $a=$rcb['id_barang'];
                $cek_barang[$rcb['id_barang']] == array('stock' => $b, 'nama_barang' => $rcb['nama_barang']);
            }
        }

    
        
        $stock = array();
        $a = 0;
        $b = 0;
        
        while ($rcb = $pinjam) {
            if (strtotime($tgl) >= strtotime($rcb['tgl_keluar']) and strtotime($tgl) < strtotime($rcb['tgl_kembali'])) {
                
                if ($rcb['id_barang'] == $a) {
                    $b = $rcb['jumlah'];
                    $stock[$rcb['id_barang']] = $stock[$rcb['id_barang']]+$b;
                } else{
                    $a = $rcb['id_barang'];
                    $b = $rcb['jumlah'];
                    $stock[$rcb['id_barang']] = $b;
                }
            }
        }
        /* while ( $rcb = mysqli_fetch_array($query)) {
            if (strtotime($tgl) >= strtotime($rcb['tgl_keluar']) and strtotime($tgl) < strtotime($rcb['tgl_kembali'])) {
                
                if ($rcb['id_barang'] == $a) {
                    $b = $rcb['jumlah'];
                    $stock[$rcb['id_barang']] = $stock[$rcb['id_barang']]+$b;
                } else {
                    $a = $rcb['id_barang'];
                    $b = $rcb['jumlah'];
                    $stock[$rcb['id_barang']] = $b;
                }
            }
        } */

    }
?>
<div class="bdrs-3 ov-h bgc-white bd">
    <div class="bgc-deep-purple-500 ta-c p-15 text-center">
        <!-- <h1 class="c-white"><?php echo $hari_id[$hari]; ?></h1> -->
        <h3 class="fw-300 mB-5 lh-1 c-white"><?php echo $hari_id[$hari].", ".$tgl_id; ?></h3>
        <?php 
        if (($hari != 'Sunday' and strtotime($tgl) >= strtotime($h7)) and ($type == '')) {
        ?>
            <a href="<?php echo "formpeminjaman.php?tanggal=".$tgl; ?>" class="btn btn-info mT-15">form peminjaman</a>
        <?php 
        }
        ?>
    </div>
    <div class="pos-r">
        <?php 
        if ($hari == 'Sunday' or strtotime($tgl) < strtotime($h7)) {
        ?>
            <div class="text-center" style="padding: 15px; height: 357px; display: flex; align-items: center;">

                <i style="font-size: 18px;">
                    Peminjaman tersedia 7 hari setelah hari <br><?php echo $hari_id[$hari_ini].", ".$tgl_ini; ?>.<br>
                    Untuk penggunaan di hari minggu, silahkan ajukan peminjaman pada hari sabtu.
                </i>
            </div>
        <?php
        } else {
            foreach ($cek_barang as $key => $value) {
                if (isset($stock[$key])) {
                    $stocktersedia = $cek_barang[$key]['stock'] - $stock[$key];
                } else {
                    $stocktersedia = $cek_barang[$key]['stock'];
                }
                if ($stocktersedia >= 0) {
        ?>
            <ul class="m-0 p-0 mT-10">
                <li class="bdB peers ai-c jc-sb fxw-nw">
                    <div class="td-n p-15 peers fxw-nw mR-20 peer-greed c-grey-900">
                        <div class="peer mR-15"><i class="fa fa-fw fa-clock-o c-green-500"></i></div>
                        <div class="peer"><span class="fw-600"><?php echo $cek_barang[$key]['nama_barang'] ?></span>
                            <div class="c-grey-600"><span class="c-grey-700"><?php echo "Tersedia ".$stocktersedia." Unit";  ?></div>
                        </div>
                    </div>
                    <div class="peers mR-15">
                        <div class="peer">
                            <?php 
                            if ($type != '' and $stocktersedia > 0) {
                            ?>
                                <a href="javascript:void(0);" class="btn-pesan p-10" id="<?php echo "cek-".$key;?>" data-unit="<?php echo $cek_barang[$key]['nama_barang'] ?>" data-id="<?php echo $key;?>" data-tanggal="<?php echo date('Y/m/d', strtotime($tgl)); ?>" data-stock="<?php echo $stocktersedia; ?>">
                                    <i class="ti-new-window"></i></a>
                                </a>
                            <?php 
                            }
                            ?>
                        </div>
                        <!-- <div class="peer"><a href="#" clas
                            s="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a></div> -->
                    </div>
                </li>
            </ul>
        <?php
                }
            }
        }
        ?>
    </div>
</div>
<script type="text/javascript">
    $('.btn-pesan').click(function(){
        // var unit     = $(this).data('unit');
        var id       = $(this).data('id');
        // var tanggal  = $(this).data('tanggal');
        var stock    = $(this).data('stock');
        // alert(unit+" "+id+" "+tanggal+" "+stock);
        // $("#calendar-edit input[name='unit']").val(unit);
        // $("#calendar-edit input[name='barang']").val(id);
        // $("#calendar-edit input[name='jumlah']").attr({"max" : stock});
        // $("#calendar-edit input[name='tgl_keluar']").val(tanggal);
        $(this).hide();                       
        $('div.add_barang').load('add_pinjam_barang.php?id_barang='+id+'&stock='+stock);                       
        $('div.add_barang').removeClass('add_barang');                       
        $('div.list_barang').append('<div class="add_barang"></div>');                       

    });
    
    $("#calendar-edit input[name='jumlah']").change(function(){
        var a = $(this).val();
        var min = $(this).attr('min');
        var max = $(this).attr('max');
        if (a < min) {
            $(this).val(min);
        }
        if (a > max) {
            $(this).val(max);
        }
    });

</script>