<div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
        window.addEventListener('load', () => {
                const loader = document.getElementById('loader');
                setTimeout(() => {
                  loader.classList.add('fadeOut');
                }, 300);
              });
    </script>
    <div>
        <div class="page-container" style="padding: 0;">
            <div class="header" style="width: 100%;" >
                <nav class="navbar justify-content-between" style="margin-top: -10px;">
                  <a class="navbar-brand ml-3">
                      <img alt="" src="assets/logo.png" style="width: 65px; padding: 10px; display: inline-block;">
                      <h4 style="display: inline-block; margin-top: 5px;">STIKES NASIONAL</h4>
                  </a>
                </nav>
            </div>

            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- <div id="full-calendar"></div> -->
                                <!-- <div class="hello-week">
                                    <div class="hello-week__header">
                                        <button class="btn demo-prev">◀</button>
                                        <div class="hello-week__label"></div>
                                        <button class="btn demo-next">▶</button>
                                    </div>
                                    <div class="hello-week__week"></div>
                                    <div class="hello-week__month"></div>
                                </div> -->
                                <div id="picktgl">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header text-center">
                                                <h4>Tanggal Peminjaman</h4>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input-group mt-3 mb-1">
                                                            <input type="text" class="form-control mb-2 text-center" id="pilihtgl" placeholder="select date" autocomplete="off">
                                                        </div>
                                                        <div class="input-group mb-1">
                                                            <button type="submit" class="btn btn-primary btn-block " id="pilih">Klik</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="formpeminjaman">

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="infoarea">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>STIKESNAS SARPRAS & IT Team</span>
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
                <script>
                    window.dataLayer = window.dataLayer || [];
                      function gtag(){dataLayer.push(arguments);}
                      gtag('js', new Date());

                      gtag('config', 'UA-23581568-13');
                </script>
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/css/priv/vendor.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/css/priv/bundle.js'); ?>"></script>
    <script src="<?= base_url('dist/helloweek.min.js'); ?>" type="text/javascript"></script>

    <script>
    $( function() {
        $( "#pilihtgl" ).datepicker({
            //beforeShowDay: $.datepicker.noWeekends,
            dateFormat: 'yy-mm-dd',
            minDate:1
        });
    });
    </script>

    <script>
        $(document).ready(function() {
            $("#pilih").click(function(){

                var tgl=$("#pilihtgl").val();
                if (tgl == '') {
                    alert('silahkan pilih tanggal peminjaman dahulu!');
                } else{
                    //$("#picktgl").hide();
                    $("#formpeminjaman").load('<?= base_url('peminjaman/form_pinjam')?>');
                    $(".infoarea").load('<?= base_url('peminjaman/listbarang')?>');
                    /* $("#cektanggal").html(tgl); */
                    /* $.ajax({
                        url:'coba.php',
                        type:'POST',
                        data:{
                            tgl:tgl
                        },
                        success:function(data){
                            $("#cektanggal").text(data);
                        }
                    }); */
                }
                $("#cektanggal").html(tgl);
            });
        });
    </script>

    <!-- <script type="text/javascript">
        $(document).ready(function() {

        });
    </script> -->

    <script>
            function pilih(x){
            var id = $(x).data("id");
            var nama = $(x).data("nama");
            var jumlah = $("#barang_"+id+" input.jumlah_pinjam").val();
            var getbaranglama = $('#getbarang').val();
            var tambahbarang = id+':'+jumlah;

            if (getbaranglama == '') {
                var barangbaru = tambahbarang;
            } else{
                var barangbaru = getbaranglama+"/"+tambahbarang;
            }

            $("#getbarang").val(barangbaru);

            $('tr.listpinjam').removeClass('listpinjam');
            $('#barangpinjam').append('<tr class="listpinjam"><td class="nama_barang" name="nama_barang[]"></td><td class="jumlah" name="jumlah[]"></td></tr>');
            $(".listpinjam .nama_barang").html(nama);
            $(".listpinjam .jumlah").html(jumlah);
        };

        /* $('a.hapus').click(function() {
        $('#listpinjam').remove();
        return false;
        }); */

    /*  $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('.listpinjam'+button_id+'').remove();
        }); */
    </script>
