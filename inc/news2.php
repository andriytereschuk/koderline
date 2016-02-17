

<section class="news2 bg-grey">
	<div class="container cp-80">
		<div class="section-icon"><i class="icon-book"></i></div>

		<div class="row">
			<div class="span6">
				<div class="news2-blok">
					<div class="news2-blok-h">Новости</div>
					<a href="#" class="news2-blok-all">Все новости</a>
					<div class="clr"></div>

					<div class="swiper-container news2-slider" id="nslider1">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h3>О сертификатах</h3>

										<p>В компании добавился еще один значимый сертификат... <a href="">Читать</a></p>
									</div>
									<div class="clr"></div>
								</div>

								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h3>О сертификатах</h3>

										<p>В компании добавился еще один значимый сертификат... <a href="">Читать</a></p>
									</div>
									<div class="clr"></div>
								</div>
							</div>


							<div class="swiper-slide">
								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h3>О сертификатах</h3>

										<p>В компании добавился еще один значимый сертификат... <a href="">Читать</a></p>
									</div>
									<div class="clr"></div>
								</div>

								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h3>О сертификатах</h3>

										<p>В компании добавился еще один значимый сертификат... <a href="">Читать</a></p>
									</div>
									<div class="clr"></div>
								</div>
							</div>

						</div>
					</div>

					<a href="#" class="slider-arrows slider-left2" id="ns1Left"><i class="icon-left"></i></a>
					<a href="#" class="slider-arrows slider-right2" id="ns1Right"><i class="icon-right"></i></a>		
				</div>
			</div>

			<div class="span6">
				<div class="news2-blok">
					<div class="news2-blok-h">Мероприятия</div>
					<a href="#" class="news2-blok-all">Все мероприятия</a>
					<div class="clr"></div>

					<div class="swiper-container news2-slider" id="nslider2">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h2>1С:Документооборот. Обзор возможностей для конкретных областей применения...</h2>
										<a href="">Подробнее</a>
									</div>
									<div class="clr"></div>
								</div>

								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h2>1С:Документооборот. Обзор возможностей для конкретных областей применения...</h2>
										<a href="">Подробнее</a>...
									</div>
									<div class="clr"></div>
								</div>
							</div>


							<div class="swiper-slide">
								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h2>1С:Документооборот. Обзор возможностей для конкретных областей применения...</h2>
										<a href="">Подробнее</a>
									</div>
									<div class="clr"></div>
								</div>

								<div class="news2-item">
									<div class="news2-item-date">
										<div class="news2-item-day">08</div>
										<div class="news2-item-month">фев</div>
									</div>
									<div class="news2-item-text">
										<h2>1С:Документооборот. Обзор возможностей для конкретных областей применения...</h2>
										<a href="">Подробнее</a>
									</div>
									<div class="clr"></div>
								</div>
							</div>

						</div>
					</div>

					<a href="#" class="slider-arrows slider-left2" id="ns2Left"><i class="icon-left"></i></a>
					<a href="#" class="slider-arrows slider-right2" id="ns2Right"><i class="icon-right"></i></a>		
				</div>
			</div>
		</div>
	</div>


<script>
$(function(){
	var nslider1 = $('#nslider1').swiper({
		mode:'horizontal',
		speed: 400,
		loop: true,
		simulateTouch: false
	});

	$("#ns1Left").click(function(event) {
		event.preventDefault();
		nslider1.swipePrev();
	});

	$("#ns1Right").click(function(event) {
		event.preventDefault();
		nslider1.swipeNext();
	});

	var nslider2 = $('#nslider2').swiper({
		mode:'horizontal',
		speed: 400,
		loop: true,
		simulateTouch: false
	});

	$("#ns2Left").click(function(event) {
		event.preventDefault();
		nslider2.swipePrev();
	});

	$("#ns2Right").click(function(event) {
		event.preventDefault();
		nslider2.swipeNext();
	});	
});	
</script>
</section>