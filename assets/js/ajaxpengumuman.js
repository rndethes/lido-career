$(document).ready(function () {
  var idjobh = document.querySelector(".nav-link.mb-sm-3.mb-md-0.active");

  if (idjobh) {
    idjobh = idjobh.getAttribute("data-target");
    // console.log(idjobh);

    $.ajax({
      url: baseURL + "candidatepengumuman/getTrackTL",
      type: "POST",
      dataType: "json",
      data: {
        idjobh: idjobh,
      },
      success: function (data) {
        $(".show-data").html(data);
      },
    });
  }
});

$(document).on("click", "#pengumuman", function (e) {
  var idjobh = $(this).data("target");
  console.log(idjobh);

  $.ajax({
    url: baseURL + "candidatepengumuman/getTrackTL",
    type: "POST",
    dataType: "json",
    data: {
      idjobh: idjobh,
    },
    success: function (data) {
      $(".show-data").html(data);
    },
  });
});
