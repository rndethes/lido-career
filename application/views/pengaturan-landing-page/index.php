<style>
/* Card style */
.card {
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  border: none;
}

.card-header {
    background: linear-gradient(90deg, #f0f2f5ff, #f5f7faff);
    color: #fff;
    border-radius: 15px 15px 0 0;
    text-align: center;
    padding: 0; /* hilangkan padding default */
}

.card-header .nav {
    display: flex;
    flex-wrap: nowrap;  /* jangan wrap ke baris baru */
    overflow-x: auto;   /*scroll horizontal jika muatannya banyak*/
    -webkit-overflow-scrolling: touch; /* smooth scroll di mobile */
}

.card-header .nav .nav-item {
    flex: 0 0 auto; /* setiap tab tidak mengecil */
}

.card-header .nav .nav-link {
    white-space: nowrap; /* jangan pecah teks tab */
}

/* Optional: hapus scrollbar default agar lebih rapi */
.card-header .nav::-webkit-scrollbar {
    height: 5px;
}
.card-header .nav::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,0.2);
    border-radius: 5px;
}

.card-body {
  padding: 15px !important;
}
img.preview {
  border-radius: 10px;
  border: 1px solid #ddd;
  /* max-height: 150px; 
  max-width: 100%;  
  object-fit: cover; */
}
.btn-primary {
  background: #b30000;
  border: none;
}
.btn-primary:hover {
  background: #d41717;
}
</style>

<body class="p-4">

<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="hero-tab" data-bs-toggle="tab" data-bs-target="#hero" type="button" role="tab">🏠Beranda</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">ℹ️Tentang</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab">🎯Visi & Misi</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office" type="button" role="tab">🏢Office</button>
      </li>
     <li class="nav-item" role="presentation">
        <button class="nav-link" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab">💬Quotes</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button" role="tab">
        📰Berita
      </button>
    </li>
    <li class="nav-item" role="presentation">
  <button class="nav-link" id="unit-tab" data-bs-toggle="tab" data-bs-target="#unit" type="button" role="tab">
    🏢Unit Bisnis
  </button>
</li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="culture-tab" data-bs-toggle="tab" data-bs-target="#culture" type="button" role="tab" aria-controls="culture" aria-selected="false">
      🌿 Budaya
    </button>
  </li>
  <li class="nav-item" role="presentation">
  <button class="nav-link" id="career-tab" data-bs-toggle="tab" data-bs-target="#career" type="button" role="tab" aria-controls="career" aria-selected="false">
    💼 Career
  </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab">
      ❓ FAQ
    </button>
  </li>
  <li class="nav-item" role="presentation">
  <button class="nav-link" id="footer-tab" data-bs-toggle="tab" data-bs-target="#footer" type="button" role="tab" aria-controls="footer" aria-selected="false">
    📍 Footer
  </button>
</li>


 


      <!-- Tambahkan tab lain sesuai kebutuhan -->
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content" id="myTabContent">
      
      <!-- Hero Tab -->
      <div class="tab-pane fade show active" id="hero" role="tabpanel">
        <form action="<?= base_url('PengaturanLandingPage/update_hero') ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label>Judul</label>
            <input type="text" class="form-control" name="tittle_homepage" value="<?= isset($content_hero['tittle_homepage']) ? $content_hero['tittle_homepage'] : '' ?>" required>
          </div>
          <div class="mb-3">
            <label>Subjudul</label>
            <textarea class="form-control" name="subtitle_homepage" rows="2"><?= isset($content_hero['subtitle_homepage']) ? $content_hero['subtitle_homepage'] : '' ?></textarea>
          </div>
          <div class="mb-3">
            <label>Warna</label>
            <input type="color" class="form-control form-control-color" name="warna"
                  value="<?= isset($content_hero_landing['warna']) ? $content_hero_landing['warna'] : '#000000' ?>" title="Pilih Warna">
        </div>
         <div class="mb-3 text-center">
            <img id="previewHero" 
                src="<?= isset($content_hero['image_homepage']) ? base_url('assets/img-landing/' . $content_hero['image_homepage']) : base_url('assets/img/default.png') ?>" 
                class="preview mb-2" 
                style="width: 50%; height: auto;">
            </div>

          <div class="mb-3">
            <input type="file" class="form-control" name="image_homepage" id="imageHero" accept="image/*">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
          </div>
        </form>
      </div>

      <!-- About Tab -->
      <div class="tab-pane fade" id="about" role="tabpanel">
        <form action="<?= base_url('PengaturanLandingPage/update_about') ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label>Judul - Tentang</label>
            <input type="text" class="form-control" name="about_title" value="<?= isset($content_about['about_title']) ? $content_about['about_title'] : '' ?>" required>
          </div>
          <div class="mb-3">
            <label>Judul - Beranda</label>
            <input type="text" class="form-control" name="about_subtitle" value="<?= isset($content_about['about_subtitle']) ? $content_about['about_subtitle'] : '' ?>">
          </div>
          <div class="mb-3">
            <label for="about_description"><strong>Profil LIDO29 - Beranda</strong></label>
            <textarea id="about_description" name="about_description">
              <?= isset($content_about['about_description']) ? $content_about['about_description'] : '' ?></textarea>
          </div>

          <div class="mb-3">
            <label for="about_description2"><strong>Profil LIDO29 - Tentang</strong></label>
            <textarea id="about_description2" name="about_description2">
              <?= isset($content_about['about_description2']) ? $content_about['about_description2'] : '' ?></textarea>
          </div>
         <div class="mb-3 text-center">
            <!-- Image 1 (Portrait) -->
           <label class="form-label d-block mb-1"><strong>Gambar 1 (Portrait) - Beranda</strong></label>
            <img id="previewAbout1" 
                src="<?= isset($content_about['about_image']) ? base_url('assets/img/' . $content_about['about_image']) : base_url('assets/img/default.png') ?>" 
                class="preview mb-2" 
               style="width: 30%; height: auto;"> 
            <input type="file" class="form-control mb-3" name="about_image" id="imageAbout1" accept="image/*">

            <!-- Image 2 (Landscape) -->
           <label class="form-label d-block mb-1"><strong>Gambar 2 (Landscape - Tentang)</strong></label>
            <img id="previewAbout2" 
                src="<?= isset($content_about['about_image2']) ? base_url('assets/img/' . $content_about['about_image2']) : base_url('assets/img/default.png') ?>" 
                class="preview mb-2" 
                style="width: 50%; height: auto;">
            <input type="file" class="form-control" name="about_image2" id="imageAbout2" accept="image/*">
            </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
          </div>
        </form>
      </div>

<!-- Tab Content -->
<div class="tab-pane fade" id="visi" role="tabpanel">
    <form action="<?= base_url('PengaturanLandingPage/update_visimisi') ?>" method="POST" enctype="multipart/form-data">

        <!-- Intro dari setting_visimisi_intro -->
        <div class="mb-4 text-center">
            <label class="form-label"><strong>Judul Intro - Beranda</strong></label>
            <input type="text" class="form-control mb-2" name="intro_title" 
                   value="<?= isset($intro['intro_title']) ? $intro['intro_title'] : '' ?>">

          <label for="intro_description"><strong>Deskripsi Intro - Beranda</strong></label>
            <textarea id="intro_description" name="intro_description">
              <?= isset($intro['intro_description']) ? $intro['intro_description'] : '' ?></textarea>
            <label class="form-label"><strong>URL Video Intro - Beranda</strong></label>
            <input type="text" class="form-control mb-2" name="intro_video_url" 
                   value="<?= isset($intro['intro_video_url']) ? $intro['intro_video_url'] : '' ?>">
            
        <?php if(!empty($intro['intro_video_url'])): 
    $url = $intro['intro_video_url'];

    $embed_url = '';

    if (strpos($url, 'watch?v=') !== false) {
        $embed_url = str_replace('watch?v=', 'embed/', $url);
        $embed_url = strtok($embed_url, '&');
    } elseif (strpos($url, 'youtu.be') !== false) {
        $parts = parse_url($url);
        $video_id = ltrim($parts['path'], '/');
        $embed_url = 'https://www.youtube.com/embed/' . $video_id;
    }
?>
<div class="mt-2 d-flex justify-content-center">
    <div class="ratio ratio-16x9" style="max-width: 400px;"> <!-- atur max-width sesuai keinginan -->
        <iframe src="<?= $embed_url ?>" title="Video Intro" allowfullscreen></iframe>
    </div>
</div>
<?php endif; ?>

        </div>

        <!-- Visi -->
        <div class="mb-4">
            <label class="form-label"><strong>🌟 Visi - Tentang</strong></label>
            <textarea class="form-control" name="visi" rows="3"><?= isset($landingpage['visi']) ? $landingpage['visi'] : '' ?></textarea>
          </div>

        <!-- Misi -->
         <div class="mb-4">
          <label for="misi"><strong>📌 Misi Tentang</strong></label>
            <textarea id="misi" name="misi">
              <?= isset($landingpage['misi']) ? $landingpage['misi'] : '' ?></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>

    </form>
</div>

<div class="tab-pane fade" id="office" role="tabpanel">
    <h2>Daftar Kantor / Cabang</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#officeModal" onclick="resetForm()">
        Tambah Kantor
    </button>

  <div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Area</th>
        <th>Type</th>
        <th>Branch Name</th>
        <th>Address</th>
        <th>Image</th>
        <th>Maps URL</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($offices as $office): ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $office['area']; ?></td>
          <td><?= $office['type']; ?></td>
          <td><?= $office['branch_name']; ?></td>
          <td><?= $office['address']; ?></td>
          <td>
            <?php if($office['image']): ?>
              <img src="<?= base_url('assets/img/'.$office['image']); ?>" alt="" width="60">
            <?php endif; ?>
          </td>
          <td>
            <a href="<?= $office['maps_url']; ?>" target="_blank">Lihat Map</a>
          </td>
          <td><?= $office['phone_number']; ?></td>
          <td><?= $office['email']; ?></td>
          <td>
            <button type="button" class="btn btn-sm btn-danger"
              onclick='editOffice(<?= json_encode($office); ?>)'>
              Edit
            </button>
            <a href="<?= base_url('PengaturanLandingPage/delete_office/'.$office['id']); ?>" 
               class="btn btn-sm btn-primary" 
               onclick="return confirm('Hapus data ini?')">
               Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Modal Form Tambah/Edit Office -->
<div class="modal fade" id="officeModal" tabindex="-1" aria-labelledby="officeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="officeForm" method="post" enctype="multipart/form-data" action="<?= base_url('PengaturanLandingPage/save_office') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="officeModalLabel">Tambah / Edit Kantor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="office_id">
          <div class="row g-3">
            <div class="col-md-6">
            <label>Area</label>
            <select name="area" id="area" class="form-select" required>
              <option value="" disabled selected hidden>-- Pilih --</option>
               <option value="Office">Office</option>
              <option value="Magelang">Magelang</option>
              <option value="Temanggung">Temanggung</option>
              <option value="Semarang">Semarang</option>
              <option value="Wonosobo">Wonosobo</option>
              <!-- tambah area -->
            </select>
          </div>

          <div class="col-md-6">
            <label>Type</label>
            <select name="type" id="type" class="form-select" required>
              <option value="" disabled selected hidden>-- Pilih --</option>
              <option value="Office">Office</option>
              <option value="Warehouse">Warehouse</option>
              <option value="Store">Store</option>
            </select>
          </div>
            <div class="col-md-6">
              <label>Branch Name</label>
              <input type="text" name="branch_name" id="branch_name" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Phone Number</label>
              <input type="text" name="phone_number" id="phone_number" class="form-control">
            </div>
            <div class="col-md-12">
              <label>Address</label>
              <textarea name="address" id="address" class="form-control" rows="2"></textarea>
            </div>
            <div class="col-md-6">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Maps URL</label>
              <input type="text" name="maps_url" id="maps_url" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Image</label>
              <input type="file" name="image" id="image" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

<div class="tab-pane fade" id="quotes" role="tabpanel">
    <form action="<?= base_url('PengaturanLandingPage/save_quote') ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $quote['id'] ?>">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="<?= $quote['title'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" class="form-control"><?= $quote['content'] ?></textarea>
        </div>
        <div class="mb-3 text-center">
            <img id="previewQuote" src="<?= base_url('assets/img-landing/' . $quote['image']) ?>" class="preview" style="width:30%">
            <input type="file" name="image" class="form-control" id="imageQuote">
        </div>
         <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
          </div>
    </form>
</div>

<!-- Tab Berita -->
<div class="tab-pane fade" id="berita" role="tabpanel">
    <h2>Daftar Berita</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#beritaModal" onclick="resetBeritaForm()">
        Tambah Berita
    </button>
    
 <div class="table-responsive">
  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
      <tr>
        <th width="5%">#</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Subjudul</th>
        <th>Konten</th>
        <th>Tanggal Rilis</th>
        <th>Cover</th>
        <th>Jumlah Media</th>
        <th>Diperbarui Oleh</th>
        <th width="15%">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($berita)): $no=1; foreach ($berita as $b): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($b['category']) ?></td>
          <td>
            <?= htmlspecialchars(mb_strimwidth(strip_tags($b['title']), 0, 20, '...')) ?>
        </td>
          <td>
            <?= htmlspecialchars(mb_strimwidth(strip_tags($b['subtitle']), 0, 20, '...')) ?>
        </td>
          <td>
            <?= htmlspecialchars(mb_strimwidth(strip_tags($b['content']), 0, 20, '...')) ?>
        </td>
          <td><?= date('d M Y', strtotime($b['release_date'])) ?></td>

          <!-- Cover -->
          <td>
            <?php if (!empty($b['cover_image'])): ?>
              <img src="<?= base_url('assets/img-landing/blog/'.$b['cover_image']) ?>" width="70" class="rounded">
            <?php else: ?>
              <span class="text-muted">Tidak ada</span>
            <?php endif; ?>
          </td>

          <!-- Jumlah Media -->
          <td><?= isset($b['media_count']) ? $b['media_count'].' file' : '0 file' ?></td>

          <td><?= htmlspecialchars($b['updated_by']) ?></td>

          <!-- Tombol Aksi -->
          <td>
            <button type="button" class="btn btn-sm btn-danger"
              onclick='editBerita(<?= json_encode($b); ?>)'>
              Edit
            </button>
            <a href="<?= base_url('PengaturanLandingPage/delete_news/'.$b['id']); ?>" 
              class="btn btn-sm btn-primary" 
              onclick="return confirm('Hapus berita ini?')">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; else: ?>
        <tr><td colspan="9" class="text-center text-muted">Belum ada berita</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</div>

<div class="modal fade" id="beritaModal" tabindex="-1" aria-labelledby="beritaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <form id="beritaForm" method="post" enctype="multipart/form-data" action="<?= base_url('PengaturanLandingPage/save_news') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="beritaModalLabel">Tambah / Edit Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="berita_id">

          <div class="row g-3">
            <div class="col-md-6">
              <label>Kategori</label>
              <input type="text" name="category" id="category" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Judul</label>
              <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="col-md-12">
              <label>Subjudul</label>
              <input type="text" name="subtitle" id="subtitle" class="form-control">
            </div>
                      <div class="col-md-12 mb-4">
            <label for="content" class="form-label fw-semibold">Konten</label>
            <textarea name="content" id="content" class="form-control" rows="6" required>
              <?= isset($news['content']) ? html_entity_decode($news['content']) : '' ?>
            </textarea>
          </div>


            <div class="col-md-6">
              <label>Tanggal Rilis</label>
              <input type="date" name="release_date" id="release_date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Gambar Cover</label>
              <input type="file" name="cover_image" id="cover_image" class="form-control" accept="image/*" onchange="previewCover(event)">
              <img id="previewCover" src="" width="120" class="mt-2 rounded">
            </div>

         <!-- MEDIA KONTEN -->
          <div class="col-md-12 mt-3">
            <label>Gambar / Video Konten</label>

            <!-- Hidden input untuk menyimpan media yang dihapus -->
            <input type="hidden" name="removed_media" id="removed_media" value="">

            <div id="mediaWrapper">
              <div class="d-flex gap-2 mb-2">
                <input type="file" name="media[]" id="media" class="form-control media-input" accept="image/*,video/*" onchange="previewMedia(event)">
                <button type="button" class="btn btn-sm btn-success" onclick="addMediaInput()">+</button>
              </div>
            </div>

            <div id="previewContainer" class="mt-2 d-flex flex-wrap gap-2"></div>
            <small class="text-muted">Klik + untuk menambahkan input file baru</small>
          </div>


            <div class="form-group mt-3">
              <label>Diperbarui Oleh</label>
              <input type="text" name="updated_by" id="updated_by" class="form-control"
                     value="<?=isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama']) : ''?>" readonly>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Tab Unit Bisnis -->
<div class="tab-pane fade" id="unit" role="tabpanel">
  <h2>Daftar Unit Bisnis</h2>

  <!-- Tombol Tambah -->
  <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#unitModal" onclick="resetUnitForm()">
    Tambah Unit Bisnis
  </button>

  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Deskripsi Singkat</th>
          <th>Deskripsi Lengkap</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($units)): $no=1; foreach($units as $unit): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($unit['title']) ?></td>
          <td><?= htmlspecialchars(mb_strimwidth($unit['description'],0,20,'...')) ?></td>
         <td><?= htmlspecialchars(mb_strimwidth(strip_tags($unit['description1']), 0, 20, '...')) ?></td>
            <td><?php if($unit['image']): ?>
              <img src="<?= base_url('assets/img/'.$unit['image']) ?>" width="70" class="rounded">
            <?php else: ?>
              <span class="text-muted">Tidak ada</span>
            <?php endif; ?>
          </td>
          <td>
            <button class="btn btn-sm btn-danger" onclick='editUnit(<?= json_encode($unit) ?>)'>Edit</button>
            <a href="<?= base_url('PengaturanLandingPage/delete_unit/'.$unit['id']) ?>" class="btn btn-sm btn-primary" onclick="return confirm('Hapus unit ini?')">Delete</a>
          </td>
        </tr>
        <?php endforeach; else: ?>
          <tr><td colspan="6" class="text-center text-muted">Belum ada unit bisnis</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Modal Form Tambah/Edit Unit Bisnis -->
  <div class="modal fade" id="unitModal" tabindex="-1" aria-labelledby="unitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form id="unitForm" method="post" enctype="multipart/form-data" action="<?= base_url('PengaturanLandingPage/save_unit') ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="unitModalLabel">Tambah / Edit Unit Bisnis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="unit_id">
            <div class="mb-3">
              <label>Judul</label>
              <input type="text" name="title" id="unit_title" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Deskripsi Singkat</label>
              <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label>Deskripsi Lengkap</label>
              <textarea name="description1" id="description1" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3 text-center">
              <label>Gambar</label>
              <input type="file" name="image" id="unit_image" class="form-control" accept="image/*">
              <img id="previewUnit" src="" class="preview mt-2" style="width: 50%; height: auto;">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Form Update Gambar Unit Bisnis -->
  <div class="mt-4">
    <h5>Update Gambar Unit Bisnis</h5>
    <form action="<?= base_url('PengaturanLandingPage/update_image_unit') ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3 text-center">
        <input type="file" name="image_unit" id="image_unit_input" class="form-control mb-2" accept="image/*" onchange="previewImageUnit(event)">
        <?php if(!empty($landingpage['image_unit'])): ?>
          <img id="previewImageUnit" src="<?= base_url('assets/img/' . $landingpage['image_unit']) ?>" 
               class="img-fluid rounded" style="max-width: 500px; width: 100%; height: auto;">
        <?php else: ?>
          <img id="previewImageUnit" src="" class="img-fluid rounded" style="max-width: 200px; width: 50%; height: auto;">
        <?php endif; ?>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">💾 Update Gambar</button>
      </div>
    </form>
  </div>

</div>


<!-- ===================== TAB SECTION CULTURE ===================== -->
<div class="tab-pane fade" id="culture" role="tabpanel">
  <div class="container mt-4">

    <!-- ===================== FORM EDIT SECTION CULTURE ===================== -->
    <div class="card shadow-sm mb-5">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Budaya Lido29</h5>
      </div>

      <div class="card-body">
        <form action="<?= base_url('PengaturanLandingPage/update_main') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $culture['id'] ?>">

          <div class="row align-items-center">
            <!-- Kolom Gambar -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
              <label class="form-label fw-bold mb-2">Gambar Budaya</label>
              <div class="mb-3">
                <img src="<?= base_url('assets/img/' . $culture['image']) ?>" 
                     alt="<?= $culture['title'] ?>" 
                     class="img-fluid rounded shadow-sm mb-3" 
                     style="width: 80%; height: auto;">
                <input type="file" name="image" class="form-control mt-2" accept="image/*">
                <small class="text-muted d-block mt-1">Kosongkan jika tidak ingin mengganti gambar</small>
              </div>
            </div>

            <!-- Kolom Teks -->
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label fw-bold">Judul Budaya</label>
                <input type="text" name="title" class="form-control" 
                       value="<?= htmlspecialchars($culture['title']) ?>" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi / Tentang Budaya</label>
                <textarea name="about_culture" class="form-control" rows="6" required><?= htmlspecialchars($culture['about_culture']) ?></textarea>
              </div>

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">💾 Simpan</button>
              </div>
            </div> <!-- tutup col-lg-6 -->
          </div> <!-- tutup row -->
        </form>
      </div> <!-- tutup card-body -->
    </div> <!-- tutup card -->

    <!-- ===================== TABEL DETAIL BUDAYA ===================== -->
    <div class="card shadow-sm">
      <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detail Culture</h5>
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#cultureModal" onclick="resetForm()">
          Tambah Budaya
        </button>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle mb-0">
            <thead class="table-dark text-center">
              <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 15%;">Judul</th>
                <th style="width: 15%;">Subjudul</th>
                <th>Deskripsi</th>
                <th style="width: 15%;">Gambar</th>
                <th style="width: 15%;">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($cultures)): $no=1; foreach ($cultures as $culture): ?>
              <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= htmlspecialchars($culture['title']) ?></td>
                <td><?= htmlspecialchars($culture['subtitle']) ?></td>
                <td><?= htmlspecialchars(mb_strimwidth(strip_tags($culture['description']), 0, 60, '...')) ?></td>
                <td class="text-center">
                  <?php if(!empty($culture['image'])): ?>
                    <img src="<?= base_url('assets/img/'.$culture['image']) ?>" width="70" class="rounded">
                  <?php else: ?>
                    <span class="text-muted">Tidak ada</span>
                  <?php endif; ?>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-danger" onclick='editCulture(<?= json_encode($culture) ?>)'>
                    <i class="bi bi-pencil-square"></i> Edit
                  </button>
                  <a href="<?= base_url('PengaturanLandingPage/delete_culture/'.$culture['id']) ?>" 
                     class="btn btn-sm btn-primary" 
                     onclick="return confirm('Hapus data budaya ini?')">
                    <i class="bi bi-trash"></i> Delete
                  </a>
                </td>
              </tr>
              <?php endforeach; else: ?>
              <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data budaya</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div> <!-- tutup table-responsive -->
      </div> <!-- tutup card-body -->
    </div> <!-- tutup card -->

  </div> <!-- tutup container -->
</div> <!-- tutup tab-pane -->

<!-- ===================== MODAL TAMBAH/EDIT DETAIL CULTURE ===================== -->
<div class="modal fade" id="cultureModal" tabindex="-1" aria-labelledby="cultureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="cultureForm" method="post" enctype="multipart/form-data" action="<?= base_url('PengaturanLandingPage/save_culture_detail') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cultureModalLabel">Tambah / Edit Detail Budaya</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="id" id="culture_id">

          <div class="mb-3">
            <label class="form-label fw-bold">Judul</label>
            <input type="text" name="title" id="culture_title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Subjudul</label>
            <input type="text" name="subtitle" id="culture_subtitle" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Deskripsi</label>
            <textarea name="description" id="culture_description" class="form-control" rows="5"></textarea>
          </div>

          <div class="mb-3 text-center">
            <label class="form-label fw-bold">Gambar</label>
            <input type="file" name="image" id="culture_image" class="form-control" accept="image/*">
            <img id="previewCulture" src="" class="img-fluid rounded shadow-sm mt-2" style="width:50%; height:auto; display:none;">
          </div>
        </div> 

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>
      </div> 
    </form>
  </div> 
</div> 

<div class="tab-pane fade" id="career" role="tabpanel">
  <form action="<?= base_url('PengaturanLandingPage/update_career') ?>" method="POST" enctype="multipart/form-data">
    
    <!-- Banner Title -->
    <div class="mb-3">
      <label>Judul Banner</label>
      <input type="text" class="form-control" name="banner_title" value="<?= isset($content_career['banner_title']) ? $content_career['banner_title'] : '' ?>" required>
    </div>

    <div class="mb-3">
      <label>Judul Halaman</label>
      <input type="text" class="form-control" name="title_page" value="<?= isset($content_career['title_page']) ? $content_career['title_page'] : '' ?>" required>
    </div>

  
    <div class="mb-3">
      <label>Deskripsi Halaman</label>
      <textarea class="form-control" name="description_page" rows="3"><?= isset($content_career['description_page']) ? $content_career['description_page'] : '' ?></textarea>
    </div>


    <div class="mb-3 text-center">
      <img id="previewCareer" 
           src="<?= isset($content_career['banner_image']) ? base_url('assets/img-landing/' . $content_career['banner_image']) : base_url('assets/img/default.png') ?>" 
           class="preview mb-2" 
           style="width: 50%; height: auto;">
    </div>

    <div class="mb-3">
      <input type="file" class="form-control" name="banner_image" id="imageCareer" accept="image/*">
    </div>


    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </div>
  </form>
</div>

<!-- TAB FAQ -->
<div class="tab-pane fade" id="faq" role="tabpanel">
    <h2>Daftar FAQ</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#faqModal" onclick="resetFaqForm()">
        Tambah FAQ
    </button>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($faq)): $no=1; foreach($faq as $f): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($f['question']) ?></td>
                    <td><?= htmlspecialchars(mb_strimwidth(strip_tags($f['answer']), 0, 40, '...')) ?></td>
                    <td>
                        <button class="btn btn-sm btn-warning" 
                                onclick='editFaq(<?= json_encode($f); ?>)'
                                data-bs-toggle="modal" data-bs-target="#faqModal">
                            Edit
                        </button>
                        <a href="<?= base_url('PengaturanLandingPage/delete_faq/'.$f['id']); ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Hapus FAQ ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="4" class="text-center">Belum ada data FAQ</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal FAQ -->
<div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="faqForm" method="post" action="<?= base_url('PengaturanLandingPage/save_faq') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="faqModalLabel">Tambah / Edit FAQ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="id" id="faq_id">

          <div class="mb-3">
            <label class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" name="question" id="question" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jawaban</label>
            <textarea class="form-control" name="answer" id="answer" rows="4" required></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- ===================== TAB FOOTER ===================== -->
<div class="tab-pane fade" id="footer" role="tabpanel">
  <div class="container mt-4" >

    <!-- ===================== FORM EDIT ALAMAT FOOTER ===================== -->
    <div class="card shadow-sm mb-5" style="z-index:1;">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Alamat Footer</h5>
      </div>
      <div class="card-body">
        <form action="<?= base_url('PengaturanLandingPage/save_footer_setting') ?>" method="post">
          <div class="mb-3">
            <label for="address_footer" class="form-label fw-bold">Alamat</label>
            <textarea class="form-control" name="address_footer" id="address_footer" rows="3"><?= isset($footer['address_footer']) ? htmlspecialchars($footer['address_footer']) : '' ?></textarea>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan Alamat</button>
          </div>
        </form>
      </div>
    </div>

    <!-- ===================== PENGATURAN LOKASI KANTOR ===================== -->
<div class="mb-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">Lokasi Kantor (Google Maps)</h5>
    </div>
    <div class="card-body">
      <form action="<?= base_url('PengaturanLandingPage/save_map_link') ?>" method="post">
  <div class="mb-3">
    <label for="link_map" class="form-label fw-bold">🌍 Link Google Maps (Embed)</label>
    <input type="url" name="link_map" id="link_map"
           class="form-control"
           placeholder="Masukkan link embed Google Maps..."
           value="<?= isset($map['link_map']) ? $map['link_map'] : '' ?>"
           required>
    <small class="text-muted">
      Masukkan <strong>embed link</strong> dari Google Maps, contoh:<br>
      <code>https://www.google.com/maps/embed?pb=!1m18!...dst</code>
    </small>
  </div>

  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
      💾 Simpan Lokasi
    </button>
  </div>
</form>
    </div>
  </div>
</div>


    <!-- ===================== TABEL SOSIAL MEDIA ===================== -->
    <div class="card shadow-sm mb-4">
      <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Sosial Media</h5>
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#socialModal" onclick="resetSocialForm()">Tambah Sosial Media</button>
      </div>
      <div class="card-body">
        <?php if(!empty($socials)): ?>
          <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
              <thead class="table-dark text-center">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Icon</th>
                  <th>Link</th>
                  <th>Aksi</th>
                </tr>
              </thead>
             <tbody>
  <?php foreach($socials as $i => $s): ?>
  <tr>
    <td class="text-center"><?= $i+1 ?></td>
    <td><?= htmlspecialchars($s['name_social']) ?></td>
    <td class="text-center">
      <i class="<?= htmlspecialchars($s['icon_social']) ?>"></i>
    </td>
    <td>
      <a href="<?= htmlspecialchars($s['link_social']) ?>" target="_blank">
        <?= htmlspecialchars($s['link_social']) ?>
      </a>
    </td>
    <td class="text-center">
      <button class="btn btn-warning btn-sm" onclick='editSocial(<?= json_encode($s) ?>)'>
        <i class="bi bi-pencil-square"></i> Edit
      </button>
      <a href="<?= base_url('PengaturanLandingPage/delete_social/'.$s['id_sc']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
        <i class="bi bi-trash"></i> Hapus
      </a>
    </td>
  </tr>
  <?php endforeach; ?>
</tbody>

            </table>
          </div>
        <?php else: ?>
          <p class="text-muted text-center">Belum ada data sosial media.</p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>

<!-- ===================== MODAL TAMBAH / EDIT SOSIAL MEDIA ===================== -->
<div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="socialModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="socialForm" method="post" action="<?= base_url('PengaturanLandingPage/save_social') ?>">
      <input type="hidden" name="id_sc" id="social_id">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="socialModalLabel">Tambah / Edit Sosial Media</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Nama Sosial Media</label>
            <input type="text" name="name_social" id="social_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Icon</label>
            <input type="text" name="icon_social" id="social_icon" class="form-control" placeholder="misal: bi bi-facebook" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Link</label>
            <input type="url" name="link_social" id="social_link" class="form-control" placeholder="https://..." required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</body>






<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
  CKEDITOR.replace('about_description', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });

  CKEDITOR.replace('about_description2', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR,
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });
  CKEDITOR.replace('intro_description', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });
  CKEDITOR.replace('content', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });

   CKEDITOR.replace('misi', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });
  CKEDITOR.replace('description', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });
  CKEDITOR.replace('description1', {
    height: 100,
    enterMode: CKEDITOR.ENTER_BR, 
    shiftEnterMode: CKEDITOR.ENTER_P,
    removeButtons: 'PasteFromWord'
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const hash = window.location.hash;
    if(hash) {
        const tabEl = document.querySelector(`button[data-bs-target="${hash}"]`);
        if(tabEl) {
            const tab = new bootstrap.Tab(tabEl);
            tab.show();
        }
    }
});
 
  document.getElementById('imageHero').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewHero').src = URL.createObjectURL(file);
  });

  // Preview About
  document.getElementById('imageAbout1').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewAbout1').src = URL.createObjectURL(file);
  });
  document.getElementById('imageAbout2').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewAbout2').src = URL.createObjectURL(file);
  });
   document.getElementById('imageOffice').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewOffice').src = URL.createObjectURL(file);
  });
  document.getElementById('imageQuote').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewQuote').src = URL.createObjectURL(file);
});

  // Preview Image
  document.getElementById('unit_image').addEventListener('change', function(e){
    const file = e.target.files[0];
    if(file) document.getElementById('previewUnit').src = URL.createObjectURL(file);
  });

   document.getElementById('imageCareer').addEventListener('change', function(event){
    const [file] = event.target.files;
    if(file){
      document.getElementById('previewCareer').src = URL.createObjectURL(file);
    }
  });
  
  // Reset form modal
  function resetUnitForm(){
    document.getElementById('unitForm').reset();
    document.getElementById('unit_id').value = '';
    document.getElementById('previewUnit').src = '';
    document.getElementById('unitModalLabel').innerText = 'Tambah Unit Bisnis';
  }

  // Edit unit
  function editUnit(data){

    document.getElementById('unit_id').value = data.id || '';
    document.getElementById('unit_title').value = data.title || '';
     if (CKEDITOR.instances['description']) {
    CKEDITOR.instances['description'].setData(data.description || '');
  }
  if (CKEDITOR.instances['description1']) {
    CKEDITOR.instances['description1'].setData(data.description1 || '');
  }

    if(data.image) document.getElementById('previewUnit').src = "<?= base_url('assets/img-landing/unit/') ?>" + data.image;
    else document.getElementById('previewUnit').src = '';
    document.getElementById('unitModalLabel').innerText = 'Edit Unit Bisnis';
    new bootstrap.Modal(document.getElementById('unitModal')).show();
  }

function previewCover(event) {
  const cover = document.getElementById('previewCover');
  cover.src = URL.createObjectURL(event.target.files[0]);
}

// Preview untuk media konten
function previewMedia(event) {
  const container = document.getElementById('previewContainer');
  container.innerHTML = '';

  const files = event.target.files;
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const fileURL = URL.createObjectURL(file);

    const wrapper = document.createElement('div');
    wrapper.style.position = 'relative';
    wrapper.style.width = '120px';
    wrapper.style.height = '120px';
    wrapper.style.overflow = 'hidden';
    wrapper.style.borderRadius = '10px';
    wrapper.style.border = '1px solid #ddd';

    if (file.type.startsWith('image/')) {
      const img = document.createElement('img');
      img.src = fileURL;
      img.style.width = '100%';
      img.style.height = '100%';
      img.style.objectFit = 'cover';
      wrapper.appendChild(img);
    } else if (file.type.startsWith('video/')) {
      const video = document.createElement('video');
      video.src = fileURL;
      video.style.width = '100%';
      video.style.height = '100%';
      video.controls = true;
      wrapper.appendChild(video);
    }

    container.appendChild(wrapper);
  }
}

function resetBeritaForm() {
  document.getElementById('beritaForm').reset();
  document.getElementById('berita_id').value = '';
  document.getElementById('previewCover').src = '';
  document.getElementById('previewContainer').innerHTML = '';
  document.getElementById('beritaModalLabel').innerText = 'Tambah Berita';
}

// Tombol Edit
function editBerita(data) {
  document.getElementById('berita_id').value = data.id || '';
  document.getElementById('category').value = data.category || '';
  document.getElementById('title').value = data.title || '';
  document.getElementById('subtitle').value = data.subtitle || '';
  if (CKEDITOR.instances['content']) {
    CKEDITOR.instances['content'].setData(data.content || '');
}

  document.getElementById('release_date').value = data.release_date || '';

  // Cover lama
  if (data.cover_image) {
    document.getElementById('previewCover').src = "<?= base_url('assets/img-landing/blog/') ?>" + data.cover_image;
  } else {
    document.getElementById('previewCover').src = '';
  }

  // Media lama
  const container = document.getElementById('previewContainer');
  container.innerHTML = '';

  let removedMedia = [];
  if(data.media) {
    try {
      const mediaArray = JSON.parse(data.media);
      mediaArray.forEach(file => {
        const wrapper = document.createElement('div');
        wrapper.style.width = '120px';
        wrapper.style.height = '120px';
        wrapper.style.border = '1px solid #ddd';
        wrapper.style.borderRadius = '10px';
        wrapper.style.overflow = 'hidden';
        wrapper.style.marginRight = '10px';
         wrapper.style.position = 'relative';

        const btnDelete = document.createElement('button');
      btnDelete.type = 'button';
      btnDelete.innerHTML = '&times;';
      btnDelete.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
      btnDelete.onclick = function() {
        removedMedia.push(file);
        document.getElementById('removed_media').value = JSON.stringify(removedMedia);
        wrapper.remove();
      };
      wrapper.appendChild(btnDelete);

        if (file.match(/\.(mp4|webm|ogg)$/i)) {
          const video = document.createElement('video');
          video.src = "<?= base_url('assets/img-landing/blog/') ?>" + file;
          video.controls = true;
          video.style.width = '100%';
          video.style.height = '100%';
          wrapper.appendChild(video);
        } else {
          const img = document.createElement('img');
          img.src = "<?= base_url('assets/img-landing/blog/') ?>" + file;
          img.style.width = '100%';
          img.style.height = '100%';
          img.style.objectFit = 'cover';
          wrapper.appendChild(img);
        }

        container.appendChild(wrapper);
      });
    } catch(e) { console.error(e); }
  }

  // Reset input file
  document.getElementById('cover_image').value = '';
  document.getElementById('media').value = '';

  document.getElementById('beritaModalLabel').innerText = 'Edit Berita';
  new bootstrap.Modal(document.getElementById('beritaModal')).show();
}

// Preview cover
function previewCover(event){
  document.getElementById('previewCover').src = URL.createObjectURL(event.target.files[0]);
}



// Preview media baru
function previewMedia(event){
  const container = document.getElementById('previewContainer');
  container.innerHTML = '';
  const files = event.target.files;
  for(let i=0; i<files.length; i++){
    const file = files[i];
    const wrapper = document.createElement('div');
    wrapper.style.width='120px'; wrapper.style.height='120px'; wrapper.style.border='1px solid #ddd';
    wrapper.style.borderRadius='10px'; wrapper.style.overflow='hidden'; wrapper.style.marginRight='10px';

    if(file.type.startsWith('image/')){
      const img = document.createElement('img');
      img.src = URL.createObjectURL(file);
      img.style.width='100%'; img.style.height='100%'; img.style.objectFit='cover';
      wrapper.appendChild(img);
    } else if(file.type.startsWith('video/')){
      const video = document.createElement('video');
      video.src = URL.createObjectURL(file);
      video.controls = true;
      video.style.width='100%'; video.style.height='100%';
      wrapper.appendChild(video);
    }

    container.appendChild(wrapper);
  }
}

function previewImageUnit(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('previewImageUnit');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

// Tambah input media baru
function addMediaInput(){
  const wrapper = document.createElement('div');
  wrapper.classList.add('d-flex','gap-2','mb-2');
  wrapper.innerHTML = `<input type="file" name="media[]" class="form-control media-input" accept="image/*,video/*" onchange="previewMedia(event)">
                       <button type="button" class="btn btn-sm btn-danger" onclick="this.parentElement.remove()">-</button>`;
  document.getElementById('mediaWrapper').appendChild(wrapper);
}


  function resetForm() {
    document.getElementById('officeForm').reset();
    document.getElementById('office_id').value = '';
    document.getElementById('officeModalLabel').innerText = 'Tambah Kantor';
}

function editOffice(data) {
    document.getElementById('office_id').value = data.id;
    document.getElementById('area').value = data.area;
    document.getElementById('type').value = data.type;
    document.getElementById('branch_name').value = data.branch_name;
    document.getElementById('address').value = data.address;
    document.getElementById('phone_number').value = data.phone_number;
    document.getElementById('email').value = data.email;
    document.getElementById('maps_url').value = data.maps_url;
    document.getElementById('officeModalLabel').innerText = 'Edit Kantor';
    var modal = new bootstrap.Modal(document.getElementById('officeModal'));
    modal.show();
}


  function resetCultureForm() {
    document.getElementById('cultureForm').reset();
    document.getElementById('culture_id').value = '';
    document.getElementById('previewCulture').style.display = 'none';
  }

  // Isi form modal saat edit
  function editCulture(data) {
    document.getElementById('culture_id').value = data.id;
    document.getElementById('culture_title').value = data.title;
    document.getElementById('culture_subtitle').value = data.subtitle;
    document.getElementById('culture_description').value = data.description;

    if (data.image) {
      document.getElementById('previewCulture').src = "<?= base_url('assets/img/') ?>" + data.image;
      document.getElementById('previewCulture').style.display = 'block';
    } else {
      document.getElementById('previewCulture').style.display = 'none';
    }

    new bootstrap.Modal(document.getElementById('cultureModal')).show();
  }

  // Fungsi untuk membuka modal Edit Sosial Media
  function editSocial(social) {
    if (!social) return;

    // Isi nilai input di modal
    document.getElementById('social_id').value   = social.id_sc || '';
    document.getElementById('social_name').value = social.name_social || '';
    document.getElementById('social_icon').value = social.icon_social || '';
    document.getElementById('social_link').value = social.link_social || '';

    // Ganti judul modal
    document.getElementById('socialModalLabel').innerText = 'Edit Sosial Media';

    // Ubah action form ke controller update
    document.getElementById('socialForm').action = '<?= base_url("PengaturanLandingPage/save_social") ?>';

    // Tampilkan modal
    const modal = new bootstrap.Modal(document.getElementById('socialModal'));
    modal.show();
  }

  // Fungsi untuk tambah sosial media baru (pakai modal yang sama)
  function addSocial() {
    document.getElementById('socialForm').reset();
    document.getElementById('social_id').value = '';
    document.getElementById('socialModalLabel').innerText = 'Tambah Sosial Media';
    document.getElementById('socialForm').action = '<?= base_url("PengaturanLandingPage/save_social") ?>';

    const modal = new bootstrap.Modal(document.getElementById('socialModal'));
    modal.show();
  }

    function resetFaqForm() {
        document.getElementById('faqForm').reset();
        document.getElementById('faq_id').value = '';
    }

    function editFaq(data) {
        document.getElementById('faq_id').value = data.id;
        document.getElementById('question').value = data.question;
        document.getElementById('answer').value = data.answer;
    }

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
