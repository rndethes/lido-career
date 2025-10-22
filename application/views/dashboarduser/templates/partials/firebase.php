<script>
    if (typeof site_url === "undefined") {
        function site_url(url) {
            const base = "<?= site_url() ?>";

            return base + url;
        }
    }
</script>
<script>
    localStorage.setItem("user_id", "<?= getLoggedInUser('id') ?>");
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=AbortController%2CBlob%2CPromise%2Cfetch"></script>
<script src="<?= base_url('assets/build/dist/bundle.js') ?>"
    defer></script>