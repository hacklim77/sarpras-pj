<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sarpras - Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/admin/css/metisMenu.min.css')?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/admin/css/startmin.css')?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/admin/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Page Content -->

                <?= $konten ?>
            

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets/admin/js/jquery.min.js')?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/admin/js/bootstrap.min.js')?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/admin/js/metisMenu.min.js')?>"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url('assets/admin/js/dataTables/jquery.dataTables.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/js/dataTables/dataTables.bootstrap.min.js')?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/admin/js/startmin.js')?>"></script>

       <!--  <script>
            $(document).ready(function() {
                        $('#databarang').DataTable({
                                responsive: true
                        });
                    });
        </script> -->

    </body>
</html>
