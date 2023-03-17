<div class="card">
    <div class="card-header text-center" style="background-color: purple; color:white">
        <h3>List Barang Yang Tersedia</h3>
    </div>
    <div class="scroll-bg">
        <div class="scroll-div">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Cari Barang</h5>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" type="text" id="search" name="search">    
                    </div>
                </div>
            </div>
            <div id="tampil">
                    
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#cektanggal").html(tgl);
        });
    </script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#search").keyup(function(){
            $.ajax({
                type:'GET',
                url: '<?= base_url('peminjaman/searchlist') ?>',
                data:{
                    search:$(this).val()
                },
                cache: false,
                success: function (data) {
                    $("#tampil").html(data);
                }
            });
        });
    });
</script>
<script>
    $("#tampil").load('<?= base_url('peminjaman/searchlist')?>');
</script>