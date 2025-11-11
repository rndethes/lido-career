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
        <button class="nav-link active" id="hero-tab" data-bs-toggle="tab" data-bs-target="#hero" type="button" role="tab">🏠 Beranda</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">ℹ️ Tentang</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab">🎯 Visi & Misi</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office" type="button" role="tab">🏢 Office</button>
      </li>
     <li class="nav-item" role="presentation">
        <button class="nav-link" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab">💬 Quotes</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button" role="tab">
        📰 Berita
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
            <label>Judul</label>
            <input type="text" class="form-control" name="about_title" value="<?= isset($content_about['about_title']) ? $content_about['about_title'] : '' ?>" required>
          </div>
          <div class="mb-3">
            <label>Subjudul</label>
            <input type="text" class="form-control" name="about_subtitle" value="<?= isset($content_about['about_subtitle']) ? $content_about['about_subtitle'] : '' ?>">
          </div>
          <div class="mb-3">
            <label>Deskripsi 1</label>
            <textarea class="form-control" name="about_description" rows="2"><?= isset($content_about['about_description']) ? $content_about['about_description'] : '' ?></textarea>
          </div>
          <div class="mb-3">
            <label>Deskripsi 2</label>
            <textarea class="form-control" name="about_description2" rows="2"><?= isset($content_about['about_description2']) ? $content_about['about_description2'] : '' ?></textarea>
          </div>
         <div class="mb-3 text-center">
            <!-- Image 1 (Portrait) -->
           <label class="form-label d-block mb-1"><strong>Gambar 1 (Portrait)</strong></label>
            <img id="previewAbout1" 
                src="<?= isset($content_about['about_image']) ? base_url('assets/img/' . $content_about['about_image']) : base_url('assets/img/default.png') ?>" 
                class="preview mb-2" 
               style="width: 30%; height: auto;"> 
            <input type="file" class="form-control mb-3" name="about_image" id="imageAbout1" accept="image/*">

            <!-- Image 2 (Landscape) -->
           <label class="form-label d-block mb-1"><strong>Gambar 2 (Landscape)</strong></label>
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
            <label class="form-label"><strong>Judul Intro</strong></label>
            <input type="text" class="form-control mb-2" name="intro_title" 
                   value="<?= isset($intro['intro_title']) ? $intro['intro_title'] : '' ?>">

            <label class="form-label"><strong>Deskripsi Intro</strong></label>
            <textarea class="form-control mb-2" name="intro_description" rows="3"><?= isset($intro['intro_description']) ? $intro['intro_description'] : '' ?></textarea>

            <label class="form-label"><strong>URL Video Intro</strong></label>
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
            <label class="form-label"><strong>🌟 Visi</strong></label>
            <textarea class="form-control" name="visi" rows="3"><?= isset($landingpage['visi']) ? $landingpage['visi'] : '' ?></textarea>
        </div>

        <!-- Misi -->
        <div class="mb-4">
            <label class="form-label"><strong>📌 Misi</strong></label>
            <textarea class="form-control" name="misi" rows="3"><?= isset($landingpage['misi']) ? $landingpage['misi'] : '' ?></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
        </div>

    </form>
</div>

<div class="tab-pane fade" id="office" role="tabpanel">
    <h2>Daftar Kantor / Cabang</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#officeModal" onclick="resetForm()">
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
              <input type="text" name="area" id="area" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Type</label>
              <input type="text" name="type" id="type" class="form-control" required>
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
    <h2>Manajemen Berita</h2>

    <!-- Tombol Tambah -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#beritaModal" onclick="resetBeritaForm()">
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
            <div class="col-md-12">
              <label>Konten</label>
              <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
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
                     value="<?= isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama']) : '' ?>" readonly>
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
  document.getElementById('content').value = data.content || '';
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
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
