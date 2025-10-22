<div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Edit Akun</h2>
                <div class="row">
                  <div class="col-lg-6">
                    <form action="<?= site_url('conacc/edit/' . $show_data_edit['id_user']) ?>" method="post" class="row" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="namaakun" class="form-control-label">Nama</label>
                        <input class="form-control tt-gede" type="text" id="namaakun" name="nama" value="<?= $show_data_edit['nama']; ?>">
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="user" class="form-control-label">Username</label>
                        <input class="form-control" type="text" id="user" name="username" value="<?= $show_data_edit['username']; ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="email" class="form-control-label">Email</label>
                      <input class="form-control" type="email" id="email" name="email" value="<?= $show_data_edit['email']; ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="password" class="form-control-label">Password</label>
                      <input class="form-control" type="password" name="pass" id="password">
                    </div>
                  </div>
                  <div class="col-lg-6">
                 
                    <label for="inputGroupSelect01">Role</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="role">
                        
                      <?php if($show_data_edit['role'] == 2){
                      ?>
                        <option value="<?= $show_data_edit['role'] ?>" selected>User</option>
                        <option value="1">Admin</option> 
                      <?php }else {
                        ?>
                        <option value="<?= $show_data_edit['role'] ?>" selected>Admin</option>
                        <option value="2">User</option> <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6">

                    <label for="inputGroupSelect02">Status</label>
                    <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name="status">
                        
                        <?php if($show_data_edit['status'] == 0){
                        ?>
                          <option value="<?= $show_data_edit['status'] ?>" selected>OFF</option>
                          <option value="1">ON</option> 
                        <?php }else {
                          ?>
                          <option value="<?= $show_data_edit['status'] ?>" selected>ON</option>
                          <option value="0">OFF</option> <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="img" class="form-control-label">Upload Foto</label>
                      <input class="form-control" type="file" id="img" name="img" value="<?= $show_data_edit['gambar']; ?>">
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