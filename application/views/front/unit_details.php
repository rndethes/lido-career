<main class="main all-page">
  <section id="unit" class="section pt-5">
    <div class="container text-center">
      <?php if(!empty($unit['image'])): ?>
        <img src="<?= base_url('assets/img/' . $unit['image']) ?>" 
             alt="<?= htmlspecialchars($unit['title']) ?>" 
             class="img-fluid mb-4" style="max-width: 250px; border-radius: 10px;">
      <?php endif; ?>

      <h2 class="fw-bold mb-3"><?= htmlspecialchars($unit['title']) ?></h2>

      <div class="content text-start mx-auto" style="max-width: 850px; font-size: 17px; line-height: 1.7;">
        <p><?= nl2br(htmlspecialchars($unit['description1'])) ?></p>

        <?php if(!empty($unit['advantages'])): 
          $advantages = json_decode($unit['advantages'], true);
        ?>
          <h5 class="fw-bold mt-4">Keunggulan Unit Bisnis:</h5>
          <ul style="text-align:left; max-width:750px; margin: 0 auto;">
            <?php foreach($advantages as $item): ?>
              <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
