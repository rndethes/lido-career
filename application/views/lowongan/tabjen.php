<div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h3>Daftar Lowongan</h3>
                  <div class="table-responsive" style="margin-top: 10px;">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID pekerjaan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Divisi</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lowongan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendidikan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kota</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Grade</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kualifikasi</th>
                           <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                           <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                           <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                    <?php 
                    foreach ($tablejen as $tabjens) {
                    ?>
                        
                        <tr>
                          <td class="align-middle text-center">
                              <div class="justify-content-center">
                                <h6 class="mb-0 text-xs"><?= $tabjens['id_job'] ?></h6>
                            </div>
                          </td>
                          <td class="align-middle text-center">
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs"><?= $tabjens['name_division'] ?></h6>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0 text-uppercase"><?= $tabjens['name_job'] ?></p>
                          </td>
                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0 text-uppercase"><?= $tabjens['education_job'] ?></p>
                          </td>
                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0 text-uppercase">
                                <?php 
                                    if(!empty($tabjens['city_job'])) {
                                        $cities = json_decode($tabjens['city_job'], true); // asumsikan tersimpan JSON
                                        echo implode(', ', $cities);
                                    } else {
                                        echo 'WFH';
                                    }
                                ?>
                            </p>
                        </td>
                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0 text-uppercase"><?= $tabjens['grade_value'] ?></p>
                          </td>
                          <td class="align-middle text-center">
                            <button type="button" class="btn bg-gradient-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $tabjens['id'] ?>">
                              Detail</button>
                          </td>
                          <td class="align-middle text-center">
                           <button type="button" class="btn bg-gradient-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModalLong<?= $tabjens['id'] ?>">
                            Detail
                          </button>
                          </td>
                           <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                      <?php  if ($tabjens['is_active'] == 1){ ?>
                        <button type="button" class="btn bg-gradient-success btn-xs">On</button>
                        <?php
                        }
                       else{ ?>
                        <button type="button" class="btn bg-gradient-danger btn-xs">Off</button><?php
                       }
                       ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <?php 
                            if($tabjens['is_active'] == 1){  ?>
                            <a href="<?= base_url('conjen/toggle/' . $tabjens['id'])?>">
                              <button type="button" class="btn bg-gradient-warning btn-xs" name="aktif" value="0">
                                <span class="btn-inner--icon">
                                <i class="fa-solid fa-power-off"></i>
                                </span>
                              </button>
                            </a>
                            <?php }else{
                              ?>
                              <a href="<?= base_url('conjen/toggle/' . $tabjens['id'])?>">
                                <button type="button" class="btn bg-gradient-info btn-xs" name="nonaktif" value="0">
                                  <span class="btn-inner--icon">
                                    <i class="fa-sharp fa-solid fa-paper-plane"></i>
                                  </span>
                                </button>
                              </a><?php } ?>

                            <a href="<?= base_url('conjen/edit/' . $tabjens['id'])?>">
                              <button type="button" class="btn bg-gradient-success btn-xs">
                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                              </button>
                            </a>
                            <a href="<?= base_url('conjen/hapus/' . $tabjens['id'])?>" class="btn bg-gradient-danger btn-xs tombol-hapus">
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                    <div class="d-flex flex-row-reverse mt-3">
                          <a class="btn bg-gradient-danger btn-xs mb-0" href="<?= base_url('conjen/showtambah') ?>"><i class="fas fa-save">&nbsp;&nbsp;Tambah</i></a>
                        </div>    
                </div>
              </div>
              <h6 class="text-capitalize"></h6>
            </div>
          </div>

<?php foreach ($tablejen as $tabjens) { ?>
           <div class="modal fade" id="exampleModal<?= $tabjens['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?= $tabjens['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">

                                    <h5 class="modal-title text-center" id="exampleModalLabel">Klasifikasi</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <?= $tabjens['requirement_job'] ?>
                                  </div>
                                </div>
                              </div>
                            </diV>
<?php } ?>
<?php foreach ($tablejen as $tabjens) { ?>
                            <div class="modal fade" id="exampleModalLong<?= $tabjens['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong<?= $tabjens['id'] ?>" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLongTitle">Deskripsi</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <?= $tabjens['description_job'] ?>
                                  </div>
                                </div>
                              </div>
                            </div>
      <?php } ?>

          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="sweetalert2.all.min.js"></script>

  <script>
    // data berhasil ditambah
          <?php 
        if($this->session->flashdata('success')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('success')) ?>;
        swal.fire({
            tittle : 'Berhasil',
            text : isi,
            icon : 'success',
        });<?php } ?>
</script>