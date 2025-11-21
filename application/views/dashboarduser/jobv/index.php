
<div id="jobv-app-root" class="d-none">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3>Lowongan</h3>
                </div>
                
                <?php 
                if($biodataLengkap){
                if ($dapatMelamar): 
                    if (empty($result) ) { ?>
                    <div class="card-body p-3">
                    <div class="d-flex justify-content-between">
                        <button id="tabPemilihanLowonganToggler" @click="switchTab('#tabPemilihanLowongan')"
                            class="btn-switch-tab btn btn-md w-100 bg-info text-white">
                            Pemilihan Lowongan
                        </button>
                        &nbsp;&nbsp;
                        <button id="tabPemilihanBatchToggler" @click="switchTab('#tabPemilihanBatch')"
                            class="btn-switch-tab btn btn-md w-100 text-dark">
                            Pemilihan Jadwal
                        </button>
                    </div>
                    <!-- Tab Lowongan -->
                    <div id="tabPemilihanLowongan">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="alert bg-success alert-dismissible text-white" role="alert">
                                    <span class="alert-icon"><i class="fas fa-info"></i></span>
                                    <span class="alert-text"><strong>Info</strong> Anda bisa klik <b>+lowongan</b> untuk memilih lowongan tersebut, Klik <b>detail lowongan</b> untuk melihat deskripsi dan kualifikasi untuk lowongan tersebut. Jika sudah anda bisa ganti tab ke pemilihan jadwal atau klik tombol apply lamaran.</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
    <div class="card card-body shadow-sm mb-3">
        <label for="">FILTER BY DIVISI</label>
        <select class="form-control" v-model="filterDivision">
            <option value="all-division">SEMUA DIVISI</option>
            <?php foreach ($division as $divisi): ?>
            <option value="<?= $divisi['id_division'] ?>">
                <?= $divisi['name_division'] ?>
            </option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="card card-body shadow-sm mb-3">
        <label>FILTER BY PENDIDIKAN</label>
        <select class="form-control" v-model="filterEducation">
            <option value="all-education">SEMUA PENDIDIKAN</option>
            <?php
            $pendidikan = ['SD / MI','SMP / MTS','SMA / SMK / MA','D3','D4','S1','S2','S3'];
            foreach ($pendidikan as $edu):
            ?>
                <option value="<?= $edu ?>"><?= strtoupper($edu) ?></option>
            <?php endforeach; ?>
        </select>
    </div>


                                <div class="mt-4">
                                    <button @click="switchTab('#tabPemilihanBatch')":disabled="selectedJobs.length === 0" class="d-none d-md-block btn btn-md w-100 btn-info">
                                        <i class="fas fa-arrow-right"></i> Apply Lamaran
                                    </button>
                                </div>
                           
                        </div>  
                            <div class="col-md-8 mb-3">
                                <!-- Begin List Loker -->
                                <div v-for="job in filteredJobs" :key="`cardLowonganCrx-${job.id}`"
                                    class="card card-body shadow-sm mb-3">
                                    <div class="list-group-item list-group-item-action" aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="d-flex d-inline">
                                                <h5 class="font-medium">{{ job.name_job }}</h5>
                                            </div>
                                            <small>
                                               <span v-if="job.is_active == 1 && job.scheduling_status === 'scheduled'"
                                                    class="badge bg-success">
                                                    Tersedia (Terjadwal)
                                                </span>
                                                
                                                <span v-if="job.is_active == 1 && job.scheduling_status === 'not_scheduled'"
                                                    class="badge bg-warning"> Tersedia (Belum Ada Jadwal)
                                                </span>

                                                <span v-if="job.is_active != 1" 
                                                    class="badge bg-danger">
                                                    Tidak Tersedia
                                                </span>
                                            </small>
                                        </div>
                                          <p class="mb-1 text-muted fw-bold">
                                            Pendidikan: {{ job.education_job }}
                                        </p>
                                        
                                      <p class="mb-1 text-muted fw-bold" >Lokasi Penempatan: {{ job.city_job && job.city_job.length > 0 ? job.city_job.join(', ') : 'WFH' }}</p>


                                        <p class="mb-1"></p>
                                        <p v-html="job.description_job_"></p>
                                        <p class="mb-1"></p>
                                        <!-- Detail Collapse -->
                                        <div class="collapse" v-bind:id="`collapseDetailLowongan-${job.id}`">
                                            <div>
                                                <h6 class="font-medium">Deskripsi</h6>
                                                <div v-html="job.description_job"></div>
                                            </div>
                                            <div>
                                                <h6 class="font-medium">Persyaratan</h6>
                                                <div v-html="job.requirement_job"></div>
                                            </div>
                                            <div>
                                                <h6 class="font-medium">Jadwal Tersedia</h6>
                                                <div v-if="job.batchs.length === 0">
                                                    <p>Belum ada jadwal yang tersedia untuk lowongan ini.</p>
                                                </div>
                                                <div v-else class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                                    Jadwal</th>
                                                                <th
                                                                    class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                                    Tanggal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="batch in job.batchs"
                                                                :key="`tableBatchForJob-${batch.id_batch}`">
                                                                <td>
                                                                    <span class="text-dark text-xs font-weight-bold"
                                                                        v-text="batch.name_batch"></span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark text-xs font-weight-bold"
                                                                        v-text="getDateForBatch(batch)"></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Detail Collapse -->
                                        <div class="d-flex w-100 justify-content-between">
                                            <button class="btn btn-xs btn-info bg-info shadow-none" type="button"
                                                data-bs-toggle="collapse"
                                                v-bind:data-bs-target="`#collapseDetailLowongan-${job.id}`"
                                                aria-expanded="false"
                                                v-bind:aria-controls="`#collapseDetailLowongan-${job.id}`">
                                                <i class="fas fa-eye"></i> Detail Lowongan
                                            </button>
                                            <button v-if="_checkIsJobSelected(job.id) === false"
                                                @click="addSelectedJob(job)" :disabled="job.is_active != 1"
                                                class="btn btn-xs btn-success bg-success shadow-none">
                                                <i class="fas fa-plus"></i> Lowongan
                                            </button>
                                            <button v-else @click="removeSelectedJob(job)"
                                                class="btn btn-xs btn-success bg-warning shadow-none">
                                                <i class="fas fa-times"></i> Batal Pilih
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Loker -->
                                <div class="mt-4">
                                    <button @click="switchTab('#tabPemilihanBatch')" class="d-block d-md-none btn btn-md w-100 btn-info">
                                        <i class="fas fa-arrow-right"></i> Apply Lamaran
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Tab Lowongan -->

                    <!-- Tab Pemilihan Batch -->
                    <div id="tabPemilihanBatch" class="d-none">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="alert bg-success alert-dismissible text-white" role="alert">
                                    <span class="alert-icon"><i class="fas fa-info"></i></span>
                                    <span class="alert-text"><strong>Info</strong> Cek kembali apakah lowongan yang anda lamar sudah benar. Harap diperhatikan proses seleksi akan dimulai dari urutan pertama, jadi sesuaikan agar grade yang paling tinggi berada di urutan nomor satu. <b>Jika anda mampu untuk mengisi lowongan di urutan ke dua dan di urutan pertama anda juga lolos, maka anda akan diterima di urutan pertama.</b> Saat anda memilih jadwal jika di jadwal yang anda pilih tidak tersedia di salah satu lowongan maka lamaran anda hanya diseleksi sesuai dengan lowongan yang terdapat di jadwal yang anda pilih</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        <div class="col-md-12 mb-3"> 
    <h6 class="font-medium mb-3">Lowongan Anda</h6>

    <div class="row g-3">
        <div 
            v-for="(selectedJob, index) in selectedJobs"
            :key="`selectedJobCard-${selectedJob.id}`"
            :class="getColClass(selectedJobs.length)"
        >
            <div class="card shadow-sm border rounded position-relative">
                <div class="card-body d-flex flex-column justify-content-between">
                    <!-- Prioritas -->
                    <div class="mb-2 text-center">
                       <span class="badge bg-primary fs-7 py-1 px-2">
                            Pilihan ke-{{ selectedJob.priority }}
                        </span>
                    </div>

                    <!-- Nama Job -->
                    <h6 class="fw-bold text-center mb-3" v-text="selectedJob.name_job"></h6>

                    <div class="mb-2">
                        <p class="mb-1">
                            <span class="fw-semibold">Grade:</span>
                            <span>{{ selectedJob.grade_value }}</span>
                        </p>
                        <p class="mb-3">
                            <span class="fw-semibold">Jadwal:</span>
                            <span>{{ fmtDisplayAvailableBatchForJob(selectedJob) }}</span>
                        </p>
                    </div>

                    <!-- Actions -->
                   <div class="d-flex gap-2">
                    <!-- Pilihan Prioritas Mini -->
                    <div class="d-flex flex-column align-items-center">
                        <div class="mb-1" style="font-size: 12px; font-weight: 600; color: #707070ff;">
                        Pilih Prioritas
                        </div>

                        <div class="btn-group" role="group" aria-label="Pilih prioritas">
                        <label v-for="n in selectedJobs.length" :key="n"
                                :class="['btn p-1', selectedJob.priority === n ? 'btn-primary' : 'btn-outline-primary']"
                                style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; font-size: 12px;">
                            <input type="radio"
                                class="d-none"
                                :value="n"
                                v-model.number="selectedJob.priority"
                                @change="onPriorityChange(selectedJob)">
                            {{ n }}
                        </label>
                        </div>
                    </div>
                    </div>

                    <div style="display: flex; gap: 5px; justify-content: flex-end;">
      <button class="btn btn-info btn-sm"
              type="button"
              data-bs-toggle="collapse"
              :data-bs-target="`#collapseDetailLowongan-${selectedJob.id}`"
              aria-expanded="false"
              :aria-controls="`collapseDetailLowongan-${selectedJob.id}`">
        <i class="fas fa-info"></i>
      </button>

      <button class="btn btn-danger p-1"
              style="width: 28px; height: 28px; font-size: 12px; border-radius: 50%;"
              @click="removeSelectedJob(selectedJob)">
        <i class="fas fa-trash"></i>
      </button>
    </div>

    <!-- Collapse content -->
    <div :id="`collapseDetailLowongan-${selectedJob.id}`" class="collapse mt-2">
      <div class="card card-body p-2 shadow-sm border rounded">
        <h6 class="font-medium">Deskripsi</h6>
        <div v-html="selectedJob.description_job" class="text-sm text-muted mb-2"></div>

        <h6 class="font-medium">Persyaratan</h6>
        <div v-html="selectedJob.requirement_job" class="text-sm text-muted mb-2"></div>

        <h6 class="font-medium">Jadwal Tersedia</h6>
        <div v-if="selectedJob.batchs.length === 0" class="text-sm text-muted">
          Belum ada jadwal
        </div>
        <div v-else class="table-responsive">
          <table class="table table-sm table-striped mb-0">
            <tr v-for="batch in selectedJob.batchs" :key="batch.id_batch">
              <td>{{ batch.name_batch }}</td>
              <td>{{ getDateForBatch(batch) }}</td>
            </tr>
          </table>
        </div>
        </div>
      </div>
                </div>
            </div>
        </div>
    </div>
</div>


                            <div class="col-md-12 mt-3 mb-3">
                                <h6 class="font-medium">Pilih Jadwal</h6>
                            </div>

                            <!-- Select Batch -->
                            <div v-for="avBatch in filterAvailableBatchs()" :key="`listOfAvBatch-${avBatch.id_batch}`"
                                class="col-md-4 mb-3">
                                <div class="card shadow-none border-1">
                                    <div class="card-body">
                                        <h5 class="font-medium" v-text="avBatch.name_batch"></h5>
                                        <p class="text-dark text-xs font-weight-bold"><i class="fas fa-arrow-right"></i>
                                            {{
                                            getDateForBatchSeparated(avBatch.start_date) }}</p>
                                        <p class="text-dark text-xs font-weight-bold"><i class="fas fa-arrow-right"></i>
                                            {{
                                            getDateForBatchSeparated(avBatch.due_date) }}</p>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <button @click="showTimelineModal(avBatch)" class="btn btn-xs btn-blog btn-info">
                                                <i class="fas fa-book"></i> Lihat Jadwal
                                            </button>
                                            <button @click="pilihJadwalPenerbangan(avBatch)"
                                                class="btn btn-xs btn-blog btn-success">
                                                <i class="fas fa-paper-plane"></i> Pilih Jadwal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Select Batch -->
                        </div>
                    </div>
                    <!-- / Tab Pemilihan Batch -->
                </div>
                <?php }else{ ?>
                    <div class="card-body p-3">
                    <div class="alert">
                        Anda memiliki jadwal yang sedang berjalan, silahkan pergi ke menu Pengumuman untuk melihat
                        progress lowongan yang sedang berjalan. Kamu dapat melamar kembali saat semua
                        jadwal yang anda jalani sudah selesai.
                    </div>
                </div>
                <?php } ?>
                <?php else: ?>
                <div class="card-body p-3">
                    <div class="alert">
                        Kamu telah menggunakan seluruh kuota pemilihan, silahkan pergi ke menu Pengumuman untuk melihat
                        progress dari setiap lowongan yang telah kamu lamar. Kamu dapat melamar kembali saat semua
                        lowongan yang kamu pilih sudah selesai.
                    </div>
                </div>
                <?php endif ?>
                <?php }else{ ?>
                    <div class="card-body p-3">
                    <div class="alert">
                        Biodata anda belum lengkap klik <b><u><a href="<?= site_url('candidate-biodata') ?>">disini</a></u></b> untuk mengisi
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="timelineModal" tabindex="-1" role="dialog" aria-labelledby="timelineModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="timelineModalLabel">
                    Detail Timeline: <span v-if="selectedBatchForModal">{{ selectedBatchForModal.name_batch }}</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div v-if="isModalLoading" class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <p class="mt-2">Memuat data timeline...</p>
                </div>

                <ul v-if="!isModalLoading && modalTimelineData.length > 0" class="list-group">
                    <li v-for="timeline in modalTimelineData" :key="timeline.id_timeline" class="list-group-item">
                        <h6 class="font-weight-bold">{{ timeline.name_timeline }}</h6>
                        <p class="mb-1">{{ timeline.description_timeline }}</p>
                        <small class="text-muted">
                            Mulai: {{ timeline.start_date_time }} | Selesai: {{ timeline.end_date_time }}
                        </small>
                    </li>
                </ul>

                <div v-if="!isModalLoading && modalTimelineData.length === 0" class="text-center">
                    <p class="text-muted">Tidak ada data timeline yang tersedia untuk batch ini.</p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>




<script src="<?= base_url('assets/js/ext/vue.js') ?>">
</script>
<script src="<?= base_url('assets/js/ext/axios.min.js') ?>">
</script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        const JOB_DATA_URL =
            "<?= site_url('candidatejob/getJobAsJson') ?>";
        const LAMAR_MALA_URL =
            "<?= site_url('candidatejob/lamarJadwal') ?>";
        const TIMELINE_URL = 
            "<?= site_url('candidatejob/getTimelineByBatch') ?>";

        const app = new Vue({
            el: '#jobv-app-root',
            created() {
                this.loadDataJob();
            },
            data() {
                return {
                    jobLists: [],
                    selectedJobs: [],
                    availableBatchs: [],
                    filterDivision: 'all-division',
                    filterEducation: 'all-education',
                    selectedBatchForModal: null, 
                    modalTimelineData: [], 
                    isModalLoading: false
                }
            },
            watch: {
                selectedJobs: function(val) {
                    if (val.length === 0) {
                        this.switchTab('#tabPemilihanLowongan');
                    }
                }
            },
            computed: {
               filteredJobs() {

                return this.jobLists.filter(job => {

                    // === FILTER DIVISI ===
                    const matchDivision =
                        this.filterDivision === 'all-division' ||
                        job.id_division == this.filterDivision;

                    // === FILTER PENDIDIKAN ===
                    const matchEducation =
                        this.filterEducation === 'all-education' ||      
                        job.education_job === this.filterEducation;

                    return matchDivision && matchEducation;
                });
            }
         },

            methods: {
            onPriorityChange(changedJob) {
                const newPriority = parseInt(changedJob.priority);
                const oldPriority = changedJob.oldPriority ?? newPriority;

                if (newPriority === oldPriority) {
                    return; // Tidak ada perubahan, langsung keluar
                }

                let selectedJobs = [...this.selectedJobs];

                // Cari job yang diubah
                const jobIndex = selectedJobs.findIndex(job => job.id === changedJob.id);
                if (jobIndex === -1) return;

                // Update priority job yang dipilih
                selectedJobs[jobIndex].priority = newPriority;

                // Jika naik prioritas (misal 3 ke 1)
                if (oldPriority > newPriority) {
                    // Geser yang posisinya >= newPriority dan < oldPriority naik 1
                    selectedJobs.forEach(job => {
                        if (job.id !== changedJob.id && job.priority >= newPriority && job.priority < oldPriority) {
                            job.priority += 1;
                        }
                    });
                }
                // Jika turun prioritas (misal 1 ke 3)
                else if (oldPriority < newPriority) {
                    // Geser yang posisinya <= newPriority dan > oldPriority turun 1
                    selectedJobs.forEach(job => {
                        if (job.id !== changedJob.id && job.priority <= newPriority && job.priority > oldPriority) {
                            job.priority -= 1;
                        }
                    });
                }

                // Update oldPriority agar bisa dibandingkan lagi di masa depan
                selectedJobs[jobIndex].oldPriority = newPriority;

                // Urutkan berdasarkan priority ascending
                selectedJobs.sort((a, b) => a.priority - b.priority);

                // Assign ulang ke reactive data
                this.selectedJobs = selectedJobs;
            },

              getColClass(length) {
        
                switch(length) {
                    case 1: return 'col-12'; // 1 full width
                    case 2: return 'col-12 col-md-6'; // 2 per row
                    case 3: return 'col-12 col-md-4'; // 3 per row
                    case 4: return 'col-12 col-md-3'; // 4 per row
                    default: return 'col-12 col-md-3'; // fallback
                }
            },
                pilihJadwalPenerbangan(batch) {
                    Swal.fire({
                        icon: 'question',
                        title: 'Konfirmasi Jadwal!',
                        text: 'Perhatikan bahwa lowongan yang akan dilamar hanya lowongan yang berada dalam jadwal, dan lowongan lain yang tidak ada didalam jadwal ini tidak akan dilamar.',
                        allowOutsideClick: false,
                        showCancelButton: true,
                        cancelButtonText: 'Batal',
                        confirmButtonText: 'Ya, Pilih Jadwal'
                    }).then((response) => {
                        if (response.isConfirmed) {
                            $.LoadingOverlay("show");

                            const form = new FormData();
                            const lowongan = this.selectedJobs.filter(function(job) {
                                const batchs = job.batchs;
                                const foundj = batchs.filter((v) => v.id_batch === batch
                                    .id_batch);

                                if (foundj.length > 0) {
                                    return true;
                                }

                                return false;
                            }).map(j => j.id);

                            form.append("id_batch", batch.id_batch);
                            form.append("lowongan", lowongan);

                            axios.post(LAMAR_MALA_URL, form)
                                .then((response) => {
                                    $.LoadingOverlay("hide");
                                    Swal.fire({
                                        icon: "success",
                                        title: "Lamaran Dikirim!",
                                        text: "Lamaran kamu berhasil dikirim, silahkan cek email secara berkala untuk update status lamaran kamu",
                                        allowOutsideClick: false
                                    }).then((x) => {
                                        if (x.isConfirmed) {
                                            document.location.reload();
                                        }
                                    });
                                }).catch((error) => {
                                    $.LoadingOverlay("hide");

                                    Swal.fire({
                                        icon: "error",
                                        title: "Lamaran Gagal!",
                                        text: error.response.data.message ||
                                            "Terjadi kesalahan saat melakan pelmaran."
                                    });
                                });
                        }
                    });
                },
                fmtDisplayAvailableBatchForJob(job) {
                    const batchs = job.batchs.map(b => b.name_batch);

                    if (batchs) {
                        return batchs.join(", ");
                    }

                    return "-";
                },
                filterAvailableBatchs() {
                    return this.availableBatchs;
                },
                removeSelectedBatchJob(job) {
                    const batchs = job.batchs;
                    const usedBatchs = this.selectedJobs.map(j => j.batchs).flat();

                    batchs.forEach((batch) => {
                        const find = usedBatchs.filter((v) => v.id_batch === batch.id_batch);

                        if (find.length === 0) {
                            this.availableBatchs = this.availableBatchs.filter((bh) => bh
                                .id_batch !== batch.id_batch);
                        }
                    });
                },
                pushSelectedJobBatch(job) {
                    const batchs = job.batchs;
                    batchs.forEach((batch) => {
                        const find = this.availableBatchs.filter(
                            (cbt) => cbt.id_batch === batch.id_batch
                        );

                        if (find.length === 0) {
                            this.availableBatchs.push(batch);
                        }
                    });
                },
             moveJobPriority(job_id, newPriority) {
                    let selectedJobs = [...this.selectedJobs]; // clone agar tidak modifikasi langsung di reaktif

                    // Cari job yang ingin dipindah
                    const jobToMove = selectedJobs.find(job => parseInt(job.id) === parseInt(job_id));
                    if (!jobToMove) return;

                    // simpan urutan lama
                    const oldPriority = jobToMove.priority;
                    
                    
                    jobToMove.priority = newPriority;

                    // Kemudian, untuk semua job selain yang dipindah:
                    // jika oldPriority < newPriority, maka jobs dengan priority di antara oldPriority+1 sampai newPriority geser ke atas (dikurangi 1)
                    // jika oldPriority > newPriority, maka jobs dengan priority di antara newPriority sampai oldPriority-1 geser ke bawah (ditambah 1)
                    
                    selectedJobs.forEach(job => {
                        if(job.id === jobToMove.id) return; // lewati job yang dipindah

                        if (oldPriority < newPriority) {
                            // Geser naik semua job di urutan antara oldPriority+1 sampai newPriority ke posisi satu tingkat lebih atas (priority dikurangi 1)
                            if (job.priority > oldPriority && job.priority <= newPriority) {
                                job.priority -= 1;
                            }
                        } else if (oldPriority > newPriority) {
                            // Geser turun semua job di urutan antara newPriority sampai oldPriority-1 ke posisi satu tingkat lebih bawah (priority ditambah 1)
                            if (job.priority >= newPriority && job.priority < oldPriority) {
                                job.priority += 1;
                            }
                        }
                    });

                    
                    selectedJobs.sort((a, b) => a.priority - b.priority);

                    this.selectedJobs = selectedJobs;
                },


                downJobPriority(job_id) {
                    let selectedJobs = this.selectedJobs;

                    let currentIndex = selectedJobs.findIndex(job => job.id === job_id);
                    if (currentIndex === selectedJobs.length - 1) {
                        this.selectedJobs = selectedJobs;
                    } else {
                        let newPriority = currentIndex + 1;
                        this.moveJobPriority(job_id, newPriority);
                    }

                },
                upJobPriority(job_id) {
                    let selectedJobs = this.selectedJobs;

                    let currentIndex = selectedJobs.findIndex(job => parseInt(job.id) === parseInt(
                        job_id));

                    if (currentIndex === 0) {
                        this.selectedJobs = selectedJobs;
                    } else {
                        let newPriority = currentIndex - 1;
                        this.moveJobPriority(job_id, newPriority);
                    }
                },
                getDateForBatch(batch) {
                    const start = batch.start_date;
                    const end = batch.due_date;

                    if (start && end) {
                        var fmtStart = new Date(start);
                        var fmtEnd = new Date(end);

                        var options = {
                            weekday: "long",
                            year: "numeric",
                            month: "long",
                            day: "numeric",
                            hour: "numeric",
                            minute: "numeric"
                        };

                        return `${fmtStart.toLocaleDateString("id-ID", options)} s.d ${fmtEnd.toLocaleDateString("id-ID", options)}`;
                    }

                    return "-";
                },
                getDateForBatchSeparated(value) {
                    const date = new Date(value);
                    const options = {
                        weekday: "long",
                        year: "numeric",
                        month: "long",
                        day: "numeric",
                        hour: "numeric",
                        minute: "numeric"
                    };

                    return date.toLocaleDateString("id-ID", options);
                },
                removeSelectedJob(job) {
                    const id = job.id;
                    if (this._checkIsJobSelected(id)) {
                        Swal.fire({
                            icon: 'question',
                            title: 'Hapus Pilihan?',
                            text: 'Lowongan ini akan dihapus dari daftar pilihan anda.',
                            showCancelButton: true,
                            cancelButtonText: 'Batal',
                            confirmButtonText: 'Hapus',
                        }).then((x) => {
                            if (x.isConfirmed) {
                                this.selectedJobs = this.selectedJobs.filter((v) => parseInt(
                                    v.id) !== parseInt(id));
                                this.removeSelectedBatchJob(job);
                            }
                        });
                    }
                },
             addSelectedJob(data) {
                if (data.batchs.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Jadwal Kosong!',
                        text: 'Anda tidak dapat memilih lowongan ini karena belum ada jadwal.'
                    });
                    return;
                }

                const id = data.id;
                const job = this.jobLists.find(v => parseInt(v.id) === parseInt(id));

                if (!job) return;

                // Jika sudah dipilih → hentikan
                if (this._checkIsJobSelected(id)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Lowongan Telah Dipilih!',
                        text: 'Silahkan pilih lowongan lain.'
                    });
                    return;
                }

                // Batas 3 lowongan
                if (this.selectedJobs.length === 3) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Pilihan Penuh!',
                        text: 'Maksimal 3 lowongan. Hapus satu untuk memilih yang baru.'
                    });
                    return;
                }

                // ===== SET PRIORITAS OTOMATIS =====
                job.priority = this.selectedJobs.length + 1;
                job.oldPriority = job.priority;

                Swal.fire({
                    icon: 'success',
                    title: 'Lowongan Dipilih!',
                    text: 'Berhasil memilih lowongan.'
                });

                // Tambahkan job ke daftar terpilih
                this.selectedJobs.push(job);

                // Pastikan batch ikut masuk
                this.pushSelectedJobBatch(job);
            },
                loadDataJob() {
                    $.LoadingOverlay("show");

                    axios.post(JOB_DATA_URL)
                        .then((response) => {
                            $.LoadingOverlay("hide");

                            // Pastikan city_job sudah didecode menjadi array
                            this.jobLists = response.data.jobs.map(job => {
                                return {
                                    ...job,
                                    city_job: job.city_job ? JSON.parse(job.city_job) : []
                                };
                            });
                        })
                        .catch((error) => {
                            $.LoadingOverlay("hide");
                            alert("Terjadi kesalahan saat memuat data.");
                        });
                },

                switchTab(tab) {
                    if (tab === '#tabPemilihanLowongan') {
                        this.toggleTabPemilihanBatch(false);
                        this.toggleTabPemilihanLowongan(true);
                    } else {
                        if (this.selectedJobs.length === 0) {
                            Swal.fire({
                                icon: "warning",
                                title: "Lamaran Kosong!",
                                text: "Anda belum memiliki data lamaran, silahkan memilih lowongan untuk dilamar."
                            });

                            return;
                        }

                        this.toggleTabPemilihanBatch(true);
                        this.toggleTabPemilihanLowongan(false);
                    }
                },
                toggleTabPemilihanLowongan(state) {
                    this._toggleClass('#tabPemilihanLowongan', 'd-none', state);
                    this._toggleClass('#tabPemilihanBatch', 'd-none', !state);

                    this._toggleClass('#tabPemilihanLowonganToggler', 'bg-info', !state);
                    this._toggleClass('#tabPemilihanLowonganToggler', 'text-white', !state);
                    this._toggleClass('#tabPemilihanBatchToggler', 'bg-info', state);
                    this._toggleClass('#tabPemilihanBatchToggler', 'text-white', state);
                },
                toggleTabPemilihanBatch(state) {
                    this._toggleClass('#tabPemilihanBatch', 'd-none', state);
                    this._toggleClass('#tabPemilihanLowongan', 'd-none', !state);
                },
                _toggleClass(selector, value, state) {
                    const elem = document.querySelector(selector);

                    if (state) {
                        if (elem.classList.contains(value)) {
                            elem.classList.remove(value);
                        }
                    } else {
                        if (!elem.classList.contains(value)) {
                            elem.classList.add(value);
                        }
                    }
                },
                _checkIsJobSelected(id) {
                    const find = this.selectedJobs.find((job) => parseInt(job.id) === parseInt(id));

                    if (typeof find !== "undefined") {
                        return true;
                    }

                    return false;
                },
                showTimelineModal(batch) {
                    this.selectedBatchForModal = batch;
                    this.modalTimelineData = [];
                    this.isModalLoading = true; // Mulai loading

                    $('#timelineModal').modal('show');

                    this.fetchTimelineData(batch.id_batch);
                },
                fetchTimelineData(id_batch) {
                    axios.get(TIMELINE_URL, {
                        params: {
                            id_batch: id_batch
                        }
                    })
                    .then(response => {
                        if (response.data && response.data.timelines) {
                            this.modalTimelineData = response.data.timelines;
                        } else {
                            this.modalTimelineData = [];
                        }
                    })
                    .catch(error => {
                        console.error("Error fetching timeline:", error);
                        Swal.fire('Error', 'Gagal memuat data timeline.', 'error');
                        this.modalTimelineData = [];
                    })
                    .finally(() => {
                        this.isModalLoading = false;
                    });
            },
            }
        });

        document.getElementById('jobv-app-root').classList.remove('d-none');
    });
</script>