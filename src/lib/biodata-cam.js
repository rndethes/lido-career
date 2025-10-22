import Uppy, { debugLogger } from "@uppy/core";
// import Url from "@uppy/url";
import Webcam from "@uppy/webcam";
import ImageEditor from "@uppy/image-editor";
import XHRUpload from "@uppy/xhr-upload";
import Dashboard from "@uppy/dashboard";
import Indonesians from "@uppy/locales/lib/id_ID";

import "@uppy/core/dist/style.css";
import "@uppy/dashboard/dist/style.css";
import "@uppy/webcam/dist/style.css";
// import "@uppy/url/dist/style.css";
import "@uppy/image-editor/dist/style.css";

window.initUppy = function (dashboardTarget, xhrUploadOptions) {
  if (document.querySelectorAll(dashboardTarget)) {
    const uppy = new Uppy({
      logger: debugLogger,
      locale: Indonesians,
      restrictions: {
        maxNumberOfFiles: 1,
        minNumberOfFiles: 1,
        maxTotalFileSize: 5242880, // 5MB
        allowedFileTypes: ["image/*"],
      },
    })
      .use(Dashboard, {
        trigger: dashboardTarget,
        inline: false,
        height: 470,
        note: "Foto yang diupload harus merupakan foto yang menampilkan wajah secara jelas, dan menggunakan pakaian rapi. Maximal ukuran file adalah 5 MB.",
      })
      .use(Webcam, {
        target: Dashboard,
        showVideoSourceDropdown: true,
        modes: ["picture"],
        mirror: true,
      })
      //   .use(Url, {
      //     target: Dashboard,
      //     companionUrl: "https://companion.uppy.io/",
      //   })
      .use(ImageEditor, {
        target: Dashboard,
      })
      .use(XHRUpload, xhrUploadOptions);

    return uppy;
  }
};
