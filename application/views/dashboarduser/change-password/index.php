<?php
$CI =& get_instance();
$CI->load->model('main_model');
$content_zero = $CI->main_model->getSettingZero();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="
				<?= base_url() ?>assets/img/img-landing/logo_webpage.png"
    rel="shortcut icon" />
  <title>Lido Group</title>
  <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="
					<?= base_url() ?>assets/css/nucleo-icons.css"
    rel="stylesheet" />
  <link href="
						<?= base_url() ?>assets/css/nucleo-svg.css"
    rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/5aa20ef4ad.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="
							<?= base_url() ?>assets/css/nucleo-svg.css"
    rel="stylesheet" />
  <!-- CSS Files -->
  <!-- CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
    integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.css" />
  <link id="pagestyle" href="
								<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4"
    rel="stylesheet" />
  <link href="
									<?= base_url() ?>assets/css/style-dashboard-user.css"
    rel="stylesheet" />
  <link href="
										<?= base_url() ?>assets/css/datatable-bs5.min.css"
    rel="stylesheet" />
  <link
    href="
											<?= base_url() ?>assets/css/datatable-buttons-bs5.min.css"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.css" />
  <link id="pagestyle" href="
												<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4"
    rel="stylesheet" />
  <link href="
													<?= base_url() ?>assets/css/style-dashboard-user.css"
    rel="stylesheet" />
  <!-- Global Vars -->
  <script>
    const SITE_URL = " < ? = site_url() ? > ";
  </script>
  <!-- Global Style -->
  <style>
    .displayOnClick {
      display: none;
    }

    .timeline-block-hover:hover {
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .tt-di-mek:hover {
      cursor: pointer;
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .tt-biasa-bae {
      cursor: default;
      background: rgba(227, 221, 221, 0.58);
      border-radius: 10px;
    }

    .custom-color {
      background-color:
        <?=$content_zero['warna'];
?>
    }

    .btn-dark {
      background-color:
        <?=$content_zero['warna'];
?>
      ;
      color:
        <?=$content_zero['warna'];
?>
      ;
    }

    .text-danger {
      color:
        <?=$content_zero['warna'];
?>
        !important;
    }

    .selectize-input.focus {
      border-color: #2778c4;
      outline: 0;
      box-shadow: none;
    }

    .selectize-control.multi .selectize-input [data-value] {
      background-image: none;
      background-color: #2778c4;
      color: white;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 position-absolute w-100 custom-color"></div>
  <!-- Content -->
  <main>
    <section class="d-flex justify-content-center">
      <div class="col-xl-4 text-center">
        <div class="card" style="margin-top : 25%; margin-bottom : 25%">
          <div class="card-header pb-0 text-start">
            <h4 class="font-weight-bolder text-center">Change password</h4>
            <p class="mb-0 text-center">Masukkan password lama dan masukan password baru</p>
          </div>
          <div class="card-body">
            <form role="form" method="POST"
              action="<?= base_url('candidate-biodata/change-password'); ?>"
              class="mx-auto">
              <div class="input-group mb-3">
                <input class="form-control form-control-lg password" placeholder="Password" id="password"
                  class="block mt-1 w-full" type="password" name="old_password" required />
                <span class="input-group-text">
                  <i class="far fa-eye toggle-pw" data-target="old_password"
                    style=" cursor: pointer; color: #5B5F63;"></i>
                </span>
              </div>
              <div class="input-group mb-3">
                <input class="form-control form-control-lg password" placeholder="Password baru" id="passwordnew"
                  class="block mt-1 w-full" type="password" name="new_password" required />
                <span class="input-group-text">
                  <i class="far fa-eye toggle-pw" data-target="new_password"
                    style=" cursor: pointer; color: #5B5F63;"></i>
                </span>
              </div>
              <div class="input-group mb-3">
                <input class="form-control form-control-lg password" placeholder="Konfirmasi password baru"
                  id="passwordtwo" class="block mt-1 w-full" type="password" name="confirm_password" required />
                <span class="input-group-text">
                  <i class="far fa-eye toggle-pw" data-target="confirm_password"
                    style=" cursor: pointer; color: #5B5F63;"></i>
                </span>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary w-100">
                  <i class="fas fa-key"></i> Ganti
                </button>
              </div>
            </form>
            <div class="">
              <a href="<?= site_url('candidatedashboard') ?>"
                class="btn btn-danger w-100">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--  Core JS Files   -->
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/jquery-ui/jquery-ui.min.js">
  </script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js">
  </script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js">
  </script>
  <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js">
  </script>
  <script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.min.js">
  </script>
  <script>
    $(() => {
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }

      $(".toggle-pw").on("click", function(e) {
        const $target = $(this).data("target");
        const $element = $(`input[name="${$target}"]`);

        if ($element.attr('type')?.toLowerCase() === 'password') {
          $element.attr('type', 'text');
        } else if ($element.attr('type')?.toLowerCase() === 'text') {
          $element.attr('type', 'password');
        }
      });
    });
  </script>
  <?php if ($this->session->flashdata('error')): ?>
  <script>
    $(() => {
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: '<?= $this->session->flashdata('error') ?>',
      });
    });
  </script>
  <?php endif ?>

  <?php if ($this->session->flashdata('success')): ?>
  <script>
    $(() => {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '<?= $this->session->flashdata('success') ?>',
      });
    });
  </script>
  <?php endif ?>
</body>

</html>