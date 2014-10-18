$(function() {
   showVisible();

	$('.footer .section-icon').click(function(){
		$("html, body").animate({ scrollTop: 0 }, '600', 'swing');
		return false;
	});
});

// Forms

$('.modal-dialog').click(function(e) { 
	e.stopPropagation(); 
});

$('.modal, .icon-close-popup').click(function() { 
	closePopup();
});

function closePopup() {
	$('.modal').removeClass("modal-open");
	$("body").removeClass("hidden");	
}