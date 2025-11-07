<main class="main all-page">
  <section class="about-header py-5 bg-light">
  <div class="container">
    <!-- Judul -->
    <h1 class="fw-bold mb-3">
      <?= !empty($content_about['about_title']) ? $content_about['about_title'] : 'Tentang Kami'; ?>
    </h1>

    <hr class="mb-4" style="width: 80px; height: 3px; background:red; border:none;">

    <!-- Deskripsi -->
    <div class="text-limit">
      <?php if (!empty($content_about['about_description2'])): ?>
        <p><?= nl2br($content_about['about_description2']); ?></p>
      <?php else: ?>
        <p>Belum ada deskripsi yang ditambahkan.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Image Section -->
<section class="about-image-section" style="margin-top: -80px;">
  <div class="container">
    <?php if (!empty($content_about['about_image2'])): ?>
      <img 
        src="<?= base_url('assets/img/' . $content_about['about_image2']); ?>" 
        class="img-fluid rounded shadow"
        alt="<?= $content_about['about_title']; ?>">
    <?php else: ?>
      <img 
        src="<?= base_url('assets/img/default-about.jpg'); ?>" 
        class="img-fluid rounded shadow"
        alt="Default Image">
    <?php endif; ?>
  </div>
</section>

 <!-- Visi & Misi -->
<section class="py-5">
  <div class="container">
    <h2 class="fw-bold mb-3" style="margin-top: -30px;">Visi dan Misi</h2>
    <hr class="mb-4" style="width: 70px; height: 3px; background:red; border:none;">

    <!-- Visi -->
    <div class="mb-3">
      <h5 class="fw-bold">Visi</h5>
      <p>
        <?= !empty($content_zero['visi']) ? nl2br($content_zero['visi']) : 'Belum ada visi yang ditambahkan.'; ?>
      </p>
    </div>

    <!-- Misi -->
    <div>
      <h5 class="fw-bold">Misi</h5>
      <p>
        <?= !empty($content_zero['misi']) ? nl2br($content_zero['misi']) : 'Belum ada misi yang ditambahkan.'; ?>
      </p>
    </div>
  </div>
</section>

</main>
