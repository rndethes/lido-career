<main class="main all-page">
    <!-- Section Recent Posts -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Berita Lido29</h2>
            <p>Update terkini seputar informasi dan kegiatan terbaru dari Lido29</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                <?php if(!empty($news_list)): 
                    $delay = 100;
                    foreach($news_list as $news): ?>
               <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">

    <a href="<?= site_url('front/blog/'.$news['id']) ?>" class="card-link-wrapper">
        <article class="blog-post">
            <div class="post-img mb-3">
                <?php if(!empty($news['cover_image'])): ?>
                    <img src="<?= base_url('assets/img-landing/blog/'.$news['cover_image']) ?>" 
                         alt="<?= htmlspecialchars($news['title']) ?>" 
                         class="img-fluid rounded" />
                <?php else: ?>
                    <img src="<?= base_url('assets/img-landing/blog/default.jpg') ?>" 
                         alt="No Image" class="img-fluid rounded" />
                <?php endif; ?>
            </div>

            <p class="post-category"><?= htmlspecialchars($news['category']) ?></p>

            <h2 class="title"><?= htmlspecialchars($news['title']) ?></h2>

            <div class="d-flex align-items-center mt-2">
                <img src="<?= base_url('assets/img-landing/blog/blog-author.jpg') ?>" 
                     alt="<?= htmlspecialchars($news['updated_by']) ?>" 
                     class="img-fluid post-author-img flex-shrink-0 rounded-circle me-2" />
                <div class="post-meta">
                    <p class="post-author mb-0"><?= htmlspecialchars($news['updated_by']) ?></p>
                    <p class="post-date mb-0">
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
                    endforeach;
                else: ?>
                    <div class="col-12 text-center text-muted">Belum ada berita</div>
                <?php endif; ?>
            </div>    
        </div>

        <div class="pagination-simple text-center mt-4">
    <?php if ($current_page > 1): ?>
        <a href="?page=<?= $current_page - 1 ?>" class="btn btn-outline-primary me-2">← Prev</a>
    <?php endif; ?>

    <span>Halaman <?= $current_page ?> dari <?= $total_pages ?></span>

    <?php if ($current_page < $total_pages): ?>
        <a href="?page=<?= $current_page + 1 ?>" class="btn btn-outline-primary ms-2">Next →</a>
    <?php endif; ?>
</div>

    </section>
</main>
