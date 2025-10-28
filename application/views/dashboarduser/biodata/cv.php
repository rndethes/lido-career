<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV - <?= $biodata['name_candidate'] . " " . date('j F Y') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ======================
       DESAIN UTAMA CV
       ====================== */
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .cv-header {
      background-color: #1c1c1e;
      color: #fff;
      padding: 2rem;
      display: flex;
      align-items: center;
    }
    .cv-header img {
      width: 110px;
      height: 110px;
      object-fit: cover;
      border-radius: 10px;
      margin-right: 2rem;
    }
    .cv-header h1 {
      font-size: 2rem;
      margin: 0;
    }
    .section-title {
      font-weight: bold;
      text-transform: uppercase;
      margin-top: 2rem;
      margin-bottom: 1rem;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 5px;
    }
    .career-entry {
      padding-top: 1rem;
      padding-bottom: 1rem;
      border-bottom: 1px dashed #ccc;
    }
    ul { margin: 0; padding-left: 1.2rem; }
    ul li { margin-bottom: 4px; }
    .font-small { font-size: 14px; }
    hr { border-top: 2px solid #aaa; }
    .contact-info p { margin: 0; }

    /* Style baris biodata */
    .biodata-row {
      display: flex;
      margin-bottom: 6px;
    }
    .biodata-row .label {
      width: 35%;
      font-weight: 600;
      color: #555;
    }
    .biodata-row .value {
      width: 65%;
    }

    /* ======================
       MODE CETAK
       ====================== */
    @media print {
      body { background: white !important; color: black !important; }
      .cv-header { background-color: #444 !important; color: white !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
      .btn, .no-print, nav, footer { display: none !important; }
      img { max-width: 100% !important; height: auto !important; }
      .container { width: 100% !important; padding: 0 !important; margin: 0 !important; }
      * { -webkit-print-color-adjust: exact !important; print-color-adjust: exact !important; }
    }
  </style>
  <script>
    window.onload = function () {
      setTimeout(() => {
        window.print();
      }, 800);
    };
  </script>
</head>
<body>

  <!-- ===== HEADER ===== -->
  <div class="cv-header">
    <?php 
      $url_local = base_url().'uploads/foto/' . $biodata['photo_candidate'];
      if (@getimagesize($url_local)) {
        $url = $url_local;
      } else {
        $url = base_url().'assets/img/default-user.png';
      }
    ?>
    <img src="<?= $url ?>" alt="Foto Kandidat">
    <div>
      <h1><?= strtoupper($biodata['name_candidate']); ?></h1>
      <p><?= $biodata['email_candidate']; ?> | <?= $biodata['no_candidate']; ?></p>
    </div>
  </div>

  <!-- ===== BODY ===== -->
  <div class="container py-4">
    <h5 class="section-title">Biodata Diri</h5>

<?php
// ====================
// TEMPAT & TANGGAL LAHIR
// ====================
$tempat_tanggal = $biodata['birthdate_candidate'] ?? '';
list($tempat_lahir, $tanggal_lahir) = array_pad(explode(',', $tempat_tanggal, 2), 2, '');
$tempat_lahir = trim($tempat_lahir);
$tanggal_lahir = trim($tanggal_lahir);

if (!empty($tanggal_lahir) && strtotime($tanggal_lahir)) {
  $tanggal_formatted = date('j F Y', strtotime($tanggal_lahir));
  $bulan = [
    'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret',
    'April' => 'April', 'May' => 'Mei', 'June' => 'Juni',
    'July' => 'Juli', 'August' => 'Agustus', 'September' => 'September',
    'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember'
  ];
  foreach ($bulan as $en => $id) {
    $tanggal_formatted = str_replace($en, $id, $tanggal_formatted);
  }
} else {
  $tanggal_formatted = '-';
}

// ====================
// KONVERSI JENIS KELAMIN & AGAMA
// ====================
$jenis_kelamin = '-';
if (isset($biodata['jk_candidate'])) {
  if ($biodata['jk_candidate'] == 1) {
    $jenis_kelamin = 'LAKI-LAKI';
  } elseif ($biodata['jk_candidate'] == 2) {
    $jenis_kelamin = 'PEREMPUAN';
  } else {
    $jenis_kelamin = 'TIDAK INGIN MENYEBUTKAN';
  }
}

$agama = '-';
if (isset($biodata['religion_candidate'])) {
  switch ($biodata['religion_candidate']) {
    case 1: $agama = 'ISLAM'; break;
    case 2: $agama = 'KRISTEN'; break;
    case 3: $agama = 'HINDU'; break;
    case 4: $agama = 'BUDDHA'; break;
    case 5: $agama = 'KATOLIK'; break;
    default: $agama = 'TIDAK INGIN MENYEBUTKAN'; break;
  }
}
?>

<!-- ===== BIODATA LIST (sejajar kanan kiri) ===== -->
<div class="biodata-row">
  <div class="label">Tempat, Tanggal Lahir</div>
  <div class="value"><?= strtoupper($tempat_lahir) . ', ' . $tanggal_formatted; ?></div>
</div>

<div class="biodata-row">
  <div class="label">Jenis Kelamin</div>
  <div class="value"><?= $jenis_kelamin; ?></div>
</div>

<div class="biodata-row">
  <div class="label">Alamat</div>
  <div class="value">
    <?= 
      trim(($address['alamat_'] ?? '-') . ', ' . 
           ($address['kecamatan'] ?? '-') . ', ' . 
           ($address['kabupaten'] ?? '-') . ', ' . 
           ($address['provinsi'] ?? '-')); 
    ?>
  </div>
</div>

<div class="biodata-row">
  <div class="label">Kode Pos</div>
  <div class="value"><?= $address['kode_pos'] ?? '-'; ?></div>
</div>

<div class="biodata-row">
  <div class="label">Agama</div>
  <div class="value"><?= $agama; ?></div>
</div>

<div class="biodata-row">
  <div class="label">Instagram / LinkedIn</div>
  <div class="value">
    <?= $biodata['socialmedia_candidate'] ?? '-' ?> / <?= $biodata['socialmedia2_candidate'] ?? '-' ?>
  </div>
</div>

<!-- ===== Pendidikan ===== -->
<h5 class="section-title">Pendidikan Terakhir</h5>
<p>
  <?= strtoupper($laststudy['jenjang_'] ?? '-') ?> - <?= strtoupper($laststudy['name_school'] ?? '-') ?><br>
  Jurusan: <?= strtoupper($laststudy['jurusan_'] ?? '-') ?><br>
  Tahun: <?= date('Y', strtotime($laststudy['year_first'] ?? date('Y'))) ?> -
  <?= date('Y', strtotime($laststudy['year_last'] ?? date('Y'))) ?>
</p>

<!-- ===== Pengalaman ===== -->
<h5 class="section-title">Pengalaman Kerja</h5>
<?php if (!empty($experience)): ?>
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
    <?php
      $first = !empty($row['first_year']) ? new DateTime($row['first_year']) : null;
      $last  = !empty($row['last_year']) ? new DateTime($row['last_year']) : new DateTime();
      if ($first) {
        $diff = $first->diff($last);
        $lama_bekerja = '';
        if ($diff->y > 0) $lama_bekerja .= $diff->y . ' Tahun ';
        if ($diff->m > 0) $lama_bekerja .= $diff->m . ' Bulan';
        echo trim($lama_bekerja) ?: '-';
      } else {
        echo '-';
      }
    ?>
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
        <?= is_null($row['last_year']) || $row['last_year'] == '' ? 'Belum' : 'Selesai' ?>
      </div>
    </div>

    <div class="col-12">
      <h6>Deskripsi Pekerjaan</h6>
      <p class="sub-bio">
        <?= htmlentities(htmlspecialchars($row['description'])) ?>
      </p>
      <hr class="horizontal dark">
    </div>
  <?php endforeach; ?>
</div>
<?php else: ?>
  <p>Tidak ada data pengalaman kerja.</p>
<?php endif; ?>
</br>

    <!-- ===== File Pendukung ===== -->
    <h5 class="section-title">File Pendukung</h5>
    <?php if (!empty($pendukung)): ?>
      <ul>
        <?php foreach ($pendukung as $file): ?>
          <li>
            <a href="<?= base_url('uploads/kandidat/files/' . $file['file_pendukung']) ?>" target="_blank">
              <?= $file['file_pendukung'] ?>
            </a> (<?= ucfirst($file['jenis_file']) ?>)
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Tidak ada file pendukung yang diunggah.</p>
    <?php endif; ?>
  </div>

  <script>
    // Cetak otomatis setelah halaman termuat
    window.onload = function () {
      setTimeout(() => { window.print(); }, 500);
    };
  </script>

</body>
</html>
