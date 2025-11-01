    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img src="<?= base_url() ?>assets/img-landing/hero-bg.jpg" alt="" data-aos="fade-in" />

        <div
          class="container d-flex flex-column align-items-center text-center">
          <h2 data-aos="fade-up" data-aos-delay="100">
            Welcome to Lido29 Platform
          </h2>
          <p data-aos="fade-up" data-aos-delay="200">
            Connect, Grow, and Build Your Future
          </p>
        </div>
      </section>
      <!-- /Hero Section -->

 <section class="about-tancorp">
  <div class="container-fluid p-0">

    <!-- Full Image -->
    <div class="about-image">
      <img src="assets/img/b11.jpeg" alt="About Image">
    </div>

    <!-- Overlapped Content -->
    <div class="about-box">
      <h2 class="fw-bold mb-3">LIDO29</h2>
      <hr class="about-line mb-4">

           <p class="mb-4">
          LIDO29 adalah platform resmi yang menyediakan informasi seputar bisnis, budaya,
          dan peluang karier di bawah naungan Lido Group. Kami hadir sebagai penghubung
          antara perusahaan dan talenta terbaik, menghadirkan akses menuju dunia kerja
          yang profesional, inovatif, dan berkelanjutan.
        </p>

        <p class="mb-4">
          Dengan semangat pertumbuhan, inovasi, dan tata kelola yang terpercaya, LIDO29
          menjadi bagian dari proses transformasi talenta di berbagai sektor. Kami tidak
          hanya membangun karier, tetapi juga memberikan ruang untuk berkembang dan
          menciptakan dampak positif.
        </p>

        <p>
          LIDO29 berkomitmen untuk menjadi wadah talenta unggul yang terus bergerak maju
          membawa visi besar perusahaan ke tingkat nasional maupun global.
        </p>
    </div>

  </div>
</section>


     <!-- Services Section -->
<section id="services" class="services section">
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">
      
      <div class="col-lg-6">
        <h2>Bagaimana kinerja kami dalam mewujudkan visi dan misi kami?</h2>
        <p>
          Hadir dengan tagline “For a Better Human Life”, Lido29 memiliki visi dan misi menyejahterakan Bangsa Indonesia. Dalam mewujudkan visi dan misi tersebut, kami membangun culture yang kami sebut dengan LIDO.
        </p>
      </div>

     
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="video-wrapper" style="width: 70%; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
          <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen
                  style="position: absolute; top:0; left:0; width:100%; height:100%;">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

        <section id="cabang-kota" class="section py-5">
  <div class="container">
    <div class="row gy-4">
      <?php 
     $kota_cabang = [
    'Temanggung' => [
        ['nama'=>'Lido29 Tembarak', 'maps'=>'https://maps.app.goo.gl/ppQSHTRV9Ec93vct9'],
        ['nama'=>'Lido29 Ngadirejo', 'maps'=>'https://goo.gl/maps/xxxx2'],
        ['nama'=>'Lido29 Kandangan', 'maps'=>'https://goo.gl/maps/xxxx3'],
        ['nama'=>'Lido29 Gemawang', 'maps'=>'https://goo.gl/maps/xxxx4'],
        ['nama'=>'Lido29 Kaloran', 'maps'=>'https://goo.gl/maps/xxxx5'],
        ['nama'=>'Lido29 Jumo', 'maps'=>'https://goo.gl/maps/xxxx6'],
        ['nama'=>'Lido29 Kedu', 'maps'=>'https://goo.gl/maps/xxxx7'],
        ['nama'=>'Lido29 Kranggan', 'maps'=>'https://goo.gl/maps/xxxx8'],
        ['nama'=>'Lido29 Tegowanuh', 'maps'=>'https://goo.gl/maps/xxxx9'],
    ],
    'Wonosobo' => [
        ['nama'=>'Lido29 Wonosobo', 'maps'=>'https://goo.gl/maps/yyyy1'],
    ],
    'Semarang' => [
        ['nama'=>'Lido29 Sumowono', 'maps'=>'https://goo.gl/maps/yyyy2'],
    ],
    'Magelang' => [
        ['nama'=>'Lido29 Borobudur', 'maps'=>'https://goo.gl/maps/yyyy3'],
        ['nama'=>'Lido29 Salaman', 'maps'=>'https://goo.gl/maps/yyyy4'],
    ],
];


      $foto_kota = [
        'Temanggung' => 'carousel-2.jpg',
        'Wonosobo' => 'carousel-3.jpg',
        'Semarang' => 'carousel-1.jpg',
        'Magelang' => 'carousel-3.jpg',
      ];

      foreach($foto_kota as $kota => $foto): ?>
      <div class="col-lg-3 col-md-6 col-6 text-center">
        <div class="card shadow-sm position-relative">
          <img src="<?= base_url() ?>assets/img/<?= $foto ?>" class="card-img-top img-fluid" alt="<?= $kota ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $kota ?></h5>
            <!-- Dropdown -->
            <div class="dropdown mt-auto">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdown<?= $kota ?>" data-bs-toggle="dropdown" aria-expanded="false">
                Lihat Cabang
              </button>
            <ul class="dropdown-menu" aria-labelledby="dropdown<?= $kota ?>">
  <?php foreach($kota_cabang[$kota] as $cabang): ?>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="<?= $cabang['maps'] ?>" target="_blank">
        <i class="fas fa-map-marker-alt me-2" style="color: red;"></i>
        <?= $cabang['nama'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>


            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Call To Action Section -->
      <section
        id="call-to-action"
        class="call-to-action section dark-background">
        <img src="<?= base_url() ?>assets/img-landing/cta-bg.jpg" alt="" />

        <div class="container">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
              <h3>Quotes of the day</h3>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
            </div>
            <!-- <div class="col-xl-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div> -->
          </div>
        </div>
      </section>
      <!-- /Call To Action Section -->

      <!-- Features Section -->
      <!-- <section id="features" class="features section">
        <div class="container">
          <div class="row gy-4">
            <div
              class="features-image col-lg-6 order-lg-2"
              data-aos="fade-up"
              data-aos-delay="100">
              <img src="<?= base_url() ?>assets/img-landing/features-bg.jpg" alt="" />
            </div>

            <div class="col-lg-6 order-lg-1">
              <div
                class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0"
                data-aos="fade-up"
                data-aos-delay="200">
                <i class="bi bi-archive flex-shrink-0"></i>
                <div>
                  <h4>Est labore ad</h4>
                  <p>
                    Consequuntur sunt aut quasi enim aliquam quae harum pariatur
                    laboris nisi ut aliquip
                  </p>
                </div>
              </div>
              End Features Item-->

              <!-- <div
                class="features-item d-flex mt-5 ps-0 ps-lg-3"
                data-aos="fade-up"
                data-aos-delay="300">
                <i class="bi bi-basket flex-shrink-0"></i>
                <div>
                  <h4>Harum esse qui</h4>
                  <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt
                  </p>
                </div>
              </div>
               End Features Item-->

              <!-- <div
                class="features-item d-flex mt-5 ps-0 ps-lg-3"
                data-aos="fade-up"
                data-aos-delay="400">
                <i class="bi bi-broadcast flex-shrink-0"></i>
                <div>
                  <h4>Aut occaecati</h4>
                  <p>
                    Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                    maiores omnis facere
                  </p>
                </div>
              </div>
               End Features Item-->

              <!-- <div
                class="features-item d-flex mt-5 ps-0 ps-lg-3"
                data-aos="fade-up"
                data-aos-delay="500">
                <i class="bi bi-camera-reels flex-shrink-0"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>
                    Expedita veritatis consequuntur nihil tempore laudantium
                    vitae denat pacta
                  </p>
                </div>
              </div>
               End Features Item-->
            </div>
          </div>
        </div> 
      </section>  
      <!-- /Features Section -->

      <!-- Clients Section -->
      <!-- <section id="clients" class="clients section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-0 clients-wrap">
            <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-1.png"
                class="img-fluid"
                alt="" />
            </div>
             End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-2.png"
                class="img-fluid"
                alt="" />
            </div> --> 
            <!-- End Client Item -->
<!-- 
            <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-3.png"
                class="img-fluid"
                alt="" /> -->
            </div>
            <!-- End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-4.png"
                class="img-fluid"
                alt="" />
            </div> -->
            <!-- End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-5.png"
                class="img-fluid"
                alt="" />
            </div> -->
            <!-- End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-6.png"
                class="img-fluid"
                alt="" />
            </div> -->
            <!-- End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-7.png"
                class="img-fluid"
                alt="" />
            </div> -->
            <!-- End Client Item -->

            <!-- <div class="col-xl-3 col-md-4 client-logo">
              <img
                src="<?= base_url() ?>assets/img-landing/clients/client-8.png"
                class="img-fluid"
                alt="" />
            </div> -->
            <!-- End Client Item -->
          <!-- </div>
        </div>
      </section> -->
      <!-- /Clients Section -->

      <!-- Stats Section -->
      <!-- <section id="stats" class="stats section dark-background">
        <img src="<?= base_url() ?>assets/img-landing/stats-bg.jpg" alt="" data-aos="fade-in" />

        <div
          class="container position-relative"
          data-aos="fade-up"
          data-aos-delay="100">
          <div class="subheading">
            <h3>What we have achieved so far</h3>
            <p>
              Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum
              consequatur illo.
            </p>
          </div> -->

          <!-- <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Clients</p>
              </div> -->
            <!-- </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div> -->
            <!-- End Stats Item -->
          <!-- </div>
        </div>
      </section> -->
      <!-- /Stats Section -->

      <!-- Portfolio Section -->
      <!-- <section id="portfolio" class="portfolio section">
         Section Title -->
        <!-- <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div> --> 
        <!-- End Section Title -->

        <!-- <div class="container">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order">
            <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Card</li>
              <li data-filter=".filter-branding">Web</li>
            </ul>
             End Portfolio Filters -->

            <!-- <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="200">
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-1.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-1.jpg"
                    title="App 1"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div> -->
              <!-- End Portfolio Item -->

             <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-2.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-2.jpg"
                    title="Product 1"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

             <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-3.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-3.jpg"
                    title="Branding 1"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

             <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-4.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-4.jpg"
                    title="App 2"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

              <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-5.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-5.jpg"
                    title="Product 2"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

            <!--  <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-6.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-6.jpg"
                    title="Branding 2"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              End Portfolio Item -->

               <!--<div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-7.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-7.jpg"
                    title="App 3"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

              <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-8.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-8.jpg"
                    title="Product 3"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item -->

             <!-- <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img
                  src="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-9.jpg"
                  class="img-fluid"
                  alt="" />
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="<?= base_url() ?>assets/img-landing/masonry-portfolio/masonry-portfolio-9.jpg"
                    title="Branding 2"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
               End Portfolio Item
            </div>
            End Portfolio Container 
          </div>
        </div>
      </section>
      /Portfolio Section -->

      <!-- Pricing Section -->
      <!-- <section id="pricing" class="pricing section light-background">
       Section Title -->
        <!-- <div class="container section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div> -->
        <!-- End Section Title -->

        <!-- <div class="container">
          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100">
              <div class="pricing-item">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div> -->
            <!-- End Pricing Item -->

            <!-- <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200">
              <div class="pricing-item recommended">
                <span class="recommended-badge">Recommended</span>
                <h3>Business</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div> -->
            <!-- End Pricing Item -->

            <!-- <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="pricing-item">
                <h3>Developer</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
             End Pricing Item -->
          </div>
        </div>
      </section> 
      <!-- /Pricing Section -->

      <!-- Faq Section -->
      <!-- <section id="faq" class="faq section">
        <div class="container-fluid">
          <div class="row gy-4">
            <div
              class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
              <div
                class="content px-xl-5"
                data-aos="fade-up"
                data-aos-delay="100">
                <h3>
                  <span>Frequently Asked </span><strong>Questions</strong>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Duis aute irure dolor in reprehenderit
                </p>
              </div> -->

              <!-- <div
                class="faq-container px-xl-5"
                data-aos="fade-up"
                data-aos-delay="200">
                <div class="faq-item faq-active">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
                      id volutpat lacus laoreet non curabitur gravida. Venenatis
                      lectus magna fringilla urna porttitor rhoncus dolor purus
                      non.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div> -->
                <!-- End Faq item-->

                <!-- <div class="faq-item">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>
                    Feugiat scelerisque varius morbi enim nunc faucibus a
                    pellentesque?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi. Id interdum velit laoreet id donec
                      ultrices. Fringilla phasellus faucibus scelerisque
                      eleifend donec pretium. Est pellentesque elit ullamcorper
                      dignissim. Mauris ultrices eros in cursus turpis massa
                      tincidunt dui.
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div> -->
                <!-- End Faq item-->

                <!-- <div class="faq-item">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>
                    Dolor sit amet consectetur adipiscing elit pellentesque?
                  </h3>
                  <div class="faq-content">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                      sagittis orci. Faucibus pulvinar elementum integer enim.
                      Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                      tellus pellentesque eu tincidunt. Lectus urna duis
                      convallis convallis tellus. Urna molestie at elementum eu
                      facilisis sed odio morbi quis
                    </p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                 End Faq item-->
              <!-- </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2">
              <img
                src="<?= base_url() ?>assets/img-landing/faq.jpg"
                class="img-fluid"
                alt=""
                data-aos="zoom-in"
                data-aos-delay="100" />
            </div>
          </div>
        </div>
      </section> -->
      <!-- /Faq Section -->

      <!-- Recent Posts Section -->
      <section id="recent-posts" class="recent-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Berita Terbaru</h2>
          <p>
           Update terkini seputar informasi dan kegiatan terbaru dari Lido29
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div
              class="col-xl-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100">
              <article>
                <div class="post-img">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-1.jpg"
                    alt=""
                    class="img-fluid" />
                </div>

                <p class="post-category">Carier</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >30 Pertanyaan Interview Kerja yang Sering Ditanyakan dan Cara Menjawabnya</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-author.jpg"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0" />
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div
              class="col-xl-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200">
              <article>
                <div class="post-img">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-2.jpg"
                    alt=""
                    class="img-fluid" />
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Nisi magni odit consequatur autem nulla dolorem</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-author-2.jpg"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0" />
                  <div class="post-meta">
                    <p class="post-author">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div
              class="col-xl-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300">
              <article>
                <div class="post-img">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-3.jpg"
                    alt=""
                    class="img-fluid" />
                </div>

                <p class="post-category">Entertainment</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Possimus soluta ut id suscipit ea ut in quo quia et
                    soluta</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="<?= base_url() ?>assets/img-landing/blog/blog-author-3.jpg"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0" />
                  <div class="post-meta">
                    <p class="post-author">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->
          </div>
          <!-- End recent posts list -->
        </div>
      </section>
      <!-- /Recent Posts Section -->

      <!-- Contact Section -->
      <!-- <section id="contact" class="contact section light-background"> -->
        <!-- Section Title -->
        <!-- <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div> -->
        <!-- End Section Title -->

        <!-- <div class="container" data-aos="fade" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4">
              <div
                class="info-item d-flex"
                data-aos="fade-up"
                data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div> -->
              <!-- End Info Item -->

              <!-- <div
                class="info-item d-flex"
                data-aos="fade-up"
                data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div> -->
              <!-- End Info Item -->

              <!-- <div
                class="info-item d-flex"
                data-aos="fade-up"
                data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div> -->
              <!-- End Info Item -->
            <!-- </div>

            <div class="col-lg-8">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
                data-aos="fade-up"
                data-aos-delay="200">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required="" />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required="" />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Subject"
                      required="" />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div> -->
            <!-- End Contact Form -->
          <!-- </div>
        </div>
      </section> -->

       <section class="contact-map">
       <div class="container section-title" data-aos="fade-up">
        <h2>Lokasi Kantor</h2>
      </div>
      <iframe
        src="<?= $content_zero['link_map'] ?>"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
      <!-- /Contact Section -->
    </main>
