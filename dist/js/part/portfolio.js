$(document).on("mouseover", ".img-container a", function() {
  $(this).find(".hover").css("display", "inline-block");
});
$(document).on("mouseleave", ".img-container a", function() {
  $(this).find(".hover").css("display", "none");
});
