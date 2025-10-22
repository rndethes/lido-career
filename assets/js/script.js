window.addEventListener("DOMContentLoaded", function () {
  if (this.document.getElementById("addBtn")) {
    document.getElementById("addBtn").addEventListener("click", function () {
      var container = document.createElement("div");
      container.className = "col-lg-12 mb-4 sosmed";
      container.innerHTML = `
          <div class="card  col-lg-4">
              <div class="card-body">
                  <form id="form-footer" onsubmit="return false;">
                      <label for="icons" class="form-label">Pilih Sosial Media</label>
                      <select name="" id="" class="form-select" aria-label="Default select example">
                          <option selected>Pilih</option>
                          <option value="<i class='fa-brands fa-instagram'></i>">Instagram</option>
                          <option value="<i class='fa-brands fa-twitter'></i>">Twitter</option>
                          <option value="<i class='fa-brands fa-facebook'></i>">Facebook</option>
                          <option value="<i class='fa-brands fa-linkedin'></i>">Linkedin</option>
                      </select>
                      <label for="field_sosmed_name" class="form-label">Nama/Username</label>
                      <input id="field_sosmed_name" name="sosmed_name" class="form-control"
                                  type="text"
                                  value=""
                                  required />
                      <label for="field_sosmed_name" class="form-label">Link</label>
                      <input id="field_sosmed_link" name="sosmed_link" class="form-control"
                                  type="text"
                                  value=""
                                  required /> 
                  </form>
              </div>
          </div>
      `;
      document.querySelector("#__sosmed_container").append(container);
    });
  }
  // preview image (landing page)
  if (this.document.getElementById("previewImageModal")) {
    var previewImageModal = this.document.getElementById("previewImageModal");

    previewImageModal.addEventListener("show.bs.modal", function (e) {
      var img = e.relatedTarget.dataset.img;
      var elm = document.getElementById("modal-preview-image-img-preview");

      if (elm) {
        elm.src = img;
      }
    });
  }

  // update about (landing page) (widget 1)
  if (this.document.getElementById("button-form-edit-lp-widget1")) {
    this.document.getElementById("button-form-edit-lp-widget1").addEventListener("click", function (e) {
      var title = document.getElementById("field_about_title1");
      var subtitle = document.getElementById("field_about_subtitle1");
      var description = document.getElementById("field_about_description1");

      var oldTitleVal = title.value;
      var oldSubtitleVal = subtitle.value;
      var oldDescriptionVal = description.value;

      updateAboutSetting(
        1,
        title.value,
        subtitle.value,
        description.value,
        () => {
          // Callback Before
          title.readOnly = true;
          subtitle.readOnly = true;
          description.readOnly = true;
        },
        () => {
          // Callback After
          title.readOnly = false;
          subtitle.readOnly = false;
          description.readOnly = false;
        },
        (response) => {
          console.log(response);
          title.value = response.data.about_title;
          subtitle.value = response.data.about_subtitle;
          description.value = response.data.about_description;
        },
        () => {
          // Callback Error
          title.value = oldTitleVal;
          subtitle.value = oldSubtitleVal;
          description.value = oldDescriptionVal;
        }
      );
    });
  }
  // heropage
  if (this.document.getElementById("button-form-edit-lp-hero")) {
    this.document.getElementById("button-form-edit-lp-hero").addEventListener("click", function (e) {
      var title = document.getElementById("field_about_titlehero");
      var subtitle = document.getElementById("field_about_subtitlehero");

      var oldTitleVal = title.value;
      var oldSubtitleVal = subtitle.value;

      updateHero(
        title.value,
        subtitle.value,
        () => {
          // Callback Before
          title.readOnly = true;
          subtitle.readOnly = true;
        },
        () => {
          // Callback After
          title.readOnly = false;
          subtitle.readOnly = false;
        },
        (response) => {
          console.log(response);
          title.value = response.data.tittle_homepage;
          subtitle.value = response.data.subtitle_homepage;
        },
        () => {
          // Callback Error
          title.value = oldTitleVal;
          subtitle.value = oldSubtitleVal;
        }
      );
    });
  }

  // update about (landing page) (widget 2)
  if (this.document.getElementById("button-form-edit-lp-widget2")) {
    this.document.getElementById("button-form-edit-lp-widget2").addEventListener("click", function (e) {
      var title = document.getElementById("field_about_title2");
      var subtitle = document.getElementById("field_about_subtitle2");
      var description = document.getElementById("field_about_description2");

      var oldTitleVal = title.value;
      var oldSubtitleVal = subtitle.value;
      var oldDescriptionVal = description.value;

      updateAboutSetting(
        2,
        title.value,
        subtitle.value,
        description.value,
        () => {
          // Callback Before
          title.readOnly = true;
          subtitle.readOnly = true;
          description.readOnly = true;
        },
        () => {
          // Callback After
          title.readOnly = false;
          subtitle.readOnly = false;
          description.readOnly = false;
        },
        (response) => {
          // Callback Success
          title.value = response.data.about_title;
          subtitle.value = response.data.about_subtitle;
          description.value = response.data.about_description;
        },
        () => {
          // Callback Error
          title.value = oldTitleVal;
          subtitle.value = oldSubtitleVal;
          description.value = oldDescriptionVal;
        }
      );
    });
  }

  // btn hapus kandidat handler
  this.document.querySelectorAll(".btn-delete-kandidat").forEach((elem, k) => {
    elem.addEventListener("click", function () {
      let kandidat_id = this.dataset.kandidat;
      let kandidat_name = this.dataset.kandidat_nama;

      Swal.fire({
        title: "Are you sure?",
        text: `Data kandidat atas nama ${kandidat_name} akan dihapus!`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: () => false,
      }).then((willDelete) => {
        if (willDelete.isConfirmed) {
          var request = new XMLHttpRequest();
          request.open("POST", SITE_URL + "kandidat/delete", true);
          request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
          request.onload = function () {
            if (request.status >= 200 && request.status < 400) {
              Swal.fire("Deleted!", "Data kandidat berhasil dihapus.", "success").then((x) => {
                document.location.reload();
              });
            } else {
              Swal.fire("Failed!", "Data kandidat gagal dihapus.", "error");
            }
          };
          request.send("kandidat=" + kandidat_id);
        }
      });
    });
  });

  // edit kandidat
  function edit_kandidat_content(target) {
    let elem = document.getElementById(target);
    var list = ["data-diri", "pendidikan", "alamat", "pengalaman-kerja", "data-pendukung"];

    if (elem) {
      if (elem.style.display != "block") {
        elem.style.display = "block";

        if (target == "pengalaman-kerja") {
          makeAFormReadOnly(document.getElementById("form-edit-kandidat-pengalaman-kerja"), true);
          disableAButton(document.getElementById("form-edit-kandidat-pengalaman-kerja-button-save"), true);
        }
      }

      list.forEach((v) => {
        if (v != target) {
          if (document.getElementById(v).style.display != "none") {
            document.getElementById(v).style.display = "none";
          }
        }
      });
    }
  }

  edit_kandidat_content("data-diri");

  this.document.querySelectorAll(".btn-edit-kandidat").forEach((elem, k) => {
    elem.addEventListener("click", function () {
      let element = this.dataset.target;

      edit_kandidat_content(element);
    });
  });

  // Update Kandidat (Data Diri)
  const formDataDiri = this.document.getElementById("form-edit-kandidat-data-diri");
  const formDataDiriButton = this.document.getElementById("form-edit-kandidat-data-diri-button-save");

  if (formDataDiriButton) {
    formDataDiriButton.addEventListener("click", function () {
      var data = new FormData(formDataDiri);
      var jxhr = new XMLHttpRequest();

      makeAFormReadOnly(formDataDiri, true);
      disableAButton(formDataDiriButton, true);

      jxhr.open("POST", formDataDiri.action, true);
      jxhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

      var fraw = new URLSearchParams(data).toString();

      jxhr.send(fraw);
      jxhr.onload = function () {
        if (jxhr.status >= 200 && jxhr.status < 400) {
          Swal.fire("Updated!", "Data diri kandidat berhasil diupdate.", "success").then((x) => {
            var response = JSON.parse(jxhr.responseText);

            Object.keys(response.data).map(function (kv) {
              var value = response.data[kv];
              if (kv == "birthdate_candidate") {
                findAndFill("birthdate_candidate", response.data["birthdate_candidate_"]);
              } else if (kv == "tempat_lahir_candidate") {
                findAndFill("tempat_lahir_candidate", response.data["tempat_lahir_candidate_"]);
              } else {
                if (!kv.includes("tempat_lahir_candidate") || !kv.includes("tempat_lahir_candidate")) {
                  findAndFill(kv, response.data[kv]);
                }
              }
            });

            makeAFormReadOnly(formDataDiri, false);
            disableAButton(formDataDiriButton, false);
          });
        } else {
          console.log(jxhr.response);
          Swal.fire("Failed!", "Data diri kandidat gagal diupdate.", "error").then(() => {
            makeAFormReadOnly(formDataDiri, false);
            disableAButton(formDataDiriButton, false);
          });
        }
      };
    });
  }

  // Update Kandidat (Pendidikan)
  const formDataPendidikan = this.document.getElementById("form-edit-kandidat-pendidikan");
  const formDataPendidikanButton = this.document.getElementById("form-edit-kandidat-pendidikan-button-save");

  if (formDataPendidikanButton) {
    formDataPendidikanButton.addEventListener("click", function () {
      var data = new FormData(formDataPendidikan);
      var jxhr = new XMLHttpRequest();

      makeAFormReadOnly(formDataPendidikan, true);
      disableAButton(formDataPendidikanButton, true);

      jxhr.open("POST", formDataPendidikan.action, true);
      jxhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

      var fraw = new URLSearchParams(data).toString();

      jxhr.send(fraw);
      jxhr.onload = function () {
        if (jxhr.status >= 200 && jxhr.status < 400) {
          Swal.fire("Updated!", "Data pendidikan kandidat berhasil diupdate.", "success").then((x) => {
            var response = JSON.parse(jxhr.responseText);

            Object.keys(response.data).map(function (kv) {
              var value = response.data[kv];

              findAndFill(kv, value);
            });

            makeAFormReadOnly(formDataPendidikan, false);
            disableAButton(formDataPendidikanButton, false);
          });
        } else {
          console.log(jxhr.response);
          Swal.fire("Failed!", "Data pendidikan kandidat gagal diupdate.", "error").then(() => {
            makeAFormReadOnly(formDataPendidikan, false);
            disableAButton(formDataPendidikanButton, false);
          });
        }
      };
    });
  }

  // Update Kandidat (Alamat)
  const formDataAlamat = this.document.getElementById("form-edit-kandidat-alamat");
  const formDataAlamatButton = this.document.getElementById("form-edit-kandidat-alamat-button-save");

  if (formDataAlamatButton) {
    formDataAlamatButton.addEventListener("click", function () {
      var data = new FormData(formDataAlamat);
      var jxhr = new XMLHttpRequest();

      makeAFormReadOnly(formDataAlamat, true);
      disableAButton(formDataAlamatButton, true);

      jxhr.open("POST", formDataAlamat.action, true);
      jxhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

      var fraw = new URLSearchParams(data).toString();

      jxhr.send(fraw);
      jxhr.onload = function () {
        if (jxhr.status >= 200 && jxhr.status < 400) {
          Swal.fire("Updated!", "Data alamat kandidat berhasil diupdate.", "success").then((x) => {
            var response = JSON.parse(jxhr.responseText);

            Object.keys(response.data).map(function (kv) {
              var value = response.data[kv];

              findAndFill(kv, value);
            });

            makeAFormReadOnly(formDataAlamat, false);
            disableAButton(formDataAlamatButton, false);
          });
        } else {
          console.log(jxhr.response);
          Swal.fire("Failed!", "Data alamat kandidat gagal diupdate.", "error").then(() => {
            makeAFormReadOnly(formDataAlamat, false);
            disableAButton(formDataAlamatButton, false);
          });
        }
      };
    });
  }

  // Update Kandidate (Pengalaman Kerja)
  const formDataPengalaman = this.document.getElementById("form-edit-kandidat-pengalaman-kerja");
  const formDataPengalamanButton = this.document.getElementById("form-edit-kandidat-pengalaman-kerja-button-save");
  const formDataPengalamanButtonCancel = this.document.getElementById("form-edit-kandidat-pengalaman-kerja-button-cancel");

  this.document.querySelectorAll(".form-edit-kandidat-pengalaman-kerja-trigger-edit").forEach((elem) => {
    elem.addEventListener("click", function () {
      var pengalaman = JSON.parse(elem.dataset.pengalaman);

      Object.keys(pengalaman).map(function (kv) {
        var value = pengalaman[kv];

        findAndFill(kv, value);
      });

      makeAFormReadOnly(formDataPengalaman, false);
      disableAButton(formDataPengalamanButton, false);
      disableAButton(formDataPengalamanButtonCancel, false);

      if (formDataPengalamanButtonCancel.style.display == "none") {
        formDataPengalamanButtonCancel.style.display = "block";
      }
    });
  });

  if (formDataPengalamanButtonCancel) {
    formDataPengalamanButtonCancel.addEventListener("click", function () {
      clearAFormValue(formDataPengalaman);

      makeAFormReadOnly(formDataPengalaman, true);
      disableAButton(formDataPengalamanButton, true);
      disableAButton(formDataPengalamanButtonCancel, true);

      if (formDataPengalamanButtonCancel.style.display == "block") {
        formDataPengalamanButtonCancel.style.display = "none";
      }
    });
  }

  if (formDataPengalamanButton) {
    formDataPengalamanButton.addEventListener("click", function () {
      var data = new FormData(formDataPengalaman);
      var jxhr = new XMLHttpRequest();

      makeAFormReadOnly(formDataPengalaman, true);
      disableAButton(formDataPengalamanButton, true);
      disableAButton(formDataPengalamanButtonCancel, true);

      jxhr.open("POST", formDataPengalaman.action, true);
      jxhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

      if (data.get("section") == "" || data.get("section") != "pengalaman") {
        data.set("section", "pengalaman");
      }

      var fraw = new URLSearchParams(data).toString();

      jxhr.send(fraw);
      jxhr.onload = function () {
        if (jxhr.status >= 200 && jxhr.status < 400) {
          Swal.fire("Updated!", "Data pengalaman kerja kandidat berhasil diupdate.", "success").then((x) => {
            var response = JSON.parse(jxhr.responseText);

            clearAFormValue(formDataPengalaman);

            var BreakException = {};

            try {
              response.pengalaman.forEach((row) => {
                document.querySelectorAll(".form-edit-kandidat-pengalaman-kerja-trigger-edit").forEach((elem) => {
                  if (elem.dataset.id_ce == row.id_ce) {
                    elem.dataset.pengalaman = row.json;

                    document.getElementById("td_name_company_" + row.id_ce).innerText = row.name_company;
                    document.getElementById("td_type_company_" + row.id_ce).innerText = row.type_company;
                    document.getElementById("td_employee_company_" + row.id_ce).innerText = row.employee_company;
                    document.getElementById("td_year_fmt__" + row.id_ce).innerText = diffDateForHuman(new Date(row.first_year), new Date(row.last_year));
                    document.getElementById("td_description_" + row.id_ce).dataset.content = row.description;

                    throw BreakException;
                  }
                });
              });
            } catch (e) {
              if (e !== BreakException) {
                throw e;
              }
            }

            makeAFormReadOnly(formDataPengalaman, true);
            disableAButton(formDataPengalamanButton, true);
            disableAButton(formDataPengalamanButtonCancel, true);
          });
        } else {
          console.log(jxhr.response);
          Swal.fire("Failed!", "Data pengalaman kerja kandidat gagal diupdate.", "error").then(() => {
            makeAFormReadOnly(formDataPengalaman, false);
            disableAButton(formDataPengalamanButton, false);
            disableAButton(formDataPengalamanButtonCancel, false);
          });
        }
      };
    });
  }

  // Modal Description Pengalaman Kandidat
  const showDescriptionPengalamanModal = this.document.getElementById("showDescriptionModal");

  this.document.querySelectorAll(".form-edit-kandidat-pengalaman-kerja-trigger-description").forEach((elem) => {
    elem.addEventListener("click", function (e) {
      var modal = bootstrap.Modal.getOrCreateInstance(showDescriptionPengalamanModal);

      if (modal) {
        modal.toggle(elem);
      }
    });
  });

  if (showDescriptionPengalamanModal) {
    showDescriptionPengalamanModal.addEventListener("show.bs.modal", function (e) {
      var content = e.relatedTarget.dataset.content;
      var target = document.getElementById("showDescriptionModalContent");

      if (target) {
        target.innerText = content;
      }
    });

    showDescriptionPengalamanModal.addEventListener("hide.bs.modal", function (e) {
      var target = document.getElementById("showDescriptionModalContent");

      if (target) {
        target.innerText = "";
      }
    });
  }

  // Trigger delete pengalaman kerja kandidat
  this.document.querySelectorAll(".form-edit-kandidat-pengalaman-kerja-trigger-delete").forEach((elem) => {
    elem.addEventListener("click", function () {
      var id_ce = elem.dataset.id_ce;

      Swal.fire({
        title: "Are you sure?",
        text: `Data pengalaman kerja akan dihapus!`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: () => false,
      }).then((willDelete) => {
        if (willDelete.isConfirmed) {
          var request = new XMLHttpRequest();
          request.open("POST", formDataDiri.action, true);
          request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
          request.onload = function () {
            if (request.status >= 200 && request.status < 400) {
              Swal.fire("Deleted!", "Data pengalaman kerja berhasil dihapus.", "success").then((x) => {
                document.location.reload();
              });
            } else {
              Swal.fire("Failed!", "Data pengalaman kerja gagal dihapus.", "error");
            }
          };
          request.send("section=delete-pengalaman&id_ce=" + id_ce);
        }
      });
    });
  });

  // Upload File Pendukung Tambahan
  const formDataPendukungTambahan = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan");
  const formDataPendukungTambahanButton = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-button-upload");
  const formDataPendukungTambahanFieldFile = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-field-file");
  const formDataPendukungTambahanThumbnail = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-thumbnail");
  const formDataPendukungTambahanFileName = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-file-name");
  const formDataPendukungTambahanInfo = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-info");
  const formDataPendukungTambahanButtonDelete = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-button-delete");
  const formDataPendukungTambahanButtonDowload = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-button-download");
  const formDataPendukungTambahanButtonPreview = this.document.getElementById("form-edit-kandidat-file-pendukung-tambahan-button-preview");

  if (formDataPendukungTambahanButtonDelete && formDataPendukungTambahanFileName && formDataPendukungTambahanThumbnail) {
    if (formDataPendukungTambahanFileName.innerText.includes("default.pdf") || formDataPendukungTambahanThumbnail.innerText.trim() == "") {
      formDataPendukungTambahanButtonDelete.style.display = "none";
      formDataPendukungTambahanButtonDowload.style.display = "none";
      formDataPendukungTambahanButtonPreview.style.display = "none";
      formDataPendukungTambahanThumbnail.style.display = "none";
    } else {
      formDataPendukungTambahanButtonDelete.style.display = "block";
      formDataPendukungTambahanButtonDowload.style.display = "block";
      formDataPendukungTambahanButtonPreview.style.display = "block";
    }
  }

  if (formDataPendukungTambahanFieldFile) {
    formDataPendukungTambahanFieldFile.addEventListener("change", function () {
      const [file] = formDataPendukungTambahanFieldFile.files;

      if (file) {
        formDataPendukungTambahanInfo.innerText = "";
        formDataPendukungTambahanFileName.innerText = file.name;
        formDataPendukungTambahanThumbnail.style.display = "";
      } else {
        formDataPendukungTambahanButtonDelete.style.display = "none";
        formDataPendukungTambahanButtonDowload.style.display = "none";
        formDataPendukungTambahanButtonPreview.style.display = "none";
        formDataPendukungTambahanThumbnail.style.display = "none";
        formDataPendukungTambahanFieldFile.value = null;
        formDataPendukungTambahanFieldFile.files = null;
      }
    });
  }

  if (formDataPendukungTambahanButtonDelete) {
    formDataPendukungTambahanButtonDelete.addEventListener("click", function () {
      Swal.fire({
        title: "Are you sure?",
        text: `File pendukung kandidat akan dihapus!`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        allowOutsideClick: () => false,
      }).then((willDelete) => {
        if (willDelete.isConfirmed) {
          deleteFilePendukung(
            formDataPendukungTambahan.action,
            "file_pendukung",
            () => {
              // Callback Before
              makeAFormReadOnly(formDataPendukungTambahan, true);
              disableAButton(formDataPendukungTambahanButton, true);
              disableAButton(formDataPendukungTambahanButtonDelete, true);
              disableAButton(formDataPendukungTambahanButtonDowload, true);
              disableAButton(formDataPendukungTambahanButtonPreview, true);
            },
            () => {
              // Callback After
              makeAFormReadOnly(formDataPendukungTambahan, false);
              disableAButton(formDataPendukungTambahanButton, false);
              disableAButton(formDataPendukungTambahanButtonDelete, false);
              disableAButton(formDataPendukungTambahanButtonDowload, false);
              disableAButton(formDataPendukungTambahanButtonPreview, false);

              formDataPendukungTambahanButtonDelete.style.display = "none";
              formDataPendukungTambahanButtonDowload.style.display = "none";
              formDataPendukungTambahanButtonPreview.style.display = "none";
            },
            () => {
              // Callback Success
              makeAFormReadOnly(formDataPendukungTambahan, false);
              disableAButton(formDataPendukungTambahanButton, false);
              disableAButton(formDataPendukungTambahanButtonDelete, false);
              disableAButton(formDataPendukungTambahanButtonDowload, false);
              disableAButton(formDataPendukungTambahanButtonPreview, false);

              formDataPendukungTambahanButtonDelete.style.display = "block";
              formDataPendukungTambahanButtonDowload.style.display = "block";
              formDataPendukungTambahanButtonPreview.style.display = "block";
              formDataPendukungTambahanThumbnail.style.display = "none";

              formDataPendukungTambahanFieldFile.value = null;
              formDataPendukungTambahanFieldFile.files = null;
            },
            () => {
              makeAFormReadOnly(formDataPendukungTambahan, false);
              disableAButton(formDataPendukungTambahanButton, false);
              disableAButton(formDataPendukungTambahanButtonDelete, false);
              disableAButton(formDataPendukungTambahanButtonDowload, false);
              disableAButton(formDataPendukungTambahanButtonPreview, false);

              formDataPendukungTambahanButtonDelete.style.display = "block";
              formDataPendukungTambahanButtonDowload.style.display = "block";
              formDataPendukungTambahanThumbnail.style.display = "block";
              formDataPendukungTambahanButtonPreview.style.display = "block";
            }
          );
        }
      });
    });
  }

  if (formDataPendukungTambahanButton) {
    formDataPendukungTambahanButton.addEventListener("click", function () {
      const [file] = formDataPendukungTambahanFieldFile.files;
      if (!file) {
        formDataPendukungTambahanInfo.innerText = "Tidak ada file yang dipilih!";
      } else {
        if (!file.type.toLowerCase().includes("pdf")) {
          formDataPendukungTambahanInfo.innerText = "File yang dipilih tidak valid!";
        } else {
          formDataPendukungTambahanInfo.innerText = "";

          makeAFormReadOnly(formDataPendukungTambahan, true);
          disableAButton(formDataPendukungTambahanButton, true);

          var form = new FormData(formDataPendukungTambahan);
          var request = new XMLHttpRequest();

          request.open("POST", formDataPendukungTambahan.action, true);
          request.send(form);
          request.onload = function () {
            if (request.status >= 200 && request.status < 400) {
              Swal.fire("Updated!", "File berhasil di upload.", "success").then((x) => {
                var response = JSON.parse(request.responseText);

                makeAFormReadOnly(formDataPendukungTambahan, false);
                disableAButton(formDataPendukungTambahanButton, false);

                formDataPendukungTambahanFieldFile.value = null;
                formDataPendukungTambahanFieldFile.files = null;

                formDataPendukungTambahanFileName.innerText = response.data.file_name;
                formDataPendukungTambahanThumbnail.style.display = "block";
                formDataPendukungTambahanButtonDelete.style.display = "block";
                formDataPendukungTambahanButtonDowload.style.display = "block";
                formDataPendukungTambahanButtonPreview.style.display = "block";

                formDataPendukungTambahanButtonPreview.href = response.data.file_url;
                formDataPendukungTambahanButtonDowload.href = response.data.file_url;
              });
            } else {
              Swal.fire("Failed!", "File gagal di upload.", "error").then(() => {
                makeAFormReadOnly(formDataPendukungTambahan, false);
                disableAButton(formDataPendukungTambahanButton, false);

                var err = JSON.parse(request.responseText);

                if (err.has_pendukung) {
                  if (formDataPendukungTambahanButtonDelete.style.display != "block") {
                    formDataPendukungTambahanButtonDelete.style.display = "block";
                  }
                }
              });
            }
          };
        }
      }
    });
  }

  // Update Photo Kandidat
  const formDataProfileKandidat = this.document.getElementById("form-edit-kandidat-profile");
  const formDataProfileKandidatFile = this.document.getElementById("form-edit-kandidat-profile-file-input");
  const formDataProfileKandidatImage = this.document.getElementById("form-edit-kandidat-profile-image");
  const formDataProfileKandidatImageWrapper = this.document.getElementById("form-edit-kandidat-profile-image-wrapper");
  const formDataProfileKandidatButton = this.document.getElementById("form-edit-kandidat-profile-button-change");
  var formDataProfileKandidatMode = "change";

  if (formDataProfileKandidatButton) {
    formDataProfileKandidatButton.addEventListener("click", function () {
      if (formDataProfileKandidatMode == "change") {
        formDataProfileKandidatFile.click();
      } else {
        makeAFormReadOnly(formDataProfileKandidat, true);
        disableAButton(formDataProfileKandidatButton, true);

        var form = new FormData(formDataProfileKandidat);
        var request = new XMLHttpRequest();

        request.open("POST", formDataProfileKandidat.action, true);
        request.send(form);
        request.onload = function () {
          if (request.status >= 200 && request.status < 400) {
            Swal.fire("Updated!", "Profile berhasil di perbarui.", "success").then((x) => {
              var response = JSON.parse(request.responseText);

              formDataProfileKandidatImage.src = response.data.file_url;
              // formDataProfileKandidatImageWrapper.style.border = "none";
              formDataProfileKandidatButton.innerText = "Change Photo";

              if (!formDataProfileKandidatButton.classList.contains("btn-danger")) {
                formDataProfileKandidatButton.classList.add("btn-danger");
              }

              if (formDataProfileKandidatButton.classList.contains("btn-primary")) {
                formDataProfileKandidatButton.classList.remove("btn-primary");
              }

              formDataProfileKandidatMode = "change";

              makeAFormReadOnly(formDataProfileKandidat, false);
              disableAButton(formDataProfileKandidatButton, false);
            });
          } else {
            Swal.fire("Failed!", "Profile gagal di perbarui..", "error").then(() => {
              makeAFormReadOnly(formDataProfileKandidat, false);
              disableAButton(formDataProfileKandidatButton, false);
            });
          }
        };
      }
    });
  }

  if (formDataProfileKandidatFile) {
    formDataProfileKandidatFile.addEventListener("change", function () {
      const [file] = formDataProfileKandidatFile.files;

      if (file && file.type.toLowerCase().includes("image")) {
        // formDataProfileKandidatImageWrapper.style.border = "none";
        formDataProfileKandidatImage.src = URL.createObjectURL(file);

        if (formDataProfileKandidatButton.classList.contains("btn-danger")) {
          formDataProfileKandidatButton.classList.remove("btn-danger");
        }

        if (!formDataProfileKandidatButton.classList.contains("btn-primary")) {
          formDataProfileKandidatButton.classList.add("btn-primary");
        }

        formDataProfileKandidatButton.innerText = "Upload Photo";
        formDataProfileKandidatMode = "upload";
      } else {
        formDataProfileKandidatImage.src = "";
        // formDataProfileKandidatImageWrapper.style.border = "1px dotted gray";
        formDataProfileKandidatButton.innerText = "Change Photo";

        if (!formDataProfileKandidatButton.classList.contains("btn-danger")) {
          formDataProfileKandidatButton.classList.add("btn-danger");
        }

        if (formDataProfileKandidatButton.classList.contains("btn-primary")) {
          formDataProfileKandidatButton.classList.remove("btn-primary");
        }

        formDataProfileKandidatMode = "change";
      }
    });
  }

  // Modal Change Image Landing Page
  const changeImageModal = this.document.getElementById("changeImageModal");
  const changeImageModalFileInput = this.document.getElementById("form-change-image-file-input");
  const changeImageModalImagePreview = this.document.getElementById("form-change-image-img-preview");
  const changeImageModalButtonUpdate = this.document.getElementById("form-change-image-button-update");
  const changeImageModalInfoText = this.document.getElementById("form-change-image-info-text");
  const changeImageModalForm = this.document.getElementById("form-change-image");

  var changeImageModalDestination = "";
  var changeImageModalDomImgTarget = "";

  if (changeImageModal) {
    changeImageModal.addEventListener("hide.bs.modal", function (e) {
      changeImageModalImagePreview.src = "";
      changeImageModalInfoText.innerText = "";
      changeImageModalDestination = "";
      changeImageModalFileInput.value = null;
      changeImageModalFileInput.files = null;
    });

    changeImageModal.addEventListener("show.bs.modal", function (e) {
      changeImageModalDestination = e.relatedTarget.dataset.destination;
      changeImageModalDomImgTarget = e.relatedTarget.dataset.domimgtarget;

      if (!changeImageModalDestination) {
        console.log(changeImageModalDestination);
        console.error("Destination is missing");
      }

      if (!changeImageModalDomImgTarget) {
        console.log(changeImageModalDomImgTarget);
        console.error("Destination is missing");
      }

      changeImageModalDomImgTarget = document.getElementById(changeImageModalDomImgTarget);
    });

    changeImageModalFileInput.onchange = function (event) {
      const [file] = changeImageModalFileInput.files;

      if (file && file.type.toLowerCase().includes("image")) {
        changeImageModalImagePreview.src = URL.createObjectURL(file);
      } else {
        changeImageModalImagePreview.src = "";
      }
    };

    changeImageModalButtonUpdate.addEventListener("click", function (e) {
      const [file] = changeImageModalFileInput.files;
      if (!file) {
        changeImageModalInfoText.innerText = "Tidak ada gambar yang dipilih!";
      } else {
        changeImageModalInfoText.innerText = "";

        if (!file.type.toLowerCase().includes("image")) {
          changeImageModalInfoText.innerText = "File yang dipilih tidak valid!";
        } else {
          if (changeImageModalDestination) {
            makeAFormReadOnly(changeImageModalForm, true);
            disableAButton(changeImageModalButtonUpdate, true);

            var form = new FormData(document.getElementById("form-change-image"));
            form.append("destination", changeImageModalDestination);
            form.append("mode", "change_image");

            var request = new XMLHttpRequest();

            request.open("POST", SITE_URL + "pengaturan-landing-page", true);
            request.onload = function () {
              if (request.status >= 200 && request.status < 400) {
                Swal.fire("Updated!", "Gambar berhasil di perbarui.", "success").then((x) => {
                  var response = JSON.parse(request.responseText);

                  makeAFormReadOnly(changeImageModalForm, false);
                  disableAButton(changeImageModalButtonUpdate, false);

                  changeImageModalImagePreview.src = "";
                  changeImageModalInfoText.innerText = "";
                  changeImageModalDestination = "";
                  changeImageModalFileInput.value = null;
                  changeImageModalFileInput.files = null;

                  if (changeImageModalDomImgTarget) {
                    changeImageModalDomImgTarget.src = response.data.file_url;
                  }

                  let modal = bootstrap.Modal.getOrCreateInstance(changeImageModal);
                  modal.toggle();
                });
              } else {
                Swal.fire("Failed!", "Gambar gagal di perbarui..", "error").then(() => {
                  makeAFormReadOnly(changeImageModalForm, false);
                  disableAButton(changeImageModalButtonUpdate, false);
                });
              }
            };
            request.send(form);
          } else {
            console.error("Destination is missing");
          }
        }
      }
    });
  }
});

// turn off a form (readlony)
function makeAFormReadOnly(form, state = true) {
  if (form && typeof form.elements !== "undefined") {
    var elements = form.elements;
    for (var i = 0, len = elements.length; i < len; ++i) {
      elements[i].readOnly = state;
    }
  }
}

// Clear form
function clearAFormValue(form) {
  if (form && typeof form.elements !== "undefined") {
    var elements = form.elements;
    for (var i = 0, len = elements.length; i < len; ++i) {
      elements[i].value = "";
    }
  }
}

// find and fill input
function findAndFill(elname, value) {
  var el = document.getElementsByName(elname);
  if (el && typeof el[0] !== "undefined") {
    if (el[0].type != "file") {
      el[0].value = value;
    }
  }
}

// disable button
function disableAButton(button, state = true) {
  if (button) {
    button.disabled = state;
  }
}

// update website setting
// TODO: Refactor
function updateWebsiteSetting(mode) {
  if (mode == "setting") {
    var felem = document.getElementById("form-edit-lp-website");
    var belem = document.getElementById("button-form-edit-lp-website");
    var form = new FormData(felem);
    form.append("mode", mode);
    form.append("field_about_visi", CKEDITOR.instances.field_about_visi.getData());
    form.append("field_about_misi", CKEDITOR.instances.field_about_misi.getData());

    // console.log(CKEDITOR.instances.field_about_misi.getData());

    var request = new XMLHttpRequest();

    makeAFormReadOnly(felem, true);
    disableAButton(belem, true);

    request.open("POST", SITE_URL + "pengaturan-landing-page", true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

    var fraw = new URLSearchParams(form).toString();

    request.send(fraw);
    request.onload = function () {
      if (request.status >= 200 && request.status < 400) {
        Swal.fire("Updated!", "Pengaturan website berhasil diupdate.", "success").then((x) => {
          var response = JSON.parse(request.responseText);

          // TODO: Apply color change without reload
          document.location.reload();

          document.getElementById("field_company_name").value = response.data.company_name;
          document.getElementById("field_company_title").value = response.data.company_title;
          document.getElementById("field_company_title").value = response.data.user_announcement;
          document.getElementById("field_about_visi").value = response.data.visi || "";
          document.getElementById("field_about_misi").value = response.data.misi || "";

          makeAFormReadOnly(felem, false);
          disableAButton(belem, false);
        });
      } else {
        Swal.fire("Failed!", "Pengaturan website gagal diupdate.", "error").then(() => {
          makeAFormReadOnly(felem, false);
          disableAButton(belem, false);
        });
      }
    };
  }
}

// footer setting
if (this.document.getElementById("button-form-footer")) {
  this.document.getElementById("button-form-footer").addEventListener("click", function () {
    updateFooterSetting("setting_footer");
  });
}
function updateFooterSetting(mode) {
  if (mode == "setting_footer") {
    var felem = document.getElementById("form-footer");
    var belem = document.getElementById("button-form-footer");
    var form = new FormData(felem);
    form.append("mode", mode);
    var request = new XMLHttpRequest();

    makeAFormReadOnly(felem, true);
    disableAButton(belem, true);

    request.open("POST", SITE_URL + "pengaturan-landing-page", true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

    var fraw = new URLSearchParams(form).toString();

    request.send(fraw);
    request.onload = function () {
      if (request.status >= 200 && request.status < 400) {
        Swal.fire("Updated!", "Pengaturan footer berhasil diupdate.", "success").then((x) => {
          var response = JSON.parse(request.responseText);

          // TODO: Apply color change without reload
          document.location.reload();

          document.getElementById("field_footer_title").value = response.data.tittle_footer;
          document.getElementById("field_footer_konten").value = response.data.content_footer;
          document.getElementById("field_footer_address").value = response.data.address_footer;
          document.getElementById("field_footer_no").value = response.data.no_footer;
          document.getElementById("field_footer_email").value = response.data.email_footer;
          document.getElementById("field_footer_map").value = response.data.link_map;

          makeAFormReadOnly(felem, false);
          disableAButton(belem, false);
        });
      } else {
        Swal.fire("Failed!", "Pengaturan footer gagal diupdate.", "error").then(() => {
          makeAFormReadOnly(felem, false);
          disableAButton(belem, false);
        });
      }
    };
  }
}

// update about (lp) setting
function updateAboutSetting(id, title, subtitle, description, cbBefore = null, cbAfter = null, cbSuccess = null, cbError = null) {
  var request = new XMLHttpRequest();

  if (typeof cbBefore === "function") {
    cbBefore();
  }

  request.open("POST", SITE_URL + "pengaturan-landing-page", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

  request.send(`mode=setting_about&id=${id}&title=${title}&subtitle=${subtitle}&description=${description}`);
  request.onload = function () {
    if (request.status >= 200 && request.status < 400) {
      Swal.fire("Updated!", "Pengaturan about berhasil diupdate.", "success").then((x) => {
        var response = JSON.parse(request.responseText);

        if (typeof cbSuccess === "function") {
          cbSuccess(response);
        }

        if (typeof cbAfter === "function") {
          cbAfter();
        }
      });
    } else {
      Swal.fire("Failed!", "Pengaturan about gagal diupdate.", "error").then(() => {
        if (typeof cbAfter === "function") {
          cbAfter();
        }

        if (typeof cbError === "function") {
          cbError();
        }
      });
    }
  };
}
// update about (lp) setting_hero
function updateHero(title, subtitle, cbBefore = null, cbAfter = null, cbSuccess = null, cbError = null) {
  var request = new XMLHttpRequest();

  if (typeof cbBefore === "function") {
    cbBefore();
  }

  request.open("POST", SITE_URL + "pengaturan-landing-page", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

  request.send(`mode=setting_homepage&title=${title}&subtitle=${subtitle}`);
  request.onload = function () {
    if (request.status >= 200 && request.status < 400) {
      Swal.fire("Updated!", "Pengaturan heropage berhasil diupdate.", "success").then((x) => {
        var response = JSON.parse(request.responseText);

        if (typeof cbSuccess === "function") {
          cbSuccess(response);
        }

        if (typeof cbAfter === "function") {
          cbAfter();
        }
      });
    } else {
      Swal.fire("Failed!", "Pengaturan heropage gagal diupdate.", "error").then(() => {
        if (typeof cbAfter === "function") {
          cbAfter();
        }

        if (typeof cbError === "function") {
          cbError();
        }
      });
    }
  };
}

// delete file pendukung kandidate
function deleteFilePendukung(url, field, cbBefore = null, cbAfter = null, cbSuccess = null, cbError = null) {
  var request = new XMLHttpRequest();

  if (typeof cbBefore === "function") {
    cbBefore();
  }

  request.open("POST", url, true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

  request.send(`section=delete-data-pendukung&field=${field}`);
  request.onload = function () {
    if (request.status >= 200 && request.status < 400) {
      Swal.fire("Deleted!", "File berhasil dihapus.", "success").then((x) => {
        var response = JSON.parse(request.responseText);

        if (typeof cbSuccess === "function") {
          cbSuccess(response);
        }

        if (typeof cbAfter === "function") {
          cbAfter();
        }
      });
    } else {
      Swal.fire("Failed!", "File gagal dihapus.", "error").then(() => {
        if (typeof cbAfter === "function") {
          cbAfter();
        }

        if (typeof cbError === "function") {
          cbError();
        }
      });
    }
  };
}

function diffDateForHuman(date1, date2) {
  var seconds = Math.floor((date2 - date1) / 1000);

  var interval = Math.floor(seconds / 31536000);

  if (interval > 1) {
    return interval + " tahun";
  }
  interval = Math.floor(seconds / 2592000);
  if (interval > 1) {
    return interval + " bulan";
  }
  interval = Math.floor(seconds / 86400);
  if (interval > 1) {
    return interval + " hari";
  }
  interval = Math.floor(seconds / 3600);
  if (interval > 1) {
    return interval + " jam";
  }
  interval = Math.floor(seconds / 60);
  if (interval > 1) {
    return interval + " menit";
  }
  return Math.floor(seconds) + " detik";
}

$(document).on("click", ".editBtn", function () {
  $("#edit_id").val($(this).data("id"));
  $("#edit_icon").val($(this).data("icon"));
  $("#edit_name").val($(this).data("name"));
  $("#edit_link").val($(this).data("link"));
  $("#editModal").modal("show");
});

$(document).ready(function () {
  $(".btn-edit").on("click", function () {
    // Get data from table row
    const id = $(this).data("id");
    const name = $(this).data("name");
    const icon = $(this).data("icon");
    const link = $(this).data("link");

    // Fill form fields with data
    $("#edit_id").val(id);
    $("#edit_name").val(name);
    $("#edit_icon").val(icon);
    $("#edit_link").val(link);

    // Show the modal
    $("#editModal").modal("show");
  });
});
