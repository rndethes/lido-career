<?php if(!empty($news)): ?>
<main class="main all-page">
    <section id="news-detail" class="news-detail section">
        <div class="container">
            <article class="blog-post">

 <h1 class="title"><?= htmlspecialchars($news['title']) ?></h1>
                <!-- Carousel Cover + Media -->
                <div id="newsCarousel" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">

                        <!-- Cover Image -->
                        <div class="carousel-item active">
                            <?php if(!empty($news['cover_image'])): ?>
                                <img src="<?= base_url('assets/img-landing/blog/'.$news['cover_image']) ?>" 
                                     alt="<?= htmlspecialchars($news['title']) ?>" 
                                     class="d-block w-100 rounded" style="max-height:400px; object-fit:cover;">
                            <?php else: ?>
                                <img src="<?= base_url('assets/img-landing/blog/default.jpg') ?>" 
                                     alt="No Image" class="d-block w-100 rounded" style="max-height:400px; object-fit:cover;">
                            <?php endif; ?>
                        </div>

                        <!-- Media tambahan -->
                        <?php if(!empty($news['media'])): 
                            $media_files = json_decode($news['media'], true);
                            if(!empty($media_files)):
                                foreach($media_files as $file): ?>
                                    <div class="carousel-item">
                                        <?php if(preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)): ?>
                                            <img src="<?= base_url('assets/img-landing/blog/'.$file) ?>" 
                                                 class="d-block w-100 rounded" 
                                                 style="max-height:400px; object-fit:cover;">
                                        <?php elseif(preg_match('/\.(mp4|webm|ogg)$/i', $file)): ?>
                                            <video class="d-block w-100 rounded" controls style="max-height:400px; object-fit:cover;">
                                                <source src="<?= base_url('assets/img-landing/blog/'.$file) ?>" type="video/mp4">
                                                Browsermu tidak mendukung video.
                                            </video>
                                        <?php endif; ?>
                                    </div>
                        <?php endforeach; endif; endif; ?>
                    </div>

                    <!-- Controls -->
                    <?php if(!empty($news['media'])): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    <?php endif; ?>
                </div>

                <!-- Category -->
                <p class="post-category"><?= htmlspecialchars($news['category']) ?></p>

                <!-- Title & Subtitle -->
                <?php if(!empty($news['subtitle'])): ?>
                    <h4 class="text-muted"><?= htmlspecialchars($news['subtitle']) ?></h4>
                <?php endif; ?>

                <!-- Content -->
                <div class="post-content mt-3">
                    <?= $news['content'] ?>
                </div>

                <!-- Author Info -->
                <div class="d-flex align-items-center mt-4">
                    <img src="<?= base_url('assets/img-landing/blog/blog-author.jpg') ?>" 
                         alt="<?= htmlspecialchars($news['updated_by']) ?>" 
                         class="img-fluid post-author-img flex-shrink-0 rounded-circle me-2" style="width:50px;height:50px;">
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
        </div>
    </section>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php else: ?>
<div class="container text-center py-5">
    <p class="text-muted">Berita tidak ditemukan.</p>
</div>
<?php endif; ?>
