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
		$("div.lang-items").animate({scrollLeft: $("div.lang-items").scrollLeft() + 124}, 500);
	});
	$('#scrollright').click(function(){
		$("div.lang-items").animate({scrollLeft: $("div.lang-items").scrollLeft() - 124}, 500);
	});


	$('main.banner-slider').append(
		$("<div>").attr({ 'class': 'd-flex scroll-to-voices' })
			.append($("<a>").attr({ 'href': '#voice-catalog', 'id': 'scroll2voices' })
				.append($("<img>").attr({ 'src': '../assets/images/mouse-scroll.svg', 'class': 'bouncing' }))
			)
	);


	$(document).on('click', '#scroll2voices', function (e) {
		e.preventDefault();
		var $voiceCatalog = $('#voice-catalog');
		var vPos = $voiceCatalog.offset().top;
		$(window).scrollTop(vPos - 200);
	});


	$('.actor-overlay').on('mouseover', function (e) {//mouseover (desktop)
		let target = $(e.target);
		showVoices(target);
	});

	$('.actor-card').on('click', function (e) {//mouseover (mobile)
		let target = $(e.target);
		target = target.closest('.actor-card');
		target = target.find('.actor-overlay');		
		showVoices(target);
	});

	function showVoices(actorOverlay) {
		if (actorOverlay.hasClass('spinning')) {
			actorOverlay.removeClass('spinning');
			let actorId = actorOverlay.closest('.actor-card').data('actorid');
			let langId = $('#lang-id').val();
					
			$.ajax({
				url: '/home/getSounds/'+actorId+'/'+langId,
				type: "get",
				beforeSend: function () { },
				success: function (data) {
					var response = JSON.parse(data)
					if (response) {
						if (response.status == 'success') {
							actorOverlay.html('').css({'flex-direction':'column', 'padding': '0.5rem', 'padding-top': '1rem', 'justify-content': 'flex-start'});
							response.sounds.forEach(sound => {
								try {
									var div = $('<div></div>').attr({ 'class': '' });
									var audio = $('<audio/>').attr({ 'data-title': sound.voiceCat, 'data-audioid': 'voice-' + response.actor + '-' + sound.voice_category_id, 'controls': 'controls' });
									var source = $('<source/>').attr({ 'src': "/assets/voices/" + sound.filename, 'type': 'audio/mpeg' });
									actorOverlay.append(div.append(audio.append(source)))
									audio.stylise();
								}
								catch (err) {
									console.log(err.message);
								}
							});
						}
					}
				}
			});
		}
	}

});

// price calculator modal
$('#priceCalcModal').on('show.bs.modal', function (event) {
	$('#actor-price').val('')
	$('#voice-text').val('')
	$('#chrono-results').html('')
	var button = $(event.relatedTarget)
	var price = button.data('actorprice')
	$('#actor-price').val(price)
})



function get_numbers(input) {
	return input.match(/[0-9]+/g);
}


// $('#voice-text').bind('input propertychange', function() {
//     var price = 250;
//     //console.log(price);
//     var words = this.value.trim().match(/(\s+)/g).length;
//     if(this.value.length) {words++;}
//     var sumPrice;
//     time = (words/2);

//     if(time<60){
//         sumPrice = price;
//     }else if(time>=60 && time<120){
//         sumPrice = price + Math.round((time-60)*(price/200));
//     }else if(time>=120 && time<180){
//         sumPrice = price + Math.round((time-120)*(price/250) + price/200*60);
//     }else if(time>=180 && time<240){
//         sumPrice = price + Math.round((time-180)*(price/333.33) + price/200*60 + price/250*60);
//     }else if(time>=240 && time<300){
//         sumPrice = price + Math.round((time-240)*(price/500) + price/200*60 + price/250*60 + price/333.33*60);
//     }else if(time>=300 && time<=360){
//         sumPrice = price + Math.round((time-300)*(price/1000) + price/200*60 + price/250*60 + price/333.33*60 + price/500*60);
//     }else{
//         sumPrice = '6 წუთზე მეტი ქრონომეტრაჟის ტექსტის ჩაწერის შემთხვევაში დაგვიკავშირდით პირადად.';
//     }
//     if (time>360){
//         $('#chrono-results').html(sumPrice);
//     }else{
//         var t = '@words@ სიტყვა; @time@ წამი; ფასი: @price@₾';
//         t = t.replace('@words@', words).replace('@time@', time).replace('@price@', sumPrice);
//         $('#chrono-results').text(t);
//     }

// });




