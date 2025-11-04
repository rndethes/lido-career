<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-papq6..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .header {
  background: linear-gradient(90deg, #d80415ff 0%, #d41920ff 100%) !important;
}
#hero.dark-background::before {
  background: rgba(14, 13, 13, 0.7); 
}
.all-page {
  padding-top: 80px !important;
}

.feature-boxes,
.feature-boxes * {
  color: #fff !important;
}


#hero {
  position: relative;
  min-height: 650px; 
  overflow: visible !important;
  z-index: 1;
}

.feature-boxes {
  position: absolute;
  bottom: -140px;  
  left: 50%;
  transform: translateX(-50%);
  width: 80%;   
  z-index: 10;
  background: transparent !important;
}

/* Hilangkan background hitam dari container / row jika ada */
.feature-boxes .row,
.feature-boxes .container {
  background: transparent !important;
}


/* Box style */
.box-item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 45px 20px;
  min-height: 160px;
  text-align: center;
  text-decoration: none;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  box-shadow: 0px 8px 18px rgba(0,0,0,0.15);
}

.feature-boxes .col-md-4 {
  padding: 0; 
}

.box-item:hover {
  transform: translateY(-8px);
  box-shadow: 0px 12px 25px rgba(0,0,0,0.25);
}

.box-item i {
  font-size: 36px;
  margin-bottom: 10px;
}

.box-blue {
  background: #ce303dff;
}

.box-dark {
 background: #b71c1c;}

.box-dark2 {
  background: #7f0f0f;;
}

.cta-btn {
  background: #ffffff;
  color:  #d41920ff; 
  padding: 10px 25px;
  border-radius: 5px;
  font-weight: 600;
  transition: 0.3s;
  text-decoration: none;
  display: inline-block;}

.cta-btn:hover {
  background:linear-gradient(90deg, #d80415ff 0%, #d41920ff 100%) !important;
  color: #fff; 
}
.about-tancorp {
  position: relative;
  background: #f7f7f7;
  margin-top:60px;
  margin-left: -10%;
  padding-left: 0;
  margin-bottom:-60px;
}

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
  background: #8b000f;
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

.text-limit {
  max-width: 800px;  
  margin: 0 auto;
  margin-left:0px;
}

.faq-section .accordion-button {
  background-color: #f8f9fa;
  color: #333;
  font-weight: 500;
}

.faq-section .accordion-button:focus {
  box-shadow: none;
}

.faq-section .accordion-body a.btn {
  margin-top: 10px;
}

#footer {
  background: linear-gradient(90deg, #d80415 0%, #d41920 100%);
  color: #fff;
  font-size: 15px;
  padding: 50px 0 25px;
}

/* Warna dasar teks & link */
#footer p,
#footer a,
#footer span {
  color: #f2f2f2;
}

/* Judul kolom */
#footer h3.footer-logo {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 18px;
}

#footer h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 15px;
  color: #fff;
}

#footer .row > div {
  text-align: center;
}


/* List link */
.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 6px;
}

.footer-links a {
  color: #e8e8e8;
  text-decoration: none;
  transition: 0.3s;
}

.footer-links a:hover {
  color: #ffd700;
}

/* Social icons */
#footer .social-links a {
  font-size: 20px;
  margin-right: 12px;
  color: #fff;
  transition: 0.3s;
}

#footer .social-links a:hover {
  color: #ffd700;
}

/* Footer bottom */
.footer-bottom {
  border-top: 1px solid rgba(255,255,255,0.2);
  margin-top: 25px;
  padding-top: 15px;
  text-align: center;
  font-size: 14px;
  color: #eee;
}


.social-links a {
  font-size: 22px;
  color: #fff;
  transition: .3s;
}

.social-links a i {
  background: #8b000f;
  padding: 8px;
  border-radius: 50%;
  font-size: 18px;
}

.social-links a:hover {
  color: #ffd700;
}

.footer-bottom {
  background: #8b000f;
  font-size: 14px;
}

.contact-map{
  margin-top: -80px;
}

.unit-bisnis {
  background-color: #fff;
  color: #000;
}

.unit-bisnis h2 {
  font-weight: 700;
}

.unit-bisnis p {
  line-height: 1.6;
  margin-bottom: 1.2rem;
}


/* Responsive umum untuk tablet & HP */
@media (max-width: 991px) {
  .about-box {
    position: static;
    width: 100%;
    transform: none;
    margin-top: 20px;
  }
  .feature-boxes {
    margin-top: 0;
  }
  .feature-boxes {
    top: 70%;   
  }

  .box-item {
    padding: 30px 15px;
    min-height: 130px;
  }

  .about-image img {
    width: 70%;
  }

  .about-box {
    width: 100%;
    position: relative;
    right: 0;
    top: 0;
    transform: none;
    margin-top: 15px;
    padding: 30px 25px;
  }

  .about-tancorp {
    margin-left: 0;
    padding-left: 0;
  }

  .sitename {
    font-size: 13px !important;
  }

  header .logo img {
    width: 38px !important;
  }
    #cabang-kota .col-lg-3 {
    width: 33.33%;
  }

  #cabang-kota .card-img-top {
    height: 160px;
  }

  #cabang-kota .card-title {
    font-size: 16px;
  }
   #footer .row {
    padding-left: 0 !important;
  }

  #footer .col-lg-4 {
    padding-right: 0 !important;
  }

  .footer-bottom .container {
    flex-direction: column;
    text-align: center;
    gap: 6px;
  }
}

@media (max-width: 768px) {
  .all-page {
      padding-top: -50px !important;
    }
    
     .feature-boxes {
    top: 78%;  
  }

  #cabang-kota .col-lg-3 {
    width: 50%;
    margin-bottom: 20px;
  }

  #cabang-kota .card-img-top {
    height: 150px;
  }
   #footer {
    text-align: center;
  }

  #footer h4 {
    justify-content: center !important;
  }

  #footer .social-links {
    justify-content: center;
  }

  #footer .col-lg-4 {
    margin-bottom: 25px;
  }

  #footer .footer-bottom .container {
    font-size: 13px;
    flex-direction: column;
    text-align: center;
  }
   .unit-bisnis .container {
    flex-direction: column;
  }
  .unit-bisnis .text-content,
  .unit-bisnis .image-content {
    flex: 1 1 100%;
    padding-right: 0;
    text-align: center;
  }
  .image-content img {
    margin: 20px 0;
  }
  .feature-boxes .col-md-4 {
    margin-top:0; 
    padding: 0;
  }
  .feature-boxes .row{
      margin-top:300%; 
      margin-top:120px; 
  }
}


@media (max-width: 576px) {
  .box-item i {
    font-size: 28px;
    margin-bottom: 6px;
  }

  .all-page {
      padding-top: -50px !important;
    }

     .feature-boxes {
    top: 61.5%; 
    padding-bottom: 650px;
  }

  .about-tancorp {
    padding-top: 300px;
  }

  .box-item {
    font-size: 13px;
    padding: 22px 12px;
  }

  #hero {
    min-height: 520px;
  }

  .about-image img {
    width: 80%;
    margin-bottom: -44px;
  }

  .about-box {
    padding: 25px 18px;
    font-size: 14px;
  }

  .card {
    height: auto; /* biar mengikuti tinggi konten */
  }

  .card-img-top {
    height: 150px;
  }

  h1.sitename {
    font-size: 12px !important;
  }

  .cta-btn {
    padding: 8px 18px;
    font-size: 13px;
  }

  #footer h3.footer-logo {
    font-size: 24px;
  }

  #footer p, #footer li, #footer a {
    font-size: 13px;
  }

  #cabang-kota .col-lg-3,
  #cabang-kota .col-md-6,
  #cabang-kota .col-6 {
    width: 50%;
    padding: 0 6px;
  }

  #cabang-kota .card {
    border-radius: 10px;
  }

  #cabang-kota .card-img-top {
    height: 120px;
  }

  #cabang-kota .card-title {
    font-size: 14px;
  }

  #cabang-kota .btn-sm {
    font-size: 12px;
    padding: 4px 8px;
  }
   #footer {
    font-size: 14px;
  }

  #footer p {
    font-size: 14px;
  }

  #footer h4 {
    font-size: 15px;
  }

  #footer .social-links a {
    font-size: 18px;
    margin-right: 10px;
  }
  #footer .row > div {
    padding-left: 0 !important;
    padding-right: 0 !important;
    text-align: center;
  }
  #footer .social-links {
    justify-content: center;
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

      <a class="cta-btn" href="<?= base_url() ?>candidatelogin">Login</a>

      </div>
    </header>