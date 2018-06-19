$(document).ready(function() {
  // #select_language
  $("#select_language").change(function() {
    if(this.value === "Indonesia") {
      $(this).parent().find("label[for='select_language'] small").text("Pilih Bahasa Anda");
    } else {
      $(this).parent().find("label[for='select_language'] small").text("Choose Your Language");
    }
  });
});
$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  if (scroll >= 115) {
    $("header nav").addClass("nav_scrolled");
  } else {
    $("header nav").removeClass("nav_scrolled");    
  }
});
