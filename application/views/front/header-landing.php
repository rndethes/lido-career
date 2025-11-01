<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-papq6..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.about-tancorp {
  position: relative;
  background: #f7f7f7;
 
  margin-left: -10%;
  padding-left: 0;
}

/* Left Image */
.about-image {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px 0; 
}

.about-image img {
  width: 40%;         
  height: auto;      
  object-fit: contain;
  display: block;
}
.about-box {
  position: absolute;
  top: 50%;
  right: 5%;
  transform: translateY(-50%);
  background: #747272ff;
  color: #fff;
  width: 38%;          /* ukuran box lebih kecil dari gambar */
  padding: 50px 40px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Garis kecil */
.about-line {
  width: 60px;
  height: 3px;
  background: #fff;
  border: none;
  opacity: 1;
}

.card {
    height: 320px; /* tinggi card sama semua */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-img-top {
    height: 180px; 
    object-fit: cover; 
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.sitename {
    position: relative;
    top: 10px;
}

/* Responsive Fix */
@media (max-width: 991px) {
  .about-box {
    position: static;
    width: 100%;
    transform: none;
    margin-top: 20px;
  }
}

</style> 

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
           style="width: 50px; height: auto;"> 
      <h1 class="sitename" style="font-size: 18px;">LIDO29</h1>
    </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
             <li class="dropdown">
              <a href="#"
                ><span>Unit Bisnis</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="#">Retail</a></li>
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
                <li><a href="#">Distribusi</a></li>
                <!-- <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li> -->
              </ul>
            </li>
            <li><a href="#services">Budaya</a></li>
            <!-- <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#pricing">Pricing</a></li> -->
            <li><a href="blog.html">Berita</a></li>
           
            <li><a href="#contact">Tanya Jawab</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      <a class="cta-btn" href="<?= base_url() ?>candidatelogin">Login</a>

      </div>
    </header>