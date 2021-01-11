function toggleMobileNav() {
  if ($("nav").hasClass("mobile")) {
    $("nav").removeClass("mobile");
  } else {
    $("nav").addClass("mobile");
  }
}

$("html").click(function () {
  $("nav").removeClass("mobile");
});

$("nav").click(function (e) {
  e.stopPropagation();
});
