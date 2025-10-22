<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h3>Daftar Link</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive" style="margin-top: 10px;">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Link</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat Link</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>

              </tr>
            </thead>
            <tbody>

              <?php
                    foreach ($tablelink as $link) {
                        ?>

              <tr>
                <!-- col1 -->
                <td>
                  <div class="d-flex px-2 py-1">

                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-xs font-weight-bold mb-0">
                        <?= $link['nama_link'] ?>
                      </h6>
                    </div>
                  </div>
                </td>
                <!-- col2 -->
                <td>
                  <p class="text-xs font-weight-bold mb-0">
                    <?= $link['address_link'] ?>
                  </p>
                </td>
                <!-- col3 -->
                <td class="align-middle text-center">
                  <span
                    class="text-secondary text-xs font-weight-bold"><?= $link['description_link'] ?></span>
                </td>
                <!-- button edit -->
                <td class="align-middle text-center">
                  <a
                    href="<?= base_url('conlink/edit/'. $link['id_link'])?>">
                    <button type="button" class="btn bg-gradient-success btn-xs">
                      <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                  <!-- button hapus -->
                  <a href="<?= base_url('conlink/hapus/'. $link['id_link'])?>"
                    class="btn bg-gradient-danger btn-xs tombol-hapus">
                    <i class="fa-sharp fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- tambah -->
        <div class="d-flex flex-row-reverse mt-3">
          <a class="btn bg-gradient-danger btn-xs mb-0"
            href="<?= base_url('conlink/showtambah') ?>"><i
              class="fas fa-save">&nbsp;&nbsp;Tambah</i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // data berhasil ditambah
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