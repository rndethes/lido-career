<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h3>Data Divisi</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive" style="margin-top: 10px;">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Divisi</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Dibuat</th>
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

                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">
                        <?= $div['name_division'] ?>
                      </h6>
                    </div>
                  </div>
                </td>
                <td claass="align-middle text-center">
                  <button type="button" class="btn bg-gradient-primary btn-xs" data-bs-toggle="modal"
                    data-bs-target="#exampleModal<?= $div['id_division'] ?>">
                    Detail
                  </button>
                </td>
                <td class="align-middle text-center">
                  <span
                    class="text-secondary text-xs font-weight-bold"><?= $div['date_created'] ?></span>
                </td>
                <td class="align-middle text-center">
                  <a
                    href="<?= base_url('condiv/edit/' . $div['id_division'])?>">
                    <button type="button" class="btn bg-gradient-success btn-xs">
                      <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                  <a href="<?= base_url('condiv/hapus/'. $div['id_division'])?>"
                    class="btn bg-gradient-danger btn-xs tombol-hapus">
                    <i class="fa-sharp fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
        <div class="d-flex flex-row-reverse mt-3">
          <a class="btn bg-gradient-danger btn-xs mb-0"
            href="<?= base_url('condiv/showtambah') ?>">
            <i class="fas fa-plus">&nbsp;&nbsp;Tambah</i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
                    foreach ($showtable as $div) {
?>

  <div class="modal fade" id="exampleModal<?= $div['id_division'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?= $div['id_division'] ?>"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Deskripsi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= $div['description'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

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

