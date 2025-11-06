<div id="create-kandidat-app-root">
    <div class="row">
        <div class="col-lg-12">
            <div class="card z-index-2 h-100">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h3>Tambah Kandidat</h3>
                    </div>
                    <div>
                        <a href="<?= site_url('/kandidat') ?>"
                            class="btn btn-xs btn-primary">
                            <i class="fa fa-arrow-left"></i> Kandidat
                        </a>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-4">
                            <div class="displayInLine">
                                <!-- Data Content -->

                                <form id="form-create-candidate"
                                    action="<?= site_url('/kandidat/create') ?>"
                                    onsubmit="return false;" enctype="multipart/form-data" method="post">
                                    <div id="data-diri" v-show="show_tab == 'data-diri'">
                                        <div class="card z-index-2 h-100">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                                <h6 class="text-capitalize">Biodata</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Nama
                                                                Lengkap (Sesuai KTP)</label>
                                                            <input v-model="data_diri.name_candidate"
                                                                name="name_candidate" class="form-control tt-gede"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Email</label>
                                                            <input v-model="data_diri.email_candidate"
                                                                name="email_candidate" class="form-control"
                                                                type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">No
                                                                Kontak</label>
                                                            <input v-model="data_diri.no_candidate" name="no_candidate"
                                                                class="form-control" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Tempat Lahir</label>
                                                            <input v-model="data_diri.tempat_lahir_candidate"
                                                                name="tempat_lahir_candidate"
                                                                class="form-control tt-gede" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Tanggal Lahir</label>
                                                            <input v-model="data_diri.birthdate_candidate"
                                                                name="birthdate_candidate" class="form-control"
                                                                type="date" />
                                                        </div>
                                                    </div>
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
                                                            <label for="example-text-input"
                                                                class="form-control-label">Jenis Kelamin</label>
                                                            <select v-model="data_diri.jk_candidate"
                                                                class="form-control" name="jk_candidate">
                                                                <option v-for="kel in jenis_kelamin" :key="kel.id"
                                                                    :value="kel.id">
                                                                    {{ kel.text }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Status</label>
                                        <select v-model="data_diri.marital_candidate" class="form-control" name="marital_candidate">
                                            <option value="">-- pilih --</option>
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
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="button" @click="changeTab('pendidikan')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-right"></i> &nbsp;Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pendidikan" v-show="show_tab == 'pendidikan'">
                                        <div class="card z-index-2 h-100">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                                <h6 class="text-capitalize">Pendidikan</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Jenjang Pendidikan</label>
                                                            <select v-model="pendidikan.study_level"
                                                                class="form-control" name="study_level">
                                                                <option v-for="level in study_level_list"
                                                                    :key="level.id">
                                                                    {{ level.text }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Nama
                                                                Institusi Pendidikan</label>
                                                            <input v-model="pendidikan.name_school" name="name_school"
                                                                placeholder="SMK/UNIV" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Jurusan</label>
                                                            <input v-model="pendidikan.jurusan" name="jurusan_"
                                                                placeholder="TEKNIK INFORMATIKA" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Major</label>
                                                            <select v-model="pendidikan.major_school"
                                                                name="major_school" class="form-control">
                                                                <option value="1">True</option>
                                                                <option value="0">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Tahun Pendidikan</label>
                                                            <select v-model="pendidikan.year_first" name="year_first"
                                                                placeholder="-- select --"
                                                                class="form-control tt-gede tt-selectize"
                                                                data-selectize="pendidikan_yf">
                                                                <?php for($i=0; $i<350; $i++): ?>
                                                                <option
                                                                    value="<?= 1990 + $i ?>">
                                                                    <?= 1990 + $i ?>
                                                                </option>
                                                                <?php endfor ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Sampai
                                                                Dengan</label>
                                                            <select v-model="pendidikan.year_last" name="year_last"
                                                                placeholder="-- select --"
                                                                class="form-control tt-gede tt-selectize"
                                                                data-selectize="pendidikan_yl">
                                                                <?php for($i=0; $i<350; $i++): ?>
                                                                <option
                                                                    value="<?= 1990 + $i ?>">
                                                                    <?= 1990 + $i ?>
                                                                </option>
                                                                <?php endfor ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Tahun
                                                                Pendidikan</label>
                                                            <input v-model="pendidikan.year_first" name="year_first"
                                                                class="form-control" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Sampai Dengan</label>
                                                            <input v-model="pendidikan.year_last" name="year_last"
                                                                class="form-control" type="date" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-between">
                                                        <button type="button" @click="changeTab('data-diri')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-left"></i> &nbsp;Prev
                                                        </button>
                                                        <button type="button" @click="changeTab('alamat')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-right"></i> &nbsp;Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="alamat" v-show="show_tab == 'alamat'">
                                        <div class="card z-index-2 h-100">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                                <h6 class="text-capitalize">Alamat</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Alamat</label>
                                                            <textarea v-model="alamat.alamat" name="alamat"
                                                                placeholder="JL.RAYA KANDANGAN 1, KANDANGAN"
                                                                class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Provinsi</label>
                                                            <select v-model="alamat.provinsi" name="provinsi"
                                                                placeholder="-- pilih --"
                                                                class="form-control tt-gede tt-selectize"
                                                                id="selectize-provinsi">
                                                            </select>
                                                            <!-- <select v-model="alamat.provinsi" name="provinsi"
                                                                class="selectize" id="selectize-provinsi">
                                                            </select> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Kabupaten/Kota</label>
                                                            <!--  <select v-model="alamat.kabupaten" name="kabupaten"
                                                                class="selectize" id="selectize-kabupaten"></select> -->
                                                            <select v-model="alamat.kabupaten" name="kabupaten"
                                                                placeholder="-- pilih --"
                                                                class="form-control tt-gede tt-selectize"
                                                                id="selectize-kabupaten">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Kecamatan</label>
                                                            <!-- <select v-model="alamat.kecamatan" name="kecamatan"
                                                                class="selectize" id="selectize-kecamatan"></select> -->
                                                            <select v-model="alamat.kecamatan" name="kecamatan"
                                                                placeholder="-- pilih --"
                                                                class="form-control tt-gede tt-selectize"
                                                                id="selectize-kecamatan">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Kode
                                                                Pos</label>
                                                            <input v-model="alamat.kode_pos" name="kode_pos"
                                                                placeholder="Isi Kode Pos" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">No
                                                                Handphone</label>
                                                            <input v-model="alamat.noaddress_candidate" name="no_tlp"
                                                                placeholder="08654xxxxx" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-between">
                                                        <button type="button" @click="changeTab('pendidikan')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-left"></i> &nbsp;Prev
                                                        </button>
                                                        <button type="button" @click="changeTab('pengalaman-kerja')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-right"></i> &nbsp;Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pengalaman-kerja" v-show="show_tab == 'pengalaman-kerja'">
                                        <div class="card z-index-2 h-100">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                                <h6 class="text-capitalize">Pengalaman Kerja</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row" v-show="showFormAdd">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Nama
                                                                Perusahaan</label>
                                                            <input v-model="pengalaman.name_company"
                                                                placeholder="PT.SEJAHTERA" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Jenis
                                                                Perusahaan</label>
                                                            <input v-model="pengalaman.type_company"
                                                                placeholder="Konveksi & Apparel" class="form-control"
                                                                type="text" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Tahun Masuk</label>
                                                            <select v-model="pendidikan.year_first" name="year_first"
                                                                class="form-control tt-gede tt-selectize"
                                                                data-selectize="pendidikan_yf">
                                                                <?php for($i=0; $i<350; $i++): ?>
                                                                <option
                                                                    value="<?= 1990 + $i ?>">
                                                                    <?= 1990 + $i ?>
                                                                </option>
                                                                <?php endfor ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Sampai
                                                                Dengan</label>
                                                            <select v-model="pendidikan.year_last" name="year_last"
                                                                class="form-control tt-gede tt-selectize"
                                                                data-selectize="pendidikan_yl">
                                                                <?php for($i=0; $i<350; $i++): ?>
                                                                <option
                                                                    value="<?= 1990 + $i ?>">
                                                                    <?= 1990 + $i ?>
                                                                </option>
                                                                <?php endfor ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Tahun
                                                                Masuk</label>
                                                            <input v-model="pengalaman.first_year" class="form-control"
                                                                type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Sampai
                                                                Dengan</label>
                                                            <input v-model="pengalaman.last_year" class="form-control"
                                                                type="date" />
                                                        </div>
                                                    </div> -->

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Jabatan Terakhir</label>
                                                            <input v-model="pengalaman.last_position" placeholder="HRD"
                                                                class="form-control" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" v-show="showFormAdd">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label">Deskripsi Pekerjaan</label>
                                                            <textarea v-model="pengalaman.description"
                                                                placeholder="Saya bekerja di PT.SEJAHTERA sebagai HRD bekerja menjadi HRD."
                                                                class="form-control" rows="5"></textarea>
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
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-end mb-5">
                                                            <button type="button" @click="addPengalaman"
                                                                :class="['btn btn-sm mb-0', pengalaman_mode === 'add' ? 'bg-gradient-secondary' : 'bg-gradient-success']">
                                                                <i
                                                                    :class="['fas', pengalaman_mode === 'add' ? 'fa-plus' : 'fa-save']"></i>
                                                                &nbsp;{{ pengalaman_mode === 'add' ? 'New' :
                                                                (pengalaman_mode === 'update' ? 'Save' : 'Add') }}
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
                                                                    <tr v-for="(item, index) in pengalaman_list"
                                                                        :key="index">
                                                                        <td>
                                                                            <div class="d-flex px-2 py-1">
                                                                                <div
                                                                                    class="d-flex flex-column justify-content-center">
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
                                                                                {{ item.employee_company }}</p>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-secondary text-xs font-weight-bold">
                                                                                {{ item.last_position }}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-secondary text-xs font-weight-bold">
                                                                                {{ diffLamaBekerja(new
                                                                                Date(item.first_year), new
                                                                                Date(item.last_year)) }}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span style="cursor: pointer;"
                                                                                class="text-secondary font-weight-bold text-xs">
                                                                                Lihat
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <i @click="editPengalaman(item.tempid)"
                                                                                class="text-primary fas fa-pen"
                                                                                style="cursor: pointer;"></i>
                                                                            &nbsp;&nbsp;
                                                                            <i @click="deletePengalaman(item.tempid)"
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
                                                <div class="row mt-5">
                                                    <div class="col-md-12 d-flex justify-content-between">
                                                        <button type="button" @click="changeTab('alamat')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-left"></i> &nbsp;Prev
                                                        </button>
                                                        <button type="button" @click="changeTab('data-pendukung')"
                                                            class="btn-step btn bg-gradient-primary mb-0">
                                                            <i class="fas fa-arrow-right"></i> &nbsp;Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="data-pendukung" v-show="show_tab == 'data-pendukung'">
                                        <div class="card z-index-2 h-100">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                                <h6 class="text-capitalize">Data Pendukung</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="card mt-2">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6 class="card-title">Ijazah</h6>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input name="file_pendukung" class="form-control"
                                                                    type="file" />
                                                                <small class="text-info">File yang diizinkan: pdf | Max
                                                                    size: 10MB</small>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <h6 class="card-title">Foto</h6>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input name="photo_candidate" class="form-control"
                                                                    type="file" />
                                                                <small class="text-info">File yang diizinkan:
                                                                    png|jpg|jpeg | Max
                                                                    size: 10MB</small>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="d-flex justify-content-between">
                                                                    <button type="button"
                                                                        @click="changeTab('pengalaman-kerja')"
                                                                        class="btn btn-primary bg-gradient-primary">
                                                                        <i class="fas fa-arrow-left"></i> &nbsp;Prev
                                                                    </button>
                                                                    <button type="button" @click="saveKandidat"
                                                                        class="btn btn-danger bg-gradient-danger">
                                                                        <i class="fas fa-save"></i> Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Data Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Show Description -->
    <div data-test="apa" class="modal fade" id="showDescriptionModal" tabindex="-1" role="dialog"
        aria-labelledby="showDescriptionModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <p id="showDescriptionModalContent"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div> <!-- app root -->

<script src="<?= base_url('assets/js/ext/vue.js') ?>">
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    window.onload = function() {
        const formPengalamanKerjaVars = document.getElementById('form-pengalaman-kerja-vars');

        var app = new Vue({
            el: '#create-kandidat-app-root',
            data() {
                return {
                    show_tab: 'data-diri',
                    showFormAdd: false,
                    pengalamanTempId: 1,
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
                    data_diri: {
                        name_candidate: '',
                        email_candidate: '',
                        no_candidate: '',
                        tempat_lahir_candidate: '',
                        birthdate_candidate: '',
                        jk_candidate: '',
                        religion_candidate: '',
                        marital_candidate: '',
                        socialmedia2_candidate: '',
                        socialmedia_candidate: ''
                    },
                    pendidikan: {
                        study_level: 'SMK',
                        name_school: '',
                        major_school: 1,
                        jurusan: '',
                        year_first: '',
                        year_last: '',
                    },
                    alamat: {
                        alamat: '',
                        provinsi: '',
                        kabupaten: '',
                        kecamatan: '',
                        kode_pos: '',
                        noaddress_candidate: ''
                    },
                    pengalaman: {
                        name_company: '',
                        type_company: '',
                        first_year: '',
                        last_year: '',
                        employee_company: '',
                        last_position: '',
                        description: ''
                    },
                    pengalaman_mode: 'add',
                    pengalaman_list: [],
                    pendukung: {
                        file: null
                    },
                    form_errors: []
                }
            },
            methods: {
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
                            this.deletePengalaman(pengalaman.tempid);
                            this.pengalaman_list.push(pengalaman);
                        } else {
                            pengalaman.tempid = this.pengalamanTempId;
                            this.pengalamanTempId += 1;
                            this.pengalaman_list.push(pengalaman);
                        }

                        this.resetFormPengalaman();

                        this.showFormAdd = false;
                        this.pengalaman_mode = 'add';
                    }
                },
                editPengalaman(id) {
                    var pengalaman = this.pengalaman_list.find((v) => v.tempid === id);

                    if (pengalaman) {
                        this.pengalaman.tempid = pengalaman.tempid;
                        this.pengalaman.name_company = pengalaman.name_company;
                        this.pengalaman.type_company = pengalaman.type_company;
                        this.pengalaman.first_year = pengalaman.first_year;
                        this.pengalaman.last_year = pengalaman.last_year;
                        this.pengalaman.employee_company = pengalaman.employee_company;
                        this.pengalaman.last_position = pengalaman.last_position;
                        this.pengalaman.description = pengalaman.description;

                        this.showFormAdd = true;
                        this.pengalaman_mode = 'update';
                    }
                },
                deletePengalaman(id) {
                    this.pengalaman_list = this.pengalaman_list.filter((v) => v.tempid !== id);
                },
                resetFormPengalaman() {
                    this.pengalaman.name_company = '';
                    this.pengalaman.type_company = '';
                    this.pengalaman.first_year = '';
                    this.pengalaman.last_year = '';
                    this.pengalaman.employee_company = '';
                    this.pengalaman.last_position = '';
                    this.pengalaman.description = '';
                },
                saveKandidat() {
                    var fmel = document.getElementById('form-create-candidate');
                    var form = new FormData(fmel);

                    // TODO: Refactor
                    form.set('provinsi', $('select#selectize-provinsi').text());
                    form.set('kabupaten', $('select#selectize-kabupaten').text());
                    form.set('kecamatan', $('select#selectize-kecamatan').text());

                    axios.post(fmel.action, form)
                        .then((response) => {
                            Swal.fire('Success!', 'Kandidat berhasil ditambahkan.', 'success').then((
                                x) => {
                                document.location.href =
                                    '<?= site_url('/kandidat') ?>';
                            });
                        })
                        .catch((error) => {
                            Swal.fire('Error!', error.message ?? 'Kandidat gagal ditambahkan.',
                                'error');
                        });
                },
                diffLamaBekerja(date1, date2) {
                    var seconds = Math.floor((date2 - date1) / 1000);

                    var interval = Math.floor(seconds / 31536000);

                    if (interval > 1) {
                        return interval + " tahun";
                    }
                    interval = Math.floor(seconds / 2592000);
                    if (interval > 1) {
                        return interval + " bulan";
                    }
                    interval = Math.floor(seconds / 86400);
                    if (interval > 1) {
                        return interval + " hari";
                    }
                    interval = Math.floor(seconds / 3600);
                    if (interval > 1) {
                        return interval + " jam";
                    }
                    interval = Math.floor(seconds / 60);
                    if (interval > 1) {
                        return interval + " menit";
                    }
                    return Math.floor(seconds) + " detik";
                }
            }
        });

        var $selectizeProvinsi = $("select#selectize-provinsi").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        var $selectizeKabupaten = $("select#selectize-kabupaten").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        var $selectizeKecamatan = $("select#selectize-kecamatan").selectize({
            maxItems: 1,
            valueField: "name",
            labelField: "name",
            searchField: "name",
            options: [],
            create: false,
        });

        var $selectizeProvinsiControl = $selectizeProvinsi[0].selectize;
        var $selectizeKabupatenControl = $selectizeKabupaten[0].selectize;
        var $selectizeKecamatanControl = $selectizeKecamatan[0].selectize;

        var $tmpProvinsi = [];
        var $tmpKabupaten = [];
        var $tmpKecamatan = [];

        function loadProvinsi() {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=provinces.json`,
                cache: true,
                success: function(response) {
                    $selectizeProvinsiControl.clearOptions();
                    $tmpProvinsi = [];

                    response.forEach((v) => {
                        $tmpProvinsi.push(v);
                        $selectizeProvinsiControl.addOption({
                            id: v.id,
                            name: v.name,
                        });
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("selectize: oupz, something wen't wrong!");
                },
            });
        }

        function loadKabupaten(id_provinsi) {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=regencies/${id_provinsi}.json`,
                cache: true,
                success: function(response) {
                    $selectizeKabupatenControl.clearOptions();
                    $tmpKabupaten = [];

                    response.forEach((v) => {
                        $tmpKabupaten.push(v);
                        $selectizeKabupatenControl.addOption({
                            id: v.id,
                            name: v.name,
                        });
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("selectize: oupz, something wen't wrong!");
                },
            });
        }

        function loadKecamatan(id_kabupaten) {
            $.ajax({
                url: `${SITE_URL}api-wilayah.php?s=districts/${id_kabupaten}.json`,
                cache: true,
                success: function(response) {
                    $selectizeKecamatanControl.clearOptions();
                    $tmpKecamatan = [];

                    response.forEach((v) => {
                        $tmpKecamatan.push(v);
                        $selectizeKecamatanControl.addOption({
                            id: v.id,
                            name: v.name,
                        });
                    });
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
                loadKabupaten(selectedProvinsiFind.id);
            }
        });

        $("select#selectize-kabupaten").change(function() {
            var selectedKabupaten = $(this).val();

            selectedKabupatenFind = $tmpKabupaten.find((v) => v.name === selectedKabupaten);

            if (selectedKabupatenFind) {
                loadKecamatan(selectedKabupatenFind.id);
            }
        });

        loadProvinsi();
    }
</script>