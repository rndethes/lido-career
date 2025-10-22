<?php if (empty($candidates)): ?>
<div class="alert alert-info text-center text-white">
    Tidak ada data yang ditemukan.
</div>
<?php else: ?>
<div class="table-responsive" style="margin-top: 4px">
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <!-- <th class="ps-2">
                </th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Kandidat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Daftar Di</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Timeline</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Grade</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Prioritas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Status
                </th>
                <th class="text-secondary opacity-7"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candidates as $row): ?>
            <tr class="tt-di-mek">
                <!-- <td class="">
                    <?php if ($row['timeline_status'] == 1): ?>
                <input class="bakso-control-checkbox" name="bakso-kontrol[]"
                    value="<?= $row['id'] ?>"
                    type="checkbox" style="width: 20px; height: 20px;">
                <?php else: ?>
                <input type="checkbox" style="width: 20px; height: 20px;" disabled>
                <?php endif ?>
                </td> -->
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="<?= base_url('uploads/kandidat/profiles/' . $row['photo_candidate']) ?>"
                                class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">
                                <a
                                    href="<?= site_url('kandidat/edit/' . $row['id']) ?>">
                                    <?= $row['name_candidate'] ?>
                                </a>
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                                <?= $row['email_candidate'] ?>
                            </p>
                        </div>
                    </div>
                </td>
                <td class="align-middle text-sm">
                    <span
                        class="text-secondary text-xs font-weight-bold"><?= $row['id_candidate'] ?></span>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">
                        <?= $row['name_job'] ?>
                    </p>
                    <p class="text-xs text-secondary mb-0">
                        <?= $row['name_division'] ?>
                    </p>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">
                        <?= $row['name_timeline'] ?>
                    </span>
                </td>
                <td class="text-center">
                    <span class="text-secondary text-xs font-weight-bold">
                        <!-- <?= getJenisKelaminValue($row['jk_candidate']) ?>
                        -->
                        <?= $row['grade_value'] ?>
                    </span>
                </td>
                <td class="text-center">
                    <span class="text-secondary text-xs font-weight-bold">
                        <?= $row['urutan'] ?>
                    </span>
                </td>
                <td>
                    <span class="text-secondary text-xs font-weight-bold">
                        <?= getTimelineStatusValue($row['timeline_status']) ?>
                    </span>
                </td>
                <td class="align-middle">
                    <?php if ($row['timeline_status'] == 1): ?>
                    <button
                        data-id="<?= $row['id'] ?>"
                        data-name="<?= $row['name_candidate'] ?>"
                        data-kode="<?= $row['kode_timeline'] ?>"
                        data-timeline="<?= $row['name_timeline'] ?>"
                        data-timelineid="<?= $row['id_timeline'] ?>"
                        data-devicetoken="<?= $row['device_token'] ?>"
                        data-jobvacancyid="<?= $row['id_job_vacancy'] ?>"
                        data-historytimelineid="<?= $row['history_timeline_id'] ?>"
                        data-final="<?= isFinalTimeline($row['kode_timeline']) ? 'apply' : 'next' ?>"
                        type="button" class="btn bg-gradient-danger btn-xs btn-reject-for-next">
                        <span class="btn-inner--icon">
                            <i class="fa-solid fa-times text-white">
                            </i>
                        </span>
                    </button>
                    &nbsp;
                    <button
                        data-id="<?= $row['id'] ?>"
                        data-name="<?= $row['name_candidate'] ?>"
                        data-kode="<?= $row['kode_timeline'] ?>"
                        data-timeline="<?= $row['name_timeline'] ?>"
                        data-timelineid="<?= $row['id_timeline'] ?>"
                        data-devicetoken="<?= $row['device_token'] ?>"
                        data-jobvacancyid="<?= $row['id_job_vacancy'] ?>"
                        data-historytimelineid="<?= $row['history_timeline_id'] ?>"
                        data-final="<?= isFinalTimeline($row['kode_timeline']) ? 'apply' : 'next' ?>"
                        type="button" class="btn bg-gradient-success btn-xs btn-apply-for-next">
                        <span class="btn-inner--icon">
                            <i class="fa-solid fa-check">
                            </i>
                        </span>
                    </button>
                    <?php endif ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php endif ?>