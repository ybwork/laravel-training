$('.nav').on('click', function() {
	$('.menu').hasClass('active') 
	? $('.menu').removeClass('active').hide(300) 
	: $('.menu').addClass('active').show(300)
});