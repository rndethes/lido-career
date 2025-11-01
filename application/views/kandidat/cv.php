<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - <?= $biodata['name_candidate'] ?></title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

 <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    display: flex;
    flex-direction: row;
    width: 210mm;
    height: 297mm;
    overflow: hidden;
    color: #333;
    background: #ffffff;
  }

  /* --- LEFT PANEL --- */
  .left {
    background-color: #3381c0ff; /* biru khas LIDO29 */
    color: #ffffff;
    width: 33%;
    padding: 36px 26px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .left img {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #fff;
    margin-bottom: 16px;
  }

  .left h2 {
    font-size: 22px;
    margin-bottom: 6px;
    text-align: center;
    line-height: 1.3;
    font-weight: 700;
  }

  .left p {
    font-size: 14px;
    text-align: center;
    opacity: 0.95;
    margin-bottom: 14px;
  }

  .section-title {
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    border-bottom: 1px solid #ffffff;
    margin: 16px 0 10px;
    padding-bottom: 4px;
    width: 100%;
  }

  .info-item {
    font-size: 13.5px;
    line-height: 1.6;
    margin-bottom: 8px;
    word-wrap: break-word;
  }

  /* --- RIGHT PANEL --- */
  .right {
    width: 67%;
    background: #ffffff;
    padding: 40px 45px;
    overflow: hidden;
  }

  .name-title {
    font-size: 28px;
    font-weight: 800;
    color: #d10404ff; /* merah khas LIDO29 */
    margin-bottom: 6px;
  }

  .subtitle {
    font-size: 16px;
    color: #444;
    margin-bottom: 20px;
  }

  .section {
    margin-bottom: 22px;
  }

  .section h3 {
    font-size: 18px;
    color: #0073cf;
    margin-bottom: 10px;
    border-bottom: 2px solid #0073cf;
    display: inline-block;
    padding-bottom: 4px;
  }

  .exp-item, .edu-item {
    margin-bottom: 10px;
  }

  .exp-item h4, .edu-item h4 {
    font-size: 15px;
    font-weight: 600;
    color: #222;
  }

  .exp-item p, .edu-item p {
    font-size: 13.5px;
    color: #555;
    line-height: 1.5;
  }

  /* --- SUMMARY --- */
  .summary {
    font-size: 14.5px;
    color: #333;
    line-height: 1.6;
    max-height: 4.8em;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  /* --- PRINT SETTINGS --- */
  @page {
    size: A4;
    margin: 0;
  }

  @media print {
    body {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
      background-color: #ffffff !important;
      color: #000;
    }

    .card, .section {
      background-color: #f5f9ff !important;
      color: #000 !important;
      -webkit-print-color-adjust: exact !important;
    }
  }
</style>


</head>
<body>

  <body>
  <!-- Kolom Kiri -->
  <div class="left">
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

    <h2><?= strtoupper($biodata['name_candidate']) ?></h2>
    <p><?= $biodata['email_candidate'] ?? '-' ?><br><?= $biodata['no_candidate'] ?? '-' ?></p>

    <div class="section-title">Media Sosial</div>
    <div class="info-item">
      <?= $biodata['socialmedia_candidate'] ?? '-' ?><br>
      <?= $biodata['socialmedia2_candidate'] ?? '-' ?>
    </div>

    <div class="section-title">File Pendukung</div>
    <?php if (!empty($pendukung)): ?>
      <?php foreach ($pendukung as $pd): ?>
        <div class="info-item">• <?= ucfirst($pd['jenis_file']) ?></div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="info-item">Belum ada</div>
    <?php endif; ?>
  </div>

  <!-- Kolom Kanan -->
  <div class="right">
    <div class="name-title"><?= strtoupper($biodata['name_candidate']) ?></div>

    <div class="section">
      <h3>Biodata Diri</h3>

      <?php
      $tempat_tanggal = $biodata['birthdate_candidate'] ?? '';
      list($tempat_lahir, $tanggal_lahir) = array_pad(explode(',', $tempat_tanggal, 2), 2, '');
      $tempat_lahir = trim($tempat_lahir);
      $tanggal_lahir = trim($tanggal_lahir);
      $tanggal_formatted = '-';
      if (!empty($tanggal_lahir) && strtotime($tanggal_lahir)) {
        $tanggal_formatted = date('j F Y', strtotime($tanggal_lahir));
        $bulan = ['January'=>'Januari','February'=>'Februari','March'=>'Maret','April'=>'April','May'=>'Mei','June'=>'Juni',
                  'July'=>'Juli','August'=>'Agustus','September'=>'September','October'=>'Oktober','November'=>'November','December'=>'Desember'];
        foreach ($bulan as $en => $id) {
          $tanggal_formatted = str_replace($en, $id, $tanggal_formatted);
        }
      }

      $jenis_kelamin = '-';
      if (isset($biodata['jk_candidate'])) {
        $jenis_kelamin = $biodata['jk_candidate'] == 1 ? 'LAKI-LAKI' : ($biodata['jk_candidate'] == 2 ? 'PEREMPUAN' : 'TIDAK DISEBUTKAN');
      }

      $agama = '-';
      if (isset($biodata['religion_candidate'])) {
        $daftar_agama = [1=>'ISLAM',2=>'KRISTEN',3=>'HINDU',4=>'BUDDHA',5=>'KATOLIK'];
        $agama = $daftar_agama[$biodata['religion_candidate']] ?? 'TIDAK DISEBUTKAN';
      }
      ?>

      <div class="biodata-row">
        <div class="label"><b>Tempat, Tanggal Lahir</b></div>
        <div class="value"><?= strtoupper($tempat_lahir) . ', ' . $tanggal_formatted; ?></div>
      </div>

      <div class="biodata-row">
        <div class="label"><b>Jenis Kelamin</b></div>
        <div class="value"><?= $jenis_kelamin; ?></div>
      </div>

      <div class="biodata-row">
        <div class="label"><b>Alamat</b></div>
        <div class="value">
          <?= trim(($address['alamat_'] ?? '-') . ', ' . ($address['kecamatan'] ?? '-') . ', ' . ($address['kabupaten'] ?? '-') . ', ' . ($address['provinsi'] ?? '-')); ?>
        </div>
      </div>

      <div class="biodata-row">
        <div class="label"><b>Kode Pos</b></div>
        <div class="value"><?= $address['kode_pos'] ?? '-'; ?></div>
      </div>

      <div class="biodata-row">
        <div class="label"><b>Agama</b></div>
        <div class="value"><?= $agama; ?></div>
      </div>
    </div>

    <div class="section">
      <h3>Pendidikan Terakhir</h3>
      <p class="sub-bio">
        <?= strtoupper($laststudy['jenjang_'] ?? '-') ?> - <?= strtoupper($laststudy['name_school'] ?? '-') ?><br>
        Jurusan: <?= strtoupper($laststudy['jurusan_'] ?? '-') ?><br>
        Tahun: <?= date('Y', strtotime($laststudy['year_first'] ?? date('Y'))) ?> -
        <?= date('Y', strtotime($laststudy['year_last'] ?? date('Y'))) ?>
      </p>
    </div>

    <div class="section">
      <h3>Pengalaman Kerja</h3>
      <?php if (!empty($experience)): ?>
        <?php foreach ($experience as $row): ?>
          <div class="sub-bio">
            <strong><?= strtoupper($row['name_company']) ?></strong> - <?= strtoupper($row['last_position']) ?><br>
            <?= $row['first_year'] ?> s/d <?= $row['last_year'] ?: 'Sekarang' ?><br>
            <small><?= htmlentities($row['description']) ?></small>
          </div>
          <hr>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="sub-bio">Tidak ada data pengalaman kerja.</p>
      <?php endif; ?>
    </div>
  </div>


  <script>
    // Cetak otomatis setelah halaman termuat
    window.onload = function () {
      setTimeout(() => { window.print(); }, 500);
    };
  </script>

</body>
</html>
