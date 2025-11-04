<main id="main">

  <!-- Logo -->
  <section class="content" id="career">
    <!-- <div class="d-flex justify-content-center">
      <img src="<?= base_url('assets/img/img-landing/logo_webpage.png') ?>" alt="LIDO29 Logo">
    </div> -->

    <!-- Title -->
    <div class="d-flex justify-content-center">
      <h3 class="m-5">Bergabung Bersama Kami</h3>
    </div>

    <!-- Join Image -->
    <div class="d-flex justify-content-center">
      <img class="join-with" src="<?= base_url('assets/img/img-landing/join-with-us.png') ?>" alt="Join With Us">
    </div>

    <!-- Sub Title -->
    <div class="d-flex justify-content-center">
      <h3 class="m-5">Posisi Yang Tersedia</h3>
    </div>

    <!-- Job List -->
    <div class="job-search">
      <div class="accordion opacity-75" id="accordionJob">

        <?php foreach ($all_divisi as $divisi): ?>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button content-division" type="button" data-bs-toggle="collapse"
                data-bs-target="#divisi<?= $divisi['id_division'] ?>">
                <?= $divisi['name_division'] ?>
              </button>
            </h2>

            <?php
              $CI = &get_instance();
              $CI->load->model('main_model');
              $all_job = $CI->main_model->getJob($divisi['id_division']);
            ?>

            <div id="divisi<?= $divisi['id_division'] ?>" class="accordion-collapse collapse"
              data-bs-parent="#accordionJob">
              <div class="accordion-body">
                <div class="row m-2">

                  <?php foreach ($all_job as $job): ?>
                    <?php if ($job['is_active'] == 1): ?>
                      <div class="col-lg-6 mt-3 mb-3">
                        <div class="content-job"><?= $job['name_job'] ?></div>
                      </div>

                      <div class="col-lg-6 mt-3 mb-3 d-flex flex-row-reverse">
                        <div class="content-button-job">
                          <a class="content-button" 
                             data-bs-toggle="modal" 
                             data-bs-target="#jobModal"
                             data-title="<?= $job['name_job'] ?>"
                             data-req="<?= $job['requirement_job'] ?>"
                             data-desc="<?= $job['description_job'] ?>">
                            <span class="content-btn-title">Detail</span>
                          </a>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>

                </div>
              </div>
            </div>

          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- Job Detail Modal -->
  <div class="modal fade" id="jobModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="jobModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <h4>Deskripsi</h4>
          <p id="jobdesc"></p>

          <h4>Kualifikasi</h4>
          <p id="jobreq"></p>
        </div>

        <div class="modal-footer">
          <a href="<?= base_url('candidatejob/index') ?>" class="btn btn-primary">Lamar sekarang</a>
        </div>
      </div>
    </div>
  </div>

</main>

<script>
  const jobModal = document.getElementById('jobModal');
  jobModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;

    document.getElementById('jobModalLabel').textContent = button.getAttribute('data-title');
    document.getElementById('jobdesc').textContent = button.getAttribute('data-desc');
    document.getElementById('jobreq').textContent = button.getAttribute('data-req');
  });
</script>
