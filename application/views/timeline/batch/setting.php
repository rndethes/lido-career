<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <!--- PROFILE --->
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h3>Pengaturan
                    <?= $batch['name_batch'] ?>
                </h3>
            </div>
            <div class="card-body p-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                href="#tab-pengaturan-timeline" role="tab" aria-controls="timeline"
                                aria-selected="true">
                                Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-lowongan"
                                role="tab" aria-controls="lowongan" aria-selected="true">
                                Lowongan
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-4" id="pengaturanLPTabContent">
                    <div class="tab-pane fade show active" id="tab-pengaturan-timeline" role="tabpanel"
                        aria-labelledby="timeline">
                        <!-- Beg Tab 1 -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card z-index-2 h-100">
                                    <div class="card-body">
                                        <div>
                                            <button data-bs-toggle="modal" data-bs-target="#editorTimelineList"
                                                class="btn btn-xs btn-primary"
                                                data-batch="<?= $batch['id_batch'] ?>">
                                                <i class="fas fa-plus"></i> Timeline
                                            </button>
                                            <?php if (!empty($timeline)): ?>
                                            <button id="btnOpenTransferTimelineModal" class="btn btn-xs btn-success"
                                                data-batch="<?= $batch['id_batch'] ?>">
                                                <i class="fas fa-copy"></i> Copy Timeline
                                            </button>
                                            <?php endif ?>
                                        </div>
                                        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted"
                                            id="timeline-content-table">
                                            <?php foreach ($timeline as $row): ?>
                                            <div class="timeline-block mb-3 timeline-block-hover"
                                                data-timeline="<?= $row['id_timeline'] ?>"
                                                data-batch="<?= $batch['id_batch'] ?>"
                                                style="cursor: pointer;">
                                                <div style="display: none;">
                                                    <input type="hidden"
                                                        id="tmp-timeline-id-batch-<?= $row['id_timeline'] ?>"
                                                        value="<?= $row['id_batch'] ?>">
                                                    <input type="hidden"
                                                        id="tmp-timeline-name-<?= $row['id_timeline'] ?>"
                                                        value="<?= $row['name_timeline'] ?>">
                                                    <input type="hidden"
                                                        id="tmp-timeline-start-<?= $row['id_timeline'] ?>"
                                                        value="<?= $row['start_date_time'] ?>">
                                                    <input type="hidden"
                                                        id="tmp-timeline-end-<?= $row['id_timeline'] ?>"
                                                        value="<?= $row['end_date_time'] ?>">
                                                    <input type="hidden"
                                                        id="tmp-timeline-id-link-<?= $row['id_timeline'] ?>"
                                                        value="<?= $row['id_link'] ?>">
                                                    <textarea
                                                        id="tmp-timeline-description-<?= $row['id_timeline'] ?>"><?= $row['description_timeline'] ?></textarea>
                                                </div>

                                                <span class="timeline-step">
                                                    <i class="fa fa-clock text-info text-gradient"></i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">
                                                        <?= $row['name_timeline'] ?>
                                                    </h6>
                                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                        <?= $row['start_date_time'] ?>
                                                        -
                                                        <?= $row['end_date_time'] ?>
                                                    </p>
                                                </div>
                                                <div style="margin-left: 46px;">
                                                    <p class="text-sm mt-3 mb-2">
                                                        <?= $row['description_timeline'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab 1 -->
                    </div>
                    <div class="tab-pane fade" id="tab-pengaturan-lowongan" role="tabpanel" aria-labelledby="lowongan">
                        <!-- Beg Tab 2 -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card z-index-2 h-100">
                                    <div class="card-body">
                                        <div>
                                            <button id="addJobVacancyButton" class="btn btn-xs btn-primary"
                                                data-batch="<?= $batch['id_batch'] ?>">
                                                <i class="fas fa-plus"></i> Tambahkan Job
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            #</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            ID Job</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Loker</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Grade</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Divisi</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $loop = 1; ?>
                                                    <?php foreach ($job as $row): ?>
                                                    <tr>
                                                        <td>
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                <?= $loop++ ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                <?= sprintf('%s%sB%s', strtoupper(substr($row['name_job'], 0, 3)), $row['kode_job'], $row['id_batch'])  ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                <?= strtoupper($row['name_job']) ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                <?= strtoupper($row['grade_value']) ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                <?= strtoupper($row['name_division']) ?>
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <button
                                                                data-id="<?= $row['id_batch_job'] ?>"
                                                                class="btn btn-xs btn-danger btn-delete-job-from-batch">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab 2 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editorTimelineList" tabindex="-1" role="dialog" aria-labelledby="editorTimelineListLabel"
    aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editorTimelineListLabel">
                    Edit Timeline
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="text-dark fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="editorTimelineListForm" action="" onsubmit="return false;">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama</label>
                        <input name="name_timeline" class="form-control" type="text" value="" />
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Mulai</label>
                        <input name="start_date_time" class="form-control" type="datetime-local" value="" />
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Selesai</label>
                        <input name="end_date_time" class="form-control" type="datetime-local" value="" />
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link</label>
                        <select name="id_link" class="form-control">
                            <option value=""></option>
                            <?php foreach ($links as $link): ?>
                            <option
                                value="<?= $link['id_link'] ?>">
                                <?= $link['nama_link'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description_timeline" id="" rows="10"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button id="editorTimelineListButtonDelete" type="button" class="btn btn-danger bg-danger text-white">
                    <i class="fas fa-trash"></i> Hapus
                </button>
                <button id="editorTimelineListButtonSave" type="button" class="btn btn-success bg-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTransferTimeline" tabindex="-1" role="dialog"
    aria-labelledby="modalTransferTimelineLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTransferTimelineLabel">
                    Copy Timeline
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="text-dark fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">Timeline</label>
                    <input id="selectizeTimelines" name="timelines" class="form-control" type="text" value="" />
                </div>
                <div class="form-group">
                    <label class="form-control-label">Target</label>
                    <input id="selectizeTargets" name="targets" class="form-control" type="text" value="" />
                </div>
                <div class="form-group d-flex justify-content-end mt-4" style="margin-bottom: -15px;">
                    <button id="modalTransferTimelineButtonTf" type="button"
                        class="btn btn-success bg-gradient-success">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addJobVacancyModal" tabindex="-1" role="dialog" aria-labelledby="addJobVacancyModalLabel"
    aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addJobVacancyModalLabel">
                    Tambahkan Job
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="text-dark fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">Job</label>
                    <input id="selectizeJobs" name="jobs" class="form-control" type="text" value="" />
                </div>
                <div class="form-group d-flex justify-content-end mt-4" style="margin-bottom: -15px; padding-top: 50px">
                    <button id="addJobVacancyButtonSave" type="button" class="btn btn-xs btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/ext/axios.min.js') ?>">
</script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        // ---------------------- TIMELINE STUFF --------------
        const timelineModalId = this.document.getElementById("editorTimelineList");
        const timelineModalTitle = this.document.getElementById(
            "editorTimelineListLabel"
        );
        const timelineModalForm = this.document.getElementById(
            "editorTimelineListForm"
        );
        const timelineModalButtonSave = this.document.getElementById(
            "editorTimelineListButtonSave"
        );
        const timelineModalButtonDelete = this.document.getElementById(
            "editorTimelineListButtonDelete"
        );

        var timelineModal = null;
        var timelineModalMode = "update";
        var timelineModalUpdateId = null;
        var timelineModalCreateId = null;

        if (timelineModalId) {
            timelineModalId.addEventListener("show.bs.modal", function(e) {
                timelineModalUpdateId = e.relatedTarget.dataset.timeline;
                timelineModalCreateId = e.relatedTarget.dataset.batch;

                if (!timelineModalUpdateId) {
                    timelineModalMode = "insert";
                    timelineModalTitle.innerText = "New Timeline";
                    disableAButton(timelineModalButtonDelete, true);

                    findAndFill("name_timeline", "");
                    findAndFill("start_date_time", "");
                    findAndFill("end_date_time", "");
                    findAndFill("id_link", "");
                    findAndFill("description_timeline", "");

                    timelineModalUpdateId = null;
                } else {
                    timelineModalMode = "update";
                    timelineModalTitle.innerText = "Update Timeline";
                    disableAButton(timelineModalButtonDelete, false);

                    findAndFill(
                        "name_timeline",
                        document.getElementById("tmp-timeline-name-" + timelineModalUpdateId)
                        ?.value
                    );
                    findAndFill(
                        "start_date_time",
                        document.getElementById("tmp-timeline-start-" + timelineModalUpdateId)
                        ?.value
                    );
                    findAndFill(
                        "end_date_time",
                        document.getElementById("tmp-timeline-end-" + timelineModalUpdateId)
                        ?.value
                    );
                    findAndFill(
                        "description_timeline",
                        document.getElementById(
                            "tmp-timeline-description-" + timelineModalUpdateId
                        )?.value
                    );
                    findAndFill(
                        "id_link",
                        document.getElementById(
                            "tmp-timeline-id-link-" + timelineModalUpdateId
                        )?.value
                    );
                }
            });

            timelineModal = bootstrap.Modal.getOrCreateInstance(timelineModalId);
        }

        this.document.querySelectorAll(".timeline-block-hover").forEach((elem) => {
            elem.addEventListener("click", function() {
                timelineModal.show(elem);
            });
        });

        if (timelineModalButtonDelete) {
            timelineModalButtonDelete.addEventListener("click", function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: `Data timeline akan dihapus!`,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    allowOutsideClick: () => false,
                }).then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        var request = new XMLHttpRequest();
                        request.open(
                            "POST",
                            SITE_URL + "pengaturan-timeline/remove/" +
                            timelineModalUpdateId,
                            true
                        );
                        request.setRequestHeader(
                            "Content-Type",
                            "application/x-www-form-urlencoded; charset=UTF-8"
                        );
                        request.onload = function() {
                            if (request.status >= 200 && request.status < 400) {
                                Swal.fire(
                                    "Deleted!",
                                    "Data timeline berhasil dihapus.",
                                    "success"
                                ).then((x) => {
                                    document.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    "Failed!",
                                    "Data timeline gagal dihapus.",
                                    "error"
                                ).then(() => {
                                    document.location.reload();
                                });
                            }
                        };
                        request.send();
                    }
                });
            });
        }

        if (timelineModalButtonSave) {
            timelineModalButtonSave.addEventListener("click", function() {
                var form = new FormData(timelineModalForm);

                form.append("id_batch", timelineModalCreateId);

                if (timelineModalMode == "update") {
                    form.append("id_timeline", timelineModalUpdateId);
                }

                makeAFormReadOnly(timelineModalForm, true);
                disableAButton(timelineModalButtonSave, true);
                disableAButton(timelineModalButtonDelete, true);

                var request = new XMLHttpRequest();
                request.open(
                    "POST",
                    SITE_URL + "pengaturan-timeline/batch/timeline/save",
                    true
                );
                request.onload = function() {
                    if (request.status >= 200 && request.status < 400) {
                        Swal.fire(
                            "Success!",
                            "Timeline berhasil di " +
                            (timelineModalMode == "update" ? "perbarui." : "tambahkan."),
                            "success"
                        ).then((x) => {
                            document.location.reload();
                        });
                    } else {
                        Swal.fire(
                            "Failed!",
                            "Timeline gagal di " +
                            (timelineModalMode == "update" ? "perbarui." : "tambahkan."),
                            "error"
                        ).then(() => {
                            makeAFormReadOnly(timelineModalForm, false);
                            disableAButton(timelineModalButtonSave, false);
                            disableAButton(timelineModalButtonDelete, false);
                        });
                    }
                };
                request.send(form);
            });
        }
        // ---------------------- END TIMELINE ---------------------

        // ---------------------- COPY TIMELINE ---------------------
        const $selectizeTimelines = $("#selectizeTimelines").selectize({
            options: [],
            valueField: 'id_timeline',
            labelField: 'name_timeline',
            searchField: 'name_timeline',
            sortField: 'kode_timeline',
        });
        const $selectizeTargets = $("#selectizeTargets").selectize({
            options: [],
            valueField: 'id_batch',
            labelField: 'name_batch',
            searchField: ['name_batch'],
            sortField: 'name_batch',
        });

        const $selectizeTimelinesControl = $selectizeTimelines[0].selectize;
        const $selectizeTargetsControl = $selectizeTargets[0].selectize;

        $("#btnOpenTransferTimelineModal").on("click", function() {
            const button = $(this);
            const modal = bootstrap.Modal.getOrCreateInstance(
                document.getElementById("modalTransferTimeline")
            );

            button.prop('disabled', true);
            button.html('<i class="fas fa-circle"></i> Loading Data....');

            $.ajax({
                url: '<?= site_url("pengaturan-timeline/transfer-timeline/" . $batch['id_batch']) ?>',
                method: 'GET',
                success: function(data) {
                    const json = JSON.parse(data);

                    $selectizeTimelinesControl.clearOptions();

                    json.timeline.forEach((timeline) => {
                        $selectizeTimelinesControl.addOption({
                            id_timeline: timeline.id_timeline,
                            name_timeline: timeline.name_timeline,
                            kode_timeline: timeline.kode_timeline
                        });
                    });

                    $selectizeTargetsControl.clearOptions();

                    json.batchs.forEach((batch) => {
                        var item = {
                            loker: batch.name_job,
                            name_batch: batch
                                .name_batch
                                ?.toUpperCase(),
                            id_batch: batch.id_batch
                        };

                        $selectizeTargetsControl.addOption(item);
                    });

                    button.prop('disabled', false);
                    button.html('<i class="fas fa-copy"></i> Copy Timeline');

                    modal.show();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat memuat data.'
                    }).then((x) => {
                        button.prop('disabled', false);
                        button.html(
                            '<i class="fas fa-copy"></i> Copy Timeline');
                    });
                }
            });
        });

        $("#modalTransferTimelineButtonTf").on("click", function() {
            var timelines = $("#selectizeTimelines").val();
            var targets = $("#selectizeTargets").val();
            var modal = bootstrap.Modal.getOrCreateInstance(
                document.getElementById('modalTransferTimeline')
            );
            var button = $(this);

            if (timelines.length == 0 || targets.length == 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validation',
                    text: 'Harap melengkapi semua data.'
                });
                return;
            }

            Swal.fire({
                icon: 'question',
                title: 'Konfirmasi Copy?',
                text: 'Lanjutkan proses copy data timeline ke batch yang telah dipilih?',
                allowOutsideClick: false,
                confirmButtonText: 'Copy',
                showCancelButton: true
            }).then((x) => {
                if (x.isConfirmed) {
                    button.prop('disabled', true);
                    button.html('<i class="fas fa-circle"></i> Copying....');

                    $("#modalTransferTimeline").find("button.btn-close").each((k, elem) => {
                        $(elem).prop('disabled', true);
                    });

                    $.ajax({
                        url: '<?= site_url("pengaturan-timeline/transfer-timeline/" . $batch['id_batch']) ?>',
                        method: 'POST',
                        data: 'timelines=' + timelines + '&targets=' + targets,
                        success: function(data) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Data timeline berhasil di copy.'
                            }).then((x) => {
                                $("#modalTransferTimeline").find(
                                    "button.btn-close").each((
                                    k, elem) => {
                                    $(elem).prop('disabled', false);
                                });

                                button.prop('disabled', false);
                                button.html(
                                    '<i class="fas fa-copy"></i> Copy....'
                                );

                                modal.hide();
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);

                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Data timeline gagal di copy.'
                            }).then((x) => {
                                $("#modalTransferTimeline").find(
                                    "button.btn-close").each((
                                    k, elem) => {
                                    $(elem).prop('disabled', false);
                                });

                                button.prop('disabled', false);
                                button.html(
                                    '<i class="fas fa-copy"></i> Copy....'
                                );
                            });
                        }
                    });
                }
            });
        });
        // ---------------------- END COPY TIMELINE ---------------------
        // ---------------------- ADD JOB -------------------------------
        const $selectizeJob = $("#selectizeJobs").selectize({
            options: [],
            valueField: 'id',
            labelField: 'name_job',
            searchField: 'name_job',
            sortField: 'name_job',
            optgroupField: 'name_division',
            optionGroupRegister: function(optgroup) {
                var group = {
                    label: 'DIVISI: ' + optgroup?.toUpperCase()
                };

                group[this.settings.optgroupValueField] = optgroup;

                return group;
            },
        });

        const $selectizeJobControl = $selectizeJob[0].selectize;

        $("#addJobVacancyButtonSave").on("click", function() {
            if ($selectizeJobControl.getValue().length == 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Lengkapi Data!',
                    text: 'Tidak ada lowongan pekerjaan yang dipilih.'
                });
            } else {
                var form = new FormData();
                form.append("jobs", $selectizeJobControl.getValue());
                axios.post(
                    '<?= site_url("pengaturan-timeline/batch/" . $batch["id_batch"] . "/add_job") ?>',
                    form
                ).then((response) => {
                    var modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
                        'addJobVacancyModal'));
                    modal.hide();

                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Job berhasil ditambahkan.',
                        allowOutsideClick: false
                    }).then((x) => {
                        if (x.isConfirmed) {
                            document.location.reload();
                        }
                    });
                }).catch((error) => {
                    console.log(error);

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: error.response.data.message || 'Job gagal ditambahkan.',
                        allowOutsideClick: false
                    });
                });

            }
        });

        $("#addJobVacancyButton").on("click", function() {
            $(this).attr('disabled', true);
            $(this).html('<i class="text-white fas fa-gear fa-pulse"></i>');
            axios.get(
                '<?= site_url("pengaturan-timeline/batch/" . $batch["id_batch"] . "/get_available_job") ?>'
            ).then((response) => {
                $("#addJobVacancyButton").attr('disabled', false);
                $("#addJobVacancyButton").html('<i class="fas fa-plus"></i> Tambahkan Job');

                $selectizeJobControl.clearOptions();

                response.data.jobs.forEach((job) => {
                    var item = {
                        id: job.id,
                        name_job: job
                            .name_job?.toUpperCase() + ' ' + job.name_division
                            ?.toUpperCase(),
                        name_division: job
                            .name_division?.toUpperCase()
                    }

                    $selectizeJobControl.addOption(item);
                });

                var modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
                    'addJobVacancyModal'));
                modal.show();
            }).catch((error) => {
                console.error(error);

                var modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
                    'addJobVacancyModal'));
                modal.hide();

                if (error.response.status == 404) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Loker Kosong!',
                        text: 'Tidak ada data loker yang ditemukan atau semua loker yang ada sudah terdaftar pada batch ini.'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: error.response.data.message ||
                            'Gagal memuat data lowongan pekerjaan.'
                    });
                }

                $("#addJobVacancyButton").attr('disabled', false);
                $("#addJobVacancyButton").html('<i class="fas fa-plus"></i> Tambahkan Job');
            });
        });

        $(".btn-delete-job-from-batch").on("click", function() {
            const id = $(this).data('id');
            Swal.fire({
                icon: 'question',
                title: 'Hapus Loker?',
                text: 'Loker akan dihapus dari batch ini.',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus',
                allowOutsideClick: false
            }).then((x) => {
                if (x.isConfirmed) {
                    var form = new FormData();
                    form.append('id_batch_job', id);
                    axios.post(
                            '<?= site_url("pengaturan-timeline/batch/" . $batch["id_batch"] . "/del_job") ?>',
                            form)
                        .then((response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Loker berhasil dihapus dari batch.',
                                showCancelButton: false,
                                confirmButtonText: 'Oke',
                                allowOutsideClick: false
                            }).then((x) => {
                                if (x.isConfirmed) {
                                    document.location.reload();
                                }
                            });
                        }).catch((error) => {
                            console.error(error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Loker gagal dihapus dari batch.',
                                showCancelButton: false,
                                confirmButtonText: 'Oke',
                                allowOutsideClick: false
                            });
                        });
                }
            })
        });
        // ---------------------- END ADD JOB ---------------------------
    });
</script>