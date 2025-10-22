<div class="nav-wrapper position-relative end-0">
<ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#lowongan" role="tab" aria-controls="widget1" aria-selected="true">
                                Lowongan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#jadwal"
                                role="tab" aria-controls="widget2" aria-selected="true">
                                Jadwal
                            </a>
                        </li>
                    </ul>
</div>
<div class="tab-content mt-4" id="pengaturanLPTabContent">
<div class="tab-pane fade show active" id="jadwal" role="tabpanel"
                        aria-labelledby="widget1">
                        <!-- Beg Tab 1 -->
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                    <p class="text-center"><bold>Pilih lowongan untuk mengetahui deskripsi dan kualifikasinya</bold></p>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle col-12" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                      </button>
                                      <ul class="dropdown-menu col-12 text-center" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                      </ul>
                                    </div>
                                    </div>
                                    <div class="input-group">
                                    <div class="col-10 p-2">
                                        <label for="">Lowongan 1</label>
                                        <input class="form-control col-8" type="text" value="" aria-label="readonly input example" readonly>
                                    </div>
                                    <div class="col-2 p-2">
                                        <label for="">No</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
</div>

                                  </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-widget-1" onsubmit="return false;" action="" method="post">
                                            <div class="form-group">
                                                <label for="kual" class="form-control-label">Kualifikasi</label>
                                                <textarea id="kual" name="kualifikasijob" class="form-control" cols="30" rows="10" disabled>$Isi_kualifikasi</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                <textarea id="des" name="deskripsijob" class="form-control" cols="30" rows="10" disabled>$Isi_deskripsi</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Subtitle</label>
                                                <input id="field_about_subtitle1" name="about_subtitle" class="form-control" type="text" value="<?= $widget1['about_subtitle'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea id="field_about_description1" name="about_description" class="form-control" cols="30" rows="10"><?= $widget1['about_description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-edit-lp-widget1" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
  <!-- end jadwal -->

  <!-- jadwal -->
  <div class="tab-pane fade show active" id="jadwal" role="tabpanel"
                        aria-labelledby="widget1">
                        <!-- Beg Tab 1 -->
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                    <p class="text-center"><bold>Pilih lowongan untuk mengetahui deskripsi dan kualifikasinya</bold></p>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle col-12" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                      </button>
                                      <ul class="dropdown-menu col-12 text-center" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                      </ul>
                                    </div>
                                    </div>
                                    <div class="col-8">
                                    <label for=""></label>
                                    <input class="form-control col 8" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-widget-1" onsubmit="return false;" action="" method="post">
                                            <div class="form-group">
                                                <label for="kual" class="form-control-label">Kualifikasi</label>
                                                <textarea id="kual" name="kualifikasijob" class="form-control" cols="30" rows="10" disabled>$Isi_kualifikasi</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                <textarea id="des" name="deskripsijob" class="form-control" cols="30" rows="10" disabled>$Isi_deskripsi</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Subtitle</label>
                                                <input id="field_about_subtitle1" name="about_subtitle" class="form-control" type="text" value="<?= $widget1['about_subtitle'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea id="field_about_description1" name="about_description" class="form-control" cols="30" rows="10"><?= $widget1['about_description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-edit-lp-widget1" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
  <!-- end jadwal -->
</div>