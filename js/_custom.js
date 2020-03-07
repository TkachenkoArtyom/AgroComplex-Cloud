document.addEventListener("DOMContentLoaded", function() {

	// phone-mask 

	$('#phone').mask("+375 (99) 999-99-99");

	//	scroll
	$("a[href='#history']").mPageScroll2id();

	// slick-slider
	$('.slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true,
	});
	// resizeWindow-script
	function resizeBlock(){
		if(window.matchMedia("screen and (max-width: 992px)").matches) {
			$('.menu').fadeOut();
			$('.menu-btn').removeClass('menu-btn_active')
		 }
		 else if (window.matchMedia("screen and (min-width: 992px)").matches){
			 $('.menu').fadeIn();
			 $('.menu-btn').addClass('menu-btn_active')
		 }
	 }
	 
	 $(window).resize(function() {
				resizeBlock();
	 });
	 
	 $(document).ready(function(){
			 resizeBlock();
		}); 
		// hamburger - menu
	$('.menu-btn').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('menu-btn_active');

		$('.menu').fadeToggle()

	})
});
