<div id="app-root" style="display: none;">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3>Data Batch</h3>
                        </div>
                        <div>
                            <button :disabled="loadingData" @click="openAddBatchModal"
                                class="btn btn-xs btn-primary bg-gradient-primary"><i class="fas fa-plus"></i>
                                Batch
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" v-show="loadingData">
                        <div class="col-md-12 d-flex justify-content-center m-auto">
                            <div class="spinner-grow text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-dark" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-show="!loadingData">
                        <div class="col-md-3 mb-3" v-for="item in batchs" :keys="item.id_batch">
                            <div class="timeline-block tt-biasa-bae">
                                <div style="padding: 20px;">
                                    <h6 class="text-dark text-sm font-weight-bold mb-2">
                                        {{ item.name_batch }}
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mb-2">
                                        {{ item.start_date_ }}
                                    </p>
                                    <p class="text-secondary font-weight-bold text-xs mb-2">
                                        {{ item.due_date_ }}
                                    </p>
                                    <p class="">
                                        <span class="badge badge-sm bg-info">
                                            {{ displayBatchID(item.name_batch) }}
                                        </span>
                                    </p>
                                    <p class="text-center">
                                        <span v-if="isAffectiveBatchRunning(item.start_date_, item.due_date_)"
                                            class="badge badge-sm bg-primary">
                                            Berjalan
                                        </span>
                                        <span v-else class="badge badge-sm bg-secondary">
                                            Tidak Berjalan
                                        </span>
                                    </p>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <button
                                            @click="editBatch(item.id_batch, item.name_batch, item.start_date, item.due_date)"
                                            class="btn btn-xs btn-success">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button @click="openSettingPage(item.id_batch)"
                                            class="btn btn-xs btn-danger mx-2">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <button @click="openMonitorPage(item.id_batch)" class="btn btn-xs btn-primary">
                                            <i class="fas fa-laptop"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditorBatchTimeline" tabindex="-1" role="dialog"
        aria-labelledby="modalEditorBatchTimelineLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditorBatchTimelineLabel">
                        {{ formMode == 'insert' ? 'Create Batch' : 'Update Batch' }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="text-dark fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="modalEditorBatchTimelineForm" action="" onsubmit="return false;">
                        <div v-if="formMode === 'update'">
                            <input v-model="form.id_job_vacancy" type="hidden" name="id_job_vacancy">
                        </div>
                        <!-- <div class="form-group" v-show="formMode === 'update'">
                            <label class="form-control-label">Nama</label>
                            <input v-model="form.name_batch" name="name_batch" class="form-control" type="text"
                                value="" />
                        </div> -->
                        <div class="form-group">
                            <label class="form-control-label">Start</label>
                            <input v-model="form.start_date" name="start_date" class="form-control"
                                type="datetime-local" value="" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Due</label>
                            <input v-model="form.due_date" name="due_date" class="form-control" type="datetime-local"
                                value="" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button v-show="formMode === 'update'" @click="deleteBatch" type="button"
                        class="btn btn-danger bg-gradient-danger">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                    <div v-show="formMode === 'insert'"></div>
                    <button @click="saveBatch" type="button" class="btn btn-success bg-gradient-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
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
        const app = new Vue({
            el: '#app-root',
            created() {
                this.loadAllData();
            },
            data() {
                return {
                    batchs: [],
                    loadingData: false,
                    formMode: 'insert',
                    formEditId: '',
                    form: {
                        name_batch: '',
                        start_date: '',
                        due_date: ''
                    },
                }
            },
            methods: {
                displayBatchID(name) {
                    if (typeof name.split === "function") {
                        var part = name.split(' ');

                        if (part.length === 2) {
                            return 'B' + part[1];
                        }
                    }

                    return null;
                },
                isAffectiveBatchRunning(startDate, endDate) {
                    startDate = new Date(startDate);
                    endDate = new Date(endDate);

                    var currentDate = new Date();

                    if (currentDate >= startDate && currentDate <= endDate) {
                        return true;
                    }

                    return false;
                },
                openSettingPage(id_batch) {
                    document.location.href = SITE_URL + 'pengaturan-timeline/batch/setting/' + id_batch;
                },
                openMonitorPage(id_batch) {
                    document.location.href = SITE_URL + 'pengaturan-timeline/batch/monitor/' + id_batch;
                },
                loadAllData() {
                    this.loadingData = true;
                    axios.post(
                            '<?= site_url("pengaturan-timeline") ?>'
                        )
                        .then((response) => {
                            this.batchs = response.data.batchs;

                            this.loadingData = false;
                        })
                        .catch((error) => {
                            console.log(error);

                            this.loadingData = false;
                        });
                },
                openAddBatchModal() {
                    this.formEditId = '';
                    this.form.name_batch = '';
                    this.form.start_date = '';
                    this.form.due_date = '';
                    this.formMode = 'insert';

                    var modal = bootstrap.Modal.getOrCreateInstance(
                        document.getElementById('modalEditorBatchTimeline')
                    );
                    modal.show();
                },
                editBatch(id_batch, name_batch, start_date, due_date) {
                    this.formEditId = id_batch;
                    this.form.name_batch = name_batch?.toUpperCase();
                    this.form.start_date = start_date;
                    this.form.due_date = due_date;

                    this.formMode = 'update';

                    var modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
                        'modalEditorBatchTimeline'));
                    modal.show();
                },
                saveBatch() {
                    var form = new FormData();

                    Object.keys(this.form).forEach((kv) => {
                        form.append(kv, this.form[kv]);
                    });

                    if (this.formMode === 'update') {
                        form.append("id_batch", this.formEditId);
                        form.append("action", "update");
                    } else {
                        form.append("action", "insert");
                    }

                    axios.post(
                            '<?= site_url("pengaturan-timeline/batch") ?>',
                            form)
                        .then((response) => {
                            Swal.fire('Success!',
                                    `Batch ${this.formMode === 'insert' ? 'berhasil ditambahkan.' : 'berhasil diperbarui.'}.`,
                                    'success')
                                .then((x) => {
                                    var modal = bootstrap.Modal.getOrCreateInstance(document
                                        .getElementById(
                                            'modalEditorBatchTimeline'));
                                    modal.hide();

                                    if (this.filter) {
                                        this.setFilterData(this.filter);
                                    } else {
                                        this.loadAllData();
                                    }
                                });
                        })
                        .catch((error) => {
                            if (error.response && error.response.data && error.response.data
                                .message) {
                                Swal.fire('Error!', error.response.data.message, 'error');
                            } else {
                                Swal.fire('Failed!',
                                    `Batch ${this.formMode === 'insert' ? 'gagal ditambahkan.' : 'gagal diperbarui.'}`,
                                    'error');
                            }
                        });
                },
                deleteBatch() {
                    Swal.fire({
                        icon: 'question',
                        title: 'Are you sure?',
                        text: 'Data batch akan dihapus, termasuk dengan data timeline dari batch ini.',
                        allowOutsideClick: false,
                        showCancelButton: true,
                    }).then((x) => {
                        if (x.isConfirmed) {
                            var form = new FormData();

                            form.append('action', 'delete');
                            form.append('id_batch', this.formEditId);

                            axios.post(
                                    '<?= site_url("pengaturan-timeline/batch") ?>/' +
                                    this.form.id_job_vacancy, form)
                                .then((x) => {
                                    Swal.fire('Success!', 'Batch berhasil dihapus.',
                                            'success')
                                        .then((x) => {
                                            var modal = bootstrap.Modal
                                                .getOrCreateInstance(document
                                                    .getElementById(
                                                        'modalEditorBatchTimeline'));
                                            modal.hide();

                                            if (this.filter) {
                                                this.setFilterData(this.filter);
                                            } else {
                                                this.loadAllData();
                                            }
                                        });
                                }).catch((error) => {
                                    if (error.response && error.response.data && error
                                        .response.data.message) {
                                        Swal.fire('Error!', error.response.data.message,
                                            'error');
                                    } else {
                                        Swal.fire('Failed!',
                                            `Batch gagal dihapus.`, 'error');
                                    }
                                });
                        }
                    })
                }
            }
        });

        const $selectizeJobVac = $("#selectize-job-vacancy").selectize();
        // const $selectizeTimelineBatchs = $("#selectizeTimelineBatchs").selectize({
        //     options: [],
        //     optionGroupRegister: function(optgroup) {
        //         var group = {
        //             label: 'LOKER: ' + optgroup.toUpperCase()
        //         };

        //         group[this.settings.optgroupValueField] = optgroup;

        //         return group;
        //     },
        //     optgroupField: 'loker',
        //     valueField: 'id_batch',
        //     labelField: 'name_batch',
        //     searchField: ['name_batch'],
        //     sortField: 'name_batch',
        // });

        $("input.input-tt-number").on("input keydown keyup mousedown mouseup select contextmenu drop focusout",
            function(e) {
                if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, '');
            }
        );

        document.getElementById('app-root').style.display = '';
    });
</script>