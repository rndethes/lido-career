    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background" style="z-index:1;">
        <img src="<?= base_url() ?>assets/img-landing/bg1.jpeg" alt="" data-aos="fade-in" />

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
       <!-- 3 Feature Boxes Section -->
 <section class="feature-boxes">
  <div class="container">
    <div class="row justify-content-center g-4">

      <!-- Box 1 -->
      <div class="col-md-4">
        <a href="<?= base_url('front/about_details') ?>" class="box-item box-blue">
          <i class="bi bi-buildings"></i>
          <h4>TENTANG LIDO29</h4>
        </a>
      </div>

      <!-- Box 2 -->
      <div class="col-md-4">
       <a href="<?= base_url('front/business_details') ?>" class="box-item box-dark">
          <i class="bi bi-diagram-3"></i>
          <h4>UNIT BISNIS</h4>
        </a>
      </div>

      <!-- Box 3 -->
      <div class="col-md-4">
        <a href="<?= base_url('front/career') ?>" class="box-item box-dark2">
          <i class="bi bi-person-badge"></i>
          <h4>KARIER</h4>
        </a>
      </div>

    </div>
  </div>
</section>

 <section class="about-tancorp">
  <div class="container-fluid p-0">

    <!-- Full Image -->
    <div class="about-image">
      <img src="<?= base_url('assets/img/b11.jpeg') ?>" alt="About Image">
    </div>

    <!-- Overlapped Content -->
    <div class="about-box">
      <h2 class="fw-bold mb-3"style="color: white;">LIDO29</h2>
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
          </div>
        </div>
      </section>
  
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
                  <a href="<?= site_url('front/blog'); ?>">
                    30 Pertanyaan Interview Kerja yang Sering Ditanyakan dan Cara Menjawabnya
                  </a>

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
