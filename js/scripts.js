

$(function(){

	// mobile navigation toggle
	$('.open').on('click touch', function(){
		$('nav.mobile').fadeOut();
	});

	$('.mobile-menu').on('click touch', function(){
		$('nav.mobile').fadeIn();
	});

	//textrotate

	$('.rotate').textrotator({
		animation: 'flip',
		separator: ',', 
		speed: 5000
	});


});