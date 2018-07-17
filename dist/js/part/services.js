// // js
// $(document).ready(function() {
//   let aside = $('aside');
//   aside.hide();
//   aside.slideDown(800);
// })
//
//
// $(window).scroll(function() {
//   let aside = $('aside'),
//       aT = $('article').offset().top,
//       aH = $('article').outerHeight(),
//       wH = $(window).height(),
//       wS = $(this).scrollTop(),
//       hasClass = aside.hasClass('link-dictionary-left');
//   if ($('.nav-mobile').css('display') === 'none' && $('.services-gap .col-md-11').text().replace(/\s/g, '') !== 'Fortuno>Services') {
//     let wS = $(window).scrollTop();
//     if (wS > 380 && !hasClass) {
//       aside.addClass('link-dictionary-left');
//     } else if (wS <= 380 && hasClass) {
//       aside.removeClass('link-dictionary-left');
//     } else if (wS > (aT+aH-wH) && hasClass) {
//       aside.css('bottom', '10.1vh');
//     } else {
//       aside.css('bottom', '0');
//     }
//   } else if(hasClass){
//     aside.removeClass('link-dictionary-left');
//   }
// });

// //NOT USED !!!
// $(window).scroll(function() {
//   let aside = $('aside'),
//       hasClass = aside.hasClass('link-dictionary-left');
//   if ($('.nav-mobile').css('display') === 'none' && $('.services-gap .col-md-11').text().replace(/\s/g, '') !== 'Fortuno>Services') {
//     let hT = $('#end-of-aside').offset().top,
//         hH = $('#end-of-aside').outerHeight(),
//         sT = $('#select_language').offset().top,
//         sH = $('#select_language').outerHeight(),
//         aT = $('article').offset().top,
//         aH = $('article').outerHeight(),
//         wH = $(window).height(),
//         wS = $(this).scrollTop();
//     if (wS > (hT+hH-wH) && !hasClass){
//       aside.addClass('link-dictionary-left');
//     }
//     if(wS > (aT+aH-wH) && hasClass) {
//       aside.css('bottom', '10.1vh');
//     } else if (wS < (sT+sH+wH) && hasClass) {
//       aside.removeClass('link-dictionary-left');
//     } else if (wS < (aT+aH-wH) && hasClass) {
//       aside.css('bottom', '0');
//     }
//   } else if(hasClass){
//     aside.removeClass('link-dictionary-left');
//   }
// });
