<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-3 mb-lg-0 mb-4">
      <div class="card z-index-2">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill flex-column p-1" role="tablist">
            <?php
            foreach ($showtable as $div) {
            ?>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 job active" data-bs-toggle="tab" id="jobvacancy" data-target="<?= $div['id_division'] ?>" role="tab" aria-controls="preview" aria-selected="true">
                  <?= $div['name_division'] ?>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-lg-8 mb-lg-0 mb-4">
      <!--- PROFILE --->
      <div class="card z-index-2 h-100">
        <div class="card-header pb-0 pt-3 bg-transparent">
          <h6 class="text-capitalize"></h6>
        </div>
        <div class="card-body p-3">

          <div class="list-group">
            <!-- tampilan daftar job -->
            <div class="show-data">

            </div>

            <!-- <a href="job-vacancy-apply.html" class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Lowongan Kasir</h5>
                <small><span class="badge bg-gradient-success">Available</span></small>
              </div>
              <p class="mb-1">Some placeholder content in a paragraph.</p>
              <small>And some small print.</small>
            </a> -->

          </div>


        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
  </div>
  <div class="row mt-4">
  </div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
  <!-- sweetalert jika berhasil-->
<script>
    <?php 
        if($this->session->flashdata('success')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('success')) ?>;
        swal.fire({
            tittle : 'Berhasil',
            text : isi,
            icon : 'success',
        }) <?php } ?>
</script>