$(window).on("scroll load", function () {
    if ($(".header").offset().top > 280) {
      $(".header").addClass("bg-header-wht");
    } else {
      $(".header").removeClass("bg-header-wht");
    }
  
    if ($(".nav-link").offset().top > 280) {
      $(".nav-link").addClass("nav-link-change");
    } else {
      $(".nav-link").removeClass("nav-link-change");
    }
  });
  