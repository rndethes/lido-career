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
  <button class="nav-link" id="footer-tab" data-bs-toggle="tab" data-bs-target="#footer" type="button" role="tab" aria-controls="footer" aria-selected="false">
    📍 Footer
  </button>
</li>
 </ul>
  </div>
  <div class="card-body">
    <div class="tab-content" id="myTabContent">

</div>
</div>








<!-- ===================== TAB CULTURE ===================== -->
<div class="tab-pane fade" id="culture" role="tabpanel">
  <div class="container mt-4">
    

    <!-- ===================== FORM EDIT SECTION CULTURE ===================== -->
    <div class="card shadow-sm mb-5">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Edit Section Culture</h5>
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
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

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
        </div>
      </div>
    </div>


<!-- ===================== MODAL BUDAYA ===================== -->
<div class="modal fade" id="cultureModal" ...> ... </div>

<!-- ===================== TAB FOOTER (SEJAJAR DENGAN CULTURE) ===================== -->
<div class="tab-pane fade" id="footer" role="tabpanel">
  ... isi footer ...
</div>
