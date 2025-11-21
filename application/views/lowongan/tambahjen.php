<style>
.city-chip {
    display: inline-flex;
    align-items: center;
    background: #e0faf6;
    color: #0aa29a;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}
.city-chip .remove-chip {
    margin-left: 8px;
    cursor: pointer;
    font-size: 16px;
    color: #0aa29a;
}
</style>

<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Tambah Lowongan</h2>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <form action="<?= base_url('conjen/tambahjen') ?>" method="post">
                <div class="form-group">

                        <label for="idp" class="form-control-label">ID Pekerjaan</label>
                        <input class="form-control" type="number" id="idp" name="idpeker" value="<?php echo $next_id_job; ?>" readonly>
            
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <label>Pilih Divisi</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="divisi">
                     
                                    <option value="">Pilih</option>
                                    <?php foreach($tablejen as $row): ?>
                                        <option option value="<?= $row['id_division'] ?>"><?= $row['name_division'] ?></option>
                                    <?php endforeach ?>
                                    </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="namajon" class="form-control-label">Nama Pekerjaan</label>
                      <input class="form-control" type="text" style="text-transform: uppercase;" id="namajon"  name="nama">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="selectEducation" class="form-label">Jenjang Pendidikan</label>
                        <select class="form-select" id="selectEducation" name="education_job" required>
                            <option value="">Pilih Jenjang</option>
                            <?php
                                $pendidikan = [
                                    'SD / MI',
                                    'SMP / MTS',
                                    'SMA / SMK / MA',
                                    'D3',
                                    'D4',
                                    'S1',
                                    'S2',
                                    'S3'
                                ];

                                foreach ($pendidikan as $edu):
                            ?>
                                <option value="<?= $edu ?>"><?= $edu ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>   
                <div class="mb-3">
    <label>Kota Penempatan</label>

    <!-- Wrapper chip -->
    <div id="city-container" class="d-flex flex-wrap gap-2 mb-2"></div>

    <!-- Input kota dan button -->
    <div class="d-flex gap-2 mb-2">
        <div class="input-group flex-grow-1">
           <select class="js-example-basic-single form-select" id="city-select" name="city">
                        <option value="">Pilih kota...</option>
                <?php foreach ($kota_list as $k): ?>
                    <option value="<?= $k['name'] ?>"><?= $k['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="button" id="add-city-btn" class="btn btn-primary">Tambah</button>
    </div>

    <!-- Keterangan -->
    <small class="text-muted">Jika tidak memilih kota, maka akan otomatis WFH</small>

    <!-- Hidden input untuk simpan data -->
    <input type="hidden" name="city_job" id="city_job" value='<?= json_encode($savedCities) ?>'>
</div>             
                  <div class="col-lg-6">
                    <label>Tentukan Grade</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="kasta">
                            <option value="">Pilih</option>

                                    <?php for($i=1; $i<=10; $i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                    
                    </select>
                    </div>
                  </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="klasifikasi">Klasifikasi</label>
                                <textarea id="editor-klasifikasi" class="form-control" aria-label="With textarea" id="spec" name="kualifikasi"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Pekerjaan</label>
                                <textarea id="editor-deskripsi" class="form-control" aria-label="With textarea" id="des" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>Publish Sekarang</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="rya" name="status" value="1">
                                    <label class="form-check-label" for="rya">
                                        Sekarang
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="rno" value="2">
                                    <label class="form-check-label" for="rno">
                                        Nanti Saja
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-row-reverse mt-2">
                                <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                                <a href="<?= base_url('conjen/showjen') ?>"> <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
                             </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // eror
    window.addEventListener('DOMContentLoaded', function() {
      // Init CK
      CKEDITOR.replace('editor-deskripsi');
      CKEDITOR.replace('editor-klasifikasi');
      
      <?php if($this->session->flashdata('error')): ?>
      var isi = <?= json_encode($this->session->flashdata('error')) ?> ;
      Swal.fire({
        title: 'Gagal',
        text: isi,
        icon: 'error',
      });
      <?php endif ?>
    });

    let selectedCities = <?= json_encode($savedCities) ?>;

const select = document.getElementById("city-select");
const addBtn = document.getElementById("add-city-btn");
const container = document.getElementById("city-container");
const hiddenInput = document.getElementById("city_job");

function renderChips(){
    container.innerHTML = "";
    selectedCities.forEach((city, index) => {
        const chip = document.createElement("div");
        chip.className = "city-chip border rounded px-2 py-1 me-1 mb-1 d-flex align-items-center";
        chip.innerHTML = `${city} <span class="remove-chip ms-2" data-index="${index}" style="cursor:pointer;">×</span>`;
        container.appendChild(chip);
    });
    hiddenInput.value = JSON.stringify(selectedCities);
}

addBtn.addEventListener("click", function(){
    const city = select.value.trim();
    if(city !== "" && !selectedCities.includes(city)){
        selectedCities.push(city);
        renderChips();
        select.value = "";
    }
});

// Hapus chip
container.addEventListener("click", function(e){
    if(e.target.classList.contains("remove-chip")){
        const index = e.target.dataset.index;
        selectedCities.splice(index, 1);
        renderChips();
    }
});

// Render awal jika ada savedCities
renderChips();

</script>