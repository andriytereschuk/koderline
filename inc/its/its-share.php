

<section class="its-share">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2><i class="icon-book-grey"></i>Акции и новости"</h2>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<div class="swiper-container its-slider" id="itsSlider">
					<div class="swiper-wrapper">

						<div class="swiper-slide" style="background-image: url(images/its-slide1.jpg)">
							<div class="its-slider--title">“Диагностика типовых узких мест скорости работы 1С”.. </div>
							<a href="#" class="its-slider--more">Подробнее</a>
						</div>

						<div class="swiper-slide" style="background-image: url(images/its-slide1.jpg)">
							<div class="its-slider--title">“Диагностика типовых узких мест скорости работы 1С”.. </div>
							<a href="#" class="its-slider--more">Подробнее</a>
						</div>

						<div class="swiper-slide" style="background-image: url(images/its-slide1.jpg)">
							<div class="its-slider--title">“Диагностика типовых узких мест скорости работы 1С”.. </div>
							<a href="#" class="its-slider--more">Подробнее</a>
						</div>

					</div>
				</div>	
			</div>

			<div class="span12 align-center">
				<a href="#" class="slider-arrows slider-left" id="itsSliderLeft"><i class="icon-left"></i></a>
				<a href="#" class="slider-arrows slider-right" id="itsSliderRight"><i class="icon-right"></i></a>				
			</div>
		</div>
	</div>

	<!-- Plugin for slider -->
	<script src="js/idangerous.swiper.min.js"></script>
	<!-- Init slider -->
	<script>
	$(function(){
		var itsSwiper = $('#itsSlider').swiper({
			mode:'horizontal',
			speed: 800,
			loop: true,
			simulateTouch: false
		});

		$("#itsSliderLeft").click(function(event) {
			event.preventDefault();
			itsSwiper.swipePrev();
		});

		$("#itsSliderRight").click(function(event) {
			event.preventDefault();
			itsSwiper.swipeNext();
		});	
	});	
	</script>
</section>