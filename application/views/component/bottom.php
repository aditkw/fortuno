<?php // $cekslider = mysql_query("SELECT id_slider FROM slider WHERE status='1'"); $csld = mysql_num_rows($cekslider); ?>
<script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>plugins/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url();?>plugins/owl-carousel/dist/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>plugins/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- <script src="<?php echo base_url();?>plugins/fancyapp/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>plugins/zebra-datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>dist/js/smoothscroll.min.js"></script>
<script src="<?php echo base_url();?>dist/js/ajax.js"></script>
<script src="<?php echo base_url();?>dist/js/lwd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

<script src="<?=site_url('plugins/jquery.scrolline.js')?>"></script>
<script>

// search function
function searchClck(){
  var form = $("#search")
  var searchBtn = $("div.search").find("i")
  if (form.hasClass('munculin')) {
    form.removeClass('munculin')
    form.addClass('umpetin')

    searchBtn.removeClass("fa-close")
    searchBtn.addClass("fa-search")
  }
  else {
    form.removeClass('umpetin')
    form.addClass('munculin')

    searchBtn.removeClass("fa-search")
    searchBtn.addClass("fa-close")
  }

  if (searchBtn.hasClass('rotate')) {
    searchBtn.removeClass('rotate')
  }else {
    searchBtn.addClass('rotate')
  }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollBtn();scrollFunction()};

function scrollBtn() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("myScroll").classList.add("blok");
    } else {
        document.getElementById("myScroll").classList.remove("blok");
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
}
</script>
<script type="text/javascript">

	$("#btn-cari").click(function(){
    $("#panel-search").slideToggle();
    var el = $(this).toggleClass('fa-close');
    if (el.hasClass('fa-close')) {
      $(this).removeClass('fa-search');
      $(this).addClass('rotate-again');
      // $(this).removeClass('rotate-again');
    }
    else {
      $(this).addClass('fa-search');
      $(this).addClass('rotate-again');
      $(this).removeClass('rotate-again');
    }
});

	function subMenu1(){
		$('#stat1').slideToggle();
	}
	function subMenu2(){
		$('#stat2').slideToggle();
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}

	$('#search-btn').on('click', function(e){
		$(this).searchBox('open');
		e.preventDefault();
	});

	$('#search-btn2').on('click', function(e){
		$(this).searchBox('open');
		e.preventDefault();
	});

	$('.close').on('click', function(){
		$(this).searchBox('close');
	});

$(document).ready(function(){

	$('[data-fancybox="images"]').fancybox({
  afterLoad : function(instance, current) {
    var pixelRatio = window.devicePixelRatio || 1;

    if ( pixelRatio > 1.5 ) {
      current.width  = current.width  / pixelRatio;
      current.height = current.height / pixelRatio;
    }
  }
});

$('[data-fancybox="fancy-activity"]').fancybox({
afterLoad : function(instance, current) {
	var pixelRatio = window.devicePixelRatio || 1;

	if ( pixelRatio > 1.5 ) {
		current.width  = current.width  / pixelRatio;
		current.height = current.height / pixelRatio;
	}
}
});


	var currentLocation = window.location.href;
	var link = "https://plus.google.com/share?url="+currentLocation;
	$("#google").attr('href', link);

		$(".small-img img").click(function(e){
			// $(this).css('cursor', 'pointer');
			var newsrc = $(this).attr('src');
			$(".big-image > a").attr('href', newsrc);
			$(".big-image > a > img").attr('src', newsrc);
		});

		var itung = $('#htg').children();
		var result = itung.length;
		$("#view_count").text(result);

	/* Peta */
	$('.peta').click(function () {
		$('.peta iframe').css("pointer-events", "auto");
	});
	/* End Peta */

	/* Jquery Bxslider */
	$('.bxslider').bxSlider({
		auto: true,
		speed: 500,
		autoControls: false,
		adaptiveHeight: true,
		pager : false,
		controls : true
	});
	/* End Jquery Bxslider */

	/* Jquery Owl-Carousel */
	$(document).ready(function(){
	  $("#home-slide").owlCarousel({
	    loop:true,
      dots:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
	    responsive:{
				320:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},
				1000:{
					items:1
				}
			}
	  });

    $("#home-partners").owlCarousel({
	    loop:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
      nav: true,
      navText: [$('.am-next'),$('.am-prev')],
	    responsive:{
				320:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},
				1000:{
					items:6
				}
			}
	  });

    $("#home-clients").owlCarousel({
	    loop:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
	    responsive:{
				320:{
					items:2
				},
				480:{
					items:2
				},
				600:{
					items:3
				},
				768:{
					items:4
				},
				1000:{
					items:6
				}
			}
	  });

    $("#article-slide").owlCarousel({
	    loop:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
	    responsive:{
				320:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1000:{
					items:3
				}
			}
	  });

    $("#service-slide").owlCarousel({
	    loop:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
	    responsive:{
				320:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1000:{
					items:3
				}
			}
	  });

    $("#news-slide").owlCarousel({
	    loop:true,
			autoplay: true,
			smartSpeed: 2000,
			responsiveClass:true,
			autoplayHoverPause: true,
	    responsive:{
				320:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1000:{
					items:3
				}
			}
	  });

	});

	/* fancybox */
	$('.fancybox').fancybox();

	$('.fancyvid').click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
				 'wmode'		: 'transparent',
				'allowfullscreen'	: 'true'
			}
		});
		return false;
	});
	/* end fancybox */

	/* Zebra datepicker */
	$('.tgl-picker').Zebra_DatePicker({
		format: 'Y-m-d'
	});
	/* End zebra datepicker */

	/* Toggle Menu -*/
	$('.cssmenu > ul > li > a').click(function()
	{
		var checkElement = $(this).next();

		if((checkElement.is('ul')) && (checkElement.is(':visible')))
		{
			checkElement.slideUp('slow');
		}

		if((checkElement.is('ul')) && (!checkElement.is(':visible')))
		{
			$('.cssmenu ul ul:visible').slideUp('slow');
			checkElement.slideDown('slow');
		}

		if($(this).closest('li').find('ul').children().length == 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	});
	/* End Toggle Menu */

	if('.fadeout-message'){
		setTimeout(function() {
			$('.fadeout-message').slideUp(400);
		}, 5000);
	}
});
</script>

<!-- /*captcha*/ -->
<script type="text/javascript">
	var $animation_elements = $('.animation-element');
	var $window = $(window);

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements, function() {
	    var $element = $(this);
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	        (element_top_position <= window_bottom_position)) {
	      $element.addClass('animated jackInTheBox');
	    }
	    //  else {
	    //   $element.removeClass('animated jackInTheBox');
	    // }
	  });
	}
	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');

</script>
<!-- /* end captcha */ -->
</body>
</html>
