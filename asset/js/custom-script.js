// custom navbar
$(window).on('scroll', function () {
	if ($(window).scrollTop()) {
		$('.custom-navbar').addClass('black');
	} else {
		$('.custom-navbar').removeClass('black');
	}
});

// swiper
var swiper = new Swiper('.swiper-container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflowEffect: {
		rotate: 50,
		stretch: 0,
		depth: 100,
		modifier: 1,
		slideShadows: true,
	},
	pagination: {
		el: '.swiper-pagination',
	},
	autoplay: {
		delay: 5000,
	},
});
