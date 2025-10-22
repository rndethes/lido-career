<?php
$CI =& get_instance();
$CI->load->model('notification_model');

$notification = $CI->notification_model->getMyTopNotification(
    getLoggedInUser('id')
);
?>

<li class="nav-item dropdown pe-2 d-flex align-items-center dont-touchme-mba">
    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
        <?php if (!empty($notification)): ?>
        <?php foreach ($notification as $notif): ?>
        <li class="mb-2">
            <a class="dropdown-item border-radius-md"
                href="<?= site_url('candidate-notification/read/' . $notif['id_ms']) ?>"
                style="background-color: #e9ecef;">
                <div class="d-flex py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1 text-dark dont-touchme-mba">
                            <span class="font-weight-medium">
                                <?= substr($notif['description_ms'], 0, 40) . '....' ?>
                            </span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i>
                            <?= diffDateForHuman($notif['date_created'], 'now', 1) . ' ago' ?>
                        </p>
                    </div>
                </div>
            </a>
        </li>
        <?php endforeach ?>
        <?php else: ?>
        <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:void(0)" style="background-color: #e9ecef;">
                <div class="d-flex py-1">
                    <div class="my-auto">
                        <span class="avatar avatar-sm me-3 text-dark">
                            <i class="fas fa-lg fa-ban"></i>
                        </span>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1 text-dark dont-touchme-mba">
                            <span class="font-weight-medium">Tidak ada notifikasi baru...</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                        </p>
                    </div>
                </div>
            </a>
        </li>
        <?php endif ?>
        <li class="text-center mt-4">
            <a class="dropdown-item border-radius-lg btn btn-md shadow-none"
                href="<?= site_url('/candidate-notification') ?>">
                <i class="fas fa-arrow-right"></i> All Notifications
            </a>
        </li>
    </ul>
</li>