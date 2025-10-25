<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV - <?= $karyawan['nama'] . " " . date('j F Y') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
      margin-top: 1rem;
      margin-bottom: 2rem;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    }
/* 
  .section-title {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 1rem;
    margin-bottom: 1rem;
    border-bottom: 2px solid #007acc;
    padding-bottom: 5px;
    color: #007acc;
  } */


  .career-entry {
    padding-top: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px dashed #ccc;
  }

  ul {
    margin: 0;
    padding-left: 1.2rem;
  }

  ul li {
    margin-bottom: 4px;
  }


    .contact-info p {
      margin: 0;
    }
    .font-small {
      font-size: 10;
    }
    hr {
      border-top: 2px solid #aaa;
    }
    ul {
      padding-left: 1.2rem;
    }
    @media print {

    body {
      background: white !important;
      color: black !important;
    }

    .row-flex {
    display: flex !important;
    flex-wrap: nowrap !important;
  }

  .col-lg-6 {
    width: 50% !important;
    float: left !important;
    box-sizing: border-box;
    padding: 0 10px; /* opsional padding antar kolom */
  }

    .row-print {
      display: flex !important;
      flex-wrap: nowrap !important;
    }
    .col-print-6 {
      width: 50% !important;
    }

    .cv-header {
      background-color: #444 !important;
      color: white !important;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }

    .btn,
    .no-print,
    nav,
    footer {
      display: none !important;
    }

    img {
      max-width: 100% !important;
      height: auto !important;
    }

    .container {
      width: 100% !important;
      padding: 0 !important;
      margin: 0 !important;
    }

    /* Untuk memaksa warna background dan teks sesuai */
    * {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
    }
  }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="cv-header">
  <?php 
            $url_sicuan = base_url().'uploads/karyawan/' . $karyawan['foto'];
            $url_asik 	= 'https://asik.ethes.tech/uploads/karyawan/' . $karyawan['foto'];
            // $headers = @get_headers($url);
            if (@getimagesize($url_sicuan)) {
            // file exists
              $url = $url_sicuan;
            } else {
            // file doesn't exist
              $url = $url_asik;
            }
            ?>
    <img src="<?= $url ?>" >
    <div>
      <h1><?= $karyawan['nama']; ?></h1>
      <p><?= $karyawan['email']; ?> | <?= $karyawan['no_hp']; ?></p>
    </div>
  </div>

  <div class="py-4">
    <h5 class="section-title">BIODATA DIRI</h5>
    <?php
        $ttl = $karyawan['ttl']; // contoh: "MAGELANG, 2000-01-01"

        // Pisahkan kota dan tanggal
        [$kota, $tanggal] = explode(',', $ttl);

        // Format tanggal ke: 1 Januari 2000
        $tanggal_formatted = date('j F Y', strtotime(trim($tanggal)));

        // Ganti nama bulan ke bahasa Indonesia
        $bulan = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];

        foreach ($bulan as $en => $id) {
            $tanggal_formatted = str_replace($en, $id, $tanggal_formatted);
        }

      
        ?>

        <div class="row">
                              <div class="col-sm-4 font-small">
                                <div class="pb-1 font-small ">Tanggal Lahir</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= trim($kota) . ', ' . $tanggal_formatted;?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">NIK / NOKK</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['nik'];?> / <?= $karyawan['nokk'];?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">NPWP</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['npwp'];?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Jenis Kelamin</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "> 
                                  <?php if ($karyawan['jenis_kelamin'] == 1) {
                                    echo "Laki Laki" ;
                                  } else if ($karyawan['jenis_kelamin'] == 2){
                                    echo "Perempuan";
                                  } else if ($karyawan['jenis_kelamin'] == 3){
                                    echo "Tidak Menyebutkan";
                                  }; ?>
                                </div>
                              </div>
                             
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Alamat</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['alamat']; ?></div>
                              </div>
                         
                       
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Agama</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['agama']; ?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Marital</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['martial']; ?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Pendidikan Terakhir</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['pendidikan']; ?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">Instagram / Tiktok</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['sosmed']; ?> / <?= $karyawan['sosmed_second']; ?></div>
                              </div>
                              <div class="col-sm-4 font-small">
                                <div class="pb-1">No Rekening</div>
                              </div>
                              <div class="col-sm-8">
                                <div class="pb-1 font-small "><?= $karyawan['no_rek']; ?></div>
                              </div>
                            </div>
    <!-- Summary & Contact -->
    <div class="row">
      <div class="col-lg-12 contact-info">
        <h5 class="section-title">Data Keluarga</h5>
            <div class="row row-print">
                <div class="col-lg-6">
                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <div class="pb-1">Nama Ibu Kandung</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1 text-secondary"><?= $karyawan['nama_orangtua'];?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-print">
                <div class="col-lg-6">
                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <div class="pb-1">Nama Wali 1</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali1['name_detail'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">No HP 1</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali1['phone_detail'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">Hubungan Wali 1</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali1['relationship'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">Alamat Wali 1</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali1['addresed'] ?? "-" ?></div>
                        </div>
                    </div>
                </div>
                              
                <div class="col-md-6">
                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <div class="pb-1">Nama Wali 2</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali2['name_detail'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">No HP 2</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali2['phone_detail'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">Hubungan Wali 2</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali2['relationship'] ?? "-" ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb-1">Alamat Wali 2</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="pb-1"><?= $wali2['addresed'] ?? "-" ?></div>
                        </div>
                    </div>
                </div>
            </div>
<!--           
            <hr> -->
           
              <div class="row">
                  <div class="col-lg-6">
                    <h5 class="section-title">Data Pasangan</h5>
                    <div class="row mt-2">
                          <?php if(empty($data_relation)) { ?>
                            <div class="col-sm-4">
                              <div class="pb-1">Belum Ada</div>
                            </div>
                          <?php } else { ?>
                          <?php foreach($data_relation as $dr) { ?>
                              <div class="col-sm-4">
                                  <div class="pb-1">Nama Pasangan</div>
                              </div>
                              <div class="col-sm-8">
                                  <div class="pb-1"><?= $dr['name_detail'] ?? "-" ?></div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="pb-1">Nomor Pasangan</div>
                              </div>
                              <div class="col-sm-8">
                                  <div class="pb-1"><?= $wali1['phone_detail'] ?? "-" ?></div>
                              </div>
                          <?php } ?>
                        <?php } ?>
                      </div>
                  </div>
                  <div class="col-lg-6">
                        <h5 class="section-title">Data Anak</h5>
                          <div class="row mt-2">
                              <?php if(empty($data_child)) { ?>
                                <div class="col-sm-4">
                                  <div class="pb-1">Belum Ada</div>
                                </div>
                              <?php } else { ?>
                                <?php foreach($data_child as $dc) { ?>
                                  <div class="col-sm-4">
                                    <div class="pb-1">Nama Anak</div>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="pb-1"><?= $dc['name_detail'] ?? "-" ?></div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="pb-1">Nomor Anak</div>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="pb-1"><?= $dc['phone_detail'] ?? "-" ?></div>
                                  </div>
                                <?php } ?>
                              <?php } ?>
                            </div>
                    </div>
              </div>
        </div>
    </div>

    <!-- <hr> -->

    <!-- Work Experience -->
    <div>
      <h5 class="section-title">Karir</h5>

      <div class="mb-4">
      <?php foreach($karir as $act) { 
                            $id_kr = $act['id_name_activation'];
                            $id_act = $act['id_activation'];
                            $CI = &get_instance();
                            $CI->load->model('ActivationModel');

                            $periode = $CI->ActivationModel->getActivationDetailDesc($id_act,$id_kr);

                              if($act['date_activation'] != '0000-00-00') {
                                  if($periode == null){
                                      //  print_r($periode);exit();
                                      $date1 = new DateTime($act['date_activation']);
                                      $date2 = new DateTime(date("Y-m-d"));
                                      $diff = $date1->diff($date2);
                                      // Ambil selisih tahun dan bulan
                                      $years = $diff->y;
                                      $months = $diff->m;
                                      $status = "Aktif";
                          
                                      $periodedate = date('j F Y',strtotime($act['date_activation'])) . " - Sekarang";
                                  } else {
                                      if($periode['date_activation'] == $act['date_activation']) {
                                          //  print_r($periode);exit();
                                          $date1 = new DateTime($periode['date_activation']);
                                          $date2 = new DateTime(date("Y-m-d"));
                                          $diff = $date1->diff($date2);
                                          // Ambil selisih tahun dan bulan
                                          $years = $diff->y;
                                          $months = $diff->m;
                                          

                                          $status = "Aktif";

                                          $periodedate = date('j F Y',strtotime($act['date_activation'])) . " - Sekarang";
                                      } else {
                                              //  print_r($periode);exit();
                                          $date1 = new DateTime($act['date_activation']);
                                          $date2 = new DateTime($periode['date_activation']);
                                          
                                          $diff = $date1->diff($date2);
                                          // Ambil selisih tahun dan bulan
                                          $years = $diff->y;
                                          $months = $diff->m;
                                          $status = "-";
                                          
                                          $periodedate = date('j F Y',strtotime($act['date_activation'])) . " - " . date('j F Y',strtotime($periode['date_activation']));
                                      }
                                  }
                              
                              } else{
                                  $years = "-";
                                      $months = "-";
                                      $status = "-";
                                      if($act['date_activation'] == '0000-00-00') {
                                        $periodedate = "Masih Pengajuan";
                                    } else {
                                        $periodedate = date('j F Y',strtotime($act['date_activation'])) . "- Sekarang";
                                    }
                              }
                          
                          ?>
  
        <div class="career-entry">
          <strong><?= $act['jabatan_activation'] ?></strong> <span class="text-muted">| <?= $periodedate ?></span><br>
          <em>Kantor : <?= $act['name'] ?></em><br>
          <span class="text-uppercase">Beneficial:</span>
          <ul>
          <?php 
                                           $CI->load->model('KontrakModel');
                                           $idkaryawan = $karyawan['id_karyawan'];
                                           $idjabatan = $act['id_jabatan_activation'];
                                           $beneficial = $CI->KontrakModel->getBeneficialJabatan($idkaryawan,$idjabatan);
                                          
                                          if (!empty($beneficial)) : ?>
                                                <?php 
                                                  
                                                    $CI->load->model('KontrakModel');
                                                    foreach ($beneficial as $ben) :
                                                      $typebenef = $ben['type_beneficial'];
                                                      $jabatan = $ben['id_jabatan'];
                                                      $jab = $CI->KontrakModel->getBeneficialItem($typebenef,$jabatan,$idkaryawan);
                                                        $names = array_column($jab, 'name_beneficial');
                                                        $namaBeneficial = implode(', ', $names);
                                                ?>
                                                  
                                                
                                                    <li class="pb-1"><b><?= $ben['type_beneficial'] ?></b>( <?= $namaBeneficial ?> )</li>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <li>
                                                    <span class="text-center text-muted">Tidak Ada</span>
                                                  </li>
                                                
                                            <?php endif; ?>
           
          </ul>
        </div>
        <?php } ?>

  
      </div>

      <div class="row">
        <div class="col-md-6">
          <h5 class="section-title">Kontrak</h5>
          <ul class="list-unstyled">
            <li><strong>No. Kontrak:</strong> 092/VI/2026/OOMMN <span class="text-muted">| 20 April 2025 – Sekarang</span></li>
            <li><strong>Badan Hukum:</strong> RKR</li>
            <li><strong>Total Gaji:</strong> Rp2.400.000</li>
          </ul>
        </div>
      </div>
    </div>

  <script>
  window.onload = function () {
    setTimeout(() => {
      window.print();
    }, 500); // beri delay kecil agar semua gambar selesai load
  };
</script>

</body>
</html>
