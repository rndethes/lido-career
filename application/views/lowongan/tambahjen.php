<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Tambah Lowongan</h2>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <form action="<?= base_url('conjen/tambahjen') ?>" method="post">
                <div class="form-group">

                        <label for="idp" class="form-control-label">ID Pekerjaan</label>
                        <input class="form-control" type="number" id="idp" name="idpeker" value="<?php echo $next_id_job; ?>" readonly>
            
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <label>Pilih Divisi</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="divisi">
                     
                                    <option value="">Pilih</option>
                                    <?php foreach($tablejen as $row): ?>
                                        <option option value="<?= $row['id_division'] ?>"><?= $row['name_division'] ?></option>
                                    <?php endforeach ?>
                                    </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="namajon" class="form-control-label">Nama Pekerjaan</label>
                      <input class="form-control" type="text" style="text-transform: uppercase;" id="namajon"  name="nama">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label>Tentukan Grade</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="kasta">
                            <option value="">Pilih</option>

                                    <?php for($i=1; $i<=10; $i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                    
                    </select>
                    </div>
                  </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="klasifikasi">Klasifikasi</label>
                                <textarea id="editor-klasifikasi" class="form-control" aria-label="With textarea" id="spec" name="kualifikasi"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Pekerjaan</label>
                                <textarea id="editor-deskripsi" class="form-control" aria-label="With textarea" id="des" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>Publish Sekarang</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rya" name="status" value="1">
                                    <label class="form-check-label" for="rya">
                                        Sekarang
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="rno" value="2">
                                    <label class="form-check-label" for="rno">
                                        Nanti Saja
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-row-reverse mt-2">
                                <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                                <a href="<?= base_url('conjen/showjen') ?>"> <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
                             </div>
                        </div>
                    </div>
                </form>
                                    </div>
                                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    // eror
    window.addEventListener('DOMContentLoaded', function() {
      // Init CK
      CKEDITOR.replace('editor-deskripsi');
      CKEDITOR.replace('editor-klasifikasi');
      
      <?php if($this->session->flashdata('error')): ?>
      var isi = <?= json_encode($this->session->flashdata('error')) ?> ;
      Swal.fire({
        title: 'Gagal',
        text: isi,
        icon: 'error',
      });
      <?php endif ?>
    });
</script>