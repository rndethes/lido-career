<main class="main all-page">
  <section id="retail" class="section pt-5">
    <div class="container text-center">
      <img src="<?= base_url('assets/img/' . $business['image']) ?>" 
           alt="<?= $business['title'] ?>" 
           class="img-fluid mb-4" style="max-width: 250px; border-radius: 10px;">

      <h2 class="fw-bold mb-3"><?= $business['title'] ?></h2>

      <div class="content text-start mx-auto" style="max-width: 850px; font-size: 17px; line-height: 1.7;">
        <p><?= nl2br($business['description']) ?></p>

        <?php if(!empty($business['advantages'])): 
          $advantages = json_decode($business['advantages'], true);
        ?>
          <h5 class="fw-bold mt-4">Keunggulan Retail Kami:</h5>
          <ul style="text-align:left; max-width:750px; margin: 0 auto;">
            <?php foreach($advantages as $item): ?>
              <li><?= $item ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
