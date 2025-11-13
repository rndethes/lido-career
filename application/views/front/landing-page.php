    <main class="main">
     <!-- Hero Section -->
<!-- Hero Section -->
<section id="hero" class="hero section dark-background" style="z-index:1;">

  <img 
    src="<?= base_url('assets/img-landing/' . $content_hero['image_homepage']) ?>" 
    alt="Hero Background" 
    data-aos="fade-in"
  />

  <div class="container d-flex flex-column align-items-center text-center">
    <h2 data-aos="fade-up" data-aos-delay="100">
      <?= $content_hero['tittle_homepage']; ?>
    </h2>

    <p data-aos="fade-up" data-aos-delay="200">
      <?= $content_hero['subtitle_homepage']; ?>
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

 <!-- About Section -->
<section class="about-tancorp">
  <div class="container-fluid p-0">

    <!-- Gambar About -->
    <div class="about-image">
      <img src="<?= base_url('assets/img/' . $content_first['about_image']); ?>" alt="About Image">
    </div>

    <!-- Konten About -->
    <div class="about-box">
      <h2 class="fw-bold mb-3" style="color: white;">
        <?= $content_first['about_subtitle']; ?>
      </h2>
      <hr class="about-line mb-4">

      <!-- <h5 class="mb-3" style="color: #f5f5f5;">
        <?= $content_first['about_subtitle']; ?>
      </h5> -->

      <p style="color: #eaeaea;">
        <?= nl2br($content_first['about_description']); ?>
      </p>
    </div>

  </div>
</section>



     <!-- Services Section -->
<section id="visimisi-intro" class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2><?= $visimisi_intro['intro_title']; ?></h2>
        <p><?= $visimisi_intro['intro_description']; ?></p>
      </div>

     <?php
if (!empty($visimisi_intro['intro_video_url'])) {
    $url = $visimisi_intro['intro_video_url'];
    $embed_url = '';

    // Format panjang (watch?v=...)
    if (strpos($url, 'watch?v=') !== false) {
        $embed_url = str_replace('watch?v=', 'embed/', $url);
        $embed_url = strtok($embed_url, '&'); // hilangkan parameter tambahan
    }
    // Format pendek (youtu.be)
    elseif (strpos($url, 'youtu.be') !== false) {
        $parts = parse_url($url);
        $video_id = ltrim($parts['path'], '/');
        $embed_url = 'https://www.youtube.com/embed/' . $video_id;
    }
?>
<div class="col-lg-6 d-flex justify-content-center">
    <div class="video-wrapper" style="width: 70%; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
        <iframe src="<?= $embed_url; ?>" frameborder="0" allowfullscreen
                style="position: absolute; top:0; left:0; width:100%; height:100%;"></iframe>
    </div>
</div>
<?php } ?>

    </div>
  </div>
</section>

<section id="cabang-kota" class="section py-5">
  <div class="container-fluid px-0">
    <div class="row g-0">

      <?php 
      // Kelompokkan cabang berdasarkan area
      $grouped = [];
      foreach ($offices as $office) {
          $grouped[$office['area']][] = $office;
      }

      $index = 0;
      $colors = ['#6A1B1A', '#8B2F2C']; // maroon gelap dan terang bergantian

      foreach ($grouped as $area => $branches): 
          $index++;
          $bgColor = $colors[$index % 2];
      ?>
      <!-- Card area -->
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="area-card text-center" 
             style="background-color: <?= $bgColor ?>;"
             data-bs-toggle="modal" data-bs-target="#modalArea<?= $index ?>">
          <h1 class="fw-bold mb-1"><?= count($branches) ?></h1>
          <h5 class="text-uppercase"><?= $area ?></h5>
        </div>
      </div>

      <!-- Modal daftar cabang -->
      <div class="modal fade" id="modalArea<?= $index ?>" tabindex="-1" aria-labelledby="modalLabel<?= $index ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
           <div class="modal-header" style="background-color: <?= $bgColor ?>;">
                <h5 class="modal-title" style="color: white !important;"> Daftar Cabang - <?= $area ?></h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="accordion" id="accordion<?= $index ?>">
                <?php foreach ($branches as $i => $branch): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?= $index.$i ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#collapse<?= $index.$i ?>" aria-expanded="false" 
                            aria-controls="collapse<?= $index.$i ?>">
                      <?= $branch['branch_name'] ?> (<?= $branch['type'] ?>)
                    </button>
                  </h2>
                  <div id="collapse<?= $index.$i ?>" class="accordion-collapse collapse" 
                       aria-labelledby="heading<?= $index.$i ?>" data-bs-parent="#accordion<?= $index ?>">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-5">
                          <img src="<?= base_url('assets/img/'.$branch['image']) ?>" 
                               alt="<?= $branch['branch_name'] ?>" 
                               class="img-fluid rounded shadow-sm mb-3">
                        </div>
                        <div class="col-md-7">
                          <p><strong>Nama Cabang:</strong> <?= $branch['branch_name'] ?></p>
                          <p><strong>Tipe:</strong> <?= $branch['type'] ?></p>
                          <p><strong>Alamat:</strong> <?= $branch['address'] ?></p>
                          <p><strong>Telepon:</strong> <?= $branch['phone_number'] ?></p>
                          <p><strong>Email:</strong> <?= $branch['email'] ?></p>
                          <a href="<?= $branch['maps_url'] ?>" target="_blank" class="btn btn-sm btn-outline-danger mt-2">
                            <i class="fas fa-map-marker-alt me-2"></i>Lihat di Maps
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>
</section>



      <!-- /Services Section -->

  <section
    id="call-to-action"
    class="call-to-action section dark-background"
    style="position: relative; overflow: hidden;">

    <!-- Background image -->
    <img src="<?= base_url('assets/img-landing/'.$quote['image']) ?>" 
         alt="" 
         style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-1;" />

    <div class="container">
        <div class="row align-items-center">

            <!-- Text content -->
            <div class="col-xl-9 text-center text-xl-start" 
                 data-aos="fade-up" 
                 data-aos-delay="100">
                <h3><?= $quote['title'] ?></h3>
                <p><?= $quote['content'] ?></p>
            </div>

        </div>
    </div>
</section>


  
    <!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
        <p>Update terkini seputar informasi dan kegiatan terbaru dari Lido29</p>
    </div>
    <!-- End Section Title -->

   <div class="container">
    <div class="row gy-4">
        <?php 
        $delay = 100; // untuk data-aos-delay
        foreach($news_list as $news): ?>
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
            <article>
                <div class="post-img">
                    <?php if(!empty($news['cover_image'])): ?>
                        <img src="<?= base_url('assets/img-landing/blog/'.$news['cover_image']) ?>" 
                             alt="<?= htmlspecialchars($news['title']) ?>" 
                             class="img-fluid" />
                    <?php else: ?>
                        <img src="<?= base_url('assets/img-landing/blog/default.jpg') ?>" 
                             alt="No Image" 
                             class="img-fluid" />
                    <?php endif; ?>
                </div>

                <p class="post-category"><?= htmlspecialchars($news['category']) ?></p>

                <h2 class="title">
                    <a href="<?= site_url('front/blog/'.$news['id']) ?>">
                        <?= htmlspecialchars($news['title']) ?>
                    </a>
                </h2>

                <div class="d-flex align-items-center">
                    <img src="<?= base_url('assets/img-landing/blog/blog-author.jpg') ?>" 
                         alt="<?= htmlspecialchars($news['updated_by']) ?>" 
                         class="img-fluid post-author-img flex-shrink-0" />
                    <div class="post-meta">
                        <p class="post-author"><?= htmlspecialchars($news['updated_by']) ?></p>
                        <p class="post-date">
                            <time datetime="<?= $news['release_date'] ?>">
                                <?= date('M d, Y', strtotime($news['release_date'])) ?>
                            </time>
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <?php 
        $delay += 100; // naikkan delay setiap item
        endforeach; ?>
    </div>
    <!-- End recent posts list -->
</div>
      </section>

       <section class="contact-map">
       <div class="container section-title" data-aos="fade-up" style="margin-bottom: -30px;">
        <h2>Lokasi Kantor</h2>
      </div>

      <iframe
        src="<?= $content_zero['link_map'] ?>"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
     
    </main>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            // tutup dropdown lain
            dropdownToggles.forEach(function(other) {
                if(other !== toggle){
                    var menu = bootstrap.Dropdown.getInstance(other);
                    if(menu) menu.hide();
                }
            });
        });
    });
});
</script>

