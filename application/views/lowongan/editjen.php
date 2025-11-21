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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

          <div class="row">
          <div class="col-lg-12 mb-lg-0 mb-4"></div>
          <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h2>Edit Lowongan</h2>
                <div class="row">
                  <div class="col-lg-6">

                  <form method="post" action="<?= site_url('conjen/edit/' . $show_data_editjen['id']) ?>">

                  <div class="form-group">

                        <label for="idp" class="form-control-label">ID Pekerjaan</label>
                        <input class="form-control" type="number" id="idp" name="idpeker" value="<?= $show_data_editjen['id_job']; ?>" readonly>
            
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <label>Pilih Divisi</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01" name="divisi">
                        
                      <?php foreach($tablejen as $row): ?>
                            <?php if ($row['id_division'] == $show_data_editjen['id_division']): ?>
                              <option value="<?= $row['id_division'] ?>" selected><?= $row['name_division'] ?></option>
                            <?php else: ?>
                                <option option value="<?= $row['id_division'] ?>"><?= $row['name_division'] ?></option>
                            <?php endif ?>
                      <?php endforeach ?>
                      
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="namajon" class="form-control-label">Nama Pekerjaan</label>
                      <input class="form-control" type="text" style="text-transform: uppercase;" id="namajon"  name="nama" value="<?= $show_data_editjen['name_job']; ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label>Jenjang Pendidikan</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="selectEducation" name="education_job">

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
                                <option value="<?= $edu ?>"
                                    <?= ($show_data_editjen['education_job'] == $edu) ? 'selected' : '' ?>>
                                    <?= $edu ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>

                <!-- INPUT TAMBAH KOTA -->
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

                            <?php for($i=1; $i<=10; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo ($show_data_editjen['grade_value'] == $i) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                            <?php endfor; ?>
                    </select>
                    </div>
                  </div>

                  <div class="quill">
                  <div class="col-lg-12">
                  <label for="spec">Klasifikasi</label>
                  <div class="input-group">
                    <textarea id="klasifikasi2" class="form-control" aria-label="With textarea" id="spec" name="kualifikasi"><?= $show_data_editjen['requirement_job']; ?></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <label for="des">Deskripsi Pekerjaan</label>
                  <div class="input-group">
                    <textarea id="deskripsi1" class="form-control" aria-label="With textarea" id="des" name="deskripsi"><?= $show_data_editjen['description_job']; ?></textarea>
                  </div>
                </div>
              </div>

                  </div>
                <!--  <div class="col-lg-6">
                    <label for="spec">Kualifikasi</label>
                     <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" id="spec" name="kualifikasi" ><?= $show_data_editjen['requirement_job']; ?></textarea>
                        </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="des">Deskripsi Pekerjaan</label>
                     <div class="input-group">
                            <textarea class="form-control" id="des" name="deskripsi" aria-label="With textarea"><?= $show_data_editjen['description_job']; ?></textarea>
                        </div>
                  </div>      -->       
                  <div class="d-flex flex-row-reverse mt-2">
                    <button type="submit" class="btn bg-gradient-primary btn-xs">Kirim</button>
                    <a href="<?= base_url('conjen/showjen') ?>"> <button type="button" class="btn bg-gradient-success btn-xs me-1">Back</button> </a>
                 </div>                    
                </div>
                </form>
              </div>
            </div>
            <h6 class="text-capitalize"></h6>
          </div>
        </div>
 
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
window.addEventListener("DOMContentLoaded", () => {
    CKEDITOR.replace('klasifikasi2');
    CKEDITOR.replace('deskripsi1');
});



<?php if ($this->session->flashdata('error')) { ?>
    Swal.fire({
        title: 'Gagal',
        text: <?= json_encode($this->session->flashdata('error')) ?>,
        icon: 'error',
    });
<?php } ?>

  document.querySelector("form").addEventListener("submit", function(){
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });

    // ===============================
    // City Chips
    // ===============================
    let selectedCities = <?= json_encode($savedCities) ?>;
    const select = document.getElementById("city-select");
    const addBtn = document.getElementById("add-city-btn");
    const container = document.getElementById("city-container");
    const hiddenInput = document.getElementById("city_job");

    function renderChips() {
        container.innerHTML = "";
        selectedCities.forEach((city,index)=>{
            const chip = document.createElement("div");
            chip.className = "city-chip";
            chip.innerHTML = `${city} <span class="remove-chip" data-index="${index}">×</span>`;
            container.appendChild(chip);
        });
        hiddenInput.value = JSON.stringify(selectedCities);
    }

    renderChips();

    addBtn.addEventListener("click", function(){
        const city = select.value;
        if(city !== "" && !selectedCities.includes(city)){
            selectedCities.push(city);
            renderChips();
        }
    });

    container.addEventListener("click", function(e){
        if(e.target.classList.contains("remove-chip")){
            const index = e.target.dataset.index;
            selectedCities.splice(index,1);
            renderChips();
        }
    });
</script>
