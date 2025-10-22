<div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Tambah Akun</h2>
                <div class="row">
                  <div class="col-lg-6">
                    <form action="<?= base_url('conacc/tambahacc') ?>" method="post" class="row" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="namaakun" class="form-control-label">Nama</label>
                        <input class="form-control tt-gede" type="text" id="namaakun" name="nama">
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="user" class="form-control-label">Username</label>
                        <input class="form-control" type="text" id="user" name="username">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="email" class="form-control-label">Email</label>
                      <input class="form-control" type="email" id="email" name="email">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="password" class="form-control-label">Password</label>
                      <input class="form-control" type="password" name="pass" id="password">
                    </div>
                  </div>
                  <div class="col-lg-6">
                 
                    <label>Role</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="role">
                        <option selected>Pilih</option>
                        <option value="2">User</option>
                        <option value="1">Admin</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6">

                    <label for="inputGroupSelect02">Status</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect02" name="status">
                        <option value="">Pilih</option>
                        <option value="0">Off</option>
                        <option value="1">On</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="img" class="form-control-label">Upload Foto</label>
                      <input class="form-control" type="file" id="img" name="img">
                    </div>
                  </div>
                  </div> 
                  <div class="d-flex flex-row-reverse mt-2">
                    <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                    <a href="<?= base_url('conacc/showacc') ?>"> <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
                 </div>                   
                </div>
                </form>
              </div>
            </div>
            <h6 class="text-capitalize"></h6>
          </div>
        </div>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="sweetalert2.all.min.js"></script>
          <script>

          // eror
          <?php 
            if($this->session->flashdata('error')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('error')) ?>;
          swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
          });
        <?php } ?></script>