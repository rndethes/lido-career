<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-danger h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?= base_url() ?>assets/img/b1.png'); background-size: cover;">
                            <span class="mask opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                            <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Ubah Kata Sandi dari Email</h4>
                                <h6 class="font-weight"><?= $emailses ?></h6>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('candidatelogin/changepassword'); ?>">
                                     <div class="input-group mb-3">
                                        <input class="form-control form-control-lg password" placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password" required />
                                        <?= form_error('password', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                        <span class="input-group-text togglePassword" id="">
                                        <i class="far fa-eye" id="togglePassword2" style=" cursor: pointer; color: #5B5F63;"></i>
                                    </span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input class="form-control form-control-lg password" placeholder="Ulangi Password" id="passwordtwo" class="block mt-1 w-full" type="password" name="passwordtwo" required />
                                        <?= form_error('passwordtwo', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                        <span class="input-group-text togglePassword" id="">
                                        <i class="far fa-eye" id="togglePassword2" style=" cursor: pointer; color: #5B5F63;"></i>
                                        </span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Ubah Password</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    <span>
                                        Kembali ke
                                        <a href="sign-in.html" class="text-danger font-weight-bold">Login</a>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>