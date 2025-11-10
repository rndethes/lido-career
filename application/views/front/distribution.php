<main class="main all-page">
  <section class="py-5">
    <div class="container text-center">
      <img src="<?= base_url('assets/img/' . $business['image']) ?>" 
           alt="<?= $business['title'] ?>" 
           class="img-fluid mb-4" style="max-width: 300px; border-radius: 10px;">

      <h2 class="fw-bold mb-3"><?= $business['title'] ?></h2>

      <p style="font-size: 17px; line-height: 1.7; text-align: justify;">
        <?= nl2br($business['description']) ?>
      </p>
    </div>
  </section>
</main>
