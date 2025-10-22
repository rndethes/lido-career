<?php
$CI =& get_instance();
$CI->load->model('main_model');
$content_zero = $CI->main_model->getSettingZero();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <title>Lido Group</title>
     <link href="<?= base_url() ?>assets/img/img-landing/logo_webpage.png" rel="shortcut icon" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url(); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url(); ?>assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
      <script>
        const SITE_URL = "<?= site_url() ?>";
    </script>
    <style>
    .btn{
        background-color: <?= $content_zero['warna']; ?> !important;
    }

    .mask {
        background-color: <?= $content_zero['warna']; ?> !important;
    }
                                                                                                                                                                                                                            
  </style>

</head>

<body class="">



<!-- end header -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Login</h4>
                                    <p class="mb-0">Masukkan username dan password Untuk Login</p>
                                </div>
                                <div class="card-body">

                                    <form role="form" method="POST" action="<?= base_url('auth/login'); ?>">

                                        <?php
                                        if ($this->session->flashdata('msg') != null) {
                                            echo '<div id="info" class="alert alert-danger alert-dismissible fade show" role="alert"><span class="alert-text text-white">' . $this->session->flashdata('msg') . '</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                        }
                                        ?>
                                        <div class="mb-3">
                                            <input required name="username" type="text" class="form-control form-control-lg" autocomplete="on" placeholder="Username" aria-label="Username" value="<?= $this->session->flashdata('username'); ?>">
                                        </div>

                                        <div class="mb-3">
                                            <input required name="password" type="password" value="" id="myInput" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                        </div>
                                        <div class="text-muted text-sm">
                                            <input type="checkbox" onclick="tampilPassword()"> Tampilkan Password
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Login</button>
                                        </div>
                                        <br><br>
                                        <hr>
                                        <p class="text-center">
                                            Masuk ke <a href="<?= base_url(); ?>front" class="text-reset fst-italic mb-4"> Landing Page</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-size: cover; background-position: center; background-size:auto; background-repeat: no-repeat;">
                                <span class="mask opacity-5"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Selamat Datang Admin"</h4>
                                <p class="text-white position-relative">Dashboard Admin Landing Page Rekrutmen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script>
        function tampilPassword() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>



    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url(); ?>assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>