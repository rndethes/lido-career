<div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h3>Data Akun</h3>
                  <div class="table-responsive" style="margin-top: 10px;">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal dibuat</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php 
                    foreach ($showtable as $div) {
                    ?>
                      
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="<?= base_url('uploads/'.$div['gambar']); ?>" class="avatar avatar-sm me-3">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs"><?= $div['nama'] ?></h6>
                              </div>
                            </div>
                          </td>
                          
                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $div['username'] ?></p>
                          </td>

                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $div['email'] ?></p>
                          </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php  if ($div['role'] == 2){ ?>
                              <button class="btn bg-gradient-success">User</button>
                              <?php
                              }
                             elseif($div['role'] == 1){ ?>
                              <button class="btn bg-gradient-primary btn-xs">Admin</button><?php
                             }
                             ?></span>
                          </td>

                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0 btn-xs"><?php  if ($div['status'] == 1){ ?>
                              <button class="btn bg-gradient-success btn-xs"> On </button> 
                              <?php
                              }
                          
                             else{ ?>
                              <button class="btn bg-gradient-danger btn-xs"> Off </button> <?php
                             }
                             ?> </p>
                          </td>

                          <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0"><?= $div['created_date'] ?></p>
                          </td>

                          <td class="align-middle">
                            <a href="<?= base_url('conacc/edit/' . $div['id_user']) ?>" class="">
                              <button type="button" class="btn bg-gradient-success btn-xs">
                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                              </button>
                            </a>
                            <a href="<?= base_url('conacc/hapus/' . $div['id_user'])?>" class="btn bg-gradient-danger btn-xs tombol-hapus">
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    
                  </div>
                    <div class="d-flex flex-row-reverse mt-3">
                          <a class="btn bg-gradient-danger btn-xs mb-0" href="<?= base_url('conacc/showtambah') ?>"><i class="fas fa-save">&nbsp;&nbsp;Tambah</i></a>
                        </div>    
                </div>
              </div>
              <h6 class="text-capitalize"></h6>
            </div>
          </div>
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
        })<?php } ?>
        
        // edit berhasil
          <?php 
        if($this->session->flashdata('edit')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('edit')) ?>;
        swal.fire({
            tittle : 'Berhasil',
            text : isi,
            icon : 'success',
        });<?php } ?>
        // hapus berhasil
          <?php 
        if($this->session->flashdata('hapus')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('hapus')) ?>;
        swal.fire({
            tittle : 'Berhasil',
            text : isi,
            icon : 'success',
        });<?php } ?>
</script>