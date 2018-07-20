//LOADER/SPINNER
$(window).bind("load", function() {

	"use strict";

	$(".spn_hol").fadeOut(1000);
});


//MENU APPEAR AND HIDE
$(document).ready(function() {

	"use strict";

	$(window).scroll(function() {

		"use strict";

		if ($(window).scrollTop() > 80) {
			$(".navbar").css({
				'margin-top': '0px',
				'opacity': '1'
			})
			$(".navbar-nav>li>a").css({
				'padding-top': '15px'
			});
			$(".navbar-brand img").css({
				'display': 'inline',
				'height': '35px'
			});
			$(".navbar-brand img").css({
				'padding-top': '0px'
			});
			$(".navbar-default").css({
				'background-color': 'rgba(59, 59, 59, 0.8)'
			});
		} else {
			$(".navbar").css({
				'margin-top': '-100px',
				'opacity': '0'
			})
			$(".navbar-nav>li>a").css({
				'padding-top': '45px'
			});
			$(".navbar-brand img").css({
				'height': '45px'
			});
			$(".navbar-brand img").css({
				'padding-top': '20px'
			});
			$(".navbar-default").css({
				'background-color': 'rgba(59, 59, 59, 0)'
			});
		}
	});
});


// MENU SECTION ACTIVE
$(document).ready(function() {

	"use strict";

	$(".navbar-nav li a").click(function() {

		"use strict";

		$(".navbar-nav li a").parent().removeClass("active");
		$(this).parent().addClass("active");
	});
});


// Hilight MENU on SCROLl
$(document).ready(function() {

	"use strict";

	$(window).scroll(function() {

		"use strict";

		$(".page").each(function() {

			"use strict";

			var bb = $(this).attr("id");
			var hei = $(this).outerHeight();
			var grttop = $(this).offset().top - 70;
			if ($(window).scrollTop() > grttop - 1 && $(window).scrollTop() < grttop + hei - 1) {
				var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().addClass("active");
			} else {
				var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().removeClass("active");
			}
		});
	});
});


//SMOOTH MENU SCROOL
$(function() {

	"use strict";

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});


// FIX HOME SCREEN HEIGHT
$(document).ready(function() {

	"use strict";

	setInterval(function() {

		"use strict";

		var widnowHeight = $(window).height();
		var containerHeight = $(".home-container").height();
		var padTop = widnowHeight - containerHeight;
		$(".home-container").css({
			'padding-top': Math.round(padTop / 2) + 'px',
			'padding-bottom': Math.round(padTop / 2) + 'px'
		});
	}, 10)
});


//PARALLAX
$(document).ready(function() {

	"use strict";

	$(window).bind('load', function() {
		"use strict";
		parallaxInit();
	});

	function parallaxInit() {
		"use strict";
		$('.home-parallax').parallax("30%", 0.1);
		$('.subscribe-parallax').parallax("30%", 0.1);
		$('.testimonial').parallax("10%", 1);
		/*add as necessary*/
	}
});


//OWL CAROSEL
$(document).ready(function() {

	"use strict";

	$("#owl-demo").owlCarousel({
		autoPlay: 3000,
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1370, 3], //5 items between 1000px and 901px
		itemsDesktopSmall: [900, 2], // betweem 900px and 601px
		itemsTablet: [600, 1], //2 items between 600 and 0
	});
});


//PRETTYPHOTO
$(document).ready(function() {

	"use strict";

	$("a[rel^='prettyPhoto']").prettyPhoto({
		show_title: false,
		/* true/false */
	});
});


//WOW JS
$(document).ready(function() {

	"use strict";

	new WOW().init();
});


//RESPONSIVE VIDEO
$(document).ready(function() {

	"use strict";

	// Basic FitVids Test
	$(".video").fitVids();
});

// //CSRF
// $(document).ready(function() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
// });
// //CONTACT FORM VALIDATION
// $(document).ready(function() {
//     "use strict";
//     $(".btn-submit").on("click", function() {

//         "use strict";

//         var name = $("#name").val();
//         var emaild = $("#email").val();
//         var phone = $("#phone").val();
//         var subject = $("#subject").val();
//         var message = $("#message").val();
//         var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

//         var dataString = 'name=' + name + '&mail=' + emaild + '&phone=' + phone + '&subjectForm=' + subject + '&messageForm=' + message;

//         if (!name) {
//             $(".form_error .name_error").addClass("show").removeClass("hide");
//             return false;
//         } else {
//             $(".form_error .name_error").addClass("hide").removeClass("show");
//         }
//         if (!emaild) {
//             $(".form_error .email_error").addClass("show").removeClass("hide");
//             return false;
//         } else {
//             $(".form_error .email_error").addClass("hide").removeClass("show");
//             if (testEmail.test(emaild)) {
//                 $(".form_error .email_val_error").addClass("hide").removeClass("show");
//             } else {
//                 $(".form_error .email_val_error").addClass("show").removeClass("hide");
//                 return false;
//             }
//         }

//         if (!phone) {
//             $(".form_error .phone_error").addClass("show").removeClass("hide");
//             return false;
//         } else {
//             $(".form_error .phone_error").addClass("hide").removeClass("show");
//         }

//         if (!message) {
//             $(".form_error .message_error").addClass("show").removeClass("hide");
//             return false;
//         } else {
//             $(".form_error .message_error").addClass("hide").removeClass("show");
//         }
//         if (name && phone && emaild && message) {
//             $.ajax({
//                 type: 'POST',
//                 url: '',
//                 data: dataString,
//                 cache: false,
//                 success: function(data) {
//                     $(".Sucess").show();
//                     $(".Sucess").fadeIn(2000);
//                     $(".Sucess").html("<i class='fa fa-check'></i> ¡Gracias <b>" + name + "</b>! Nos pondremos en contacto en la brevedad posible.");
//                     $("#Name").val("");
//                     $("#Email").val("");
//                     $("#Phone").val("");
//                     $("#Subject").val("");
//                     $("#Message").val("");
//                     $(".form_error .name_error, .form_error .email_error, .form_error .email_val_error, .form_error .message_error").addClass("hide").removeClass("show");
//                     $("#name").val("");
//                     $("#email").val("");
//                     $("#phone").val("");
//                     $("#subject").val("");
//                     $("#message").val("");
//                 }
//             });
//         }
//         return false;
//     });
// });


/// SMOOTH SCROLL           
$(document).ready(function() {

	"use strict";

	var scrollAnimationTime = 1200,
		scrollAnimation = 'easeInOutExpo';
	$('a.scrollto').bind('click.smoothscroll', function(event) {
		event.preventDefault();
		var target = this.hash;
		$('html, body').stop().animate({
			'scrollTop': $(target).offset().top
		}, scrollAnimationTime, scrollAnimation, function() {
			window.location.hash = target;
		});
	});
	//COUNTER
	$('.counter_num').counterUp({
		delay: 10,
		time: 2000
	});
});


//VIDEO BACKGROUND
$(document).ready(function() {
	var videobackground = new $.backgroundVideo($('body'), {
		"align": "centerXY",
		"width": 1280,
		"height": 720,
		"path": "media/",
		"filename": "cloud",
		"types": ["mp4", "ogg", "webm"]
	});
});


//JQuery Cerrar navbar en click 
$('.navbar-nav>li>a').on('click', function() {
	$('.navbar-collapse').collapse('hide');
});

// Scroll

var amountScrolled = 300;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('a.scroll-top').fadeIn('slow');
    } else {
        $('a.scroll-top').fadeOut('slow');
    }
});

$('a.scroll-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});