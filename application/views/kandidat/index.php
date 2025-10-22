<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent d-flex justify-content-between">
                <div>
                    <h3>Daftar Kandidat</h3>
                </div>
                <div>
                    <a href="<?= site_url('/kandidat/create') ?>"
                        class="btn btn-xs btn-primary bg-radient-primary">
                        <i class="fas fa-plus"></i> Tambah Kandidat
                    </a>
                </div>
            </div>

            <div class="card-body p-3">
                <div class="col-md-12">
                    <?php if ($tf = $this->session->flashdata('transfer')): ?>
                    <div
                        class="alert alert-<?= $tf == 'success' ? 'success' : 'danger' ?> text-white">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                    <?php endif ?>
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="table-kandidat">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID Kandidat</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Divisi</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        State</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Apply</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kandidat as $row) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div aria-hidden="true">
                                                <img src="<?= base_url('/uploads/kandidat/profiles/' . $row['photo_candidate']) ?>"
                                                    class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">
                                                    <?= strtoupper($row['name_candidate']) ?>
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <?= $row['email_candidate'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold"><?= $row['id_candidate'] ?></span>
                                    </td>
                                    <td class="">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            <?= $row['state'] == 2 ? strtoupper($row['division_']) : '&nbsp;&nbsp;&nbsp;-'  ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">
                                            <?php if ($row['state'] == 2): ?>
                                            <span class="badge badge-xs text-white bg-success">Training</span>
                                            <?php elseif ($row['state'] == 3): ?>
                                            <span class="badge badge-xs text-white bg-danger">Ditolak</span>
                                            <?php else: ?>
                                            <span class="badge badge-xs text-white bg-warning">Proses</span>
                                            <?php endif ?>
                                        </span>
                                    </td>
                                    <td>
                                        &nbsp;&nbsp;&nbsp;
                                        <?php if ($row['state'] == 2): ?>
                                        <i class="text-success fas fa-check"></i>
                                        <?php elseif ($row['state'] == 3): ?>
                                        <i class="text-danger fas fa-times"></i>
                                        <?php else: ?>
                                        <i class="text-warning fas fa-clock"></i>
                                        <?php endif ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($this->session->userdata('is_superadmin') == true): ?>
                                        <?php if ($row['state'] == 2 && isCandidateTransfered($row['email_candidate']) == false): ?>
                                        <a data-transfer="<?= $row['id'] ?>"
                                            href="<?= site_url('/kandidat/transfer/' . $row['id']) ?>"
                                            class="btn btn-icon btn-xs text-white bg-secondary btn-confirm-apply">
                                            <span class="btn--inner-icon"><i class="fa fa-exchange"></i></span>
                                        </a>
                                        <?php endif ?>
                                        <?php endif ?>
                                        <a href="<?= site_url('/kandidat/detail/' . $row['id']) ?>"
                                            class="btn btn-icon btn-xs text-white bg-info">
                                            <span class="btn-inner--icon"><i class="fa fa-eye"></i></span>
                                        </a>
                                        <a href="<?= site_url('/kandidat/edit/' . $row['id']) ?>"
                                            class="btn btn-icon btn-xs text-white bg-success">
                                            <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                        </a>
                                        <?php if ($this->session->userdata('is_superadmin') == true): ?>
                                        <button
                                            data-kandidat="<?= $row['id'] ?>"
                                            data-kandidat_nama="<?= $row['name_candidate'] ?>"
                                            class="btn-delete-kandidat btn btn-icon btn-xs text-white bg-danger">
                                            <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                        </button>
                                        <?php endif ?>
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
</div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", function() {
        const table = $("#table-kandidat").DataTable({
            dom: 'lfrtip',
            processing: true,
            buttons: [{
                    extend: 'print',
                    text: '<i class="fas fa-sm fa-print"></i> Print',
                    className: 'btn-xs btn-primary bg-primary',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    },
                    title: 'Lido Career Center - Data Kandidat'
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-sm fa-file-excel"></i> Excel',
                    className: 'btn-xs btn-success bg-success',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    },
                    title: 'Lido Career Center - Data Kandidat'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-sm fa-file-pdf"></i> Pdf',
                    className: 'btn-xs btn-danger bg-danger',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    },
                    title: 'Lido Career Center - Data Kandidat'
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-sm fa-file-csv"></i> Csv',
                    className: 'btn-xs btn-secondary bg-secondary',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    },
                    title: 'Lido Career Center - Data Kandidat'
                },
            ],
            language: {
                paginate: {
                    previous: '<span class="fas fa-arrow-left"></span>',
                    next: '<span class="fas fa-arrow-right"></span>'
                },
            },
            // lengthChange: false,
        });

        // table.buttons().container()
        //     .appendTo('#table-kandidat_wrapper .col-md-6:eq(0)');

        $("a.page-link").addClass('text-white');

        document.querySelectorAll(".btn-confirm-apply").forEach((elem) => {
            elem.addEventListener("click", function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Transfer Kandidat',
                    text: 'Lanjutkan proses transfer kandidat?',
                    icon: 'question',
                    showCancelButton: true,
                    allowOutsideClick: false,
                }).then((x) => {
                    if (x.isConfirmed) {
                        document.location.href = elem.href;
                    }
                });
            });
        });
    });
</script>