<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4"></div>
  <div class="col-lg-12 mb-lg-0 mb-4">
    <!--- PROFILE --->
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <div class="row">
          <h3>Filter Data</h3>
          <div class="col-lg-3">

            <?php $current_URL = current_url();
            $params = $_SERVER['QUERY_STRING'];
            $fullURL = $current_URL . '?' . $params ?>

            <div id="eksport" style="margin-top: 15px">
              <form action="<?= base_url('conreport/filter') ?>" method="get">
              <label class="form-label" for="tanggal"> Tanggal Mulai </label>
              <input class="form-control" id="tanggal" name="tglstart" type="date" />
            </div>
          </div>
          <div class="col-lg-3">
            <div id="eksport" style="margin-top: 15px">
              <label class="form-label" for="tanggal"> Tanggal Selesai </label>
              <input class="form-control" id="tanggal" name="tglend" type="date" />
            </div>
          </div>
          <div class="col-lg-4">
            <div id="eksport" style="margin-top: 15px">
              <h6>Show</h6>
                <button tye="submit" class="btn btn-info btn-xs"><label class="btn-inner--icon"> </label> show</button>
            </form>
              <a href="<?= base_url('conreport/pdf') . '?'.$params ?>">
                <button type="button" class="btn btn-danger btn-xs">
                  <span class="btn-inner--icon">
                    <i class="fa-solid fa-file-pdf"></i>
                  </span>
                  pdf
                </button>
              </a>
              <a href="<?= base_url('conreport/createExcel') . '?' .$params ?> ">
                <button type="button" class="btn btn-danger btn-xs">
                  <span class="btn-inner--icon">
                    <i class="fa-solid fa-file-pdf"></i>
                  </span>
                  Export Excel
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-12 mb-lg-0 mb-4"></div>
      <div class="col-lg-12 mb-lg-0 mb-4">
        <!--- PROFILE --->
        <div class="card z-index-2 h-100 text-center">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <div class="row">
              <h4 style="font-size: 20px; margin-top: 15px;">Input tanggal untuk mencari data yang anda inginkan</h4>
            </div>
          </div>

          <div class="container-fluid py-4">
            <div class="row">
              <div class="col-lg-12 mb-lg-0 mb-4"></div>
              <div class="col-lg-12 mb-lg-0 mb-4">
                <!--- PROFILE --->
                <div class="card z-index-2 h-100">
                  <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="table-responsive" style="margin-top: 10px">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No kandidat</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal lahir</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis kelamin</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode pos</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal daftar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($kandidat as $row) : ?>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="<?= base_url('uploads/kandidat/profiles/'.$row['photo_candidate']); ?>" class="avatar avatar-sm me-3" />
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <!-- <h6 class="mb-0 text-xs">John Michael</h6>
                                  <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> -->

                                  <p class="text-xs font-weight-bold mb-0"><?= $row['name_candidate'] ?></p>
                                  <p class="text-xs text-secondary mb-0"><?= $row['email_candidate'] ?></p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0"><?= $row['no_candidate'] ?></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <P class="text-xs font-weight-bold mb-0"><?= $row['birthdate_candidate'] ?></P>
                            </td>
                            <td class="align-middle text-center">
                              <P class="text-xs font-weight-bold mb-0"><?= $row['jk_candidate'] == 3 ? 'TD' : ($row['jk_candidate'] == 1 ? 'L' : 'P') ?></P>
                            </td>
                            <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0"><?= $row['address_candidate'] ?> No. <?= $row['noaddress_candidate'] ?></>
                              </p>
                            </td>
                            <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0"><?= $row['poskode_candidate'] ?></p>
                            </td>
                            <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0"><?= $row['date_created'] ?></p>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <h6 class="text-capitalize"></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4"></div>
        <div class="row mt-4"></div>
      </div>
    </div>
  </div>
</div>
