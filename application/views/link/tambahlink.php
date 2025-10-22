<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h4>Tambah Link</h4>
      </div>
      <div class="card-body">
        <form
          action="<?= base_url('conlink/tambah') ?>"
          method="post" class="row">
          <!--  -->
          <label for="namlink" class="form-control-label">Nama Link</label>
          <div class="input-group">
            <input class="form-control tt-gede" type="text" id="namlink" name="namalink" value="">
          </div>
          <!--  -->
          <label for="isilink" class="form-control-label mt-2">Alamat Link</label>
          <div class="input-group">
            <input class="form-control" type="text" id="isilink" name="isilink" value="">
          </div>
          <!--  -->
          <label for="note" class="form-label mt-2">Catatan</label>
          <div class="input-group">
            <textarea class="form-control tt-gede" id="note" name="catatan" value=""
              aria-label="With textarea"></textarea>
          </div>
          <div class="d-flex flex-row-reverse mt-5">
            <button type="submit" class="btn bg-gradient-danger btn-xs">Kirim</button>
            <a
              href="<?= base_url('conlink/tablink') ?>">
              <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // eror
  <?php if($this->session->flashdata('error')): ?>
  window.addEventListener('DOMContentLoaded', function() {
    var
      isi = <?= json_encode($this->session->flashdata('error')) ?> ;
    Swal.fire({
      title: 'Gagal',
      text: isi,
      icon: 'error',
    });
  });
  <?php endif ?>
</script>