$(".tombol-logout").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Anda yakin mau logout?",
    text: "Anda harus login jika mau kembali",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Logout",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

$(".tombol-hapus").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Anda yakin untuk menghapus data ini ?",
    text: "Data akan hilang !!!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});
// Sweet Alert
const flashData = $(".flash-data").data("flashdata");

if (flashData) {
  Swal({
    title: "Sukses",
    text: "Data Berhasil " + flashData,
    type: "success",
  });
}

// Sweet Alert
const flashGagal = $(".flash-data-gagal").data("flashdata");

if (flashGagal) {
  Swal({
    title: "Gagal",
    text: "Data Gagal " + flashGagal,
    type: "error",
  });
}
