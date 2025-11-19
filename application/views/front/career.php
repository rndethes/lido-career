<style>
  .career-hero {
    width: 100%;
    height: 380px;
   background: url('<?= base_url("assets/img-landing/" . $career["banner_image"]) ?>') center/cover no-repeat; */
    position: relative;
  }

 /* Button Search Custom */
.btn-search {
  background-color: #d80415ff;
  border-color: #d80415ff;
  color: #fff;
  transition: 0.25s ease;
}

.btn-search:hover {
  background-color: #b10312ff;
  border-color: #b10312ff;
   color: #fff;
}


  .career-hero-overlay {
    position: relative;
    top: 100% !important;
    bottom: 30px !important;
    left: 60px;
    color: #fff;

}

  .career-hero-overlay h1 {
    font-size: 42px;
    font-weight: 700;
  }

  /* Content Title */
   .career-title {
    font-size: 32px;
    font-weight: 700;
    text-align: center;
    margin-top: 100px;
    color: #4a4a4a;
  }

  .career-desc {
    text-align: center;
    font-size: 20px;
    width: 75%;
    margin: auto;
    margin-bottom: 40px;
    color: #4a4a4a;
    line-height: 1.6;
  }

  /* Filter Box */
  .career-filter {
    padding: 25px;
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    margin-bottom: 40px;
  }

  /* Job List Title */
  .job-list-title {
    font-size: 26px;
    font-weight: 700;
    margin: 15px 0;
    text-align: center;
  }

  /* Job Card */
  .job-card {
    border-radius: 14px;
    padding: 20px;
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    margin-bottom: 18px;
  }

  .job-division {
    font-size: 17px;
    font-weight: 600;
    color: #d80415ff;
  }

  .job-title {
    font-size: 20px;
    font-weight: 700;
    margin: 10px 0 6px;
  }

  .btn-detail {
  background: #d80415ff;
  color: white;
  padding: 7px 18px;
  border-radius: 10px;
  text-decoration: none;
  font-weight: 500;
  border: none;
  display: inline-block;
  transition: 0.3s ease;
}

.btn-detail:hover {
  background: #b10312ff;
  color: white;
}
@media (max-width: 768px) {
    .career-hero-overlay {
        bottom: 40px;  
        left: 10px;  
        margin-bottom:-70px;
    }
}

</style>

<main class="main all-page">
<!-- HERO BANNER -->
<div class="career-hero">
  <div class="career-hero-overlay">
    <div class="container section-title" data-aos="fade-up">
       <h2><?= $career['banner_title'] ?></h2>
    </div>
  </div>
</div>

<div class="container">

  <!-- TITLE -->
    <h3 class="career-title"><?= $career['title_page'] ?></h3>
  <p class="career-desc"><?= $career['description_page'] ?></p>

  <!-- FILTER -->
  <div class="career-filter">
    <form method="GET">

      <div class="row g-3">

        <!-- Search -->
        <div class="col-lg-4">
          <input type="text" name="search" class="form-control"
                 placeholder="Cari pekerjaan..." value="<?= $this->input->get('search') ?>">
        </div>

        <!-- Divisi -->
        <div class="col-lg-4">
          <select name="division" class="form-control">
            <option value="">Semua Divisi</option>
            <?php foreach ($all_divisi as $d): ?>
              <option value="<?= $d['id_division'] ?>" 
                <?= ($this->input->get('division') == $d['id_division']) ? 'selected' : '' ?>>
                <?= $d['name_division'] ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Tombol -->
        <div class="col-lg-4">
          <button class="btn btn-search w-100">Search</button>
        </div>


      </div>

    </form>
  </div>

  <!-- LIST LOWONGAN -->
  <h3 class="job-list-title">Daftar Lowongan Pekerjaan</h3>

  <?php foreach ($all_divisi as $divisi): ?>

    <?php
      // Ambil job per divisi
      $CI = &get_instance();
      $CI->load->model('main_model');
      $all_job = $CI->main_model->getJob($divisi['id_division']);
    ?>

    <?php foreach ($all_job as $job): ?>
      <?php if ($job['is_active'] != 1) continue; ?>

      <!-- FILTERING LOGIC -->
      <?php
        $search = strtolower($this->input->get('search'));
        $division_filter = $this->input->get('division');

        if ($search && strpos(strtolower($job['name_job']), $search) === false)
          continue;

        if ($division_filter && $division_filter != $divisi['id_division'])
          continue;
      ?>

      <!-- JOB CARD -->
      <div class="job-card">
        <div class="job-division"><?= $divisi['name_division'] ?></div>
        <div class="job-title"><?= $job['name_job'] ?></div>

        <a class="btn-detail"
           data-bs-toggle="modal"
           data-bs-target="#jobModal"
           data-title="<?= $job['name_job'] ?>"
           data-req="<?= $job['requirement_job'] ?>"
           data-desc="<?= $job['description_job'] ?>">
          Lihat Detail
        </a>
      </div>

    <?php endforeach; ?>
  <?php endforeach; ?>

</div>


<!-- MODAL DETAIL -->
<div class="modal fade" id="jobModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="jobModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <h4>Deskripsi</h4>
        <p id="jobdesc"></p>

        <h4>Kualifikasi</h4>
        <p id="jobreq"></p>
      </div>

      <div class="modal-footer">
        <a href="<?= base_url('candidatejob/index') ?>" class="btn btn-primary px-4">
          Lamar Sekarang
        </a>
      </div>

    </div>
  </div>
</div>
</div?>

<script>
  const jobModal = document.getElementById('jobModal');
  jobModal.addEventListener('show.bs.modal', event => {
    const btn = event.relatedTarget;
    document.getElementById('jobModalLabel').textContent = btn.getAttribute('data-title');
    document.getElementById('jobdesc').innerHTML = btn.getAttribute('data-desc');
    document.getElementById('jobreq').innerHTML = btn.getAttribute('data-req');
  });
</script>
