$(document).ready(function() {
  // #select_language
  $("#select_language").change(function() {
    if(this.value === "Indonesia") {
      $(this).parent().find("label[for='select_language'] small").text("Pilih Bahasa");
    } else {
      $(this).parent().find("label[for='select_language'] small").text("Choose Your Language");
    }
  });
});
