<script>
    if (typeof __diffDateForHuman !== "function") {
        function __diffDateForHuman(dateMulai, dateSelesai) {
            // Jika bulan sama
            if (dateMulai.getMonth() === dateSelesai.getMonth() && dateMulai.getFullYear() ===
                dateSelesai.getFullYear()) {
                return "1 Bulan";
            }

            // Menghitung selisih tahun antara 2 tanggal
            var selisihTahun = dateSelesai.getFullYear() - dateMulai.getFullYear();

            // Menghitung selisih bulan antara 2 tanggal
            var selisihBulan = dateSelesai.getMonth() - dateMulai.getMonth();

            // Menghitung selisih hari antara 2 tanggal
            var selisihHari = dateSelesai.getDate() - dateMulai.getDate();

            // Jika selisih hari negatif, maka ditambahkan 30 hari (karena setiap bulan memiliki 30 hari)
            if (selisihHari < 0) {
                selisihBulan -= 1;
            }

            // Jika selisih bulan negatif, maka ditambahkan 12 bulan (karena setiap tahun memiliki 12 bulan)
            if (selisihBulan < 0) {
                selisihBulan += 12;
                selisihTahun -= 1;
            }

            // Menghitung lama bekerja dalam tahun, bulan, dan hari
            let lamaBekerja = "";
            if (selisihTahun > 0) {
                lamaBekerja += selisihTahun + " Tahun ";
            }
            if (selisihBulan > 0) {
                lamaBekerja += selisihBulan + " Bulan ";
            }
            if (selisihHari > 0) {
                lamaBekerja += selisihHari + " Hari ";
            }

            return lamaBekerja;
        }
    }
</script>

<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <!--- PROFILE --->
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize"></h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="photo-circle">
                                    <?php
                                    $path = FCPATH . 'uploads/kandidat/profiles' . $biodata['photo_candidate'];
                                    if (file_exists($path) && is_file($path)) {
                                        $img = base_url('uploads/kandidat/profiles/' . $biodata['photo_candidate']);
                                    } else {
                                        $img = base_url('assets/default/file_lido-default-photo.jpg');
                                    }
                                    ?>
                                    <img class="img-fluid border-radius-lg"
                                        src="<?= $img ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 ms-sm-2">
                                <div class="mt-2"></div>

                                <h6>No. Handphone</h6>

                                <span
                                    class="sub-bio"><?= $biodata['no_candidate'] ?></span>
                                <hr class="horizontal dark mt-2">
                                <h6>Tempat Lahir</h6>
                                <span
                                    class="sub-bio"><?= strtoupper($biodata['tempat_lahir_']) ?></span>

                                <hr class="horizontal dark mt-2">
                                <h6>Tanggal Lahir</h6>
                                <span
                                    class="sub-bio"><?= $biodata['tanggal_lahir_'] ?></span>
                                <hr class="horizontal dark mt-2">
                                <h6>Jenis Kelamin</h6>
                                <span class="sub-bio">

                                    <?= $biodata['jk_candidate'] == 1 ? 'LAKI LAKI' : ($biodata['jk_candidate'] == 2 ? 'PEREMPUAN' : ($biodata['jk_candidate'] == 3 ? 'TRANSGENDER' : 'TIDAK INGIN MENYEBUTKAN')) ?>

                                </span>
                                <hr class="horizontal dark mt-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-9">

                                <h2><?= strtoupper($biodata['name_candidate']) ?>

                                </h2>
                                <div>
                                    <?= $biodata['email_candidate'] ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <a class="btn bg-gradient-danger mb-0"
                                    href="<?= site_url('candidate-biodata/update-biodata') ?>">
                                    <i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Biodata</i>
                                </a>
                            </div>
                            <hr class="horizontal dark mt-2">
                            <div class="col-lg-12">
                                <h5>Alamat</h5>
                                <div class="sub-bio">
                                    <?= $address['alamat_'] ?>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Provinsi</h6>
                                        <div class="sub-bio">
                                            <?= $address['provinsi'] ?>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6>Kabupaten/Kota</h6>
                                        <div class="sub-bio">
                                            <?= $address['kabupaten'] ?>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6>Kecamatan</h6>
                                        <div class="sub-bio">
                                            <?= $address['kecamatan'] ?>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6>Kode Pos</h6>
                                        <div class="sub-bio">
                                            <?= $address['kode_pos'] ?>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-2">
                                <h5>Pendidikan Terakhir</h5>
                                <div class="sub-bio">

                                    <?= strtoupper($laststudy['jenjang_']) ?>
                                </div>
                                <div class="sub-bio">
                                    <?= strtoupper($laststudy['name_school']) ?>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h6>Kelompok Jurusan</h6>
                                        <div class="sub-bio">

                                            <?= strtoupper($laststudy['jurusan_']) ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Tahun Pendidikan</h6>
                                        <div class="sub-bio">
                                            <?= date('Y', strtotime($laststudy['year_first'])) ?>
                                            -
                                            <?= date('Y', strtotime($laststudy['year_last'])) ?>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-2">
                                <h5>Pengalaman Kerja</h5>
                                <div class="row">
                                    <?php foreach ($experience as $row): ?>
                                    <div class="col-6">
                                        <h6>Nama Perusahaan</h6>
                                        <div class="sub-bio">

                                            <?= strtoupper($row['name_company']) ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Jenis Perusahaan</h6>
                                        <div class="sub-bio">

                                            <?= strtoupper($row['type_company']) ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Lama Bekerja</h6>
                                        <div class="sub-bio">
                                            <script>
                                                document.write(__diffDateForHuman(new Date(
                                                    '<?= $row['first_year'] ?>'
                                                ), new Date(
                                                    '<?= $row['last_year'] ?>'
                                                )))
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Status Pegawai</h6>
                                        <div class="sub-bio">

                                            <?= strtoupper($row['employee_company']) ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Jabatan Terakhir</h6>
                                        <div class="sub-bio">

                                            <?= strtoupper($row['last_position']) ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6>Kontrak Selesai</h6>

                                        <div class="sub-bio">
                                            <?= is_null($row['last_year']) ? 'Belum' : 'Selesai' ?>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <h6>Deskripsi Pekerjaan</h6>
                                        <p class="sub-bio">
                                            <?= htmlentities(htmlspecialchars($row['description'])) ?>
                                        </p>
                                        <hr class="horizontal dark">
                                    </div>
                                    <?php endforeach ?>
                                </div>
                                <hr class="horizontal dark mt-2">
                                <h5>File Pendukung</h5>
                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if (empty($pendukung)): ?>
                                            <div class="alert bg-warning text-white">
                                                Anda belum mengunggah file pendukung apapun, <a
                                                    href="<?= site_url('candidate-biodata/update-biodata?tab=data-pendukung') ?>">klik
                                                    disini</a> untuk
                                                menambahkan file pendukung.
                                            </div>
                                            <?php else: ?>
                                            <?php foreach ($pendukung as $row): ?>
                                            <div class="col-12 mb-3"
                                                style="background: rgba(233, 233, 233, 0.8); border-radius: 10px; padding: 15px;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p class="text-dark">
                                                            <a href="<?= base_url('uploads/kandidat/files/' . $row['file_pendukung']) ?>"
                                                                target="_blank">
                                                                <i class="fas fa-file"></i>
                                                                <?= $row['file_pendukung'] ?>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <a href="<?= base_url('uploads/kandidat/files/' . $row['file_pendukung']) ?>"
                                                            class="btn btn-xs btn-primary" download>
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a href="<?= base_url('uploads/kandidat/files/' . $row['file_pendukung']) ?>"
                                                            target="_blank" class="btn btn-xs btn-success">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        &nbsp;
                                                    </div>
                                                </div>
                                                <div class="d-block d-md-none">
                                                    <button class="btn btn-xs btn-primary">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button class="btn btn-xs btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button class="btn btn-xs btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>