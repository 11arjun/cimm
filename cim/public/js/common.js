$(window).scroll(function () {
    var headers = $('.header').height();
    var scroll = $(window).scrollTop();
    if (scroll >= (headers)) {
        $('.header').addClass('fixed_hed');
        $('.banner').css('margin-top', headers);
    } else {
        $('.header').removeClass('fixed_hed');
        $('.banner').css('margin-top', '0');
    }
});
$(document).ready(function(){
	$('.navigation li').on('mouseenter', function(){
		$(this).children('ul').stop().fadeIn('fast');
	})
	$('.navigation li').on('mouseleave', function(){
		$(this).children('ul').stop().fadeOut('fast');
	})
})

