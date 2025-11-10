<?php
$CI =& get_instance();
$CI->load->model('main_model');
$content_zero = $CI->main_model->getSettingZero();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link
    href="<?= base_url() ?>assets/img/img-landing/logo_webpage.png"
    rel="shortcut icon" />
  <title>Lido Group</title>
  <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>assets/css/nucleo-icons.css"
    rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/nucleo-svg.css"
    rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/5aa20ef4ad.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url() ?>assets/css/nucleo-svg.css"
    rel="stylesheet" />
  <!-- CSS Files -->


  <!-- CSS Files -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
    integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.css" />
  <link id="pagestyle"
    href="<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4"
    rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/style-dashboard-user.css"
    rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/datatable-bs5.min.css"
    rel="stylesheet" />
  <link
    href="<?= base_url() ?>assets/css/datatable-buttons-bs5.min.css"
    rel="stylesheet" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.css" />
  <link id="pagestyle"
    href="<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4"
    rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/style-dashboard-user.css"
    rel="stylesheet" />

  <!-- Global Vars -->
  <script>
    const SITE_URL = "<?= site_url() ?>";
  </script>
  <!-- Global Style -->
  <style>
    .displayOnClick {
      display: none;
    }

    .timeline-block-hover:hover {
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .tt-di-mek:hover {
      cursor: pointer;
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .tt-biasa-bae {
      cursor: default;
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .custom-color {
        background: linear-gradient(90deg, #c21c2aff 0%, #c91a20ff 100%);
       }

    .btn-dark {
      background-color:
        <?= $content_zero['warna'];?>
      ;
      color:
        <?= $content_zero['warna'];?>
      ;
    }

    .text-danger {
      color:
        <?= $content_zero['warna'];?>
        !important;
    }

    .selectize-input.focus {
      border-color: #2778c4;
      outline: 0;
      box-shadow: none;
    }

    .selectize-control.multi .selectize-input [data-value] {
      background-image: none;
      background-color: #2778c4;
      color: white;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 position-absolute w-100 custom-color"></div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
          <img src="<?= base_url('assets/img/img-landing/logo_webpage.png') ?>" alt="Foto Logo">
        <span
          class="ms-1 font-weight-bold"><?= $content_zero['company_name'];  ?></span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-75" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= menu_active('dashboard'); ?>"
            href="<?= base_url() ?>dashboard">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 opacity-10">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('kandidat'); ?>"
            href="<?= base_url() ?>kandidat">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-group text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kandidat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('condiv'); ?>"
            href="<?= base_url() ?>condiv/showdiv">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-tags text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Divisi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('conjen'); ?>"
            href="<?= base_url() ?>conjen/showjen">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cube text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Job Vacancy</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('PengaturanTimeline'); ?>"
            href="<?= base_url() ?>pengaturan-timeline">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-timeline text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Batch</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('conlink'); ?>"
            href="<?= base_url() ?>conlink/tablink">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-link text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Link</span>
          </a>
        </li>
        <?php if ($this->session->userdata('is_superadmin') == true): ?>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('conacc'); ?>"
            href="<?= base_url() ?>conacc/showacc">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-cog text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('conreport'); ?>"
            href="<?= base_url() ?>conreport/index">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-book text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan</span>
          </a>
        </li>
        <?php if ($this->session->userdata('is_superadmin') == true): ?>
        <li class="nav-item">
          <a class="nav-link <?= menu_active('PengaturanLandingPage'); ?>"
            href="<?= base_url() ?>pengaturan-landing-page">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cog text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
          </a>
        </li><?php endif ?>
        <?php endif ?>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl custom-color" id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">

            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-user cursor-pointer"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md"
                    href="<?= base_url() ?>pengaturan-landing-page">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold text-black">Pengaturan</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a href="<?= base_url('auth/logout'); ?>"
                    class="dropdown-item border-radius-md tombol-logout">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold text-black">Log Out</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <div class="container-fluid py-4">
      <!-- Content -->