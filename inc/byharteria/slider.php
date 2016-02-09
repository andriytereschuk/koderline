

<section class="its-desc">
	<div class="swiper-container byh-slider" id="byhSlider">
		<div class="swiper-wrapper">

			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="span6">
							<h2>Акция №1</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos natus, vero sunt, obcaecati deleniti, fuga atque tenetur odit illo quam repudiandae eum delectus laborum temporibus architecto expedita ea nihil officiis magnam ullam minus repellat fugit non. Excepturi minus consequatur molestias esse. Earum quisquam repellendus, itaque incidunt modi sed non sequi?</p>
							<a href="#" class="byh-more"><i class="icon-plus-blue"></i><span>Подробнее</span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="span6">
							<h2>Акция №2</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus labore unde obcaecati. Numquam et unde magnam reprehenderit repellat molestias enim.</p>
							<a href="#" class="byh-more"><i class="icon-plus-blue"></i><span>Подробнее</span></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="byh-slider-arrows">
		<a href="#" class="slider-arrows slider-left" id="byhSliderLeft"><i class="icon-left"></i></a>
		<a href="#" class="slider-arrows slider-right" id="byhSliderRight"><i class="icon-right"></i></a>				
	</div>

	<!-- Plugin for slider -->
	<script src="js/idangerous.swiper.min.js"></script>
	<!-- Init slider -->
	<script>
	$(function(){
		var byhSwiper = $('#byhSlider').swiper({
			mode:'horizontal',
			speed: 600,
			loop: true,
			simulateTouch: false
		});

		$("#byhSliderLeft").click(function(event) {
			event.preventDefault();
			byhSwiper.swipePrev();
		});

		$("#byhSliderRight").click(function(event) {
			event.preventDefault();
			byhSwiper.swipeNext();
		});	
	});	
	</script>
</section>		