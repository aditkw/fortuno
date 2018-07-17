// #select_language
$(document).ready(function() {
  $("#select_language").change(function() {
    if(this.value === "Indonesia") {
      $(this).parent().find("label[for='select_language'] small").text("Pilih Bahasa Anda");
    } else {
      $(this).parent().find("label[for='select_language'] small").text("Choose Your Language");
    }
  });
});

// sticky header
$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  if (scroll >= 115) {
    $("header nav").addClass("nav_scrolled");
  } else {
    $("header nav").removeClass("nav_scrolled");
  }
});

// dropdown menu
// $(document).on("click", ".menu-has-sub", function(e) {
//   if (e.target === this || e.target.parentElement === this) {
//     if (!$(this).hasClass("clicked")) {
//       $(this).find(".sub1").fadeIn();
//       $(this).addClass("clicked");
//     } else {
//       $(this).find(".sub1").fadeOut();
//       $(this).removeClass("clicked");
//     }
//   }
// });
// $(document).on("click", ".sub1-has-sub", function(e) {
//     if (e.target === this) {
//       if (!$(this).hasClass("clicked")) {
//         $(this).find(".sub2").fadeIn();
//         $(this).addClass("clicked");
//       } else {
//         $(this).find(".sub2").fadeOut();
//         $(this).removeClass("clicked");
//       }
//     }
// });
var hoverMenuSub = function(obj, kelas, fade) {
  if (!$(obj).hasClass("clicked")) {
    switch (fade) {
      case 'fadeIn': $(obj).find("."+kelas).fadeIn(); break;
      case 'fadeOut': $(obj).find("."+kelas).fadeOut(); break;
    }
  }
}
$(document).on("mouseenter", ".menu-has-sub", function(e) {
  hoverMenuSub(this, "sub1", "fadeIn");
});
$(document).on("mouseleave", ".menu-has-sub", function(e) {
  hoverMenuSub(this, "sub1", "fadeOut");
});
$(document).on("mouseenter", ".sub1-has-sub", function(e) {
  hoverMenuSub(this, "sub2", "fadeIn");
});
$(document).on("mouseleave", ".sub1-has-sub", function(e) {
  hoverMenuSub(this, "sub2", "fadeOut");
});






// active link
let reg = /^\/.+(\/.+)$/gi;
let arr_uri = reg.exec(location.pathname.substr(0));
let res;
res = (!arr_uri) ? 'home' : arr_uri[1];


// search
$(document).on("submit", "#search", function(e) {
  let txtField = $(this).find("input[name='s']").val();
  if(!txtField) {
    e.preventDefault();
  }
});
