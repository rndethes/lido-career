<!-- End Navbar -->

<div class="container-fluid py-4">
    <div class="row">

    <div class="card p-3 text-center" style="word-wrap: break-word;">

            <div class="col-lg-12 mb-lg-0">
                <h3 class="text-dark font-bold" style="font-size: 28px;">Haloo!
                    <?= strtoupper(getLoggedInUser('name_candidate')) ?>
                </h3>
                <h6 class="text-dark">Selamat akun anda sudah aktif.</h6>
                <h6 class="text-dark">Register :
                    <?= getLoggedInUser('date_created') ?>
                </h6>
            </div>
            </div>
        </div>
        <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100 mt-4">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize"></h6>
                </div>
                <?php if(empty($state)) { ?>
                <div class="card-body p-3">
                    <div class="card card-frame custom-color">
                        <div class="card-body text-center">
                            <h3 class="text-center text-white mt-4" style="font-size: 28px;">Selamat Datang di Lido
                                Career Center !</h3>
                            <h6 class="text-center text-white mt-4">Terima Kasih telah mengunjungi situs kami &
                                mendaftar.
                                <br>
                                untuk informasi atau tutorial cara mendaftar atau, melamar pekerjaan
                                ikuti langkah-langkah dibawah ini.
                            <!-- </h6>
                            <h6 style="font-size: 18px; color: #ffff; margin-top: 25px;">Baca langkah-langkah berikut :
                            </h6> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-12 ps-3">
                        <h3 class="text-dark" style="font-size: 28px;">
                            Mari Mulai !!
                        </h3>
                <div class="row flex-column flex-md-row p-3">
                    <div class="card custom-color col mb-3 me-3">
                        <div class="card-img-top">
                            <img src="<?= base_url("assets\img\bio.png") ?>" class="card-img-top" style="widht: 15rem; height: 18rem;" alt="...">
                        </div>
                        <!-- <div class="card-title">
                            
                        </div> -->
                        <div class="card-body">
                            <h5 class="text-white">Isi biodata</h5>
                            <p class="card-text text-white">Pastikan untuk mengisi biodata dengan benar dan sesuai dengan identitas Anda, untuk menghindari kesalahan dan kesulitan di kemudian hari.</p>
                        </div>
                        <div class="card-footer">
                                <a href="<?= site_url('candidate-biodata') ?>" class="text-white"><button class="btn btn-light">Klik disini</button></a>
                        </div>
                    </div>
                        <!-- <div class="card custom-color col mb-3 me-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url("assets\img\bio.png") ?>" class="card-img" alt="...">
                                </div>
                                    <div class="card-title">
                                        <h5 class="text-white ps-4 pt-4">Isi biodata</h5>
                                    </div>
                                    <div class="card-body">
                                            
                                            <p class="card-text text-white">Pastikan untuk mengisi biodata dengan benar dan sesuai dengan identitas Anda, untuk menghindari kesalahan dan kesulitan di kemudian hari.</p>
                                            
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?= site_url('candidate-biodata') ?>" class="text-white"><button class="btn btn-light">Klik disini</button></a>
                                    </div>
                                
                            </div>
                        </div> -->
                    <div class="card custom-color col mb-3 me-3">
                        <div class="card-img-top">
                            <img src="<?= base_url("assets\img\job.png") ?>" class="card-img-top" style="widht: 15rem; height: 18rem;" alt="...">
                        </div>
                        
                        <!-- <div class="card-title">
                            
                        </div> -->
                        <div class="card-body">
                            <h5 class="text-white">Pilih lowongan</h5>
                            <p class="card-text text-white">Pilih lowongan yang sesuai dengan minat dan kemampuanmu.</p>
                        </div>
                        <div class="card-footer">
                                <a href="<?= base_url('candidatejob/index') ?>" class="text-white"><button class="btn btn-light">Klik disini</button></a>
                        </div>
                    </div>
                        <!-- <div class="card custom-color col mb-3 me-3">
                            <div class="card-title">
                                <h5 class="text-white ps-4 pt-4">Pilih lowongan</h5>
                            </div>
                            <div class="card-body">
                                    <p class="card-text text-white">Pilih lowongan yang sesuai dengan minat dan kemampuanmu</p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('candidatejob/index') ?>" class="text-white"><button class="btn btn-light">Klik disini</button></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- if state ra kosong -->
            <?php } else { ?>
            <div class="p-3">
                <h2 class="mb-4">Lowongan yang anda lamar :</h2>
                <?php foreach($showpengumuman as $showpengumuman):

                    $CI = &get_instance();
                    $id_candidate   = getLoggedInUser('id');
                    $id_batch       = $showpengumuman['id_batch'];
                    $id_job       = $showpengumuman['id'];

                    $CI->load->model('Timeline_model');
                    $timeline = $CI->Timeline_model->getTimelineDashboard($id_candidate, $id_job);
                    $ctl =  $CI->Timeline_model->countCurrentTimeline($id_candidate, $id_batch);
                    $first =  $CI->Timeline_model->getFirstHT($id_candidate, $id_job);
                    $jumhlah = count($first);

                    // echo "<pre>";
                    // print_r($showpengumuman);
                    // exit();

                    ?>

                <h3><?= $showpengumuman['name_job'] ?>
                    -
                    <?= $showpengumuman['name_division'] ?>
                </h3>
                <div class="text-default">Tanggal melamar :
                    <?= $showpengumuman['date_created'] ?>
                </div>
                <!-- daftar -->
                <?php if ($jumhlah <= 1) { ?>
                <?php if($timeline['status'] == 3) { ?>
                <div class="card card-frame custom-color">
                    <div class="card-body text-center">
                        <h4 class="text-white">Hai
                            <?= explode(' ', strtoupper(getLoggedInUser('name_candidate')))[0] ?? 'PRILLY' ?>
                        </h4>
                        <p class="text-white">Mohon maaf
                            <?= $showpengumuman['name_candidate'] ?>,
                            <mark class="rounded" style="color: #BF1E2E;"><b>Anda Tidak Lolos</b></mark> Tetap semangat
                            anda masih bisa apply lowongan lain jika pilihan anda yang lain belum ada yang diterima</p>
                    </div>
                </div>
                <a href="<?php base_url() ?>candidatejob/index">
                    <button type="button" class="btn btn-dark btn-icon btn-3 btn-xs mt-2 ">
                        <span class="btn-inner--icon"><i class="ni ni-calendar-grid-58 text-white"></i></span>
                        <span class="btn-inner--text text-white">Cek Lowongan lain</span>
                    </button>
                </a>
                <?php } else { ?>
                <div class="card card-frame custom-color">
                    <div class="card-body text-center">
                        <h4 class="text-white">Hai
                            <?= explode(' ', strtoupper(getLoggedInUser('name_candidate')))[0] ?? 'PRILLY' ?>
                        </h4>
                        <p class="text-white">
                            <?= $showpengumuman['name_candidate'] ?>,
                            Selamat Anda mendaftar sebagai <mark class="rounded" style="color: #2EBF1E;"><b>
                                    <?= $showpengumuman['name_job'] ?></b></mark>.
                            Selanjutnya anda akan mengikuti tahap <mark class="rounded" style="color: #2EBF1E;"><b>
                                    <?= $timeline['name_timeline'] ?>
                                </b></mark>, harap datang tepat waktu, cek jadwal untuk detail</p>
                    </div>
                </div>
                <button type="button" class="btn btn-dark btn-icon btn-3 btn-xs mt-2" data-bs-toggle="modal"
                    data-bs-target="#showBatchModal" id="showbatch"
                    data-batch="<?= $showpengumuman['id_batch'] ?>">
                    <span class="btn-inner--icon"><i class="ni ni-calendar-grid-58 text-white"></i></span>
                    <span class="btn-inner--text text-white">Cek Jadwal</span>
                </button>

                <?php }
                } else {
                    if($timeline['status'] == 3) { ?>
                <div class="card card-frame custom-color">
                    <div class="card-body text-center">
                        <h4 class="text-white">Hai
                            <?= explode(' ', strtoupper(getLoggedInUser('name_candidate')))[0] ?? 'PRILLY' ?>
                        </h4>
                        <p class="text-white">Mohon maaf
                            <?= $showpengumuman['name_candidate'] ?>,
                            <mark class="rounded" style="color: #BF1E2E;"><b>Anda Tidak Lolos</b></mark>. Tetap semangat
                            anda masih bisa apply lowongan lain jika pilihan anda yang lain belum ada yang diterima</p>
                    </div>
                </div>
                <a href="<?php base_url() ?>candidatejob/index">
                    <button type="button" class="btn btn-dark btn-icon btn-3 btn-xs mt-2">
                        <span class="btn-inner--icon"><i class="ni ni-calendar-grid-58 text-white"></i></span>
                        <span class="btn-inner--text text-white">Cek Lowongan lain</span>
                    </button>
                </a>
                <?php

                    } elseif($timeline['status'] == 2) { ?>
                <div class="card card-frame custom-color">
                    <div class="card-body text-center">
                        <h4 class="text-white">Hai
                            <?= explode(' ', strtoupper(getLoggedInUser('name_candidate')))[0] ?? 'PRILLY' ?>
                        </h4>
                        <p class="text-white">
                            <?= $showpengumuman['name_candidate'] ?>,
                            Selamat <mark class="rounded" style="color: #2EBF1E;"><b>Anda lolos</b></mark> semua tahap
                            mohon tunggu instruksi selanjutnya</p>
                    </div>
                </div>
                <?php
                    } else { ?>
                <div class="card card-frame custom-color">
                    <div class="card-body text-center">
                        <h4 class="text-white">Hai
                            <?= explode(' ', strtoupper(getLoggedInUser('name_candidate')))[0] ?? 'PRILLY' ?>
                        </h4>
                        <p class="text-white">
                            <?= $showpengumuman['name_candidate'] ?>,
                            Selamat <mark class="rounded" style="color: #2EBF1E;"><b> Anda lolos</b></mark>, Selanjutnya
                            anda akan mengikuti tahap <mark class="rounded" style="color: #2EBF1E;"><b>
                                    <?= $timeline['name_timeline'] ?></b></mark>,
                            harap datang tepat waktu, cek jadwal untuk detail</p>
                    </div>
                </div>
                <button type="button" class="btn btn-dark btn-icon btn-3 btn-xs mt-2" data-bs-toggle="modal"
                    data-bs-target="#showBatchModal" id="showbatch"
                    data-batch="<?= $showpengumuman['id_batch'] ?>">
                    <span class="btn-inner--icon"><i class="ni ni-calendar-grid-58 text-white"></i></span>
                    <span class="btn-inner--text text-white">Cek Jadwal</span>
                </button>
                <?php
                    }
                    ?>


                <?php } ?>
                <?php endforeach; ?>


            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="row mt-4">
</div>
<div class="row mt-4">
</div>

<!-- Modal jadwal -->
<div class="modal fade" id="showBatchModal" tabindex="-1" role="dialog" aria-labelledby="showBatchModalTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showBatchModalTitle">Jadwal tiap tahap</h5>
            </div>
            <!-- modal body -->
            <div class="modal-body">
                <div class="show-data-batch"></div>
                <!-- end modal body  -->
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            <!-- end modal footer -->
        </div>
    </div>

</div>