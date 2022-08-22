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
                  <div class="form-inline">
                        
                        <li class="nav-item" style="list-style: none;">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="list-style: none;">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item" style="list-style: none;">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item" style="list-style: none;">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                        
                  </div>
                 
                </nav>    
            </div>
            <!-- <div class="header navbar-lg" style="width: 100%;" >
                <div class="header-container text-left">
                    <nav class="navbar navbar-expand-sm bg-light">
                        <div style="display: flex;  align-items: center;">
                            <img alt="" src="<?= base_url('assets/logo.png') ?>" style="width: 65px; padding: 10px; display: inline-block;">    
                            <h4 style="display: inline-block; margin-top: 5px;">STIKES NASIONAL</h4>                          
                        </div>
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php base_url('') ?>">Link 1</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> -->
            
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

                                <!-- <div class="demo-exemplo">
                                    <p><strong>Today:</strong> </p>
                                    <ul class="demo-today"><span>n/a</span></ul>

                                    <p><strong>Last Picked Day:</strong></p>
                                    <ul class="demo-last"><span>n/a</span></ul>

                                    <p><strong>Picked Days:</strong></p>
                                    <ul class="demo-picked"><span>n/a</span></ul>
                                </div> -->
                                <!-- <div class="card">
                                    <div class="card-body">

                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                            </div>
                                            <div class="form-group">
                                                <label class="fw-500">Unit yang dipinjam</label>
                                                    <div class="mb-1">
                                                        <p>
                                                            <i>untuk memasukkan barang yang akan dipinjam silahkan klik tombol <span class="ti-new-window" style="color: #0f9aee;"></span> pada list barang disamping.</i>
                                                        </p>
                                                    </div>
                                                    <div class="list_barang">
                                                        <div class="add_barang"></div>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                    </div>
                                </div>  -->   

                            </div>
                            <div class="col-md-4">
                                <div class="infoarea">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="calendar-edit">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="bd p-15">
                                        <h5 class="m-0">Form Peminjaman</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="fw-500">Nama Peminjam</label>
                                                <input name="nama_peminjam" class="form-control bdc-grey-200">
                                            </div>
                                            <div class="form-group">
                                                <label class="fw-500">Unit</label>
                                                <input name="unit" readonly="true" class="form-control bdc-grey-200" value="Alat 1">
                                            </div>
                                            <div class="form-group">
                                                <label class="fw-500">Jumlah</label>
                                                <input type="number" min="1" name="jumlah" class="form-control bdc-grey-200" value="1">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="fw-500">Tanggal Pinjam</label>
                                                    <div class="input-icon form-group">
                                                        <div class="input-group">
                                                            <input name="tgl_keluar" type="text" class="form-control bdc-grey-200" data-date-format="yyyy/mm/dd" readonly>
                                                            <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"><label class="fw-500">Lama Pinjam</label>
                                                    <div class="input-group">
                                                        <input name="lamapinjam" type="number" class="form-control bdc-grey-200">
                                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                                            hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="fw-500">Keterangan Peminjaman</label>
                                                <textarea name="keterangan" class="form-control bdc-grey-200" rows="5"></textarea>
                                            </div>
                                            <div class="text-right">
                                                <input type="hidden" name="barang" value="">
                                                <button type="submit" name="submit" class="btn btn-primary cur-p">Proses Peminjaman</button>
                                            </div>
                                        </form>
                                    </div>
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
    <script type="text/javascript" src="<?= base_url('assets/css/priv/vendor.js?v=5'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/css/priv/bundle.js'); ?>"></script>
    <script src="<?= base_url('dist/helloweek.min.js?v=2'); ?>" type="text/javascript"></script>
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
            $('.infoarea').load('<?= base_url('peminjaman/getcek') ?>');                       
            /* $('.infoarea').load('cek_ketersediaan.php'); */                       
        });
    </script>
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