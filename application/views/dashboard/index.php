    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <h4 class="text-sm mb-0 text-uppercase font-weight-bold">Kandidat</h4>
                                            <h5 class="font-weight-bolder">
                                                <?= $count_candidate ?>
                                            </h5>
                                            <p class="mb-0">
                                                <?= date('j F Y') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <h4 class="text-sm mb-0 text-uppercase font-weight-bold">Lowongan</h4>
                                            <h5 class="font-weight-bolder">
                                                <?= $count_job ?>
                                            </h5>
                                            <p class="mb-0">
                                                <?= date('j F Y') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <h4 class="text-sm mb-0 text-uppercase font-weight-bold">Akun Aktif</h4>
                                            <h5 class="font-weight-bolder">
                                                <?= $count_acc ?>
                                            </h5>
                                            <p class="mb-0">
                                                <?= date('j F Y') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->session->userdata('is_superadmin') == true): ?>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <h4 class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Admin</h4>
                                            <h5 class="font-weight-bolder">
                                                <?= $count_admin ?>
                                            </h5>
                                            <p class="mb-0">
                                                <?= date('j F Y') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
                <div class="container mt-4">
                    <div class="card card-frame bg-white" style="box-shadow: 3px;">
                        <div class="card-body text-center">
                            <h3 style="font-size: 24px;">Selamat Datang Admin</h3>
                            <h6>Anda bisa menambah divisi, lowongan, melihat data pelamar dengan memilih menu disamping kiri</h6>
                        </div>
                    </div>
                </div>


                <div class="container mt-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h3 class="text-center" style="font-size: 20px;">Data kandidat terkini</h3>
                            <div class="table-responsive" style="margin-top: 15px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Id kandidate</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No.Handphone</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jenis Kelamin</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($showcandidate as $candidate) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                    <img src="<?= base_url('uploads/kandidat/profiles/' . $candidate['photo_candidate']) ?>"
                                                    class="avatar avatar-sm me-3">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs"><?= $candidate['name_candidate'] ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0"><?= $candidate['id_candidate'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0"><?= $candidate['email_candidate'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0"><?= $candidate['no_candidate'] ?></p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if($candidate['jk_candidate'] == 1){ ?>
                                                <p class="text-xs font-weight-bold mb-0">Laki-Laki</p>
                                                <?php }elseif($candidate['jk_candidate'] == 2){ ?>
                                                    <p class="text-xs font-weight-bold mb-0">Perempuan</p>
                                                <?php }elseif($candidate['jk_candidate'] == 3){ ?>
                                                    <p class="text-xs font-weight-bold mb-0">Transgender</p>
                                                <?php }elseif($candidate['jk_candidate'] == 4){ ?>
                                                    <p class="text-xs font-weight-bold mb-0">Tidak ingin diketahui</p>
                                                <?php }else { ?>
                                                    <p class="text-xs font-weight-bold mb-0">Belum diisi</p>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row-reverse">
                                    <a href="<?= base_url() ?>kandidat">
                                       <button class="btn btn-dark text-white">Lihat semua kandidat</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-capitalize"></h6>
                </div>
            </div>
        </div>
    </div>
    </div>





    <div class="row mt-4"></div>
    <div class="row mt-4"></div>


    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">

                                    <h5 class="modal-title text-center" id="exampleModalLabel">Alamat</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <?= $candidate['address2_candidate'] ?>
                                  </div>
                                </div>
                              </div>
                            </diV> -->