<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <!--- PROFILE --->
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h3>Pengaturan Website</h3>
            </div>
            <div class="card-body p-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#tab-pengaturan-hero"
                                role="tab" aria-controls="hero" aria-selected="true">
                                Hero
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-widget1"
                                role="tab" aria-controls="widget1" aria-selected="true">
                                Konten 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-widget2"
                                role="tab" aria-controls="widget2" aria-selected="true">
                                Konten 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-website"
                                role="tab" aria-controls="webiste" aria-selected="true">
                                Setting perusahaan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-sosmed"
                                role="tab" aria-controls="sosmed" aria-selected="true">
                                Sosial Media
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-pengaturan-footer"
                                role="tab" aria-controls="footer" aria-selected="true">
                                Footer
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="tab-content mt-4" id="pengaturanLPTabContent">
                    <div class="tab-pane fade" id="tab-pengaturan-widget1" role="tabpanel" aria-labelledby="widget1">
                        <!-- Beg Tab 1 -->
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                        <div class="text-center">
                                            <img class="img-fluid border-radius-lg" id="tab-img-widget-1"
                                                src="<?= base_url('uploads/' . $widget1['about_image']) ?>"
                                                alt="<?= $widget1['about_image'] ?>" />
                                        </div>
                                        <div class="mt-2">
                                            <!-- <button data-bs-toggle="modal" data-bs-target="#previewImageModal"
                                                data-img="<?= base_url('uploads/' . $widget1['about_image']) ?>"
                                            class="btn btn-sm btn-success w-100" style="margin-bottom: 12px">
                                            <i class="fas fa-camera"></i> Preview Image
                                            </button> -->
                                            <button data-bs-toggle="modal" data-domimgtarget="tab-img-widget-1"
                                                data-destination="about_image_1" data-bs-target="#changeImageModal"
                                                class="btn btn-sm btn-primary w-100">
                                                <i class="fas fa-camera"></i> Change Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-widget-1" onsubmit="return false;"
                                            action="<?= site_url('/pengaturan-landing-page') ?>"
                                            method="post">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Name</label>
                                                <input class="form-control" type="text" value="Widget 1" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Title</label>
                                                <input id="field_about_title1" name="about_title" class="form-control"
                                                    type="text"
                                                    value="<?= $widget1['about_title'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Subtitle</label>
                                                <input id="field_about_subtitle1" name="about_subtitle"
                                                    class="form-control" type="text"
                                                    value="<?= $widget1['about_subtitle'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea id="field_about_description1" name="about_description"
                                            class="form-control" cols="30"
                                            rows="10"><?= $widget1['about_description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-edit-lp-widget1" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        <!-- End Tab 1 -->
                    </div>
                    <div class="tab-pane fade" id="tab-pengaturan-widget2" role="tabpanel" aria-labelledby="widget2">
                        <!-- Beg Tab 2 -->
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                        <div class="text-center">
                                            <img class="img-fluid border-radius-lg" id="tab-img-widget-2"
                                                src="<?= base_url('uploads/' . $widget2['about_image']) ?>"
                                                alt="<?= $widget2['about_image'] ?>" />
                                        </div>
                                        <div class="mt-2">
                                            <!-- <button data-bs-toggle="modal" data-bs-target="#previewImageModal"
                                                data-img="<?= base_url('uploads/' . $widget2['about_image']) ?>"
                                            class="btn btn-sm btn-success w-100" style="margin-bottom: 12px">
                                            <i class="fas fa-camera"></i> Preview Image
                                            </button> -->
                                            <button data-bs-toggle="modal" data-domimgtarget="tab-img-widget-2"
                                                data-destination="about_image_2" data-bs-target="#changeImageModal"
                                                class="btn btn-sm btn-primary w-100">
                                                <i class="fas fa-camera"></i> Change Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-widget-2" onsubmit="return false;"
                                            action="<?= site_url('/pengaturan-landing-page') ?>"
                                            method="post">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Name</label>
                                                <input class="form-control" type="text" value="Widget 2" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Title</label>
                                                <input id="field_about_title2" name="about_title" class="form-control"
                                                    type="text"
                                                    value="<?= $widget2['about_title'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Subtitle</label>
                                                <input id="field_about_subtitle2" name="about_subtitle"
                                                    class="form-control" type="text"
                                                    value="<?= $widget2['about_subtitle'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea id="field_about_description2" name="about_description"
                                            class="form-control" cols="30"
                                            rows="10"><?= $widget2['about_description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-edit-lp-widget2" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        <!-- End Tab 2 -->
                    </div>
                    <div class="tab-pane fade" id="tab-pengaturan-footer" role="tabpanel" aria-labelledby="footer">
                        <!-- Beg footer -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-footer" onsubmit="return false;"
                                            action="<?= site_url('/pengaturan-landing-page') ?>"
                                            method="post">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Judul
                                                    Footer</label>
                                                <input id="field_footer_title" name="judul_footer" class="form-control"
                                                    type="text"
                                                    value="<?= $setting['tittle_footer'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Konten
                                                    Footer</label>
                                                <textarea id="field_footer_konten" name="konten_footer"
                                                    class="form-control" cols="30"
                                                    rows="10"><?= $setting['content_footer'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat
                                                    Perusahaan</label>
                                                <input id="field_footer_address" name="address_footer"
                                                    class="form-control" type="text"
                                                    value="<?= $setting['address_footer'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">No
                                                    Perusahaan</label>
                                                <input id="field_footer_no" name="no_footer" class="form-control"
                                                    type="text"
                                                    value="<?= $setting['no_footer'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email
                                                    Perusahaan</label>
                                                <input id="field_footer_email" name="email_footer" class="form-control"
                                                    type="text"
                                                    value="<?= $setting['email_footer'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link map
                                                    perusahaan</label>
                                                <input id="field_footer_map" name="link_map" class="form-control"
                                                    type="text"
                                                    value="<?= $setting['link_map'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-footer" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        <!-- End footer-->
                    </div>
                    <div class="tab-pane fade" id="tab-pengaturan-sosmed" role="tabpanel" aria-labelledby="sosmed">
                        <!-- sosmed -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped border-rounded">
                                                <tr>
                                                    <th class="">Nama / Username</th>
                                                    <th class="">Link</th>
                                                    <th class="">Aksi</th>
                                                </tr>
                                                <?php foreach ($setting_social as $row): ?>
                                                <tr>
                                                    <td class="">
                                                        <div class="d-flex px-2 py-1">
                                                            <div aria-hidden="true">
                                                                <?= $row['icon_social'] ?>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">

                                                                <?= ($row['name_social']) ?>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <?php echo $row['link_social']; ?>
                                                    </td>
                                                    <td class="">
                                                        <button type="button" class="btn btn-primary btn-xs btn-edit"
                                                            data-target="#editModal"
                                                            data-id="<?= $row['id_sc']; ?>"
                                                            data-icon="<?= $row['icon_social']; ?>"
                                                            data-name="<?= $row['name_social']; ?>"
                                                            data-link="<?= $row['link_social']; ?>">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        <a href="<?= base_url('PengaturanLandingPage/delete_data_sc/'. $row['id_sc'])?>"
                                                            class="btn bg-gradient-danger btn-xs tombol-hapus">
                                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end mt-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#tambahsosmed">
                                <i class="fas fa-plus"></i> Tambah
                            </button>
                        </div>
                    </div>

                    <!-- sosmed -->

                    <!-- heropage -->
                    <div class="tab-pane fade show active" id="tab-pengaturan-hero" role="tabpanel"
                        aria-labelledby="hero">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                        <div class="text-center">
                                            <img class="img-fluid border-radius-lg" id="tab-img-widget-2"
                                                src="<?= base_url('uploads/' . $hero['image_homepage']) ?>"
                                                alt="<?= $hero['image_homepage'] ?>" />
                                        </div>
                                        <div class="mt-2">
                                            <button data-bs-toggle="modal" data-domimgtarget="tab-img-widget-2"
                                                data-destination="about_image_hero" data-bs-target="#changeImageModal"
                                                class="btn btn-sm btn-primary w-100">
                                                <i class="fas fa-camera"></i> Change Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-widget-2" onsubmit="return false;" action=""
                                            method="post">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Title</label>
                                                <input id="field_about_titlehero" name="about_title"
                                                    class="form-control" type="text"
                                                    value="<?= $hero['tittle_homepage'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Subtitle</label>
                                                <input id="field_about_subtitlehero" name="about_subtitle"
                                                    class="form-control" type="text"
                                                    value="<?= $hero['subtitle_homepage'] ?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button id="button-form-edit-lp-hero" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-pengaturan-website" role="tabpanel" aria-labelledby="website">
                        <!-- Beg Tab 3 -->
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 10px; padding-bottom: 1px">
                                        <div class="text-center">
                                            <img class="img-fluid border-radius-lg" id="tab-img-company-logo"
                                                src="<?= base_url('uploads/' . $setting['company_logo']) ?>"
                                                alt="<?= $setting['company_logo'] ?>" />
                                        </div>
                                        <div class="mt-2">
                                            <!-- <button data-bs-toggle="modal" data-bs-target="#previewImageModal"
                                                data-img="<?= base_url('uploads/' . $setting['company_logo']) ?>"
                                            class="btn btn-sm btn-success w-100" style="margin-bottom: 12px">
                                            <i class="fas fa-camera"></i> Preview Image
                                            </button> -->
                                            <button data-bs-toggle="modal" data-domimgtarget="tab-img-company-logo"
                                                data-destination="company_logo" data-bs-target="#changeImageModal"
                                                class="btn btn-sm btn-primary w-100">
                                                <i class="fas fa-camera"></i> Change Logo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="form-edit-lp-website" onsubmit="return false;"
                                            action="<?= site_url('/pengaturan-landing-page') ?>"
                                            method="post">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Company
                                                    Name</label>
                                                <input id="field_company_name" name="company_name" class="form-control"
                                                    type="text"
                                                    value="<?= $setting['company_name'] ?>"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Company
                                                    Title</label>
                                                <input id="field_company_title" name="company_title"
                                                    class="form-control" type="text"
                                                    value="<?= $setting['company_title'] ?>"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <label for="war" class="form-label">Theme Color</label>
                                                <input type="color" class="form-control" id="war" name="warna"
                                                    value="<?= $setting['warna'] ?>"
                                                    required>
                                            </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <label for="field_about_p">Pengumuman untuk user</label>
                                    <textarea id="field_about_p" name="field_p" class="form-control" cols="30"
                                        rows="10"><?= $setting['user_announcement'] ?></textarea>
                                </div>

                                <div class="card-body">
                                    <div class="quill">
                                        <label for="field_about_visi">Visi</label>
                                        <textarea id="field_about_visi" name="field_visi" class="form-control" cols="30"
                                            rows="10"><?= $setting['visi'] ?></textarea>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="quill">
                                        <label for="field_about_misi">Misi</label>
                                        <textarea id="field_about_misi" name="field_misi" class="form-control" cols="30"
                                            rows="10"><?= $setting['misi'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="form-group d-flex justify-content-end" style="margin-top: 30px">
                                <button id="button-form-edit-lp-website" onclick="updateWebsiteSetting('setting')"
                                    class="btn btn-success">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                            <!-- End Tab 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Preview Image -->
    <div class="modal fade" id="previewImageModal" tabindex="-1" role="dialog" aria-labelledby="previewImageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-body">
                    <div class="text-center">
                        <img id="modal-preview-image-img-preview" class="img-fluid border-radius-lg" src="" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Change Image  -->
    <div class="modal fade" id="changeImageModal" tabindex="-1" role="dialog" aria-labelledby="changeImageModalLabel"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeImageModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="form-change-image-img-preview" class="img-fluid border-radius-lg" src="" alt="" />
                    </div>
                    <form onsubmit="return false;" action="" class="mt-3" id="form-change-image" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group" id="form-change-image-box-input">
                            <input id="form-change-image-file-input" type="file" class="form-control"
                                name="form_change_image_file" accept="image/*" />
                            <p class="mt-1 text-danger" id="form-change-image-info-text"></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary"
                        id="form-change-image-button-update">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahsosmed" tabindex="-1" role="dialog" aria-labelledby="tambahsosmed"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Sosial Media</h5>
                </div>
                <div class="modal-body">
                    <form id="form-footer"
                        action="<?= site_url('PengaturanLandingPage/save_form_sosmed'); ?>"
                        method="post">
                        <div class="form-group">
                            <label for="icons" class="form-label">Pilih Sosial Media</label>
                            <select name="iconselect" id="" class="form-select" aria-label="Default select example"
                                required>
                                <option selected>Pilih</option>
                                <option value="<i class='fa-brands fa-instagram'></i>">Instagram</option>
                                <option value="<i class='fa-brands fa-twitter'></i>">Twitter</option>
                                <option value="<i class='fa-brands fa-facebook'></i>">Facebook</option>
                                <option value="<i class='fa-brands fa-linkedin'></i>">Linkedin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="field_sosmed_name" class="form-label">Nama/Username</label>
                            <input id="field_sosmed_name" name="sosmed_name" class="form-control" type="text" value=""
                                required />
                        </div>
                        <div class="form-group">
                            <label for="field_sosmed_link" class="form-label">Link</label>
                            <input id="field_sosmed_link" name="sosmed_link" class="form-control" type="text" value=""
                                required />
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button></form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Sosial Media</h5>
                </div>
                <div class="modal-body">
                    <form id="form-footer"
                        action="<?= site_url('PengaturanLandingPage/update_form_sosmed'); ?>"
                        method="post">
                        <input type="hidden" name="id" id="edit_id">
                        <div class="form-group">
                            <label for="icons" class="form-label">Pilih Sosial Media</label>
                            <select name="iconselect" id="edit_icon" class="form-select"
                                aria-label="Default select example" required>
                                <option selected>Pilih</option>
                                <option value="<i class='fa-brands fa-instagram'></i>">Instagram</option>
                                <option value="<i class='fa-brands fa-twitter'></i>">Twitter</option>
                                <option value="<i class='fa-brands fa-facebook'></i>">Facebook</option>
                                <option value="<i class='fa-brands fa-linkedin'></i>">Linkedin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="field_sosmed_name" class="form-label">Nama/Username</label>
                            <input id="edit_name" name="sosmed_name" class="form-control" type="text" value=""
                                required />
                        </div>
                        <div class="form-group">
                            <label for="field_sosmed_link" class="form-label">Link</label>
                            <input id="edit_link" name="sosmed_link" class="form-control" type="text" value=""
                                required />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
    <div id="flashdata-success">
        <?= $this->session->flashdata('success') ?>
    </div>
    <?php elseif ($this->session->flashdata('error')): ?>
    <div id="flashdata-error">
        <?= $this->session->flashdata('error') ?>
    </div>
    <?php endif ?>

    <script>
        window.addEventListener("DOMContentLoaded", function() {

            // Init CK
            CKEDITOR.replace('field_about_visi');
            CKEDITOR.replace('field_about_misi');

            var flashDataSuccess = $("#flashdata-success").text();
            var flashDataError = $("#flashdata-error").text();
            console.log(flashDataSuccess)
            console.log(flashDataError)

            if (flashDataSuccess.trim().length > 0) {
                Swal.fire({
                    title: "Sukses",
                    text: flashDataSuccess,
                    icon: "success",
                });
            }


            if (flashDataError.trim().length > 0) {
                Swal.fire({
                    title: "Gagal",
                    text: flashDataError,
                    icon: "error",
                });
            }
        });
    </script>