<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- show pass -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?=base_url() ?>assets/build/js/intlTelInput.js"></script>

<script>
 const togglePassword1 = document.querySelector('#togglePassword1');
  const password1 = document.querySelector('#password');

  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

 const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#passwordtwo');

  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>

 <script>
          $(()=> {
            $('input.tt-gede').each((_,elem)=> {
              if($
                (elem).css('text-transform').toLowerCase() !='uppercase') {
                $(elem).css('text-transform','uppercase');
              }
            });

            $('input.tt-gede').keyup(function(v) {
              $(this).val($(this).val().toUpperCase());
            });
          });
        </script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
 
    <script>
    var input = document.querySelector("#telp");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
       formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
       hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
       nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
       preferredCountries: ['id'],
       separateDialCode: true,
      utilsScript:"<?= base_url() ?>assets/build/js/utils.js",
    });
  </script>
<script>
 document.querySelector('#privacy-policy-checkbox').addEventListener('click', function() {
  if (this.checked) {
    document.querySelector('#signup-button').removeAttribute('disabled');
  } else {
    document.querySelector('#signup-button').setAttribute('disabled', 'disabled');
  }
});
</script>
<!-- Github buttons -->
<script src="<?= base_url() ?>assets/build/js/utils.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url() ?>assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>