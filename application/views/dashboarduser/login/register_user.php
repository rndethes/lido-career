<style>
    .iti {
        width: 100%;
    }
</style>

<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Daftar di sini</h4>
                                <p class="mb-0">Masukan Email & Kata Sandi Anda untuk Masuk</p>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post"
                                    action="<?= base_url('candidatelogin/registration'); ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control form-control-lg tt-gede"
                                                    placeholder="Nama Depan" aria-label="Nama Depan" id="first_name"
                                                    name="first_name"
                                                    value="<?= set_value('first_name'); ?>">
                                                <?= form_error('first_name', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class=" col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control form-control-lg tt-gede"
                                                    placeholder="Nama Belakang" aria-label="Nama Belakang"
                                                    id="last_name" name="last_name"
                                                    value="<?= set_value('last_name'); ?>">
                                                <?= form_error('last_name', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <input type="tel" class="form-control form-control-lg" placeholder="85675xxxxx"
                                            aria-label="No Telephone" id="telp" name="telp"
                                            value="<?= set_value('telp'); ?>">
                                        <?= form_error('telp', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="example@gmail.com" aria-label="Email" id="email" name="email"
                                            value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                    </div>
                                    <!-- form password 1 -->
                                    <div class="input-group mb-3">
                                        <input class="form-control form-control-lg password" placeholder="Password"
                                            id="password" class="block mt-1 w-full" type="password" name="password"
                                            required />
                                        <?= form_error('password', '<small class="text-danger pl-3" style="font-size: 12px;">', '</small>'); ?>
                                        <span class="input-group-text">
                                            <i class="far fa-eye" id="togglePassword1"
                                                style=" cursor: pointer; color: #5B5F63;"></i>
                                        </span>
                                    </div>
                                    <!-- form password 2 -->
                                    <div class="input-group mb-3">
                                        <input class="form-control form-control-lg password"
                                            placeholder="Ulangi Password" id="passwordtwo" class="block mt-1 w-full"
                                            type="password" name="passwordtwo" required />
                                        <span class="input-group-text">
                                            <i class="far fa-eye" id="togglePassword2"
                                                style=" cursor: pointer; color: #5B5F63;"></i>
                                        </span>
                                    </div>
                                    <div>

                                        <table>
                                            <td><input type="checkbox" id="privacy-policy-checkbox" class="me-1"></td>
                                            <td><label for="privacy-policy-checkbox">Saya setuju dengan <a href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><u>Kebijakan
                                                            Privasi</u></a></label></td>
                                        </table>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0"
                                            id="signup-button" disabled>Sign Up</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Sign Up</button> -->
                                        <!-- <button type="button" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Sign in</button> -->
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Sudah memiliki akun?
                                    <a href="<?= base_url('candidatelogin') ?>"
                                        class="text-danger font-weight-bold">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-size: cover;">
                            <span class="mask opacity-5"></span>
                            <h3 class="mt-5 text-white font-weight-bolder position-relative">LIDO GROSIR</h3>
                            <p class="text-white position-relative">Perusahaan penyedia kebutuhan masyarakat yang
                                berskala nasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kebijakan privacy Lido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="privacy-policy">
                            <h2 class="my-2">Kebijakan Privasi</h2>
                            <p>
                                Kami sangat menghormati privasi para pelamar pekerjaan dan berkomitmen untuk melindungi
                                informasi pribadi yang dikumpulkan melalui situs web kami. Kebijakan privasi ini
                                menjelaskan bagaimana kami mengumpulkan, menggunakan,
                                membagikan, dan melindungi informasi pribadi yang diberikan kepada kami.
                            </p>
                            <h2>Informasi yang dikumpulkan</h2>
                            <p>
                                Kami dapat mengumpulkan informasi pribadi seperti nama, alamat email, nomor telepon, dan
                                informasi lain yang berkaitan dengan para pelamar pekerjaan saat mereka mendaftar atau
                                mengirimkan lamaran melalui situs web kami.
                            <h2>Penggunaan informasi</h2>
                            <p>
                                Kami menggunakan informasi pribadi yang dikumpulkan untuk memproses lamaran pekerjaan,
                                memberikan dukungan pelamar pekerjaan, dan mengirimkan informasi lolos atau tidaknya
                                kepada para pelamar kerja. Kami juga dapat menggunakan informasi non-pribadi untuk
                                meningkatkan situs web kami dan memahami bagaimana pelamar kerja menggunakan situs web
                                kami.
                            </p>
                            <h2>Bagikan informasi</h2>
                            <p>
                                Kami tidak akan membagikan informasi pribadi pelamar pekerjaan kepada pihak ketiga tanpa
                                persetujuan pelamar pekerjaan, kecuali diperlukan oleh hukum. Kami dapat membagikan
                                informasi non-pribadi kepada pihak ketiga untuk tujuan
                                analisis dan promosi situs web kami.
                            </p>
                            <h2>Pengungkapan informasi</h2>
                            <p>
                                Kami dapat membuka informasi pribadi pelamar pekerjaan jika diperlukan oleh hukum atau
                                untuk mematuhi perintah pengadilan, proses hukum, atau proses yang diterima dari pihak
                                berwenang. Kami juga dapat membuka informasi jika
                                diperlukan untuk melindungi hak, properti, atau keamanan kami atau pihak lain.
                            </p>
                            <h2>Akses dan kontrol informasi</h2>
                            <p>
                                Pelamar pekerjaan dapat meminta akses ke informasi pribadi mereka kapan saja dan
                                memperbarui informasi yang salah atau tidak akurat. Pelamar pekerjaan juga dapat meminta
                                untuk menghapus informasi pribadi mereka dari sistem kami
                                dengan mengirimkan permintaan kepada kami melalui email yang disediakan. Kami akan
                                menindaklanjuti permintaan tersebut sesuai dengan hukum yang berlaku.
                            </p>
                            <h2>Keamanan informasi</h2>
                            <p>
                                Kami berusaha untuk melindungi informasi pribadi pelamar pekerjaan dengan mengadopsi
                                prosedur keamanan dan teknologi yang sesuai. Namun, karena tidak ada metode keamanan
                                yang 100% efektif, kami tidak dapat menjamin keamanan
                                informasi pribadi pelamar pekerjaan. Pelamar pekerjaan bertanggung jawab untuk
                                memastikan bahwa informasi login mereka aman dan tidak diketahui oleh pihak ketiga.
                            </p>
                            <h2>Perubahan Kebijakan Privasi</h2>
                            <p>
                                Kami dapat memperbarui Kebijakan Privasi kami sewaktu-waktu. Perubahan akan diterapkan
                                pada informasi pribadi yang dikumpulkan setelah tanggal perubahan diterapkan. Pelamar
                                pekerjaan harus memeriksa halaman ini secara berkala untuk
                                memastikan mereka memahami Kebijakan Privasi yang berlaku.
                            </p>
                            <h2>Informasi Kontak</h2>
                            <p>Jika pelamar pekerjaan memiliki pertanyaan atau komentar tentang Kebijakan Privasi kami,
                                silakan menghubungi kami melalui email yang disediakan.</p>
                            <footer>
                                <hr />
                                <p>Hubungi kami melalui email di: <a href="mailto:contact@lido.com">contact@lido.com</a>
                                </p>
                                <p>&copy; 2023 Lido</p>
                            </footer>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>