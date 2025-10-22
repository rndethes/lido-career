<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h3>Tambah Divisi</h3>
      </div>
      <div class="card-body">
        <form
          action="<?= base_url('condiv/tambah') ?>"
          method="post" class="row">
          <div class="col">

            <label for="namadiv" class="form-label">Nama Divisi</label>
            <input type="text-transform" class="form-control tt-gede" id="namadiv" name="namadiv"
              aria-label="Recipient's username" aria-describedby="basic-addon2">

            <div class="col">
              <label for="des" class="form-label">Deskripsi</label>
              <textarea class="form-control tt-gede" id="des" name="des" aria-label="With textarea"></textarea>

              <div class="d-flex flex-row-reverse mt-2">
                <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                <a
                  href="<?= base_url('condiv/showdiv') ?>">
                  <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
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