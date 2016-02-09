$(function() {
   showVisible();

	$('.footer .section-icon').click(function(){
		$("html, body").animate({ scrollTop: 0 }, '600', 'swing');
		return false;
	});

	// fixed menu
	function checkScroll() {
		if ($(window).scrollTop()  > 72) {
		  $('.menu').addClass('menu-fixed');  
		  $('.top').addClass('mb-52');  
		}
		else
		{
		  $('.menu').removeClass('menu-fixed');   
		  $('.top').removeClass('mb-52');   
		} 
	}

	$(window).scroll(function () {
		checkScroll();
	});

	checkScroll();
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