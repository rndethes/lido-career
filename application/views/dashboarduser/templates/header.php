<style>
    @media (max-width: 991px) {
  .profile-photo {
    position: absolute !important;
    left: 10px;
    top: 2px;
  }
 .fa-solid, .fas {
    margin-right: -50px;
  }
}
</style>
<?php
$CI =& get_instance();
$CI->load->model('main_model');

$content_zero = $CI->main_model->getSettingZero();
?>
<?php
$id_user = getLoggedInUser('id');
$user = $this->db->get_where('candidate', ['id' => $id_user])->row_array();
$img = !empty($user['photo_candidate']) 
    ? base_url('uploads/kandidat/profiles/' . $user['photo_candidate'])
    : base_url('assets/img/default-profile.png'); // fallback jika belum ada foto
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lido Group</title>
    <link
        href="<?= base_url() ?>assets/img/img-landing/logo_webpage.png"
        rel="shortcut icon" /> 
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/css/nucleo-icons.css"
        rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css"
        rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css"
        rel="stylesheet" />
    <link href="<?= base_url() ?>assets/jquery-ui/jquery-ui.min.css"
        rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle"
        href="<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4"
        rel="stylesheet" />
    <!-- css select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css" />
    <!-- Global Vars -->
    <script>
        const SITE_URL = "<?= site_url() ?>";
    </script>
    <!-- Global css -->
    <style>
        .custom-color {
        background: linear-gradient(90deg, #c21c2aff 0%, #c91a20ff 100%);
       }

        .text-danger {
            color:
                <?= $content_zero['warna'];?>
                !important;
        }

        .btn-dark {
            background-color:
                <?= $content_zero['warna'];?>
            ;
            color:
                <?= $content_zero['warna'];?>
            ;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 custom-color position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
       <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= site_url('candidatedashboard') ?>">
                <img src="<?= base_url('assets/img/img-landing/' . $content_zero['company_logo']); ?>" alt="Logo Perusahaan">
                <span class="ms-1 font-weight-bold"><?= htmlspecialchars($content_zero['company_name']); ?></span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto h-75" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= menu_active('CandidateDashboard'); ?>"
                        href="<?= site_url('candidatedashboard') ?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-danger text-sm opacity-10 "></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
              <li class="nav-item">
                <a class="nav-link <?= menu_active('candidatebiodata'); ?>"
                    href="<?= site_url('candidate-biodata'); ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Biodata</span>
                </a>
                </li>

                  <li class="nav-item">
                    <a class="nav-link <?= menu_active('CandidateJob'); ?>"
                        href="<?= base_url('candidatejob/index') ?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Lowongan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= menu_active('CandidatePengumuman'); ?>"
                        href="<?= site_url('candidatepengumuman') ?>">

                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengumuman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= menu_active('CandidateContact'); ?>"
                        href="<?= base_url('candidatecontact/index') ?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contact & FAQ</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav> -->
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <!-- Notification -->
                        <?php $this->load->view('dashboarduser/templates/partials/notification') ?>
                        <li class="nav-item d-flex align-items-center">
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="#" class="nav-link text-white p-0 d-flex align-items-center" id="dropdownMenuButton"
        data-bs-toggle="dropdown" aria-expanded="false">

    <!-- Go to Landing Page -->
    <li class="nav-item d-flex align-items-center me-2">
        <a class="nav-link text-white" href="<?= site_url('front') ?>" title="Go to Landing Page">
            <i class="fas fa-globe" style="font-size:18px;"></i>
        </a>
    </li>

    <!-- Profile Dropdown -->
    <li class="nav-item dropdown pe-2 d-flex align-items-center">
        <a href="#" class="nav-link text-white p-0 d-flex align-items-center"
           id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (!empty($user['photo_candidate'])): ?>
                <img src="<?= $img ?>" alt="Foto Profil"
                     class="profile-photo"
                     style="width:43px;height:43px;border-radius:50%;object-fit:cover;">
            <?php else: ?>
                <i class="fas fa-user-circle" style="font-size:28px;"></i>
            <?php endif; ?>
        </a>

        <ul class="dropdown-menu dropdown-menu-end px-2 py-3">
            <li><a class="dropdown-item" href="<?= site_url('candidate-biodata/change-password') ?>">
                <i class="fas fa-key me-2"></i> Change Password
            </a></li>
            <li><a class="dropdown-item tombol-logout" href="<?= site_url('candidatelogin/logout') ?>">
                <i class="fas fa-sign-out-alt me-2"></i> Log Out
            </a></li>
        </ul>
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
                    </div>
                </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <!-- Content Injected -->