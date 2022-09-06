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
                                <div class="hello-week">
                                    <div class="hello-week__header">
                                        <button class="btn demo-prev">◀</button>
                                        <div class="hello-week__label"></div>
                                        <button class="btn demo-next">▶</button>
                                    </div>
                                    <div class="hello-week__week"></div>
                                    <div class="hello-week__month"></div>
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
    <script>
    $( function() {
        $( "#datepicker" ).datepicker({
            //beforeShowDay: $.datepicker.noWeekends,
            dateFormat: 'yy-mm-dd',
            minDate:1,
        });
    });
    </script>
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
            // if (this.today) {
            //     today.innerHTML = '';
            //     var li = document.createElement('li');
            //     li.innerHTML = this.today;
            //     today.appendChild(li);
            // }

            // if (this.lastSelectedDay) {

                // picked.innerHTML = '';
                // for (days of this.selectedDays) {
                //     var li = document.createElement('li');
                //     li.innerHTML = days;
                //     picked.appendChild(li);
                // }

                // last.innerHTML = '';
                // var li = document.createElement('li');
                // li.innerHTML = this.lastSelectedDay;
                // last.appendChild(li);
            // }
            if (this.lastSelectedDay) {
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
            $('.infoarea').load('<?= base_url('peminjaman/listbarang')?>');                     
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
   