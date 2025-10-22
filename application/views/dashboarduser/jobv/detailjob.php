<div class="container-fluid py-4">
    <div class="row">
        <!-- <div class="col-lg-3 mb-lg-0 mb-4">
       
          
        </div> -->
        <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize"></h6>
                </div>
                <div class="card-body p-3">
                    <?= form_open_multipart('candidatejob/applyCandidate/'); ?>
                    <div class="description-apply p-4">
                        <h3 class="text-dark"><?= $job_vacancy['name_job']; ?></h3>
                        <h6 class="text-dark">Status :
                            <?php if ($job_vacancy['is_active'] == '1') { ?>
                                <span class="badge bg-gradient-success">Tersedia</span>
                            <?php } else { ?>
                                <span class="badge bg-gradient-danger">Tidak Tersedia</span>
                            <?php } ?>
                        </h6>
                        <h6 class="text-dark">Persyaratan :</h6>
                        <?= $job_vacancy['requirement_job'] ?>
                        <h6 class="text-dark">Deskripsi :</h6>
                        <?= $job_vacancy['description_job'] ?>

                        <input type="hidden" name="id_job" value="<?= $job_vacancy['id'] ?>">
                                <?php if($job_vacancy['is_active'] == 1) { ?>
                        <h6 class="text-dark mt-2">Jadwal yang tersedia :</h6>
                        <ol class="list-group list-group-numbered mb-3">
                            <?php foreach ($batch as $batchs) { ?>
                            
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><?= $batchs['name_batch'] ?></div>
                                        <div class="row">
                                            <?php
                                            $id_batch = $batchs['id_batch'];
                                            $CI = &get_instance();

                                            $CI->load->model('M_jobv');

                                            $timeline = $CI->M_jobv->getAllBatch($id_batch);
                                            ?>
                                            <?php foreach ($timeline as $timelines) { ?>
                                                <?php 
                                                   $__btc = $this->db->get_where('batch_timeline', ['id_batch' => $timelines['id_batch']])->row_array();
                                                ?>
                                                <div class="col-lg-12">
                                                <div class="text-sm" style="margin-right: 10px; margin-bottom: 10px;"><span class="badge bg-gradient-info"><i class="fas fa-stream mt-1" style="margin-right: 10px;"></i><?= $timelines['name_timeline']; ?></span></div>
                                                    <div class="text-sm" style="margin-right: 10px; margin-bottom: 4px;"><span class="badge bg-gradient-info"><i class="fas fa-arrow-right mt-1" style="margin-right: 10px;"></i>Dari : <?= date('j F Y', strtotime($__btc ['start_date'])) ?></span></div>

                                                    <div class="text-sm" style="margin-bottom: 4px;"> <span class="badge bg-gradient-info"><i class="fas fa-arrow-right mt-1" style="margin-right: 10px;"></i>Sampai Dengan : 
                                             
                                                        <?= date('j F Y', strtotime($__btc ['due_date'])) ?></span></div>
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $timelines['id_batch'] ?>">
                                                        <span>Lihat Detail</span>
                                                    </button>
                                             
                                                </div>
                                                <span>
                                                <!-- <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" id="choosebatch<?= $timelines['id_timeline'] ?>" name="choosebatch" value="<?= $batchs['id_batch'] ?>">
                                                    <label class="custom-control-label" for="choosebatch<?= $timelines['id_timeline'] ?>">Pilih</label>
                                                </div> -->
                                            </span>
                                            <?php } ?>

                                        </div>
                                    </div>
                                    
                                </li>
                            <?php } ?>
                            <?php } ?>
                        </ol>
                        <?php if($job_vacancy['is_active'] == 1){ ?>
                            
                            <?php if (empty($checkbatch)) { 
                                if (!empty($result) ) { ?>
                                    <span class="text-danger text-small">*Anda punya jadwal yang sedang berjalan</span>
                                    <div class="row" style="margin-top: 20px;">
                                <!-- <div class="col-lg-0">
                                    <button class="btn btn-icon btn-3 btn-primary" disabled>
                                        <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                        <span class="btn-inner--text"> Pilih</span>
                                    </button>
                                </div> -->
                                <?php }else{ ?>
                                    <!-- <div class="row">
                                    <div class="col-lg-0">
                                    <button type="button" class="btn bg-gradient-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModalLong" >
                                            <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                            <span class="btn-inner--text"> Pilih</span>
                                        </button>
                                    </div> -->
                              <?php  } ?>
                            <?php }else if (!empty($checkbatch) || $checkbatch['state'] == 1 ) { ?>
                                <span class="text-danger text-small">*Anda Sudah Apply Lowongan Ini !!</span>
                                <div class="row" style="margin-top: 20px;">
                            <!-- <div class="col-lg-0">
                                <button class="btn btn-icon btn-3 btn-primary" disabled>
                                    <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                    <span class="btn-inner--text"> Pilih</span>
                                </button>
                            </div> -->
                            <?php } ?>

                        <?php } else { ?>
                            <!-- <div class="row">
                            <div class="col-lg-0">
                                <button class="btn btn-icon btn-3 btn-primary disabled" type="submit">
                                    <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                    <span class="btn-inner--text"> Apply</span>
                                </button>
                            </div> -->
                        <?php } ?>
                        
                            <div class="col-lg-0">
                                <a href="<?= site_url('candidatejob/index') ?>" class="btn btn-icon btn-xs btn-danger" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-angle-left"></i></span>
                                    <span class="btn-inner--text">Kembali</span>
                                </a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
    </div>
    <div class="row mt-4">
    </div>


    <?php foreach ($batch as $batchs) { ?>

        <?php

$CI = &get_instance();
$id_batch = $batchs['id_batch'];
$CI->load->model('M_jobv');
$timeline = $CI->M_jobv->getAllBatchNL($id_batch);
// var_dump($timeline);
//     exit;
?>


    <!-- modal pop up -->
<div class="modal fade" id="exampleModal<?= $id_batch ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Jadwal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
    <!-- modal content -->
    <?php foreach ($timeline as $timelines) { 
    // print_r($timelines);
    ?>
                    <div class="modal-body">
                        <div class="col-lg-12">
                     <h5>
                      <span><?= $timelines['name_timeline']?></span>
                     </h5>
                        <h6><span>Mulai Dari : </span></h6>
                        <span><?= $timelines['start_date_time'] ?> </span>
                        <h6><span>Sampai</span></h6>
                        <span><?= $timelines['end_date_time'] ?></span><br><br>
                       
                     <span><?= $timelines['description_timeline'] ?></span>
                      </div><br>
                        </div><?php } ?>
                     </div>
         </div>
</div>   <?php } ?>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLongTitle">Pilih urutan untuk job ini</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <p class="mb-3">
                                      Prioritas penerimaan lowongan akan ditentukan dari lowongan yang anda pilih pertama, meskipun anda bisa mengisi posisi untuk pilihan kedua dan ketiga , tetapi jika pilihan pertama anda lolos, anda akan diterima di pilihan pertama anda.
                                  </p>

                                  <?php for ($i = 1; $i <= 3; $i++) { 
                                        if (!in_array($i, $urutan)) {
                                    ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault<?=$i?>" value="<?=$i?>">
                                            <label class="form-check-label" for="flexRadioDefault<?=$i?>">
                                                <?=$i?>
                                            </label>
                                        </div>
                                    <?php } } ?>

                                  </div>
                                  <div class="modal-footer">
                                  <button class="btn btn-icon btn-xs btn-primary" type="submit">
                                    <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                    <span class="btn-inner--text"> Kirim</span>
                                </button>
                                  </div>
                                </div>
                              </div>
                            </div>
<?= form_close(); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- sweetalert jika batch kosong -->
<script>
    <?php 
        if($this->session->flashdata('error')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('error')) ?>;
        swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
        }) <?php } ?>
</script>
<!-- sweetalert jika database biodata kosong -->
<script>
    <?php 
        if($this->session->flashdata('errorbiodata')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('errorbiodata')) ?>;
        swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
        }).then(function() {
        // Redirect the user
        window.location.href = "<?= site_url('candidate-biodata/update-biodata') ?>";
        console.log('The Ok Button was clicked.');
        });
        <?php } ?>
        
    <?php 
        if($this->session->flashdata('errorpendidikan')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('errorpendidikan')) ?>;
        swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
        }).then(function() {
        // Redirect the user
        window.location.href = "<?= site_url('candidate-biodata/update-biodata') ?>";
        console.log('The Ok Button was clicked.');
        });
        <?php } ?>
        
    <?php 
        if($this->session->flashdata('erroralamat')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('erroralamat')) ?>;
        swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
        }).then(function() {
        // Redirect the user
        window.location.href = "<?= site_url('candidate-biodata/update-biodata') ?>";
        console.log('The Ok Button was clicked.');
        });
        <?php } ?>

        <?php 
        if($this->session->flashdata('errorjumlah')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('errorjumlah')) ?>;
        swal.fire(
            tittle : 'Gagal',
            text : isi,
            icon : 'info',
        )
        <?php } ?>
</script>
