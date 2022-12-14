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

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url() ?>">Sarpras | Administrator</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?= $admin['nama_user'] ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url('admin/login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li class="active">
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/barang') ?>"><i class="fa fa-cubes"></i> Data Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/peminjaman') ?>"><i class="fa fa-sign-out"></i> Data Peminjaman</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/pelaporan') ?>"><i class="fa fa-tasks"></i> Data Barang Rusak</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/laporan') ?>"><i class="fa fa-tasks"></i> Laporan Peminjaman</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/manageadmin') ?>"><i class="fa fa-tasks"></i> Manage Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <?= $konten ?>
            </div>
            <!-- /#page-wrapper -->

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
        
        <!-- <script src="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css"></script> -->
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/admin/js/startmin.js')?>"></script>

        <script>
            $(document).ready(function() {
                        $('#databarang').DataTable({
                                responsive: true
                        });
                    });
        </script>
        <script>
            $('#datalaporan').DataTable( {
                searching: false,
                dom: 'Bfrtip',
                buttons: [
                    {extend:'pdf',title:'Laporan Peminjaman Alat Sarpras',className:'btn btn-primary'},
                    {extend:'excel',className:'btn btn-success'},
                    {extend:'print',title:'Laporan Peminjaman Alat Sarpras',className:'btn btn-dark',align:'center'}
                ]
            } );
        </script>

    </body>
</html>
