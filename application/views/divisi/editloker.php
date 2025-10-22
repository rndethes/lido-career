<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h3>Edit Divisi</h3>
      </div>
      <div class="card-body">
        <form method="post"
          action="<?= site_url('condiv/edit/' . $show_data_edit['id_division']) ?>">
          <div class="col">

            <label for="namadiv" class="form-label">Nama Divisi</label>
            <input type="text" class="form-control tt-gede" id="namadiv" name="namadiv" placeholder="RND"
              value="<?= $show_data_edit['name_division']; ?>"
              aria-label="Recipient's username" aria-describedby="basic-addon2">

            <div class="col">
              <label for="des" class="form-label">Deskripsi</label>
              <textarea class="form-control tt-gede" id="des" name="des" placeholder="Deskripsi Pekerjaan"
                aria-label="With textarea"><?= $show_data_edit['description']; ?></textarea>

              <div class="d-flex flex-row-reverse mt-2">
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                <a
                  href="<?= base_url('condiv/showdiv') ?>">
                  <button type="button" class="btn btn-success btn-sm me-1">Back</button> </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // eror
  <?php if($this->session->flashdata('success')): ?>
  window.addEventListener('DOMContentLoaded', function() {
    var
      isi = <?= json_encode($this->session->flashdata('success')) ?> ;
    Swal.fire({
      title: 'Berhasil',
      text: isi,
      icon: 'success',
    });
  });
  <?php endif ?>
</script>