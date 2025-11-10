<main class="main all-page">
  <section class="unit-bisnis py-5">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">

      <div class="text-content" style="flex: 1 1 50%; padding-right: 30px;">
        <?php foreach($unit_business as $unit): ?>
          <h2 class="fw-bold mb-3"><?= $unit['title'] ?></h2>
          <p><?= $unit['description'] ?></p>
          <a href="<?= base_url($unit['link']) ?>" class="btn btn-primary mb-4">Lihat Selengkapnya</a>
        <?php endforeach; ?>
      </div>

      <div class="image-content" style="flex: 1 1 40%; text-align: center;">
        <img src="<?= base_url('assets/img/unit-bisnis.jpeg') ?>" 
             alt="LIDO29 Group" 
             class="img-fluid" 
             style="max-width: 500px; width: 100%; height: auto;">
      </div>

    </div>
  </section>
</main>
