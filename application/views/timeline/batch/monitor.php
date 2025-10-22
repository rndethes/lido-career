<div id="monitor-batch-app-root">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <!--- PROFILE --->
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3>
                        <?= $batch['name_batch'] ?>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-3">
                            <label>FILTER BY LOKER</label>
                            <select id="selectize-filter-job" class="form-control">
                                <option value="all-job" selected>SEMUA LOKER</option>
                                <?php foreach ($job as $row): ?>
                                <option
                                    value="<?= $row['id_job_vacancy'] ?>">
                                    <?= $row['name_job'] ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <label>FILTER BY TIMELINE</label>
                            <select id="selectize-filter-timeline" class="form-control">
                                <option value="all-timeline" selected>SEMUA TIMELINE</option>
                                <?php foreach ($timeline as $row): ?>
                                <option
                                    value="<?= $row['id_timeline'] ?>">
                                    <?= $row['name_timeline'] ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <label>FILTER BY STATUS</label>
                            <select id="selectize-filter-status" class="form-control">
                                <option value="all-status">SEMUA STATUS</option>
                                <option value="progress" selected>SELEKSI</option>
                                <option value="rejected">GAGAL</option>
                                <option value="accepted">LOLOS</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label>FILTER BY PRIORITAS</label>
                            <select id="selectize-filter-prioritas" class="form-control">
                                <option value="all-prioritas" selected>SEMUA PRIORITAS</option>
                                <option value="1">PRIORITAS 1</option>
                                <option value="2">PRIORITAS 2</option>
                                <option value="3">PRIORITAS 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div>
                                <div class="d-none">
                                    <button class="btn btn-xs btn-primary" id="btn-bakso-check-uncheck"
                                        data-checked="check">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button data-bakso="apply" class="btn btn-success btn-xs btn-bakso-kontrol">
                                        <i class="fas fa-check"></i> Apply
                                    </button>
                                    <button data-bakso="reject" class="btn btn-danger btn-xs btn-bakso-kontrol">
                                        <i class="fas fa-times"></i> Reject
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button id="btn-reload-current-data" class="btn btn-xs btn-info">
                                    <i class="fas fa-sync"></i> Reload Data
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="bakso-kontrol">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/ext/axios.min.js') ?>">
</script>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        const $selectizeFilterJob = $("#selectize-filter-job").selectize({
            delimiter: ',',
            defaultValue: ['all-job'],
            onItemAdd: function(value) {
                var selectize = this;
                if (value === 'all-job') {
                    if (selectize.items.length > 1) {
                        selectize.clear();
                        selectize.addItem('all-job');
                    }
                } else if (selectize.items.find((v) => v === 'all-job')) {
                    selectize.removeItem('all-job');
                }
            },
            onItemRemove: function() {
                var selectize = this;
                if (!selectize.items.length) {
                    selectize.addItem('all-job');
                }
            }
        });

        const $selectizeFilterTimeline = $("#selectize-filter-timeline").selectize({
            delimiter: ',',
            defaultValue: ['all-timeline'],
            onItemAdd: function(value) {
                var selectize = this;
                if (value === 'all-timeline') {
                    if (selectize.items.length > 1) {
                        selectize.clear();
                        selectize.addItem('all-timeline');
                    }
                } else if (selectize.items.find((v) => v === 'all-timeline')) {
                    selectize.removeItem('all-timeline');
                }
            },
            onItemRemove: function() {
                var selectize = this;
                if (!selectize.items.length) {
                    selectize.addItem('all-timeline');
                }
            }
        });

        const $selectizeFilterStatus = $("#selectize-filter-status").selectize({
            delimiter: ',',
            defaultValue: ['all-status'],
            onItemAdd: function(value) {
                var selectize = this;
                if (value === 'all-status') {
                    if (selectize.items.length > 1) {
                        selectize.clear();
                        selectize.addItem('all-status');
                    }
                } else if (selectize.items.find((v) => v === 'all-status')) {
                    selectize.removeItem('all-status');
                }
            },
            onItemRemove: function() {
                var selectize = this;
                if (!selectize.items.length) {
                    selectize.addItem('all-status');
                }
            }
        });

        const $selectizeFilterPrioritas = $("#selectize-filter-prioritas").selectize({
            delimiter: ',',
            defaultValue: ['all-prioritas'],
            onItemAdd: function(value) {
                var selectize = this;
                if (value === 'all-prioritas') {
                    if (selectize.items.length > 1) {
                        selectize.clear();
                        selectize.addItem('all-prioritas');
                    }
                } else if (selectize.items.find((v) => v === 'all-prioritas')) {
                    selectize.removeItem('all-prioritas');
                }
            },
            onItemRemove: function() {
                var selectize = this;
                if (!selectize.items.length) {
                    selectize.addItem('all-status');
                }
            }
        })

        const
            $_g_current_id_batch =
            '<?= $batch["id_batch"] ?>';
        const $_g_resource_url =
            '<?= site_url("pengaturan-timeline/batch/load-table-data-candidate-ajax") ?>';
        const $_g_resource_action_url =
            '<?= site_url("pengaturan-timeline/batch/apply-or-reject-candidate") ?>';

        var $_g_selected_candidates = [];
        var $_g_selected_id_job_vacancy = $selectizeFilterJob[0].selectize.getValue();
        var $_g_selected_id_timeline = $selectizeFilterTimeline[0].selectize.getValue();
        var $_g_selected_status_apply = $selectizeFilterStatus[0].selectize.getValue();
        var $_g_selected_prioritas = $selectizeFilterPrioritas[0].selectize.getValue();

        function baksoControl(successCallback = null) {
            baksoControlLoading(true);

            let form = new FormData();
            form.append("id_batch", $_g_current_id_batch);
            form.append("id_job_vacancy", $_g_selected_id_job_vacancy);
            form.append("id_timeline", $_g_selected_id_timeline);
            form.append("status", $_g_selected_status_apply);
            form.append("prioritas", $_g_selected_prioritas);

            axios.post($_g_resource_url, form)
                .then((response) => {
                    baksoControlLoading(false);

                    document.getElementById("bakso-kontrol").innerHTML = response.data;
                    baksoControlEvents();

                    if (typeof successCallback === "function") {
                        successCallback();
                    }
                }).catch((error) => {
                    baksoControlLoading(false);

                    throw error;
                });
        }

        function baksoControlLoading(state) {
            if (state) {
                $.LoadingOverlay("show");
            } else {
                $.LoadingOverlay("hide");
            }
        }

        function baksoControlToggleCheckBox(state) {
            var event = new Event("change");
            document.querySelectorAll(".bakso-control-checkbox").forEach((elem) => {
                elem.checked = state;
                elem.dispatchEvent(event);
            });
        }

        function baksoControlEvents() {
            document.querySelectorAll(".btn-reject-for-next").forEach((elem) => {
                elem.addEventListener("click", function() {
                    const data = elem.dataset;
                    Swal.fire({
                        title: `Tolak Kandidat`,
                        text: `${data.final == 'apply' ? 'Kandidat ini akan ditolak dalam sesi timeline terakhir ini dan tidak akan mengikuti sesi pelatihan.' : 'Kandidat ini akan ditolak pada sesi timeline ini dan akan dieliminasi dari batch.'}`,
                        icon: 'question',
                        showCancelButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: `Reject`,
                    }).then((x) => {
                        if (x.isConfirmed) {
                            var form = new FormData();

                            form.append("id_batch", $_g_current_id_batch);
                            form.append("id_job_vacancy", data.jobvacancyid);
                            form.append("id_timeline", data.timelineid);
                            form.append("history_timeline_id", data.historytimelineid);
                            form.append("id_candidate", data.id);
                            form.append("kode_timeline", data.kode);
                            form.append("reject", "1");

                            baksoControlLoading(true);

                            axios.post($_g_resource_action_url, form)
                                .then((response) => {
                                    baksoControlLoading(
                                        false);

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: 'Kandidat berhasil di tolak.'
                                    }).then(() => {
                                        baksoControlLoading(true);
                                        baksoControl(() => {
                                            baksoControlLoading(
                                                false);
                                            const notif =
                                                new FormData();
                                            notif.append(
                                                "id_candidate",
                                                data.id
                                            );
                                            notif.append(
                                                "title",
                                                "Lido Career Center"
                                            );
                                            notif.append("body",
                                                `${data.name}, Mohon maaf anda tidak lolos pada tahap ${data.timeline}`
                                            );
                                            notif.append(
                                                "token",
                                                data
                                                .devicetoken
                                            );
                                            notif.append("icon",
                                                "<?= base_url('assets/img/img-landing/logo_webpage.png') ?>"
                                            );
                                            axios.post(
                                                '<?= site_url("notification/send_notif") ?>',
                                                notif
                                            ).then((
                                                response
                                            ) => {
                                                console
                                                    .log(
                                                        response
                                                    );
                                            }).catch((
                                                error
                                            ) => {
                                                console
                                                    .error(
                                                        error
                                                    );
                                            });

                                            const email =
                                                new FormData();
                                            email.append(
                                                "id_candidate",
                                                data.id);
                                            email.append("state",
                                                "reject");
                                            email.append(
                                                "id_job_reject",
                                                data
                                                .jobvacancyid);
                                            axios.post(
                                                '<?= site_url("notification/send-email") ?>',
                                                email
                                            ).then((
                                                response
                                            ) => {
                                                console.log(
                                                    response
                                                    .data
                                                );
                                            }).catch((
                                                error) => {
                                                console
                                                    .error(
                                                        error
                                                        .message
                                                    );
                                            });
                                        });
                                    });
                                })
                                .catch((error) => {
                                    console.log(error);
                                    baksoControlLoading(false);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Failed!',
                                        text: 'Oupz, something wen\'t wrong!'
                                    });
                                });
                        }
                    });
                });
            });

            document.querySelectorAll(".btn-apply-for-next").forEach((elem) => {
                elem.addEventListener("click", function() {
                    const data = elem.dataset;
                    Swal.fire({
                        title: `${data.final == 'apply' ? 'Apply Kandidat?' : 'Loloskan Kandidat?'}`,
                        text: `${data.final == 'apply' ? 'Kandidat ini akan diterima dan akan memasuki sesi pelatihan.' : 'Kandidat ini akan lolos dalam sesi timeline ini dan akan masuk ke timeline berikutnya.'}`,
                        icon: 'question',
                        showCancelButton: true,
                        allowOutsideClick: false,
                        confirmButtonText: `${data.final == 'apply' ? 'Apply' : 'Loloskan'}`,
                    }).then((x) => {
                        if (x.isConfirmed) {
                            var form = new FormData();

                            form.append("id_batch", $_g_current_id_batch);
                            form.append("id_job_vacancy", data.jobvacancyid);
                            form.append("id_timeline", data.timelineid);
                            form.append("history_timeline_id", data.historytimelineid);
                            form.append("id_candidate", data.id);
                            form.append("kode_timeline", data.kode);

                            baksoControlLoading(true);

                            axios.post($_g_resource_action_url, form)
                                .then((response) => {
                                    baksoControlLoading(
                                        false);

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: `Kandidat berhasil di ${data.final == 'apply' ? 'diterima.' : 'diloloskan.'}`
                                    }).then(() => {
                                        baksoControlLoading(true);
                                        baksoControl(() => {
                                            baksoControlLoading(
                                                false);

                                            const notif =
                                                new FormData();

                                            notif.append(
                                                "id_candidate",
                                                data.id);
                                            notif.append("title",
                                                "Lido Career Center"
                                            );
                                            notif.append("body",
                                                `${data.name}, Selamat anda lolos pada tahap ${data.timeline} dan akan masuk pada tahap selanjutnya.`
                                            );
                                            notif.append("token",
                                                data.devicetoken
                                            );

                                            notif.append("icon",
                                                "<?= base_url('assets/img/img-landing/logo_webpage.png') ?>"
                                            );
                                            axios.post(
                                                    '<?= site_url("notification/send-notif") ?>',
                                                    notif)
                                                .then((
                                                    response
                                                ) => {
                                                    console.log(
                                                        response
                                                    );
                                                }).catch((
                                                    error) => {
                                                    console
                                                        .error(
                                                            error
                                                        );
                                                });

                                            if (data.final ==
                                                'apply') {
                                                const email =
                                                    new FormData();
                                                email.append(
                                                    "id_candidate",
                                                    data.id);
                                                email.append(
                                                    "state",
                                                    "apply");
                                                axios.post(
                                                    '<?= site_url("notification/send-email") ?>',
                                                    email
                                                ).then((
                                                    response
                                                ) => {
                                                    console
                                                        .log(
                                                            response
                                                            .data
                                                        );
                                                }).catch((
                                                    error
                                                ) => {
                                                    console
                                                        .error(
                                                            error
                                                            .message
                                                        );
                                                });
                                            }
                                        });
                                    });
                                })
                                .catch((error) => {
                                    console.log(error.message);
                                    baksoControlLoading(false);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Failed!',
                                        text: 'Oupz, something wen\'t wrong!'
                                    });
                                });
                        }
                    });
                });
            });

            document.querySelectorAll(".bakso-control-checkbox").forEach((elem) => {
                elem.addEventListener("change", function(e) {
                    var id = parseInt(elem.value);

                    if (elem.checked) {
                        if (typeof $_g_selected_candidates.find((v) => v === id) ===
                            "undefined") {
                            $_g_selected_candidates.push(id);
                        }
                    } else {
                        if (typeof $_g_selected_candidates.find((v) => v === id) !==
                            "undefined") {
                            $_g_selected_candidates = $_g_selected_candidates.filter((v) =>
                                v !== id);
                        }
                    }
                });
            });
        }

        document.querySelectorAll(".btn-bakso-kontrol").forEach((elem) => {
            elem.addEventListener("click", function() {
                const data = elem.dataset;

                if ($_g_selected_candidates.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Lengkapi Data!',
                        text: 'Tidak ada data yang dipilih.',
                        allowOutsideClick: false
                    });

                    return;
                }

                if (data.bakso == "reject" || data.bakso == "apply") {
                    const baksoType = data.bakso;
                    Swal.fire({
                        icon: 'question',
                        title: `Konfirmasi ${data.bakso == "apply" ? 'Apply' : 'Reject'}`,
                        text: `Semua data yang dipilih akan di ${data.bakso == "apply" ? 'apply' : 'tolak'}, dan ${data.bakso == "apply" ? 'akan' : 'tidak akan'} melanjutkan ke proses selanjutnya.`,
                        allowOutsideClick: false,
                        showCancelButton: true,
                        cancelButtonText: 'Batal',
                        confirmButtonText: `${data.bakso == "apply" ? 'Ya, Apply' : 'Ya, Reject'}`
                    }).then((x) => {
                        if (x.isConfirmed) {
                            baksoControlLoading(true);

                            var form = new FormData();
                            form.append("bakso", data.bakso);
                            form.append("control", $_g_selected_candidates.toString());
                            form.append("id_timeline", $_g_selected_id_timeline);
                            form.append("kode_timeline", $_g_selected_kode_timeline);
                            form.append("id_job_vacancy",
                                ''
                            );
                            form.append("id_batch",
                                ''
                            );
                            axios.post(
                                    '',
                                    form)
                                .then((response) => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: `Operasi berhasil dijalankan.`
                                    }).then((x) => {
                                        baksoControl(() => {
                                            baksoControlLoading(
                                                false);

                                            const notif = response
                                                .data.notifications;

                                            if (notif) {
                                                notif.forEach((
                                                    row
                                                ) => {
                                                    var payload =
                                                        new FormData();

                                                    payload
                                                        .append(
                                                            "id_candidate",
                                                            row
                                                            .id
                                                        )
                                                    payload
                                                        .append(
                                                            "title",
                                                            "Lido Career Center"
                                                        );
                                                    payload
                                                        .append(
                                                            "body",
                                                            `${row.name_candidate}, ${baksoType == 'apply' ? 'Selamat anda lolos pada tahap' : 'Mohon maaf anda tidak lolos pada tahap'} ${row.timeline} ${baksoType == 'apply' ? 'dan akan masuk pada tahap selanjutnya.' : 'silahkan mencoba lagi.'}`
                                                        );
                                                    payload
                                                        .append(
                                                            "token",
                                                            row
                                                            .device_token
                                                        );
                                                    payload
                                                        .append(
                                                            "icon",
                                                            "<?= base_url('assets/img/img-landing/logo_webpage.png') ?>"
                                                        );
                                                    axios
                                                        .post(
                                                            '<?= site_url("notification/send_notif") ?>',
                                                            payload
                                                        )
                                                        .then(
                                                            (
                                                                response
                                                            ) => {
                                                                console
                                                                    .log(
                                                                        response
                                                                    );
                                                            }
                                                        )
                                                        .catch(
                                                            (
                                                                error
                                                            ) => {
                                                                console
                                                                    .error(
                                                                        error
                                                                    );
                                                            }
                                                        );
                                                });
                                            }
                                        });
                                    });
                                }).catch((error) => {
                                    console.log(error);

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: 'Operasi gagal dijalankan.'
                                    }).then((x) => {
                                        baksoControlLoading(false);
                                    });
                                });
                        }
                    });
                }
            });
        });

        document.querySelector("#btn-bakso-check-uncheck").addEventListener("click", function() {
            const isChecked = this.dataset.checked == "check" ? true : false;

            baksoControlToggleCheckBox(isChecked);

            if (isChecked) {
                this.dataset.checked = "uncheck";
                this.innerHTML = '<i class="fas fa-times"></i>';

                this.classList.remove("btn-primary");
                this.classList.add("btn-secondary");
            } else {
                this.dataset.checked = "check";
                this.innerHTML = '<i class="fas fa-check"></i>';

                this.classList.add("btn-primary");
                this.classList.remove("btn-secondary");
            }
        });

        document.querySelector("#btn-reload-current-data").addEventListener("click", function() {
            baksoControl();
        });

        $("#selectize-filter-job").on("change", function() {
            $_g_selected_id_job_vacancy = $selectizeFilterJob[0].selectize.getValue();
        });

        $("#selectize-filter-timeline").on("change", function() {
            $_g_selected_id_timeline = $selectizeFilterTimeline[0].selectize.getValue();
        });

        $("#selectize-filter-status").on("change", function() {
            $_g_selected_status_apply = $selectizeFilterStatus[0].selectize.getValue();
        });

        $("#selectize-filter-prioritas").on("change", function() {
            $_g_selected_prioritas = $selectizeFilterPrioritas[0].selectize.getValue();
        });

        baksoControl();
    });
</script>