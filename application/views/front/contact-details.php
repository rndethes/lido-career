<main class="main all-page">
  <section class="faq-section py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Frequently Asked Questions (FAQ)</h2>

      <div class="accordion" id="faqAccordion">
        <?php if (!empty($faqs)): ?>
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading<?= $index + 1 ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $index + 1 ?>" aria-expanded="false" aria-controls="faq<?= $index + 1 ?>">
                            <?= htmlspecialchars($faq['question']) ?>
                        </button>
                    </h2>
                    <div id="faq<?= $index + 1 ?>" class="accordion-collapse collapse" aria-labelledby="faqHeading<?= $index + 1 ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?= $faq['answer'] ?> <!-- Menggunakan HTML dari database, pastikan aman -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Tidak ada FAQ tersedia.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>