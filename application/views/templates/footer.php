      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made by
                RND Ethes Tim</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      </div> <!-- End Content -->
      </main>

      <!--   Core JS Files   -->
      <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
      <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
      <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
      <script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.min.js"></script>
      <script src="<?= base_url() ?>assets/js/datatable.min.js"></script>
      <script src="<?= base_url() ?>assets/js/datatable-bs5.min.js"></script>
      <!-- <script src="<?= base_url() ?>assets/js/ext/datatable-buttons.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/ext/datatable-buttons-bs5.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/ext/jszip.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/ext/pdfmake.min.js">
      </script>
      <script src="<?= base_url() ?>assets/js/ext/vfs_fonts.js">
      </script>
      <script
        src="<?= base_url() ?>assets/js/ext/datatable-buttons-html5.min.js">
      </script>
      <script
        src="<?= base_url() ?>assets/js/ext/datatable-buttons-print.min.js">
      </script>
      <script
        src="<?= base_url() ?>assets/js/ext/datatable-buttons-colVis.min.js">
      </script> -->
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="<?= base_url() ?>assets/js/argon.js"></script>
      <script src="<?= base_url() ?>assets/js/script.js"></script>
      <script src="<?= base_url() ?>assets/js/popupdelete.js"></script>
      <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }

          // init only if element is found
          // prevent jq error
          if ($('#tabelData').length > 0) {
            var table = $('#tabelData').DataTable({
              "order": [
                [1, "desc"]
              ],
              "ordering": true
            });

            $.fn.dataTable.ext.search.push(
              function(settings, data, dataIndex) {
                var min = $('.date_range_filter').val();
                var max = $('.date_range_filter2').val();
                var createdAt = data[
                  6]; // -> rubah angka 4 sesuai posisi tanggal pada tabelmu, dimulai dari angka 0

                if ((min == "" || max == "") || (moment(createdAt).isSameOrAfter(min) && moment(createdAt)
                    .isSameOrBefore(max))) {
                  return true;
                }
                return false;
              }
            );
          }

          $('.pickdate').each(function() {
            $(this).datepicker({
              format: 'yyyy/mm/dd/hh/mm/ss'
            });
          });

          $('.pickdate').change(function() {
            table.draw();
          });

          $('input.tt-gede').each((_, elem) => {
            if ($(elem).css('text-transform').toLowerCase() != 'uppercase') {
              $(elem).css('text-transform', 'uppercase');
            }
          });

          $('input.tt-gede').keyup(function(v) {
            $(this).val($(this).val().toUpperCase());
          });
        });
      </script>
      <script type="text/javascript">
        function loadContent(selector) {
          $("#loadOnClick").load("#isi<?= $iddiv ?? null ?>");
        }

        // $(document).ready( function() {
        //   $("#load_home").on("click", function() {
        //     $("#content").load("content.html");
        //   });
        // });
      </script>
      <!-- Loading Overlay -->
      <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
</body>
</html>