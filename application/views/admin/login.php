<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/admin/css/metisMenu.min.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/admin/css/startmin.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/admin/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-primary">
                        <div class="panel-heading">
                            <img class="img-responsive" style="margin: 0 auto;" src="<?= base_url('assets/images/logo-stikes.png') ?>" alt="logo-stikesnas" width="100">
                            <h3 class="panel-title text-center" style="margin-top: 5px;"><?= $title ?></h3>
                            <h3 class="panel-title text-center" style="margin-top: 3px;">Sarana dan Prasarana || STIKES Nasional</h3>
                        </div>
                        <div class="panel-body">
                            <?= $this->session->flashdata('message') ?>
                            <form role="form" method="POST" action="<?= base_url('admin/login') ?>">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autocomplete="off">
                                        <small><?= form_error('username','<div class="text-danger">','</div>'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        <small><?= form_error('password','<div class="text-danger">','</div>'); ?></small>
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div> -->
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input style="float: right;" class="btn btn-primary" type="submit" value="Login">
                                    <!-- <a href="#" >Login</a> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/admin/js/bootstrap.min.js') ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/admin/js/metisMenu.min.js') ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/admin/js/startmin.js') ?>"></script>

    </body>
</html>
