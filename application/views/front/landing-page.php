<style>

.col-5-per-row {
    flex: 0 0 20%;
    max-width: 20%;
}

.about-box {
  position: absolute;
  top: 50%;
  right: 5%;
  transform: translateY(-50%);
  background: #8b000f;
  color: #fff;
  width: 48%;          
  padding: 40px 30px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

@media (max-width: 992px) {
    .col-5-per-row {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }

     .about-box {
    position: static;
    width: 100%;
    transform: none;
    margin-top: 20px;
  }
}

@media (max-width: 768px) {
    .col-5-per-row {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }

    #cabang-kota .area-card {
        min-width: unset !important;
        width: 100%;
    }
    
}
</style>


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
   <div class="container section-title" data-aos="fade-up">
        <h2>Cabang Kita</h2>
        <p>Cabang Lido29 merupakan pusat layanan strategis yang mendukung kebutuhan pelanggan dengan pelayanan cepat, ramah, dan profesional.</p>
    </div>

    <div class="container-fluid px-0">
        <div class="row g-0" id="branchContainer">
            <!-- Data akan dirender oleh JavaScript -->
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
        $delay = 100;
        $limit = 0; // batas tampilan

        foreach($news_list as $news): 
            if ($limit >= 3) break;
        ?>
       <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
    <a href="<?= site_url('front/blog/'.$news['id']) ?>" class="card-link-wrapper">
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

            <h2 class="title"><?= htmlspecialchars($news['title']) ?></h2>

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
    </a>
</div>
        <?php 
            $delay += 100; 
            $limit++; // naikkan counter
        endforeach; ?>
    </div>
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
      document.addEventListener("DOMContentLoaded", function () {
    fetch("<?= base_url('front/get_offices_json') ?>")
        .then(response => response.json())
        .then(res => {
            if (res.status !== "success") return;

            const data = res.data;

            // urutan area
            const order = ["Office", "Magelang", "Temanggung", "Semarang", "Wonosobo"];

            // group
            const grouped = {};
            data.forEach(o => {
                if (!grouped[o.area]) grouped[o.area] = [];
                grouped[o.area].push(o);
            });

            // sort sesuai order
            const sorted = {};
            order.forEach(a => {
                if (grouped[a]) sorted[a] = grouped[a];
            });

            const colors = ['#6A1B1A', '#8B2F2C'];
            let index = 0;

            let html = "";

            Object.entries(sorted).forEach(([area, branches]) => {
                index++;
                const bg = colors[index % 2];
                const modalId = "modalArea" + index;

                // CARD
               html += `
                <div class="col-5-per-row">
                    <div class="area-card text-center" 
                        style="background-color:${bg}"
                        data-bs-toggle="modal" data-bs-target="#${modalId}">
                        <h1 class="fw-bold mb-1">${branches.length}</h1>
                        <h5 class="text-uppercase">${area}</h5>
                    </div>
                </div>
                `;
                // MODAL
                html += `
                <div class="modal fade" id="${modalId}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:${bg}">
                                <h5 class="modal-title" style="color:white">Daftar Cabang - ${area}</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="accordion" id="accordion${index}">
                `;

                branches.forEach((b, i) => {
                    html += `
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="h${index}${i}">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#c${index}${i}">
                                ${b.branch_name} (${b.type})
                            </button>
                        </h2>

                        <div id="c${index}${i}" class="accordion-collapse collapse"
                             data-bs-parent="#accordion${index}">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="<?= base_url('assets/img/') ?>${b.image}"
                                             class="img-fluid rounded shadow-sm mb-3">
                                    </div>

                                    <div class="col-md-7">
                                        <p><strong>Nama Cabang:</strong> ${b.branch_name}</p>
                                        <p><strong>Tipe:</strong> ${b.type}</p>
                                        <p><strong>Alamat:</strong> ${b.address}</p>
                                        <p><strong>Telepon:</strong> ${b.phone_number}</p>
                                        <p><strong>Email:</strong> ${b.email}</p>

                                        <a href="${b.maps_url}" target="_blank"
                                           class="btn btn-sm btn-outline-danger mt-2">
                                            <i class="fas fa-map-marker-alt me-2"></i>Lihat di Maps
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                });

                html += `
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
            });

            document.getElementById("branchContainer").innerHTML = html;
        });
});


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

