<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h4>Edit Link</h4>
        <form
          action="<?= site_url('conlink/edit/'. $show_data_edit['id_link']) ?>"
          method="post">
          <!--  -->
          <label for="namlink" class="form-control-label">Nama Link</label>
          <div class="input-group">
            <input class="form-control tt-gede" type="text" id="namlink" name="namalink"
              value="<?= $show_data_edit['nama_link']; ?>">
          </div>
          <!--  -->
          <label for="isilink" class="form-control-label mt-2">Alamat Link</label>
          <div class="input-group">
            <input class="form-control" type="text" id="isilink" name="isilink"
              value="<?= $show_data_edit['address_link']; ?>">
          </div>
          <!--  -->
          <label for="note" class="form-label mt-2">Catatan</label>
          <div class="input-group">
            <textarea class="form-control tt-gede" id="note" name="catatan"
              aria-label="With textarea"><?= $show_data_edit['description_link']; ?></textarea>
          </div>
          <div class="d-flex flex-row-reverse mt-2">
            <button type="submit" class="btn bg-gradient-danger btn-xs">Kirim</button>
            <a
              href="<?= base_url('conlink/tablink') ?>">
              <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button></a>
          </div>
        </form>
      </div>
      <h6 class="text-capitalize"></h6>
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