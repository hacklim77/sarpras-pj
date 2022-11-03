<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarana dan Prasarana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/style/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/css/bootstrap.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/style/css/style.css') ?>"> -->
    <script src="<?= base_url('assets/js/jquery-3.3.1.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</head>
<body>
    <div class="container-fluid-w100">
        <div class="bg-image" style="background-image: url('<?= base_url('assets/images/barang.jpg') ?>');height: 100vh; filter:brightness(75%);">
           
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="jumbotron bg-white text-dark">
                <center><img class="img-responsive" src="<?= base_url('assets/LOGO.png') ?>" alt="" width="150" height="150"></center>
                <h3 class="display-4 text-center">Peminjaman dan Pengembalian Alat</h3>
                <h3 class="display-4 text-center">Sarana dan Prasarana</h3>
                <h5 class="display-4 text-center"><b>Sekolah Tinggi Ilmu Kesehatan Nasional Surakarta</b></h5>
                <!-- <hr class="my-4">
                <p class="text-center">It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                <p class="lead text-center mt-5">
                    <a class="btn btn-primary btn-lg" href="<?= base_url('peminjaman') ?>" role="button"><i class="bi-arrow-right-square-fill"></i> Peminjaman</a>
                    <a class="btn btn-info btn-lg" href="#" role="button"><i class="bi-arrow-left-square-fill"></i> Pengembalian</a>
                    <a class="btn btn-dark btn-lg" href="#" role="button"><i class="bi-archive-fill"></i> Barang Rusak</a>
                </p>
                <p class="lead text-center mt-5 mb-0 fc-bootstrap3">
                    Sarpras & IT Stikes Nasional &copy;2022
                </p>    
            </div>
        </div>  
        
        </div>
    </div>
</body>
</html>