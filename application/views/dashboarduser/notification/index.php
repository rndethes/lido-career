<div id="notification-app-root">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <div>
                        <h3>Notifikasi</h3>
                    </div>
                </div>
                <div class="card-body p-3" style="max-height: 500px; overflow-y: auto;">
                    <ul class="list-group">
                        <?php if (empty($notifications)): ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                            style="background-color: aqua;">
                            <p>Anda belum memiliki notifikasi.</p>
                        </li>
                        <?php else: ?>
                        <?php foreach ($notifications as $notif): ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                            style="background-color: aqua;">
                            <div class="d-flex flex-column">
                                <span
                                    class="mb-2 text-xs font-weight-medium"><?= $notif['description_ms'] ?></span>
                                <span class="text-xs">
                                    <i class="fas fa-clock"></i><span
                                        class="text-dark ms-sm-2"><?= date('d M Y', strtotime($notif['date_created'])) ?>
                                        -
                                        <?= diffDateForHuman($notif['date_created'], 'now', 1) . ' ago' ?></span>
                                </span>
                            </div>
                            <div class="ms-auto text-end">
                                <?php if ($notif['sent_state'] == Notification_model::NOTIF_UNREADED): ?>
                                <a class="btn btn-link text-success text-gradient px-3 mb-0"
                                    href="<?= site_url('candidate-notification/read/' . $notif['id_ms']) ?>">
                                    <i class="fas fa-check me-2" aria-hidden="true"></i> Read
                                </a>
                                <?php endif ?>
                            </div>
                        </li>
                        <?php endforeach ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>