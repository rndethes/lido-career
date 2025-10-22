              <div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Edit Lowongan</h2>
                <div class="row">
                  <div class="col-lg-6">

                  <form method="post" action="<?= site_url('conjen/edit/' . $show_data_editjen['id']) ?>">

                  <div class="form-group">

                        <label for="idp" class="form-control-label">ID Pekerjaan</label>
                        <input class="form-control" type="number" id="idp" name="idpeker" value="<?= $show_data_editjen['id_job']; ?>" readonly>
            
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <label>Pilih Divisi</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="divisi">
                        
                      <?php foreach($tablejen as $row): ?>
                            <?php if ($row['id_division'] == $show_data_editjen['id_division']): ?>
                              <option value="<?= $row['id_division'] ?>" selected><?= $row['name_division'] ?></option>
                            <?php else: ?>
                                <option option value="<?= $row['id_division'] ?>"><?= $row['name_division'] ?></option>
                            <?php endif ?>
                      <?php endforeach ?>
                      
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="namajon" class="form-control-label">Nama Pekerjaan</label>
                      <input class="form-control" type="text" style="text-transform: uppercase;" id="namajon"  name="nama" value="<?= $show_data_editjen['name_job']; ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label>Tentukan kasta</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="kasta">

                            <?php for($i=1; $i<=10; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo ($show_data_editjen['grade_value'] == $i) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                            <?php endfor; ?>
                                    
                    </select>
                    </div>
                  </div>

                  <div class="quill">
                  <div class="col-lg-12">
                  <label for="spec">Klasifikasi</label>
                  <div class="input-group">
                    <textarea id="klasifikasi2" class="form-control" aria-label="With textarea" id="spec" name="kualifikasi"><?= $show_data_editjen['requirement_job']; ?></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <label for="des">Deskripsi Pekerjaan</label>
                  <div class="input-group">
                    <textarea id="deskripsi1" class="form-control" aria-label="With textarea" id="des" name="deskripsi"><?= $show_data_editjen['description_job']; ?></textarea>
                  </div>
                </div>
              </div>

                  </div>
                <!--  <div class="col-lg-6">
                    <label for="spec">Kualifikasi</label>
                     <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" id="spec" name="kualifikasi" ><?= $show_data_editjen['requirement_job']; ?></textarea>
                        </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="des">Deskripsi Pekerjaan</label>
                     <div class="input-group">
                            <textarea class="form-control" id="des" name="deskripsi" aria-label="With textarea"><?= $show_data_editjen['description_job']; ?></textarea>
                        </div>
                  </div>      -->       
                  <div class="d-flex flex-row-reverse mt-2">
                    <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                    <a href="<?= base_url('conjen/showjen') ?>"> <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
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
    window.addEventListener("DOMContentLoaded", () => {
      // Init CK
      CKEDITOR.replace('klasifikasi2');

      CKEDITOR.replace('deskripsi1');
    });

   // eror
          <?php 
            if($this->session->flashdata('error')) {    ?>
            var isi = <?= json_encode($this->session->flashdata('error')) ?>;
          swal.fire({
            tittle : 'Gagal',
            text : isi,
            icon : 'error',
          });
        <?php } ?>
  </script>


