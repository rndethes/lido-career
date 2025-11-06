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
                                    $path = FCPATH . 'uploads/kandidat/profiles/' . $biodata['photo_candidate'];

                                    if (file_exists($path) && is_file($path)) {
                                        $img = base_url('uploads/kandidat/profiles/' . $biodata['photo_candidate']);
                                    } else {
                                        $img = base_url('assets/default/file_lido-default-photo.jpg');
                                    }
                                    ?>
                                   <div class="photo-circle" style="width: 130px; height: 130px; border-radius: 50%; overflow: hidden;">
                            <img src="<?= $img ?>" 
                                alt="Foto Kandidat" 
                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ms-sm-2">
                                <div class="mt-2"></div>

                                <h6  style="margin-top: -70px;">No. Handphone</h6>

                                <span
                                    class="sub-bio"><?= $biodata['no_candidate'] ?></span>
                                <hr class="horizontal dark mt-2">
                                <h6>Tempat Lahir</h6>
                               <span class="sub-bio"><?= strtoupper($biodata['tempat_lahir_candidate'] ?? ($biodata['tempat_lahir_'] ?? '-')) ?></span>

                                <hr class="horizontal dark mt-2">
                              <h6>Tanggal Lahir</h6>
                                <span class="sub-bio">
                                    <?= !empty($biodata['tanggal_lahir_candidate']) ? $biodata['tanggal_lahir_candidate'] : '-' ?>
                                </span>
<hr class="horizontal dark mt-2">
<h6>Agama</h6>
<span class="sub-bio">
    <?php
        if ($biodata['religion_candidate'] == 1) {
            echo 'ISLAM';
        } elseif ($biodata['religion_candidate'] == 2) {
            echo 'KRISTEN';
        } elseif ($biodata['religion_candidate'] == 3) {
            echo 'HINDU';
        } elseif ($biodata['religion_candidate'] == 4) {
            echo 'BUDDHA';
        } elseif ($biodata['religion_candidate'] == 5) {
            echo 'KATOLIK';
        } else {
            echo 'TIDAK INGIN MENYEBUTKAN';
        }
    ?>
</span>

<hr class="horizontal dark mt-2">
<h6>Jenis Kelamin</h6>
<span class="sub-bio">
    <?php
        if ($biodata['jk_candidate'] == 1) {
            echo 'LAKI-LAKI';
        } elseif ($biodata['jk_candidate'] == 2) {
            echo 'PEREMPUAN';
        } else {
            echo 'TIDAK INGIN MENYEBUTKAN';
        }
    ?>
</span>

<hr class="horizontal dark mt-2">
<h6>Status</h6>
<span class="sub-bio">
    <?php
        if ($biodata['marital_candidate'] == 1) {
            echo 'BELUM MENIKAH';
        } elseif ($biodata['marital_candidate'] == 2) {
            echo 'MENIKAH';
        } elseif ($biodata['marital_candidate'] == 3) {
            echo 'CERAI HIDUP';
        } elseif ($biodata['marital_candidate'] == 4) {
            echo 'CERAI MATI';
        } else {
            echo 'TIDAK INGIN MENYEBUTKAN';
        }
    ?>
</span>

<hr class="horizontal dark mt-2"> 
<h6>Media Sosial</h6>
<div class="sub-bio">
    <?php
        // Ambil username sosmed dari database
        $linkedin  = $biodata['socialmedia2_candidate'] ?? '';
        $instagram = $biodata['socialmedia_candidate'] ?? '';

        // Fungsi bikin URL otomatis
        function build_social_url($username, $platform) {
            $username = trim($username);
            if (empty($username)) return '';

            switch ($platform) {
                case 'linkedin':
                    // hapus tanda @ jika ada
                    $username = ltrim($username, '@');
                    return 'https://www.linkedin.com/in/' . $username;
                case 'instagram':
                    $username = ltrim($username, '@');
                    return 'https://www.instagram.com/' . $username . '/';
                default:
                    return $username;
            }
        }

        // Jika dua-duanya kosong
        if (empty($linkedin) && empty($instagram)) {
            echo '<span>TIDAK DICANTUMKAN</span>';
        } else {
            echo '<ul class="list-unstyled mb-0">';

            // LinkedIn
            if (!empty($linkedin)) {
                $linkedinUrl = build_social_url($linkedin, 'linkedin');
                echo '<li><strong>LinkedIn:</strong> <a href="' . htmlspecialchars($linkedinUrl) . '" target="_blank">@' 
                     . htmlspecialchars(ltrim($linkedin, '@')) . '</a></li>';
            }

            // Instagram
            if (!empty($instagram)) {
                $instagramUrl = build_social_url($instagram, 'instagram');
                echo '<li><strong>Instagram:</strong> <a href="' . htmlspecialchars($instagramUrl) . '" target="_blank">@' 
                     . htmlspecialchars(ltrim($instagram, '@')) . '</a></li>';
            }

            echo '</ul>';
        }
    ?>
</div>
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
                     <div class="col-lg-3 d-flex flex-column gap-2">
                    <!-- <a class="btn bg-gradient-success mb-0"
                    href="<?= site_url('candidate-biodata/update-biodata') ?>">
                        <i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Biodata
                    </a> -->


                    <a class="btn btn-primary mb-0"
                        href="<?= site_url('kandidat/cetak-cv/' . $biodata['id']) ?>"
                        target="_blank">
                        <i class="fas fa-print"></i>&nbsp;&nbsp;Cetak CV
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
                                      <?php
                                        $bulan = [
                                            'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret', 'April' => 'April',
                                            'May' => 'Mei', 'June' => 'Juni', 'July' => 'Juli', 'August' => 'Agustus',
                                            'September' => 'September', 'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember'
                                        ];

                                        function indoBulan($date, $bulan) {
                                            return strtr(date('F Y', strtotime($date)), $bulan);
                                        }
                                        ?>

                                        <div class="sub-bio">
                                            <?= !empty($laststudy['year_first']) ? indoBulan($laststudy['year_first'], $bulan) : '-' ?>
                                            -
                                            <?= !empty($laststudy['year_last']) ? indoBulan($laststudy['year_last'], $bulan) : '-' ?>
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
                                            <?php
                                                $status_pegawai_list = [
                                                    0 => 'PEKERJA PARUH WAKTU',
                                                    1 => 'PKWT',
                                                    2 => 'PEKERJA TETAP',
                                                    3 => 'PEKERJA SEMENTARA',
                                                    4 => 'PEKERJA MUSIMAN',
                                                    5 => 'FREELANCER/PEKERJA LEPAS',
                                                    6 => 'PEKERJA KONTRAK',
                                                    7 => 'OUTSOURCING',
                                                    8 => 'MAGANG',
                                                    9 => 'PKWTT'
                                                ];
                                                $id_type = $row['employee_company'];
                                                $nama_type = isset($status_pegawai_list[$id_type]) 
                                                    ? $status_pegawai_list[$id_type] 
                                                    : 'TIDAK DICANTUMKAN';
                                            ?>
                                            <?= strtoupper($nama_type) ?>
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
                    Anda belum mengunggah file pendukung apapun,
                    <a href="<?= site_url('candidate-biodata/update-biodata?tab=data-pendukung') ?>">
                        klik disini
                    </a>
                    untuk menambahkan file pendukung.
                </div>
            <?php else: ?>
                <?php foreach ($pendukung as $row): ?>
                    <div class="col-12 mb-3"
                         style="background: rgba(233, 233, 233, 0.8); border-radius: 10px; padding: 15px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-dark mb-1">
                                    <a href="<?= base_url('uploads/kandidat/files/' . $row['file_pendukung']) ?>"
                                       target="_blank">
                                        <i class="fas fa-file"></i>
                                        <?= $row['file_pendukung'] ?>
                                    </a>
                                </p>
                                <small class="text-muted">
                                    <i class="fas fa-tag"></i> Jenis File:
                                    <strong><?= ucfirst($row['jenis_file']) ?></strong>
                                </small>
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