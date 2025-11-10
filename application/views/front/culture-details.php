<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<main class="main all-page">

<!-- Section Culture -->
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
         <img src="<?= base_url('assets/img/' . $culture['image']) ?>" class="img-fluid rounded shadow" alt="<?= $culture['title'] ?>" style="width: 80%; height: auto; display: block;">
      </div>

      <div class="col-lg-6" style="font-size: 17px; line-height: 1.7; margin-bottom:-60px;">
        <!-- Title dari setting_culture -->
        <h2 class="fw-bold mb-3"><?= $culture['title'] ?></h2>
        <p><?= nl2br($culture['about_culture']) ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Section Detail Culture -->
<section class="py-5">
  <div class="container">
    <?php foreach($culture_details as $key => $detail): ?>
    <div class="row align-items-center <?= $key % 2 != 0 ? 'flex-md-row-reverse' : '' ?> mb-5" data-aos="fade-up" data-aos-delay="<?= 100 + ($key*200) ?>">
      <div class="col-md-5 text-center">
        <img src="<?= base_url('assets/img/' . $detail['image']) ?>" class="img-fluid" alt="<?= $detail['title'] ?>" style="width: 70%; height: auto;">
      </div>
      <div class="col-md-7">
        <h3 class="fw-bold" style="color:#e74c3c;"><?= $detail['title'] ?> <i>(<?= $detail['subtitle'] ?>)</i></h3>
        <p><?= nl2br($detail['description']) ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
