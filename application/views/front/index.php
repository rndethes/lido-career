<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lido Group</title>
  <link
    href="<?= base_url() ?>assets/img/img-landing/logo_webpage.png"
    rel="shortcut icon" />
  <link rel="stylesheet"
    href="<?= base_url() ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

  <!-- ===== CSS ===== -->
  <link rel="stylesheet"
    href="<?= base_url() ?>assets/css/styles-landing.css">

  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <style>
    .custom-color {
      background-color:
        <?= $content_zero['warna']; ?>
    }

    .accordion-button:not(.collapsed) {
      color: #FFFFFF;
      background:
        <?= $content_zero['warna']; ?>
        !important;
    }

    .accordion-button.collapsed {
      color: #FFFFFF;
      background:
        <?= $content_zero['warna']; ?>
        !important;
    }

    .accordion-button.collapsed {
      color: #FFFFFF;
      background:
        <?= $content_zero['warna']; ?>
        !important;
    }
  </style>

</head>

<body>
  <!--===== HEADER =====-->
  <header class="header custom-color" style="z-index: 1000;">
    <nav class="navbar navbar-expand-lg custom-color">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo-brand"
            src="<?= base_url() ?>assets/img/img-landing/logo_lidowhite.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Beranda</a>
            <li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#about">Tentang Kami</a>
            <li>
              <!-- <li class="nav-item">

              <a class="nav-link" aria-current="page" href="#contact">Bergabung dengan Kami</a>

            <li> -->
          </ul>
          <!-- <ul class="navbar-nav navbar-right">
                          <a class="background-button"><span class="background-btn-title">Sign Up</span></a>
                        </ul> -->
          <!-- Right elements -->

          <?php if ($this->session->userdata('candidate_is_log') != true) { ?>
          <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="nav-button rounded"
              href="<?= base_url() ?>candidatelogin"><span
                class="nav-btn-title text-dark font-weight-bold">Daftar</span></a>
          </div>
          <?php } else { ?>

          <!-- Right elements -->
          <div class="d-flex align-items-center">
            <!-- Icon -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-user cursor-pointer"></i>
                <span class="d-sm-inline d-none"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md"
                    href="<?= base_url() ?>candidatedashboard">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Masuk ke Dashboard</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <div class="d-flex py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <a href="<?= base_url() ?>candidatelogin"
                          class="dropdown-item">Keluar</a>
                      </h6>
                    </div>
                  </div>
                  </a>
                </li>


                <!-- <li class="nav-item dropdown ms-auto">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="fa fa-user cursor-pointer" style="color: #ffff;"></i></a>;

                <div class="dropdown-menu dropdown-menu-end">
                  <a href="<?= base_url() ?>candidatedashboard"
                class=" dropdown-item">Buka Dashboard Anda</a>
                <a href="#" class="dropdown-item">Keluar</a>
          </div>
          </li> -->

        </div>
        <?php } ?>

      </div>
      </div>
    </nav>
  </header>

  <main class="l-main">
    <!--===== HOME =====-->
    <section class="home custom-color" id="home">
      <div class="home__container bd-grid">

        <h1 class="home__title"><span class=""><?= $content_hero['tittle_homepage'] ?></span></h1>
        <h4 class="home__subtitle"> <?= $content_hero['subtitle_homepage'] ?> </h4>

        <div class="home__scroll">
          <a class="background-button"
            href="<?= site_url('candidatelogin') ?>"><span
              class="background-btn-title">Gabung bersama Kami</span><i
              class="fa-solid fa-circle-chevron-right"></i></a>

        </div>

        <img src="<?= base_url() ?>uploads/<?= $content_hero['image_homepage']; ?>" alt=""
          class="home__img">
      </div>
    </section>
    <section class="about section" id="about">

      <div class="about__container bd-grid">
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
          tabindex="-1" style="background: transparent;">
          <div class="modal-dialog modal-dialog-centered" style="background: transparent;">
            <img
              src="<?= base_url() ?>uploads/<?= $content_first['about_image']; ?>">
          </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
          tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
          </div>
        </div>
        <img
          src="<?= base_url() ?>uploads/<?= $content_first['about_image'];  ?>"
          data-bs-toggle="modal" href="#exampleModalToggle" role="button">
        <!--- <div class="about__img">
                        <img src="<?= base_url() ?>assets/img/img-landing/about-us-background-one.jpg">
      </div> -->
      <div>
        <h2 class="about__subtitle">
          <?= $content_first['about_title'];  ?>
        </h2>
        <span
          class="about__profession"><?= $content_first['about_subtitle'];  ?></span>
        <p class="about__text">
          <?= $content_first['about_description'];  ?>
        </p>
      </div>
      </div>
      <div class="about__container bd-grid">
        <div>
          <h2 class="about__subtitle">
            <?= $content_second['about_title'];  ?>
          </h2>
          <span
            class="about__profession"><?= $content_second['about_subtitle'];  ?></span>
          <p class="about__text">
            <?= $content_second['about_description'];  ?>
          </p>
        </div>
        <div class="about__img">
          <img
            src="<?= base_url() ?>uploads/<?= $content_second['about_image'];  ?>">
        </div>
      </div>
      <h2 class="about__subtitle text-center mb-5">
          Visi, dan Misi Lido
        </h2>
      <div class="d-flex justify-content-center bd-grid">
        <div class="card text-bg-danger mb-3 vision" style="max-width: 40rem;">
          <!-- <div class="card-header">Visi</div> -->
          <div class="card-body custom-color text-center">
            <h5 class="card-title">Visi Lido Grosir</h5>
            <p class="card-text"><?= $content_zero['visi'] ?></p>
          </div>
        </div>
      </div>
      
      <div class="d-flex justify-content-center bd-grid">
        <div class="card text-bg-danger mb-3 mission" style="max-width: 40rem;">
          <!-- <div class="card-header">Visi</div> -->
          <div class="card-body custom-color">
            <h5 class="card-title text-center mb-3">Misi Lido Grosir</h5>
            <p class="card-text"><?= $content_zero['misi'] ?></p>
          </div>
        </div>
      </div>
    
    </section>
    <section class="content" id="contact">
      <div class="d-flex justify-content-center bd-grid">
        <img
          src="<?= base_url() ?>assets/img/img-landing/logo_webpage.png">
      </div>
      <div class="d-flex justify-content-center bd-grid">

        <h3 class="m-5">Bergabung Bersama Kami</h3>

      </div>
      <div class="d-flex justify-content-center bd-grid">
        <img class="join-with"
          src="<?= base_url() ?>assets/img/img-landing/join-with-us.png">
      </div>
      <div class="d-flex justify-content-center bd-grid">

        <h3 class="m-5">Posisi Yang Tersedia</h3>

      </div>
      <div>
        <div class="job-search">
          <div class="accordion opacity-75" id="accordionExample">

            <?php foreach ($all_divisi as $all_div) : ?>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button content-division" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse<?= $all_div['id_division'] ?>"
                  aria-expanded="true" aria-controls="collapseOne">
                  <?= $all_div['name_division'] ?>
                </button>
              </h2>
              <?php
                $id_division = $all_div['id_division'];
                $CI = &get_instance();

                $CI->load->model('main_model');

                $all_job = $CI->main_model->getJob($id_division);
                ?>

              <div
                id="collapse<?= $all_div['id_division'] ?>"
                class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row m-2">
                    <?php foreach ($all_job as $all_job) :
                        if($all_job['is_active'] == 1) {
                            ?>

                    <div class="col-lg-6 mt-3 mb-3">
                      <div class="content-job">
                        <?= $all_job['name_job'] ?>
                      </div>
                    </div>
                    <div class="col-lg-6 mt-3 mb-3 d-flex flex-row-reverse">
                      <div class="content-button-job">
                        <a class="content-button" data-bs-toggle="modal" data-bs-target="#jobModal"
                          data-title="<?= $all_job['name_job'] ?>"
                          data-req="<?= $all_job['requirement_job'] ?>"
                          data-desc="<?= $all_job['description_job'] ?>"><span
                            class="content-btn-title">Detail</span></a>
                      </div>
                    </div>
                    <?php } endforeach; ?>

                  </div>
                </div>
              </div>

            </div>

            <?php endforeach; ?>

          </div>
        </div>

      </div>


    </section>
    <!-- Modal -->
    <div class="modal fade" id="jobModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="jobModalLabel">Kasir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4>Deskripsi</h4>
            <p id="jobdesc"></p>
            <h4>Kualifikasi</h4>
            <p id="jobqua">

            </p>
          </div>
          <div class="modal-footer">
            <a
              href="<?= base_url('candidatejob/index') ?>">
              <button type="button" class="btn btn-primary">Lamar sekarang</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <section class="contact-map">
      <div class="d-flex justify-content-center bd-grid">
        <h3 class="m-5">Lokasi Kantor</h3>
      </div>
      <iframe
        src="<?= $content_zero['link_map'] ?>"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
  </main>

  <!--===== FOOTER =====-->
  <footer class="footer section custom-color">
    <div class="footer__container bd-grid">
      <div class="footer__data">
        <h2><?= $content_zero['tittle_footer'] ?></h2>
        <p>
          <?= $content_zero['content_footer'] ?>
        </p>
        <br>
        <div><?= $content_zero['address_footer'] ?></div>
        <div class="row">
          <div class="col-lg-6">
            <img
              src="<?= base_url() ?>assets/img/img-landing/icon/phone.png"><span
              class="phone-num"><?= $content_zero['no_footer'] ?><span>
          </div>
          <div class="col-lg-6">
            <img
              src="<?= base_url() ?>assets/img/img-landing/icon/email.png"><span
              class="phone-num"><?= $content_zero['email_footer'] ?></span>
          </div>
        </div>
      </div>

      <div class="footer__data">
        <h2 class="footer__title">LAYANAN</h2>
        <ul>
          <li><a href="#about" class="footer__link">Toko Yang Tersebar di Jawa Tengah</a></li>
          <li><a href="#skills" class="footer__link">Tentang Kami</a></li>
          <li><a href="#portfolio" class="footer__link">Hubungi Kami</a></li>
          <li><a href="#Contact" class="footer__link">Bantuan</a></li>
        </ul>
      </div>

      <div class="footer__data">
        <h2 class="footer__title">FOLLOW</h2>
        <table>
        <?php foreach ($content_sosmed as $sosmed) { ?>
          <tr>
            <td>
            <?= $sosmed['icon_social'] ?>
            </td>
            <td>
              <a href="<?= $sosmed['link_social'] ?>"><p class="text-white"><?= $sosmed['name_social'] ?></p></a>
            </td>
          </tr>
        <?php } ?>
        </table> 
      </div>


    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/js/nav.js"></script>

  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!--===== MAIN JS =====-->
  <script src="<?= base_url() ?>assets/js/main-landing.js"></script>
</body>

</html>