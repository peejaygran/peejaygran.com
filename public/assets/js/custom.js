$ = jQuery;

$(document).ready(function(){
	$('.pj-color-control').click(function(){
		if($('.pj-color-picker').css('left') === '-70px'){
			$('.pj-color-picker').css('left', '0px');
		} else {
			$('.pj-color-picker').css('left', '-70px');
		}
	});	
});
