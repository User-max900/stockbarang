<?php 

require 'function.php';

// if (isset($_POST["register"])){

//     if ( registrasi($_POST) > 0){
//         echo "<script>
//                 alert('user baru berhasil ditambahkan');
//              </script>";
//     } else {
//         echo mysqli_error($conn);
//     }
//}

 ?>




<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Registrasi</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="icon" type="image/jpg" href="img/logo.jpg">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from assets/css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="img/kota.jpg" alt="Full Background" class="full-bg full-bg-bottom animation-pulseSlow">
        <!-- END Full Background -->

        <!-- Login Container -->
        <div id="login-container">
            <!-- Register Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-plus"></i> <strong> Buat Akun Baru</strong>
            </h1>
            <!-- END Register Header -->

            <!-- Register Form -->
            <div class="block animation-fadeInQuickInv">
                <!-- Register Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="index.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Kembali ke halaman login"><i class="fa fa-user"></i></a>
                    </div>
                    <h2> Daftar</h2>
                </div>
                <!-- END Register Title -->

                <!-- Register Form -->
                <form id="form-validation" action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <!-- <div class="col-xs-12">
                            <input type="text" id="val-number" name="val-number" class="form-control" placeholder="Masukkan NIK" autofocus autocomplete="off">
                            <span class="help-block">NB : NIK harus sesuai dengan NIK di Kartu Keluarga</span>
                        </div> -->
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="password2" name="password2" class="form-control" placeholder="konfirmasi Password">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <label class="csscheckbox csscheckbox-primary" data-toggle="tooltip" title="Setuju dengan aturan">
                                <input type="checkbox" id="register-terms" name="register-terms">
                                <span></span>
                            </label>
                            <a href="#modal-terms" data-toggle="modal">Aturan</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-success" name="register"><i class="fa fa-plus"></i> Buat Akun</button>
                        </div>
                    </div>
                </form>
                <!-- END Register Form -->
            </div>
            <!-- END Register Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span>2021</span> &copy; <a>Kelompok 7</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center"><strong>Aturan</strong></h3>
                    </div>
                    <div class="modal-body">
                        <h4 class="page-header">1. <strong>Aturan Umum</strong></h4>
                        <p>Web ini adalah sarana transaksi barang</p>
                        <h4 class="page-header">2. <strong>Akun</strong></h4>
                        <p>Member yang bisa daftar dan login adalah pemilik dan karyawan</p>
                        <h4 class="page-header">3. <strong>Layanan</strong></h4>
                        <p>Barang yang tersedia dapat anda lihat pada halaman stock barang</p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-effect-ripple btn-sm btn-primary" data-dismiss="modal">Terima</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/formsValidation.js"></script>
        <script>$(function(){ FormsValidation.init(); });</script>
    </body>
</html>