<div id="update-biodata-app-root" style="display: none;">
    <div class="row">
        <div class="col-lg-3 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 pt-3 bg-transparent text-center">
                    <!-- Container bulat -->
                    <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 10px auto;">
                        <img :src="profile.url" 
                             alt="Foto Kandidat"
                             style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                    <div style="margin-top: 10px;">
                        <button class="btn btn-xs btn-danger" id="triggerUppyPhotoUploader">
                            Unggah Foto
                        </button>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="list-group">
                        <button @click="changeTab('data-diri')" class="list-group-item list-group-item-action">
                            DATA DIRI
                        </button>
                        <button @click="changeTab('pendidikan')" class="list-group-item list-group-item-action">
                            PENDIDIKAN
                        </button>
                        <button @click="changeTab('alamat')" class="list-group-item list-group-item-action">
                            ALAMAT
                        </button>
                        <button @click="changeTab('pengalaman-kerja')" class="list-group-item list-group-item-action">
                            PENGALAMAN KERJA
                        </button>
                        <button @click="changeTab('data-pendukung')" class="list-group-item list-group-item-action">
                            DATA PENDUKUNG
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 mb-lg-0 mb-4">
            <div class="displayInLine">
                <!-- Biodata -->
                <div id="data-diri" v-show="show_tab == 'data-diri'">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Biodata</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama
                                            Lengkap (Sesuai KTP)</label>
                                        <input v-model="data_diri.name_candidate" name="name_candidate"
                                            class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input v-model="data_diri.email_candidate" name="email_candidate"
                                            placeholder="example@gmail.com" class="form-control" type="email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">No
                                            Handphone</label>
                                        <input v-model="data_diri.no_candidate" name="no_candidate" class="form-control"
                                            placeholder="085-683-xxx-xxx" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Tempat
                                            Lahir</label>
                                        <input v-model="data_diri.tempat_lahir_candidate" name="tempat_lahir_candidate"
                                            placeholder="Kota/Kabupaten" class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Tanggal
                                            Lahir</label>
                                        <input v-model="data_diri.birthdate_candidate" name="birthdate_candidate"
                                            class="form-control" type="date" />
                                    </div>
                                </div>
                                  <!-- Agama -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Agama</label>
                                        <select v-model="data_diri.religion_candidate" class="form-control" name="religion_candidate">
                                            <option value="">-- pilih --</option>
                                            <option v-for="agm in agama_list" :key="agm.id" :value="agm.id">
                                                {{ agm.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Jenis Kelamin</label>
                                        <select v-model="data_diri.jk_candidate" class="form-control"
                                            placeholder="-- pilih --" name="jk_candidate">
                                            <option v-for="kel in jenis_kelamin" :key="kel.id" :value="kel.id">
                                                {{ kel.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                              <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Status</label>
                                        <select v-model="data_diri.marital_candidate" class="form-control" name="marital_candidate">
                                            placeholder="-- pilih --" name="jk_candidate">
                                            <option v-for="st in marital_list" :key="st.id" :value="st.id">
                                                {{ st.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Media Sosial -->
                                <div class="col-md-6">
                                   <div class="form-group">
                                <label class="form-control-label">LinkedIn</label>
                                <input type="text"
                                    v-model="data_diri.socialmedia2_candidate"
                                    class="form-control"
                                    name="socialmedia2_candidate"
                                    placeholder="Contoh: ida-fania-872b441b2">
                                <small class="text-muted">
                                    Isi hanya bagian akhir URL setelah <strong>linkedin.com/in/</strong>
                                </small>
                            </div>
                                    <div class="form-group mt-2">
                                        <label class="form-control-label">Instagram</label>
                                        <input type="text" v-model="data_diri.socialmedia_candidate" class="form-control"
                                            name="socialmedia_candidate" placeholder="Contoh: ida_fania">
                                   <small class="text-muted">
                                         Isi hanya username tanpa <strong>@</strong> 
                                 </small>
                                        </div>
                                </div>
                            </div>    
                            
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button @click="saveDataDiri" type="button"
                                        class="btn btn-danger bg-gradient-danger mb-0">
                                        <i class="fas fa-save"></i> &nbsp;Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pendidikan -->
                <div id="pendidikan" v-show="show_tab == 'pendidikan'">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Pendidikan Terakhir</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Jenjang Pendidikan</label>
                                        <select v-model="pendidikan.study_level" class="form-control"
                                            placeholder="-- pilih --" name="study_level">
                                            <option v-for="level in study_level_list" :key="level.id">
                                                {{ level.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama
                                            Sekolah/Universitas</label>
                                        <input v-model="pendidikan.name_school" name="name_school"
                                            placeholder="SMK 1 BAWANG" class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Jurusan</label>
                                        <input v-model="pendidikan.jurusan" name="jurusan_" placeholder="TEKNIK"
                                            class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6" v-show="showMajor">
                                    <div class="form-group">
                                        <label class="form-control-label">Fakultas</label>
                                        <input v-model="pendidikan.major_school" placeholder="HUKUM" name="major_school"
                                            class="form-control tt-gede" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                            $bulanIndo = [
                            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                            ];

                            // Ambil data dari DB yang dikirim controller ke view
                            $yearFirst = !empty($laststudy['year_first']) ? date('Y', strtotime($laststudy['year_first'])) : '';
                            $monthFirst = !empty($laststudy['year_first']) ? (int)date('m', strtotime($laststudy['year_first'])) : '';
                            $yearLast = !empty($laststudy['year_last']) ? date('Y', strtotime($laststudy['year_last'])) : '';
                            $monthLast = !empty($laststudy['year_last']) ? (int)date('m', strtotime($laststudy['year_last'])) : '';
                            ?>
                                                            <!-- Tanggal Mulai -->
                            <label class="form-control-label fw-bold mb-2">Tanggal Mulai</label>
                            <div class="col-md-6 mb-3">
                            <select name="month_start" class="form-control">
                                <option value="">Bulan</option>
                                <?php foreach ($bulanIndo as $num => $nama): ?>
                                <option value="<?= $nama ?>" <?= ($num == $monthFirst) ? 'selected' : '' ?>>
                                    <?= $nama ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            </div>

                            <div class="col-md-6 mb-3">
                            <select name="year_start" class="form-control">
                                <option value="">Tahun</option>
                                <?php for ($i = date('Y'); $i >= 1950; $i--): ?>
                                <option value="<?= $i ?>" <?= ($i == $yearFirst) ? 'selected' : '' ?>><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            </div>

                            <!-- Tanggal Berakhir -->
                            <label class="form-control-label fw-bold mb-2">Tanggal Berakhir (atau perkiraan)</label>
                            <div class="col-md-6 mb-3">
                            <select name="month_end" class="form-control">
                                <option value="">Bulan</option>
                                <?php foreach ($bulanIndo as $num => $nama): ?>
                                <option value="<?= $nama ?>" <?= ($num == $monthLast) ? 'selected' : '' ?>>
                                    <?= $nama ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            </div>

                            <div class="col-md-6 mb-3">
                            <select name="year_end" class="form-control">
                                <option value="">Tahun</option>
                                <?php for ($i = date('Y'); $i >= 1950; $i--): ?>
                                <option value="<?= $i ?>" <?= ($i == $yearLast) ? 'selected' : '' ?>><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button @click="saveDataPendidikan" type="button"
                                        class="btn btn-danger bg-gradient-danger mb-0">
                                        <i class="fas fa-save"></i> &nbsp;Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alamat -->
                <div id="alamat" v-show="show_tab == 'alamat'">
                    <div class="card z-index-2 h-100">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-capitalize">Alamat Sesuai KTP
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Alamat <sup
                                                style="color: red;">*</sup></label>
                                        <textarea v-model="alamat.alamat" name="alamat"
                                            placeholder="JL.KENANGA NO. 05, RT/RW 004/005, DESA KANDANGAN"
                                            class="form-control tt-gede" id="input1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Provinsi <sup
                                                style="color: red;">*</sup></label>
                                        <!-- <select v-model="alamat.provinsi" name="provinsi" class="selectize"
                                            id="selectize-provinsi"></select> -->
                                        <select v-model="alamat.provinsi" name="provinsi" placeholder="-- pilih --"
                                            class="form-control tt-gede tt-selectize" id="selectize-provinsi">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kabupaten/Kota <sup
                                                style="color: red;">*</sup></label>
                                        <select v-model="alamat.kabupaten" name="kabupaten" placeholder="-- pilih --"
                                            class="form-control tt-gede tt-selectize" id="selectize-kabupaten">
                                        </select>
                                        <!--  <select v-model="alamat.kabupaten" name="kabupaten" class="selectize"
                                            id="selectize-kabupaten">
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kecamatan <sup
                                                style="color: red;">*</sup></label>
                                        <select v-model="alamat.kecamatan" name="kecamatan" placeholder="-- pilih --"
                                            class="form-control tt-gede tt-selectize" id="selectize-kecamatan">
                                        </select>
                                        <!--     <select v-model="alamat.kecamatan" name="kecamatan" class="selectize"
                                            id="selectize-kecamatan"></select> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kode Pos <sup
                                                style="color: red;">*</sup></label>
                                        <input v-model="alamat.kode_pos" name="no_tlp" class="form-control"
                                            placeholder="Masukkan Kode Pos" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">No
                                            Handpone Cadangan</label>
                                        <input v-model="alamat.noaddress_candidate" name="no_tlp" class="form-control"
                                            placeholder="084-649-xxx" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col-md-12">
                                    <h6 class="text-capitalize">Alamat Saat Ini</h6>
                                    <div class="form-check">
                                        <input @click="copyAddress" class="form-check-input" type="checkbox" value="yes"
                                            id="checkboxAddrIsEq">
                                        <label class="form-check-label" for="checkboxAddrIsEq">
                                            Sesuai dengan alamat KTP?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Alamat <sup
                                                style="color: red;">*</sup></label>
                                        <textarea v-model="alamat2.alamat" name="alamat" class="form-control tt-gede"
                                            id="input1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Provinsi <sup
                                                style="color: red;">*</sup></label>
                                        <select v-model="alamat2.provinsi" name="provinsi"
                                            class="form-control tt-gede tt-selectize" id="selectize-provinsi2">
                                        </select>
                                        <!--  <select v-model="alamat2.provinsi" name="provinsi" class="selectize"
                                            id="selectize-provinsi2"></select> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kabupaten/Kota <sup
                                                style="color: red;">*</sup></label>
                                        <select v-model="alamat2.kabupaten" name="kabupaten"
                                            class="form-control tt-gede tt-selectize" id="selectize-kabupaten2">
                                        </select>
                                        <!--  <select v-model="alamat2.kabupaten" name="kabupaten" class="selectize"
                                            id="selectize-kabupaten2">
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kecamatan <sup
                                                style="color: red;">*</sup></label>
                                        <select v-model="alamat2.kecamatan" name="kecamatan"
                                            class="form-control tt-gede tt-selectize" id="selectize-kecamatan2">
                                        </select>
                                        <!--  <select v-model="alamat2.kecamatan" name="kecamatan" class="selectize"
                                            id="selectize-kecamatan2"></select> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Kode Pos <sup
                                                style="color: red;">*</sup></label>
                                        <input v-model="alamat2.kode_pos" name="no_tlp" class="form-control"
                                            type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">No
                                            Handphone</label>
                                        <input v-model="alamat2.noaddress_candidate" name="no_tlp" class="form-control"
                                            type="text" placeholder="084-649-xxxx" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button @click="saveDataAlamat" type="button"
                                        class="btn btn-danger bg-gradient-danger mb-0">
                                        <i class="fas fa-save"></i> &nbsp;Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pengalaman -->
                <div id="pengalaman-kerja" v-show="show_tab == 'pengalaman-kerja'">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Pengalaman Kerja</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row" v-show="showFormAdd">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama
                                            Perusahaan</label>
                                        <input v-model="pengalaman.name_company" placeholder="PT. SEJAHTERA"
                                            class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Jenis
                                            Perusahaan</label>
                                        <input v-model="pengalaman.type_company" placeholder="APPAREL & KONVEKSI"
                                            class="form-control tt-gede" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Status
                                            Pegawai</label>
                                        <select v-model="pengalaman.employee_company" name=""
                                            class="form-control tt-gede">
                                            <option v-for="item in status_pegawai_list" :value="item.id"
                                                :key="`item-xts-${item.id}`">
                                                {{ item.name }}
                                            </option>
                                        </select>
                                    </div>
                                    <!--<div class="form-group">
                                        <label class="form-control-label">Status
                                            Pegawai</label>
                                        <input v-model="pengalaman.employee_company" class="form-control tt-gede" type="text" />
                                    </div>-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Jabatan
                                            Terakhir</label>
                                        <input v-model="pengalaman.last_position" class="form-control tt-gede"
                                            placeholder="HRD" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Tahun Masuk</label>
                                        <input v-model="pengalaman.first_year" name="first_year" type="month"
                                            class="form-control tt-gede">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Sampai
                                            Dengan</label>
                                        <input ref="pengalamanLastYearIp" v-model="pengalaman.last_year"
                                            name="last_year" type="month" class="form-control tt-gede">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Masih Aktif</label>
                                        <select v-model="pengalaman.active" name="active" class="form-control">
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" v-show="showFormAdd">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Deskripsi
                                            Pekerjaan</label>
                                        <textarea v-model="pengalaman.description" class="form-control tt-gede"
                                            placeholder="Contoh : Saya bekerja di PT. SEJAHTERA sebagai HRD selama 3 tahun. Pada saat kerja saya menangani bagian input new member ke EPOS dan input regulasi dan non regulasi"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div id="form-pengalaman-kerja-vars" style="display: none;">
                                <div v-for="row in pengalaman_list" :key="row.id">
                                    <input :value="row.name_company" name="name_company[]">
                                    <input :value="row.type_company" name="type_company[]">
                                    <input :value="row.first_year" name="first_year[]">
                                    <input :value="row.last_year" name="last_year[]">
                                    <input :value="row.employee_company" name="employee_company[]">
                                    <input :value="row.description" name="description[]">
                                    <input :value="row.last_position" name="last_position[]">
                                    <input :value="row.active" name="active[]">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end mb-5">
                                        <button type="button" @click="addPengalaman"
                                            :class="['btn btn-sm mb-0', pengalaman_mode === 'add' ? 'bg-gradient-secondary' : 'bg-gradient-success']">
                                            <i
                                                :class="['fas', pengalaman_mode === 'add' ? 'fa-plus' : 'fa-save']"></i>&nbsp;{{
                                            pengalaman_mode === 'add' ? 'Baru' : (pengalaman_mode === 'update' ?
                                            'Update' : 'Tambah') }}
                                        </button>
                                        &nbsp;
                                        <button v-show="showFormAdd" type="button" @click="cancelSavePengalaman"
                                            class="btn btn-sm mb-0 btn-warning bg-gradient-warning">
                                            <i class="fas fa-times"></i>&nbsp;Batal
                                        </button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Perusahaan
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Jenis Perusahaan
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Status Pegawai
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Jabatan Terakhir
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Lama Bekerja
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">
                                                        Deskripsi
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody v-if="pengalaman_list.length > 0">
                                                <tr v-for="(item, index) in pengalaman_list" :key="index"
                                                    :class="item.is_update ? '' : 'bg-info text-bold'">
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-xs">
                                                                    {{ item.name_company }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            {{ item.type_company }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            {{ getStatusPegawai(item.employee_company) }}</p>
                                                    </td>
                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold">
                                                            {{ item.last_position }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span v-if="item.active == 0"
                                                            class="text-secondary text-xs font-weight-bold">
                                                            {{ diffLamaBekerja(new Date(item.first_year), new
                                                            Date(item.last_year)) }}
                                                        </span>
                                                        <span v-else class="text-secondary text-xs font-weight-bold">
                                                            Masih Bekerja
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span @click.self="showDescription(item.description)"
                                                            style="cursor: pointer;"
                                                            class="text-secondary font-weight-bold text-xs">
                                                            Show
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <i @click.self="editPengalaman(item.tempid)"
                                                            class="text-primary fas fa-pen"
                                                            style="cursor: pointer;"></i>
                                                        &nbsp;&nbsp;
                                                        <i @click.self="deletePengalaman(item.tempid, item.id_ce)"
                                                            class="text-danger fas fa-trash"
                                                            style="cursor: pointer;"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody v-else>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mt-5">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button @click="saveDataPengalaman" type="button" class="btn btn-danger bg-gradient-danger mb-0">
                                            <i class="fas fa-save"></i> &nbsp;Simpan
                                        </button>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            <!--data pendukung-->
           <div id="data-pendukung" v-show="show_tab == 'data-pendukung'">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent d-flex justify-content-between align-items-center">
        <h6 class="text-capitalize mb-0">Data Pendukung</h6>
        <button
            type="button"
            class="btn btn-primary btn-xs"
            @click="openModalAddFile()"
        >
            <i class="fas fa-plus"></i> Tambah Data
        </button>
        </div>
    <div class="card-body p-4">
      <div class="row">
        <div v-if="pendukung.length == 0">
          <div class="col-12">
            <div class="alert bg-info text-white">
              Data file pendukung masih kosong.
            </div>
          </div>
        </div>

       
        <div v-else>
         <div
            v-for="(file, index) in pendukung"
            :key="`file-pd-${index}`"
            class="col-12 mb-3"
            style="background: rgba(233, 233, 233, 0.8); border-radius: 10px; padding: 15px;"
            >
            <div class="d-flex justify-content-between align-items-center">
                <div>
                <p class="text-dark mb-1">
                    <strong>{{ file.jenis_file }}</strong>
                </p>
                <p class="text-dark mb-0">
                    <a :href="file.url" target="_blank">
                        <i class="fas fa-file"></i>
                        {{ file.name.length > 15 ? file.name.substr(0, 15) + '...' : file.name }}
                    </a>
                    </p>

                </div>

              <!-- Tombol untuk desktop -->
              <div class="d-none d-md-block">
                <a :href="file.url" class="btn btn-xs btn-info">
                  <i class="fas fa-eye"></i> Lihat
                </a>
                &nbsp;
                <a :href="file.url" class="btn btn-xs btn-primary" download>
                  <i class="fas fa-download"></i> Download
                </a>
                &nbsp;
                <button @click="openModalDeleteFile(file)" class="btn btn-xs btn-danger">
                  <i class="fas fa-trash"></i> Hapus
                </button>
              </div>
            </div>

            <!-- Tombol untuk mobile -->
            <div class="d-block d-md-none mt-2">
              <a :href="file.url" class="btn btn-xs btn-info"> 
                <i class="fas fa-eye"></i> Lihat
              </a>
              &nbsp;
              <a :href="file.url" class="btn btn-xs btn-primary" download> 
                <i class="fas fa-download"></i>Download
              </a>
              &nbsp;
              <button @click="openModalDeleteFile(file)" class="btn btn-xs btn-danger">
                <i class="fas fa-trash"></i> Hapus
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah File -->
<div class="modal fade" id="modalAddFilePendukung" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h3 class="modal-title mb-0" ref="modalAddFilePendukungTitle">Tambah Data</h3>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="formBiodataDataPendukung" onsubmit="return false;">
          <!-- Tambahkan dropdown jenis file -->
          <div class="form-group mb-3">
            <label>Jenis Dokumen</label>
            <select name="jenis_file" v-model="formFilePendukungJenis" class="form-select" required>
              <option disabled value="">-- Pilih Jenis Dokumen --</option>
              <option value="Portofolio">Portofolio</option>
              <option value="Sertifikat">Sertifikat</option>
            </select>
          </div>

          <div class="form-group">
            <label>Pilih File</label>
            <input
              id="formBiodataDataPendukung_file_pendukung"
              name="file_pendukung"
              type="file"
              class="form-control"
              placeholder="Pilih file"
              required
            />
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" @click="saveDataPendukung">
          <i class="fas fa-upload"></i> Unggah
        </button>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/ext/vue.js') ?>">
</script>
<script src="<?= base_url('assets/js/ext/axios.min.js') ?>">
</script>
<script>
    if (typeof site_url === "undefined") {
        function site_url(url) {
            const base = "<?= site_url() ?>";

            return base + url;
        }
    }

    const WINDOW_SKIP_FIREBASE = true;

    axios.defaults.headers.common['X-MASTER-ID-CANDIDATE'] =
        '<?= $biodata["id"] ?>';
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=AbortController%2CBlob%2CPromise%2Cfetch"></script>
<script src="<?= base_url('assets/build/dist/bundle.js') ?>"
    defer></script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var _PROVINSI =
            '<?= $address["provinsi"] ?>';
        var _KABUPATEN =
            '<?= $address["kabupaten"] ?>';
        var _KECAMATAN =
            '<?= $address["kecamatan"] ?>';

        var _PROVINSI2 =
            '<?= $address2["provinsi"] ?>';
        var _KABUPATEN2 =
            '<?= $address2["kabupaten"] ?>';
        var _KECAMATAN2 =
            '<?= $address2["kecamatan"] ?>';

        var $tmpProvinsi = [];
        var $tmpKabupaten = [];
        var $tmpKecamatan = [];

        var $tmpProvinsi2 = [];
        var $tmpKabupaten2 = [];
        var $tmpKecamatan2 = [];

        var $photoUploader = null;

        const app = new Vue({
            el: '#update-biodata-app-root',
            created() {
                this.loadDataProfile();
                this.loadDataPengalaman();
                this.loadDataPendukung();
            },
            data() {
                return {
                    show_tab: 'data-diri',
                    showFormAdd: false,
                    pengalamanTempId: 1,
                    modalDescriptionContent: '',
                    jenis_kelamin: [{
                            id: 1,
                            text: 'LAKI LAKI'
                        },
                        {
                            id: 2,
                            text: 'PEREMPUAN'
                        },
                        {
                            id: 3,
                            text: 'TRANSGENDER'
                        },
                        {
                            id: 4,
                            text: 'TIDAK INGIN MENYEBUTKAN'
                        },
                    ],
                    study_level_list: [{
                            id: 1,
                            text: 'SD'
                        },
                        {
                            id: 2,
                            text: 'SMP'
                        },
                        {
                            id: 3,
                            text: 'SMA'
                        },
                        {
                            id: 4,
                            text: 'SMK'
                        },
                        {
                            id: 5,
                            text: 'Diploma 1'
                        },
                        {
                            id: 6,
                            text: 'Diploma 2'
                        },
                        {
                            id: 7,
                            text: 'Diploma 3'
                        },
                        {
                            id: 8,
                            text: 'Sarjana Strata 1'
                        },
                        {
                            id: 9,
                            text: 'Sarjana Strata 2'
                        },
                        {
                            id: 10,
                            text: 'Sarjana Strata 3'
                        },
                    ],
                    status_pegawai_list: [{
                            id: 9,
                            name: 'PKWTT'
                        },
                        {
                            id: 8,
                            name: 'MAGANG'
                        },
                        {
                            id: 7,
                            name: 'OUTSOURCING'
                        },
                        {
                            id: 6,
                            name: 'PEKERJA KONTRAK'
                        },
                        {
                            id: 5,
                            name: 'FREELANCER/PEKERJA LEPAS'
                        },
                        {
                            id: 4,
                            name: 'PEKERJA MUSIMAN'
                        },
                        {
                            id: 3,
                            name: 'PEKERJA SEMENTARA'
                        },
                        {
                            id: 2,
                            name: 'PEKERJA TETAP'
                        },
                        {
                            id: 1,
                            name: 'PKWT',
                        },
                        {
                            id: 0,
                            name: 'PEKERJA PARUH WAKTU'
                        },
                    ],
                    data_diri: {
                        name_candidate: '<?= $biodata["name_candidate"] ?>',
                        email_candidate: '<?= $biodata["email_candidate"] ?>',
                        no_candidate: '<?= $biodata["no_candidate"] ?>',
                        tempat_lahir_candidate: '<?= $biodata["tempat_lahir_"] ?>',
                        birthdate_candidate: '<?= trim($biodata["tanggal_lahir_"]) ?>',
                        jk_candidate: '<?= $biodata["jk_candidate"] ?>',
                        religion_candidate: '<?= $biodata["religion_candidate"] ?>',
                        marital_candidate: '<?= $biodata["marital_candidate"] ?>',
                        socialmedia_candidate: '<?= $biodata["socialmedia_candidate"] ?? "" ?>',
                        socialmedia2_candidate: '<?= $biodata["socialmedia2_candidate"] ?? "" ?>'
                    },
                    pendidikan: {
                         study_level: '<?= $laststudy["jenjang_"] ?>',
                        name_school: '<?= $laststudy["name_school"] ?>',
                        major_school: '<?= $laststudy["major_school"] ?>',
                        jurusan: '<?= $laststudy["jurusan_"] ?>',
                        month_start: '', 
                        year_start: '',   
                        month_end: '',   
                        year_end: '' ,
                        active: '<?= $laststudy["active"] ?>'
                    },
                    alamat: {
                        alamat: '<?= $address["alamat_"] ?>',
                        provinsi: _PROVINSI,
                        kabupaten: _KABUPATEN,
                        kecamatan: _KECAMATAN,
                        kode_pos: '<?= $address["kode_pos"] ?>',
                        noaddress_candidate: '<?= $address["no_tlp"] ?>',
                    },
                    alamat2: {
                        alamat: '<?= $address2["alamat_"] ?>',
                        provinsi: _PROVINSI2,
                        kabupaten: _KABUPATEN2,
                        kecamatan: _KECAMATAN2,
                        kode_pos: '<?= $address2["kode_pos"] ?>',
                        noaddress_candidate: '<?= $address2["no_tlp"] ?>',
                    },
                    agama_list: [
                          { id: 1, text: 'ISLAM' },
                        { id: 2, text: 'KRISTEN' },
                        { id: 3, text: 'HINDU' },
                        { id: 4, text: 'BUDDHA' },
                        { id: 5, text: 'KATOLIK' },
                         { id: 6, text: 'TIDAK INGIN MENYEBUTKAN' },
                    ],
                    marital_list: [
                    { id: 1, text: 'BELUM MENIKAH' },
                    { id: 2, text: 'MENIKAH' },
                    { id: 3, text: 'CERAI HIDUP' },
                    { id: 4, text: 'CERAI MATI' },
                    { id: 5, text: 'TIDAK INGIN MENYEBUTKAN' },
                    ],
                    pengalaman: {
                        name_company: '',
                        type_company: '',
                        first_year: '',
                        last_year: '',
                        employee_company: '',
                        last_position: '',
                        description: '',
                        active: 0,
                        is_update: false,
                        id_ce: null,
                    },
                    pengalaman_mode: 'add',
                    pengalaman_list: [],
                    pendukung: [],
                    formFilePendukungID: null,
                    profile: {
                        name: null,
                        url: null
                    },
                    tmp_list: [],
                }
            },
            computed: {
                showMajor() {
                    return this.pendidikan.study_level.toLowerCase().includes('diploma') || this
                        .pendidikan.study_level
                        .toLowerCase().includes('sarjana');
                },
                isAddressCopied() {
                    var isCheck = document.getElementById('checkboxAddrIsEq');

                    return isCheck.checked;
                },
                isPendidikanAktif() {
                    return this.pendidikan.last_year != '' || this.pendidikan.last_year != null;
                }
            },
            watch: {
                'pendidikan.active': function(val) {
                    var $control = $('select.tt-selectize[data-selectize="pendidikan_yl"]')[0]
                        ?.selectize;
                    if (val == 1) {
                        $control.disable();
                    } else {
                        $control.enable();
                    }
                },
                'pengalaman.active': function(val) {
                    if (val == 1) {
                        this.$refs.pengalamanLastYearIp.disabled = true;
                    } else {
                        this.$refs.pengalamanLastYearIp.disabled = false;
                    }
                },
            },
            methods: {
                getStatusPegawai(id) {
                    const status = this.status_pegawai_list.find((v) => parseInt(v.id) === parseInt(
                        id));

                    if (status) {
                        return status.name;
                    }

                    return null;
                },
                openModalAddFile() {
                    var indah = this.$refs.modalAddFilePendukungTitle || {};

                    indah.innerText = 'Tambah Data';

                    // document.getElementById('formBiodataDataPendukung_file_name').value = null;
                    document.getElementById('formBiodataDataPendukung_file_pendukung').value = null;
                    document.getElementById('formBiodataDataPendukung_file_pendukung').files = null;

                    this.formFilePendukungID = null;

                    var modal = bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('modalAddFilePendukung')
                    );

                    modal.show();
                },
                openModalUpdateFile(data) {
                    var indah = this.$refs.modalAddFilePendukungTitle || {};

                    console.log(data);

                    indah.innerText = 'Update Data';

                    // document.getElementById('formBiodataDataPendukung_file_name').value = data.name;
                    // document.getElementById('formBiodataDataPendukung_file_pendukung').value = null;

                    this.formFilePendukungID = data.id;

                    var modal = bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('modalAddFilePendukung')
                    );

                    modal.show();
                },
                openModalDeleteFile(data) {
                    Swal.fire({
                        icon: 'question',
                        title: 'Hapus File?',
                        text: 'Setalah file dihapus, file tidak dapat dikembalikan lagi.',
                        allowOutsideClick: false,
                        showCancelButton: true,
                        confirmButtonText: 'Ya, Hapus',
                        cancelButtonText: 'Batal'
                    }).then((x) => {
                        if (x.isConfirmed) {
                            var form = new FormData();
                            form.append("id", data.id);
                            axios.post(
                                    '<?= site_url("candidate-api/update-biodata/delete-data-pendukung") ?>',
                                    form
                                )
                                .then((response) => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: 'Berhasil menghapus data pendukung.'
                                    });

                                    this.loadDataPendukung();
                                })
                                .catch((error) => {
                                    console.log(error);

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Failed!',
                                        text: error.response.data.message ||
                                            'Gagal menghapus data pendukung.'
                                    });
                                });
                        }
                    });
                },
                copyAddress() {
                    var isCheck = document.getElementById('checkboxAddrIsEq');
                    if (isCheck && isCheck.checked) {
                        $tmpProvinsi2 = $tmpProvinsi;
                        $tmpKabupaten2 = $tmpKabupaten;
                        $tmpKecamatan2 = $tmpKecamatan;

                        _PROVINSI2 = _PROVINSI;
                        _KABUPATEN2 = _KABUPATEN;
                        _KECAMATAN2 = _KECAMATAN;

                        this.alamat2.alamat = this.alamat.alamat;
                        this.alamat2.provinsi = _PROVINSI2;
                        this.alamat2.kabupaten = _KABUPATEN2;
                        this.alamat2.kecamatan = _KECAMATAN2;
                        this.alamat2.kode_pos = this.alamat.kode_pos;
                        this.alamat2.noaddress_candidate = this.alamat.noaddress_candidate;

                        setDefaultAddress(true);
                    }
                },
                saveDataPendukung() {
                    var modal = bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('modalAddFilePendukung')
                    );

                    var foel = document.getElementById('formBiodataDataPendukung');
                    var form = new FormData(foel);

                    if (this.formFilePendukungID) {
                        form.append("id", this.formFilePendukungID);
                    }

                    axios.post(
                            '<?= site_url("candidate-api/update-biodata/save-data-pendukung") ?>',
                            form)
                        .then((response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Berhasil memperbarui data pendukung.'
                            }).then((x) => {
                                this.loadDataPendukung();
                                modal.hide();
                            });
                        }).catch((error) => {
                            console.log(error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: error.response.data.message ||
                                    'Gagal memperbarui data pendukung.'
                            });
                        });
                },
                showDescription(content) {
                    var modal = bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('showDescriptionModal12')
                    );

                    this.modalDescriptionContent = content;

                    modal.show();
                },
                saveDataPengalaman(cbSuccess = null, cbError = null) {
                    axios.post(
                            '<?= site_url("candidate-api/update-biodata/save-data-pengalaman") ?>',
                            this.pengalaman_list)
                        .then((response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Berhasil memperbarui data pengalaman.'
                            }).then((x) => {
                                if (typeof cbSuccess === "function") {
                                    cbSuccess();
                                }
                                this.loadDataPengalaman();
                            });
                        }).catch((error) => {
                            console.log(error);

                            if (typeof cbError == "function") {
                                cbError();
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: error.response.data.message ||
                                    'Gagal memperbarui data pengalaman.'
                            });
                        });
                },
                loadDataPendukung() {
                    axios.get(
                            '<?= site_url("candidate-api/my-file-as-json") ?>'
                        )
                        .then((response) => {
                            this.pendukung = response.data.files;
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                },
                loadDataProfile() {
                    axios.get(
                            '<?= site_url("candidate-api/my-profile-as-json") ?>'
                        )
                        .then((response) => {
                            var uploaded = response.data.uploaded;

                            this.profile.url = uploaded.url;
                            this.profile.name = uploaded.name;
                        })
                        .catch((error) => {
                            console.log(error);
                        })
                },
                loadDataPengalaman() {
                    axios.get(
                            '<?= site_url("candidate-api/my-experience-as-json") ?>'
                        )
                        .then((response) => {
                            var pengalaman = response.data.pengalaman;

                            for (let index = 0; index < pengalaman.length; index++) {
                                pengalaman[index].tempid = this.pengalamanTempId;
                                this.pengalamanTempId += 1;
                            }

                            this.pengalaman_list = pengalaman;
                        }).catch((error) => {
                            console.log(error);
                        });
                },
                saveDataAlamat() {
                    var data = new FormData();

                    data.append("alamat", this.alamat.alamat);
                    data.append("provinsi", _PROVINSI);
                    data.append("kabupaten", _KABUPATEN);
                    data.append("kecamatan", _KECAMATAN);
                    data.append("poskode_candidate", this.alamat.kode_pos);
                    data.append("noaddress_candidate", this.alamat.noaddress_candidate);

                    data.append("alamat2", this.alamat2.alamat);
                    data.append("provinsi2", _PROVINSI2);
                    data.append("kabupaten2", _KABUPATEN2);
                    data.append("kecamatan2", _KECAMATAN2);
                    data.append("poskode_candidate2", this.alamat2.kode_pos);
                    data.append("noaddress_candidate2", this.alamat2.noaddress_candidate);

                    axios.post(
                            '<?= site_url("candidate-api/update-biodata/save-data-alamat") ?>',
                            data)
                        .then((response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Berhasil memperbarui data alamat.'
                            });
                        }).catch((error) => {
                            console.log(error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: error.response.data.message ||
                                    'Gagal memperbarui data alamat.'
                            });
                        });
                },
                saveDataPendidikan() {
  var data = new FormData();

  // basic fields
  data.append("study_level", this.pendidikan.study_level || '');
  data.append("name_school", this.pendidikan.name_school || '');
  data.append("jurusan_", this.pendidikan.jurusan || ''); // <- wajib underscore

  if (!this.showMajor) {
    data.append("major_school", '');
  } else {
    data.append("major_school", this.pendidikan.major_school || '');
  }

  data.append("active", this.pendidikan.active ? this.pendidikan.active : 0);

  // ----- Ambil bulan/tahun -----
  function getSelectValue(selector) {
    var $sel = $(selector);
    if ($sel.length) {
      var v = $sel.val();
      if (v !== undefined && v !== null && String(v).trim() !== '') return String(v).trim();
    }
    var inst = $sel[0]?.selectize;
    if (inst) {
      var val2 = inst.getValue ? inst.getValue() : (inst.getValue === 0 ? inst.getValue : null);
      if (val2 !== undefined && val2 !== null && String(val2).trim() !== '') return String(val2).trim();
    }
    var txt = $sel.text ? $sel.text().trim() : '';
    if (txt) return txt;
    return '';
  }

  const monthStart = getSelectValue('select[name="month_start"], select.tt-selectize[data-selectize="pendidikan_mf"]');
  const yearStart  = getSelectValue('select[name="year_start"], select.tt-selectize[data-selectize="pendidikan_yf"]');
  const monthEnd   = getSelectValue('select[name="month_end"], select.tt-selectize[data-selectize="pendidikan_ml"]');
  const yearEnd    = getSelectValue('select[name="year_end"], select.tt-selectize[data-selectize="pendidikan_yl"]');

  const bulanMap = {
    'Januari':'01','Februari':'02','Maret':'03','April':'04','Mei':'05','Juni':'06',
    'Juli':'07','Agustus':'08','September':'09','Oktober':'10','November':'11','Desember':'12',
    'jan':'01','feb':'02','mar':'03','apr':'04','may':'05','jun':'06','jul':'07','aug':'08','sep':'09','oct':'10','nov':'11','dec':'12'
  };

  if (!yearStart && !monthStart) {
    Swal.fire({icon:'error',title:'Gagal',text:'Tanggal mulai wajib diisi.'});
    return;
  }

  let startDate = '';
  if (yearStart) {
    let mm = '01';
    if (monthStart && bulanMap[monthStart]) mm = bulanMap[monthStart];
    startDate = `${yearStart}-${mm}-01`;
  }

  let endDate = '';
  if (yearEnd) {
    let mmEnd = '01';
    if (monthEnd && bulanMap[monthEnd]) mmEnd = bulanMap[monthEnd];
    endDate = `${yearEnd}-${mmEnd}-01`;
  } else endDate = '';

  data.append("year_first", startDate);
  data.append("year_last", endDate);

  // kirim
  axios.post('<?= site_url("candidate-api/update-biodata/save-data-pendidikan") ?>', data)
    .then((response) => {
      if (!this.showMajor) this.pendidikan.major_school = '';
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: response.data.message || 'Berhasil memperbarui data pendidikan.',
        showCloseButton: true,
        confirmButtonText: '<i class="fas fa-arrow-right"></i> Lanjutkan Edit Alamat',
      }).then((x) => { if (x.isConfirmed) this.changeTab('alamat'); });
    })
    .catch((error) => {
      console.error(error);
      Swal.fire({
        icon: 'error',
        title: 'Failed!',
        text: error?.response?.data?.message || 'Gagal memperbarui data pendidikan.'
      });
    });
},
                saveDataDiri() {
                    var data = new FormData();
                    data.append("id", this.data_diri.id);
                    data.append("name_candidate", this.data_diri.name_candidate);
                    data.append("email_candidate", this.data_diri.email_candidate);
                    data.append("no_candidate", this.data_diri.no_candidate);
                    data.append("tempat_lahir_candidate", this.data_diri.tempat_lahir_candidate);
                    data.append("birthdate_candidate", this.data_diri.birthdate_candidate);
                    data.append("jk_candidate", this.data_diri.jk_candidate);
                    data.append("religion_candidate", this.data_diri.religion_candidate);
                    data.append("marital_candidate", this.data_diri.marital_candidate);
                    data.append("socialmedia_candidate", this.data_diri.socialmedia_candidate);
                    data.append("socialmedia2_candidate", this.data_diri.socialmedia2_candidate);

                    axios.post(
                            '<?= site_url("candidate-api/update-biodata/save-data-diri") ?>',
                            data)
                        .then((response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Berhasil memperbarui data diri.'
                            });
                        }).catch((error) => {
                            console.log(error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: error.response.data.message ||
                                    'Gagal memperbarui data diri.'
                            });
                        });
                },
                changeTab(tab) {
                    this.show_tab = tab;
                },
                addPengalaman() {
                    if (this.pengalaman_mode === 'add') {
                        this.showFormAdd = true;
                        this.pengalaman_mode = 'save';
                    } else {
                        var pengalaman = {};

                        Object.assign(pengalaman, this.pengalaman);

                        if (this.pengalaman_mode == 'update') {
                            this.tmp_list = this.pengalaman_list;
                            this.pengalaman_list = [];
                            this.pengalaman_list.push(pengalaman);

                            if (pengalaman.is_update) {
                                this.saveDataPengalaman(() => {
                                    this.resetFormPengalaman();

                                    this.showFormAdd = false;
                                    this.pengalaman_mode = 'add';
                                }, () => {
                                    this.pengalaman_list = this.tmp_list;
                                });
                            }
                        } else {
                            pengalaman.tempid = this.pengalamanTempId;
                            this.pengalamanTempId += 1;

                            this.tmp_list = this.pengalaman_list;
                            this.pengalaman_list = [];
                            this.pengalaman_list.push(pengalaman);

                            this.saveDataPengalaman(() => {
                                this.resetFormPengalaman();

                                this.showFormAdd = false;
                                this.pengalaman_mode = 'add';
                            }, () => {
                                this.pengalaman_list = this.tmp_list;
                            });
                        }
                    }
                },
                editPengalaman(id) {
                    var pengalaman = this.pengalaman_list.find((v) => v.tempid === id);

                    if (pengalaman) {
                        this.pengalaman.tempid = pengalaman.tempid;
                        this.pengalaman.name_company = pengalaman.name_company;
                        this.pengalaman.type_company = pengalaman.type_company;
                        this.pengalaman.first_year = pengalaman.first_year;
                        this.pengalaman.employee_company = pengalaman.employee_company;
                        this.pengalaman.last_position = pengalaman.last_position;
                        this.pengalaman.description = pengalaman.description;
                        this.pengalaman.is_update = pengalaman.is_update;
                        this.pengalaman.active = pengalaman.active;
                        this.pengalaman.id_ce = pengalaman.id_ce;
                        this.pengalaman.last_year = pengalaman.last_year;

                        this.showFormAdd = true;
                        this.pengalaman_mode = 'update';
                    }
                },
                deletePengalaman(id, id_ce) {
                    var pengalaman = this.pengalaman_list.find((v) => v.tempid === id);
                    if (pengalaman && pengalaman.is_update) {
                        Swal.fire({
                            icon: 'question',
                            title: 'Apakah kamu yakin?',
                            text: 'Data pengalaman kerja akan dihapus!',
                            allowOutsideClick: false,
                            showCancelButton: true,
                        }).then((x) => {
                            if (x.isConfirmed) {
                                axios.post(
                                        '<?= site_url("candidate-api/update-biodata/delete-experience") ?>' +
                                        '/' + id_ce)
                                    .then((response) => {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success!',
                                            text: 'Data pengalaman kerja berhasil dihapus.'
                                        }).then((x) => {
                                            // this.pengalaman_list = this.pengalaman_list.filter((v) => v.tempid !== id);
                                            this.loadDataPengalaman();
                                        })
                                    })
                                    .catch((error) => {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Failed!',
                                            text: 'Data pengalaman kerja gagal dihapus.'
                                        });
                                    });
                            }
                        });
                    } else {
                        this.pengalaman_list = this.pengalaman_list.filter((v) => v.tempid !== id);
                    }
                },
                cancelSavePengalaman() {
                    this.resetFormPengalaman();

                    this.showFormAdd = false;
                    this.pengalaman_mode = 'add';
                },
                resetFormPengalaman() {
                    this.pengalaman.name_company = '';
                    this.pengalaman.type_company = '';
                    this.pengalaman.first_year = '';
                    this.pengalaman.last_year = '';
                    this.pengalaman.employee_company = '';
                    this.pengalaman.last_position = '';
                    this.pengalaman.description = '';
                    this.pengalaman.active = 0;
                    this.pengalaman.is_update = false;
                    this.pengalaman.id_ce = null;
                },
                diffLamaBekerja(dateMulai, dateSelesai) {
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
        });

        const $selectizeProvinsi = $("select#selectize-provinsi").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeKabupaten = $("select#selectize-kabupaten").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeKecamatan = $("select#selectize-kecamatan").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeProvinsi2 = $("select#selectize-provinsi2").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeKabupaten2 = $("select#selectize-kabupaten2").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeKecamatan2 = $("select#selectize-kecamatan2").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        const $selectizeProvinsiControl = $selectizeProvinsi[0].selectize;
        const $selectizeKabupatenControl = $selectizeKabupaten[0].selectize;
        const $selectizeKecamatanControl = $selectizeKecamatan[0].selectize;

        const $selectizeProvinsiControl2 = $selectizeProvinsi2[0].selectize;
        const $selectizeKabupatenControl2 = $selectizeKabupaten2[0].selectize;
        const $selectizeKecamatanControl2 = $selectizeKecamatan2[0].selectize;

        function setDefaultAddress(secondAddress = false) {
            // Alamat ktp
            loadProvinsi(secondAddress, function(prov) {
                if (typeof prov === "object" && typeof prov.find === "function") {
                    if (secondAddress) {
                        var _S_PROVINSI = _PROVINSI2;
                    } else {
                        var _S_PROVINSI = _PROVINSI;
                    }
                    const provinsi = prov.find((v) => v.name === _S_PROVINSI);

                    if (provinsi) {

                        if (secondAddress) {
                            $selectizeProvinsiControl2.setValue(_S_PROVINSI);
                        } else {
                            $selectizeProvinsiControl.setValue(_S_PROVINSI);
                        }

                        loadKabupaten(provinsi.id, secondAddress, function(kab) {
                            if (typeof kab === "object" && typeof kab.find ===
                                "function") {

                                if (secondAddress) {
                                    var _S_KABUPATEN = _KABUPATEN2;
                                } else {
                                    var _S_KABUPATEN = _KABUPATEN;
                                }

                                const kabupaten = kab.find((v) => v.name ===
                                    _S_KABUPATEN);
                                if (kabupaten) {

                                    if (secondAddress) {
                                        $selectizeKabupatenControl2.setValue(_S_KABUPATEN);
                                    } else {
                                        $selectizeKabupatenControl.setValue(_S_KABUPATEN);
                                    }

                                    loadKecamatan(kabupaten.id, secondAddress, function(kec) {
                                        if (typeof kec === "object" && typeof kec
                                            .find ===
                                            "function") {

                                            if (secondAddress) {
                                                var _S_KECAMATAN = _KECAMATAN2;
                                            } else {
                                                var _S_KECAMATAN = _KECAMATAN;
                                            }

                                            const kecamatan = kec.find((v) => v.name ===
                                                _S_KECAMATAN);

                                            if (kecamatan) {

                                                if (secondAddress) {
                                                    $selectizeKecamatanControl2
                                                        .setValue(
                                                            _S_KECAMATAN);
                                                } else {
                                                    $selectizeKecamatanControl.setValue(
                                                        _S_KECAMATAN);
                                                }
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    }
                }
            });
        }

        function setDefaultYearsPendidikan() {
            var $control = $(
                'select.tt-selectize[data-selectize="pendidikan_yf"]')[0]?.selectize;

            if ($control) {
                var $_ =
                    '<?= trim($laststudy["year_first"]) ?>';
                $control.setValue(parseInt($_));
            }

            var $control2 = $(
                'select.tt-selectize[data-selectize="pendidikan_yl"]')[0]?.selectize;

            if ($control2) {
                var $_ =
                    '<?= trim($laststudy["year_last"]) ?>';
                $control2.setValue(parseInt($_));

                $_ = '<?= $laststudy["active"] ?>';

                if ($_ == 1) {
                    $control2.disable();
                } else {
                    $control2.enable();
                }
            }
        }

        function loadProvinsi(secondAddress = false, callback = null) {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=provinces.json`,
                cache: true,
                success: function(response) {
                    if (secondAddress) {
                        $selectizeProvinsiControl2.clearOptions();
                        $tmpProvinsi2 = [];
                    } else {
                        $selectizeProvinsiControl.clearOptions();
                        $tmpProvinsi = [];
                    }

                    response.forEach((v) => {
                        var item = {
                            id: v.id,
                            name: v.name,
                        };

                        if (secondAddress) {
                            $tmpProvinsi2.push(v);
                            $selectizeProvinsiControl2.addOption(item);
                        } else {
                            $tmpProvinsi.push(v);
                            $selectizeProvinsiControl.addOption(item);
                        }
                    });

                    if (typeof callback === "function") {
                        if (secondAddress) {
                            var data = $tmpProvinsi2;
                        } else {
                            var data = $tmpProvinsi;
                        }

                        callback(data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("selectize: oupz, something wen't wrong!");
                },
            });
        }

        function loadKabupaten(id_provinsi, secondAddress = false, callback = null) {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=regencies/${id_provinsi}.json`,
                cache: true,
                success: function(response) {
                    if (secondAddress) {
                        $selectizeKabupatenControl2.clearOptions();
                        $tmpKabupaten2 = [];
                    } else {
                        $selectizeKabupatenControl.clearOptions();
                        $tmpKabupaten = [];
                    }

                    response.forEach((v) => {
                        var item = {
                            id: v.id,
                            name: v.name,
                        };

                        if (secondAddress) {
                            $tmpKabupaten2.push(v);
                            $selectizeKabupatenControl2.addOption(item);
                        } else {
                            $tmpKabupaten.push(v);
                            $selectizeKabupatenControl.addOption(item);
                        }
                    });

                    if (typeof callback === "function") {
                        if (secondAddress) {
                            var data = $tmpKabupaten2;
                        } else {
                            var data = $tmpKabupaten;
                        }

                        callback(data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("selectize: oupz, something wen't wrong!");
                },
            });
        }

        function loadKecamatan(id_kabupaten, secondAddress = false, callback = null) {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=districts/${id_kabupaten}.json`,
                cache: true,
                success: function(response) {
                    if (secondAddress) {
                        $selectizeKecamatanControl2.clearOptions();
                        $tmpKecamatan2 = [];
                    } else {
                        $selectizeKecamatanControl.clearOptions();
                        $tmpKecamatan = [];
                    }

                    response.forEach((v) => {
                        var item = {
                            id: v.id,
                            name: v.name,
                        };

                        if (secondAddress) {
                            $tmpKecamatan2.push(v);
                            $selectizeKecamatanControl2.addOption(item);
                        } else {
                            $tmpKecamatan.push(v);
                            $selectizeKecamatanControl.addOption(item);
                        }
                    });

                    if (typeof callback === "function") {
                        if (secondAddress) {
                            var data = $tmpKecamatan2;
                        } else {
                            var data = $tmpKecamatan;
                        }

                        callback(data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("selectize: oupz, something wen't wrong!");
                },
            });
        }

        $("select#selectize-provinsi").change(function() {
            var selectedProvinsi = $(this).val();

            selectedProvinsiFind = $tmpProvinsi.find((v) => v.name === selectedProvinsi);

            if (selectedProvinsiFind) {
                _PROVINSI = selectedProvinsi;
                loadKabupaten(selectedProvinsiFind.id);
            }
        });

        $("select#selectize-provinsi2").change(function() {
            var selectedProvinsi = $(this).val();

            selectedProvinsiFind = $tmpProvinsi2.find((v) => v.name === selectedProvinsi);

            if (selectedProvinsiFind) {
                _PROVINSI2 = selectedProvinsi;
                loadKabupaten(selectedProvinsiFind.id, true);
            }
        });

        $("select#selectize-kabupaten").change(function() {
            var selectedKabupaten = $(this).val();

            selectedKabupatenFind = $tmpKabupaten.find((v) => v.name === selectedKabupaten);

            if (selectedKabupatenFind) {
                _KABUPATEN = selectedKabupaten;
                loadKecamatan(selectedKabupatenFind.id);
            }
        });

        $("select#selectize-kabupaten2").change(function() {
            var selectedKabupaten = $(this).val();

            selectedKabupatenFind = $tmpKabupaten2.find((v) => v.name === selectedKabupaten);

            if (selectedKabupatenFind) {
                _KABUPATEN2 = selectedKabupaten;
                loadKecamatan(selectedKabupatenFind.id, true);
            }
        });

        $("select#selectize-kecamatan").change(function() {
            _KECAMATAN = $(this).val();
        });

        $("select#selectize-kecamatan2").change(function() {
            _KECAMATAN2 = $(this).val();
        });

        $("select.tt-selectize").selectize();

        setDefaultYearsPendidikan();
        setDefaultAddress(false);
        setDefaultAddress(true);

        // UppyJs
        $photoUploader = window.initUppy('#triggerUppyPhotoUploader', {
            endpoint: SITE_URL + "candidate-api/update-biodata/save-data-profile",
            formData: true,
            fieldName: "photo_candidate",
            headers: {
                'X-MASTER-ID-CANDIDATE': '<?= $biodata['id'] ?>'
            }
        });

        $photoUploader.on("complete", function(result) {
            const {
                successful
            } = result;

            if (successful) {
                const {
                    response
                } = successful[0];

                if (response) {
                    const {
                        uploaded
                    } = response.body

                    app.profile.url = uploaded.url;
                }
            }

        });

        // Show app
        document.getElementById('update-biodata-app-root').style.display = '';
    });
</script>