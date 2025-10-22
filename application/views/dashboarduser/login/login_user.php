<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                       <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-size: cover; background: url('<?= base_url() ?>assets/img/corousel-1');">
                            <span class="mask opacity-5"></span>
                            <h3 class="mt-5 text-white font-weight-bolder position-relative">LIDO GROSIR</h3>
                            <p class="text-white position-relative">Perusahaan penyedia kebutuhan masyarakat yang berskala nasional.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Login Terlebih Dahulu</h4>
                                <p class="mb-0">Masukkan Email & Password untuk Login</p>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('candidatelogin'); ?>">

                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg" placeholder="example@gmail.com" aria-label="Email" name="email" id="email" value="<?= $this->session->userdata('email_candidate'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3"  style="font-size: 12px;">', '</small>'); ?>
                                    </div>
                                     <div class="input-group mb-3">
                                        <input class="form-control form-control-lg password" placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password" required />
                                        <?= form_error('password', '<small class="text-danger pl-3"  style="font-size: 12px;">', '</small>'); ?>
                                        <span class="input-group-text">
                                        <i class="far fa-eye" id="togglePassword2" style=" cursor: pointer; color: #5B5F63;"></i>
                                    </span>
                                    </div>
                                   <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Login</button>
                                        <!-- <button type="button" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Sign in</button> -->
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    <span>
                                        <a href="<?= base_url() ?>candidatelogin/forgotpassword" class="text-danger font-weight-bold">Lupa Password?</a>
                                    </span>
                                    <br>
                                    Belum memiliki akun?
                                    <a href="<?= base_url() ?>candidatelogin/registration" class="text-danger font-weight-bold">Daftar Akun</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>