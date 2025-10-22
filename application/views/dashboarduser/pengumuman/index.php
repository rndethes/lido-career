<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h4 style="font-size: 20px;">Jadwal anda yang sedang berjalan : </h4>
      </div>
      <?php if(empty($state)) { ?>
        
    <!-- start body -->
      <div class="card-body"> 
        
                
                <div class="card card-frame custom-color">
                        <div class="card-body text-center">
                            <h3 class="text-center text-white" style="font-size: 20px;">Hai</h3>
                            <h6 class="text-center text-white">
                              Anda belum memilih lowongan anda bisa memilih lowongan dengan klik <a href="<?= site_url('candidatejob/index') ?>" class="text-white"><i><u><b>DISINI. </b></u></i></a>Pastikan anda mengisi biodata terlebih dahulu, jika belum mengisi biodata klik <a href="<?= site_url('candidate-biodata') ?>" class="text-white"><i><u><b>DISINI. </b></u></i></a>
                            </h6>
                        </div>
                 </div>

    <!-- end card body -->
      </div>

      <?php }else{ ?>
        
      <div class="card-body"> 
      
        <div class="nav-wraper mb-4">
          <ul class="nav nav-pills nav-fill flex-row flex-sm-row">
        <?php foreach($job as $jobs) { ?>
          
        <li class="nav-item">
          <a type="button" class="nav-link mb-sm-3 mb-md-0 active" data-bs-toggle="tab" id="pengumuman" data-target="<?= $jobs['id_job_history'] ?>">

            <?= $jobs['name_job'] ?>
          </a>
        </li>
          
          <?php } ?>
          </ul>
        </div>
        
          <!-- ajax start -->
          <div class="show-data">
                  
          <!-- end ajax -->
          </div>
          <!-- end card body -->
      </div>

      <?php } ?>
    </div>
  </div>
</div>