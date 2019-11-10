// custom navbar
$(window).on('scroll', function () {
	if ($(window).scrollTop()) {
		$('.custom-navbar').removeClass('mt-4');
		$('.custom-navbar').addClass('bg-white');
	} else {
		$('.custom-navbar').addClass('mt-4');
		$('.custom-navbar').removeClass('bg-white');
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
