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

                                <!-- <div class="demo-exemplo">
                                    <p><strong>Today:</strong> </p>
                                    <ul class="demo-today"><span>n/a</span></ul>

                                    <p><strong>Last Picked Day:</strong></p>
                                    <ul class="demo-last"><span>n/a</span></ul>

                                    <p><strong>Picked Days:</strong></p>
                                    <ul class="demo-picked"><span>n/a</span></ul>
                                </div> -->
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
                                                <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label>No Handphone</label>
                                                <input type="text" class="form-control" id="nohp" name="nohp">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Tanggal Pinjam</label>
                                                    <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="<?= date('Y-m-d',strtotime('+1 days')) ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Lama Pinjam</label>
                                                    <div class="input-group">
                                                        <input name="lamapinjam" id="lamapinjam" type="number" class="form-control" value="0" min="0">
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
                                                <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                            </div>
                                            <input type="hidden" name="getbarang" id="getbarang">
                                            <button type="submit" class="btn btn-primary">Pinjam</button>
                                        </form>
                                    </div>
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
        const prev = document.querySelector('.demo-prev');
        const next = document.querySelector('.demo-next');
        const today = document.querySelector('.demo-today');
        const picked = document.querySelector('.demo-picked');
        const last = document.querySelector('.demo-last');

        function updateInfo() {
            
            if (this.lastSelectedDay) {
                //('.infoarea').load("");                       
                //$('div.infoarea').load('cek_ketersediaan.php?tanggal='+this.lastSelectedDay);                       
                $('div.infoarea').load('cek_ketersediaan.php?tanggal='+this.lastSelectedDay);                       
                // alert (this.lastSelectedDay);
            }
        }

        const myCalendar = new HelloWeek({
            selector: '.hello-week',
            lang: 'id',
            format: 'YYYY-MM-DD',
            monthShort: false,
            weekShort: false,
            disablePastDays: true,
            multiplePick: false,
            onLoad: updateInfo,
            onChange: updateInfo,
            onSelect: updateInfo
        });

        myCalendar.selectedDays.push('1525556882', '1525643282');

        prev.addEventListener('click', () => myCalendar.prev());
        next.addEventListener('click', () => myCalendar.next());

    </script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.infoarea').load('<?= base_url('peminjaman/listbarang') ?>');                     
        });
    </script>
    <script type="text/javascript">
    
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