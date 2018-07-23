$(document).on("mouseover", ".img-container > a.position-relative", function() {
  $(this).find(".hover").css("display", "inline-block");
});
$(document).on("mouseleave", ".img-container > a.position-relative", function() {
  $(this).find(".hover").css("display", "none");
});
$(document).on("click", ".desc-more", function() {
  if ($(this).attr("val") === "desc-valid") {
    $(this).parents(".img-container").find(".hover2").slideToggle();
  }
});
