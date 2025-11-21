<style>
/* Atur jarak bullet */
.content {
    margin-top: 0;
    margin-bottom: 0;
}

.content br {
    line-height: 1; /* bisa diubah sesuai kebutuhan */
}
</style>
<main class="main all-page">
  <section id="unit" class="section pt-5">
    <div class="container text-center">
      <?php if(!empty($unit['image'])): ?>
        <img src="<?= base_url('assets/img/' . $unit['image']) ?>" 
             alt="<?= htmlspecialchars($unit['title']) ?>" 
             class="img-fluid mb-4" style="max-width: 370px;">
      <?php endif; ?>

      <h2 class="fw-bold mb-3"><?= htmlspecialchars($unit['title']) ?></h2>

          <div class="content text-start mx-auto" style="max-width: 850px; font-size: 17px; line-height: 1.6;">
          <?php
          $desc = $unit['description1'] ?? '';

          // Jika konten disimpan dengan HTML entities, decode dulu
          $desc = htmlspecialchars_decode($desc);

          // Tampilkan langsung HTML yang valid
          echo $desc;
          ?>
      </div>
    </div>
  </section>
</main>


