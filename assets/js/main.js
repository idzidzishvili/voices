$(window).on("load", function () {
	$(".preloader .item-wrapper").delay(1000).animate({ top: "-100%" }, 1000, "easeInQuart");
	$(".preloader").delay(1000).fadeOut(1000);
});
$(window).on("scroll", function () {
	$(this).scrollTop() > 1e3 ? $(".back2top-btn").show() : $(".back2top-btn").hide();
}),
	$(window).on("scroll", function () {
		$(this).scrollTop() > 80 ? $(".navbar-part").addClass("navbar-fixed") : $(".navbar-part").removeClass("navbar-fixed");
	}),
	$(".navbar-toggle").on("click", function () {
		$(".navbar-overlay").addClass("active"),
			$(".cencel").on("click", function () {
				$(".navbar-overlay").removeClass("active");
			});
	}),
	$(function () {
		$(".navbar-dropdown a").click(function () {
			$(this).next().toggle(), $(".dropdown-list:visible").length > 1 && ($(".dropdown-list:visible").hide(), $(this).next().show());
		});
	});


$(document).ready(function () {
	$('.venobox').venobox();
	$("body").on("contextmenu", "img", function(e){return false;});

	// main page slider
	$('.banner-slider').slick({
		dots: true,
		prevArrow: '<i class="far fa-arrow-right bannerprev"></i>',
		nextArrow: '<i class="far fa-arrow-left bannernext"></i>',
		responsive: [
			{ breakpoint: 992, settings: { slidesToShow: 1, slidesToScroll: 1 } },
			{ breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } },
			{ breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 } }],
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false
	});

	// partners, about-us
	$('.sponsor-slider').slick({
		prevArrow: '<i class="far fa-arrow-left bannernext"></i>',
		nextArrow: '<i class="far fa-arrow-right bannerprev"></i>',
		slidesToShow: 6,
		responsive: [
			{ breakpoint: 992, settings: { slidesToShow: 4, slidesToScroll: 2 } },
			{ breakpoint: 800, settings: { slidesToShow: 3, slidesToScroll: 2 } },
			{ breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 1 } },
			{ breakpoint: 450, settings: { slidesToShow: 1, slidesToScroll: 1 } }
		],
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true
	});
	
	// languages
	// $('.lang-menu').slick({
	// 	prevArrow: '<i class="far fa-angle-left langnext"></i>',
	// 	nextArrow: '<i class="far fa-angle-right langprev"></i>',
	// 	slidesToShow: 1,
	// 	variableWidth: true,
	// 	autoplay: false,
	// 	infinite: false,
	// 	arrows: true
	// });

	$('#scrollleft').click(function(){
		$("div.lang-items").animate({scrollLeft: $("div.lang-items").scrollLeft() - 124}, 500);
	});
	$('#scrollright').click(function(){
		$("div.lang-items").animate({scrollLeft: $("div.lang-items").scrollLeft() + 124}, 500);
	});


	// append bouncing mouse
	// $('main.banner-slider').append(
	// 	$("<div>").attr({ 'class': 'd-flex scroll-to-voices' })
	// 		.append($("<a>").attr({ 'href': '#voice-catalog', 'id': 'scroll2voices' })
	// 			.append($("<img>").attr({ 'src': '../assets/images/mouse-scroll.svg', 'class': 'bouncing' }))
	// 		)
	// );

	// Scroll down
	$(document).on('click', '#scroll2voices', function (e) {
		e.preventDefault();
		var $voiceCatalog = $('#voice-catalog');
		var vPos = $voiceCatalog.offset().top;
		$(window).scrollTop(vPos - 200);
	});


	// intro audio
	$(document).on('click', "#play-pause-button1", function () {
		var audio = $("#sound").get(0);
		var control = $(this);
		control.toggleClass("active");
		if (control.hasClass("active")) {
			control.html('<i class="far fa-pause"></i>');
			audio.play();
		} else {
			control.html('<i class="far fa-play"></i>');
			audio.pause();
		}
		audio.addEventListener("ended", function(){
			// audio.pause();
			audio.currentTime = 0;
			control.html('<i class="far fa-play"></i>');
			control.toggleClass("active");
			console.log("ended");
		});
	});
	$(document).on('click', "#play-pause-button2", function () {
		var audio = $("#sound").get(0);
		$(this).toggleClass("active");
		if ($(this).hasClass("active")) {
			$(this).html('<i class="far fa-pause"></i>');
			audio.play();
		} else {
			$(this).html('<i class="far fa-play"></i>');
			audio.pause();
		}
		audio.addEventListener("ended", function(){
			console.log("ended");
			audio.pause();
			audio.currentTime = 0;
			control.html('<i class="far fa-play"></i>');
		});
	});

	

});


function get_numbers(input) {
	return input.match(/[0-9]+/g);
}




