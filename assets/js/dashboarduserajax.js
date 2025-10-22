$(document).ready(function () {
  var idjob = document.querySelector(".nav-link.mb-0.px-0.py-1.job.active");

  if (idjob) {
    idjob = idjob.getAttribute("data-target");
    console.log(idjob);

    // if (idjob != null) {
    //   idjob = idjob.getAttribute("data-target");

    $.ajax({
      url: baseURL + "candidatejob/getDetailJob",
      type: "POST",
      dataType: "json",
      data: {
        idjob: idjob,
      },
      success: function (data) {
        $(".show-data").html(data);
      },
    });
  }
});

$(document).on("click", "#jobvacancy", function (e) {
  var idjob = $(this).data("target");

  $.ajax({
    url: baseURL + "candidatejob/getDetailJob",
    type: "POST",
    dataType: "json",
    data: {
      idjob: idjob,
    },
    success: function (data) {
      $(".show-data").html(data);
    },
  });
});

$("#showBatchModal").on("shown.bs.modal", function (e) {
  var idbatch = $(e.relatedTarget).data("batch");
  $.ajax({
    url: baseURL + "candidatedashboard/getviewbatch",
    type: "POST",
    dataType: "json",
    data: {
      idbatch: idbatch,
    },
    success: function (data) {
      $(".show-data-batch").html(data); //menampilkan data ke dalam modal
    },
  });
});
