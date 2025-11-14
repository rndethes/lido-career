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
                                <div class="card card-body shadow-sm">
                                    <label for="">FILTER BY DIVISI</label>
                                    <select class="form-control" v-model="filterDivision">
                                        <option value="all-division">SEMUA DIVISI</option>
                                        <?php foreach ($division as $divisi): ?>
                                        <option
                                            value="<?= $divisi['id_division'] ?>">
                                            <?= $divisi['name_division'] ?>
                                        </option>
                                        <?php endforeach ?>
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
                            <!-- Job List -->
                            <div class="col-md-12 mb-3">
                                <h6 class="font-medium">Lowongan Anda</h6>
                                <div class="card shadow-none border-1">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                            Lowongan
                                                        </th>
                                                        <th
                                                            class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                            Grade
                                                        </th>
                                                        <th
                                                            class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                            Urutan
                                                        </th>
                                                        <th
                                                            class="text-uppercase text-dark text-xs font-weight-bolder opacity-7 ps-2">
                                                            Jadwal Tersedia
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(selectedJob, index) in selectedJobs"
                                                        :key="`selectedJobRow-${selectedJob.id}`">
                                                        <td>
                                                            <span class="text-dark text-xs font-weight-bold"
                                                                v-text="selectedJob.name_job">
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark text-xs font-weight-bold"
                                                                v-text="selectedJob.grade_value">
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark text-xs font-weight-bold"
                                                                v-text="(index + 1)">
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark text-xs font-weight-bold"
                                                                v-text="fmtDisplayAvailableBatchForJob(selectedJob)">
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button @click="upJobPriority(selectedJob.id)"
                                                                class="btn btn-xs btn-primary">
                                                                <i class="fas fa-arrow-up"></i>
                                                            </button>
                                                            <button @click="downJobPriority(selectedJob.id)"
                                                                class="btn btn-xs btn-warning">
                                                                <i class="fas fa-arrow-down"></i>
                                                            </button>
                                                            <button class="btn btn-xs btn-danger"
                                                                @click="removeSelectedJob(selectedJob)">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Job List -->

                            <div class="col-md-12 mb-3">
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
                    if (this.filterDivision == 'all-division') {
                        return this.jobLists;
                    }

                    const filter = parseInt(this.filterDivision);

                    return this.jobLists.filter((job) => parseInt(job.id_division) === filter);
                },
            },
            methods: {
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
                moveJobPriority(job_id, priority) {
                    var selectedJobs = this.selectedJobs;

                    const jobToMove = selectedJobs.filter(job => parseInt(job.id) === parseInt(job_id))[
                        0];
                    const currentIndex = selectedJobs.indexOf(jobToMove);

                    selectedJobs.splice(currentIndex, 1);
                    selectedJobs.splice(priority, 0, jobToMove);

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
                            text: 'Anda tidak dapat memilih lowongan ini, karena belum ada jadwal yang ditetapkan untuk lowongan.'
                        });
                        return;
                    }

                    const id = data.id;
                    const job = this.jobLists.find((v) => parseInt(v.id) === parseInt(id));

                    if (typeof job !== "undefined") {
                        if (!this._checkIsJobSelected(id)) {
                            if (this.selectedJobs.length === 3) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Pilihan Penuh!',
                                    text: 'Anda hanya dapat memilih maksimal 3 lowongan, hapus salah satu lowongan untuk dapat memilih lowongan baru.'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Lowongan Dipilih!',
                                    text: 'Berhasil memilih lowongan.'
                                });

                                this.selectedJobs.push(job);
                                this.pushSelectedJobBatch(job);
                            }
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Lowongan Telah Dipilih!',
                                text: 'Anda sudah memilih lowongan ini, silahkan pilih lowongan yang lain.'
                            });
                        }
                    }
                },
                loadDataJob() {
                    $.LoadingOverlay("show");

                    axios.post(JOB_DATA_URL)
                        .then((response) => {
                            $.LoadingOverlay("hide");

                            this.jobLists = response.data.jobs;
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