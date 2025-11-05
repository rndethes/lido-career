<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-papq6..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lido 29</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img-landing/favicon.png" rel="icon" />
    <link href="<?= base_url() ?>assets/img-landing/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link
      href="<?= base_url() ?>assets/vendor-landing/bootstrap/css/bootstrap.min.css"
      rel="stylesheet" />
    <link
      href="<?= base_url() ?>assets/vendor-landing/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet" />
    <link href="<?= base_url() ?>assets/vendor-landing/aos/aos.css" rel="stylesheet" />
    <link
      href="<?= base_url() ?>assets/vendor-landing/glightbox/css/glightbox.min.css"
      rel="stylesheet" />
    <link href="<?= base_url() ?>assets/vendor-landing/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="<?= base_url() ?>assets/css-landing/main.css" rel="stylesheet" />
     <link href="<?= base_url() ?>assets/css-landing/custom.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: KnightOne
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Updated: Oct 16 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="<?= base_url('assets/img/img-landing/logo_lidowhite.png') ?>" 
           alt="Lido Career Logo" 
           style="width: 45px; height: auto;"> 
      <h1 class="sitename" style="font-size: 15px;">LIDO29</h1>
    </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?= base_url('front/index') ?>">Beranda</a></li>
           <li><a href="<?= base_url('front/about_details') ?>">Tentang</a></li>
             <li class="dropdown">
             <a href="<?= base_url('front/business_details') ?>"
                ><span>Unit Bisnis</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="<?= base_url('front/retail') ?>">Retail</a></li>
                <!-- <li class="dropdown">
                  <a href="#"
                    ><span>Deep Dropdown</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li> -->
                <li><a href="<?= base_url('front/distribution') ?>">Distribusi</a></li>
                <!-- <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li> -->
              </ul>
            </li>
            <li><a href="<?= base_url('front/culture_details') ?>">Budaya</a></li>
            <!-- <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#pricing">Pricing</a></li> -->
           <li><a href="<?= base_url('front/news_details') ?>">Berita</a></li>
           <li><a href="<?= base_url('front/contact_details') ?>">Tanya Jawab</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      <?php if ($user_logged_in): ?>
    <a href="<?= site_url('candidatedashboard') ?>" class="d-flex align-items-center">
        <img src="<?= $img ?>" alt="Foto Profil" 
             style="width:43px; height:43px; border-radius:50%; object-fit:cover; margin-right:10px;">
        <span style="color: #fff; font-weight: 600;"><?= $user_name ?></span>
    </a>
    <?php else: ?>
        <a class="cta-btn" href="<?= base_url('candidatelogin') ?>">Login</a>
    <?php endif; ?>
      </div>
    </header>