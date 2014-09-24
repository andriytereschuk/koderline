$(function() {
   showVisible();

	$('.footer .section-icon').click(function(){
		$("html, body").animate({ scrollTop: 0 }, '600', 'swing');
		return false;
	});
});