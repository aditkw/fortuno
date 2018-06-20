$(document).on("mouseover", ".port_img_link", function() {
  $(this).find("div").addClass("port_img_link_active");
});
$(document).on("mouseleave", ".port_img_link", function() {
    $(this).find("div").removeClass("port_img_link_active");
});
// show
$(document).on("click", ".click-sub-services", function() {
    let val = $(this).attr("val");
    $("."+val).fadeToggle();
    let icon = $(this).find(".fa-chevron-circle-right");
    // animate fontawesome
    // $(this).find(".fa-chevron-circle-right").css("transform", "matrix(-1, 0, 0, 1, 0, 0)");
    if(icon.attr("style")) {
      icon.removeAttr("style");
    } else {
      icon.css("transform", "rotateZ(90deg)");
    }
});
