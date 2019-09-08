// custom navbar
$(window).on('scroll', function () {
	if ($(window).scrollTop()) {
		$('.custom-navbar').addClass('black');
	} else {
		$('.custom-navbar').removeClass('black');
	}
});
