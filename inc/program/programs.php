

<section class="program">
	<div class="container">
		<div class="row pb-10">
			<div class="span12">
				<div class="top-section">
					<div class="up-section">
						<i class="icon-book"></i>
					</div>
					<div class="small-h">
						<h2>Бухгалтерский и налоговый учёт</h2>
					</div>
				</div>				
			</div>
		</div>

		<!-- not tabs only navigation -->
		<div class="row pt-20 pr-bottom">
			<div class="span1">
				<a href="#" class="slider-arrows slider-left"><i class="icon-left"></i></a>
			</div>

			<div class="span10">
				<div class="pr-tabs-wrap">
					<div class="pr-tabs">
						<a href=""><span>Бухгалтерский и  налоговый учёт</span></a>
						<a href=""><span>Управление персоналом</span></a>
						<a href=""><span>Торговый и  складской учёт </span></a>
						<a href=""><span>Управление  предприятием</span></a>
						<a href=""><span>Управленческий  учет (МСФО)</span></a>
						<a href="" class="pr-act"><span>Бухгалтерский и  налоговый учёт</span></a>
						<a href=""><span>Управление персоналом</span></a>
						<a href=""><span>Торговый и  складской учёт </span></a>
						<a href=""><span>Управление  предприятием</span></a>
						<a href=""><span>Управленческий  учет (МСФО)</span></a>
						<a href=""><span>Бухгалтерский и  налоговый учёт</span></a>
					</div>
				</div>
			</div>

			<div class="span1">
				<a href="#" class="slider-arrows slider-right"><i class="icon-right"></i></a>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<img class="pr-img" src="images/pr-img.jpg" alt="">
			</div>

			<div class="span6">
				<div class="pr-info">
					<h2>1С:Бухгалтерия ПРОФ</h2>
					<div class="pr-price">
						<b>13 000 руб.</b><span>/ бесплатная установка программы</span>
					</div>

						<p>Каким бы бизнесом ни занималась ваша организация — оптовой или розничной торговлей, комиссионной торговлей, оказанием услуг, производством или строительством.</p>

						<a href="" class="lend-pr">Арендовать программу 1150 руб./мес. </a>

						<div class="row">
							<div class="span3"><a href="" class="red-btn">Купить</a></div>
							<div class="span3"><a href="" class="blue-btn">Тест - драйв</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
	$(function(){
		var $tabs = $('.pr-tabs');
		var $elem = $tabs.find('a');
		var $arrows = $(".slider-arrows");
		var $leftArr = $('.slider-left');
		var $rightArr = $('.slider-right');

		// if dont need slider
		var length = $elem.length;
		var visible = 5;

		if(length <= visible) {
			$leftArr.addClass('ar-hide');
			$rightArr.addClass('ar-hide');
			return;
		}

		// do slider
		var $active = $('.pr-act');
		var index = $active.index();
		var left = $active.position().left;
		var step = $elem.outerWidth();

		if(index == 0) {
			$leftArr.addClass('ar-hide');	
		}
		else {
			left = -left;
		}

		if((length - index) <= visible) {
			$rightArr.addClass('ar-hide');
			index = length - visible;
			left = -index * step;
			slide(left);
		}
		else slide(left);

		$arrows.click(function(event) {
			event.preventDefault();

			var self = $(this);
			$arrows.removeClass('ar-hide');

			if(self.hasClass('slider-left')) {
				left += step;
				--index;
				if(index == 0) self.addClass('ar-hide');
				if((length - index) <= visible) $rightArr.addClass('ar-hide');
			}
			else {
				left -= step;
				++index;
				if((length - index) <= visible) self.addClass('ar-hide');
			}

			slide(left);
		});

		function slide(pos) {
			$tabs.css('left', pos + 'px');
		}
	});
	</script>
</section>

<section class="pr-desc">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="section-icon"><i class="icon-speach"></i></div>

				<h2>Описание</h2>
			</div>
		</div>

		<div class="row">
			<div class="span9">
				<div class="pr-post">
					<p>Каким бы бизнесом ни занималась ваша организация — оптовой или розничной торговлей, комиссионной торговлей, оказанием услуг, производством или строительством.</p>

					<ul>
						<li>Вы можете вести учет в 1С:Бухгалтерии 8. В одной информационной базе можно вести учет деятельности нескольких организаций и индивидуальных предпринимателей. При этом используются общие справочники контрагентов, сотрудников и номенклатуры, а отчетность формируется раздельно.</li>
						<li>В программе поддерживаются различные системы налогообложения: общий режим для организаций, общий режим для индивидуальных предпринимателей, УСН, ЕНВД, патентная система налогообложения.</li>
					</ul>
				</div>
			</div>
			<div class="span3">
				<div class="get-consult">
					<h3>Получить  консультацию</h3>

					<ul>
						<li><i class="icon-phone-blue"></i><span>+7 (495) 374 55 29 </span></li>
						<li><i class="icon-envelop-blue"></i><span>order@koderline.ru </span></li>
						<li><i class="icon-skype-blue"></i><span>order@koderline.ru </span></li>
						<li><i class="icon-feedback"></i><a href="">Обратный звонок </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="pr-success">
	<div class="container">
		<div class="row">
			<div class="span12">

				<h2><i class="icon-anchor"></i>Успешные внедрения (17)</h2>

				<div class="swiper-container pr-slider1" id="slider2">
					<div class="swiper-wrapper">

						<!-- slide #1 -->
						<div class="swiper-slide">
							<div class="row">
								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pr-slider1.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Инвестгеосервис</h3>
												<div class="pr-about">
													Строительства нефтяных и газовых скважин любой сложности. 
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:УПП</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Реализован блок планирования проектов строительства скважин.  </div>
											</div>
										</div>
									</div>
								</div>

								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pro1.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Яндекс</h3>
												<div class="pr-about">
													Продажа парикмахерского инструмента, оборудования для салонов красоты, СПА, соляриев.
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:ERP УправлениеGредприятием 2.0</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Автоматизация бизнес-процессов деятельности предприятия.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- slide #2 -->
						<div class="swiper-slide">
							<div class="row">
								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pro4.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Газмяс</h3>
												<div class="pr-about">
													Строительства нефтяных и газовых скважин любой сложности. 
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:УПП</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Реализован блок планирования проектов строительства скважин.  </div>
											</div>
										</div>
									</div>
								</div>

								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pro3.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Газпром</h3>
												<div class="pr-about">
													Продажа парикмахерского инструмента, оборудования для салонов красоты, СПА, соляриев.
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:ERP УправлениеGредприятием 2.0</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Автоматизация бизнес-процессов деятельности предприятия.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	

						<!-- slide #3 -->
						<div class="swiper-slide">
							<div class="row">
								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pro2.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Apple</h3>
												<div class="pr-about">
													Строительства нефтяных и газовых скважин любой сложности. 
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:УПП</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Реализован блок планирования проектов строительства скважин.  </div>
											</div>
										</div>
									</div>
								</div>

								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/pr-slider1.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Google</h3>
												<div class="pr-about">
													Продажа парикмахерского инструмента, оборудования для салонов красоты, СПА, соляриев.
												</div>

												<div class="pr-label">Решение:</div>
												<div class="pr-res">1С:ERP УправлениеGредприятием 2.0</div>

												<div class="pr-label">Результат:</div>
												<div class="pr-rez">Автоматизация бизнес-процессов деятельности предприятия.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	

					</div>
				</div>						
			</div>

			<div class="span12 align-center">
				<a href="#" id="left2" class="s-arrows s-left"><i class="icon-left"></i>Предыдущий</a>
				<a href="#" id="right2" class="s-arrows s-right">Следующий<i class="icon-right"></i></a>				
			</div>
		</div>		
	</div>

<!-- Plugin for slider -->
<script src="js/idangerous.swiper.min.js"></script>
<!-- Init slider -->
<script>
$(function(){
	var mySwiper2 = $('#slider2').swiper({
		mode:'horizontal',
		speed: 800,
		loop: true,
		simulateTouch: false
	});

	$("#left2").click(function(event) {
		event.preventDefault();
		mySwiper2.swipePrev();
	});

	$("#right2").click(function(event) {
		event.preventDefault();
		mySwiper2.swipeNext();
	});	
});	
</script>

</section>

<section class="pr-guru">
	<div class="container">
		<div class="row">
			<div class="span12">

				<h2><i class="icon-education"></i>Компетентные специалисты (РП)</h2>

				<div class="swiper-container pr-slider2" id="slider3">
					<div class="swiper-wrapper">

						<!-- slide #1 -->
						<div class="swiper-slide">
							<div class="row">
								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/guru1.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Андрей Винник</h3>
												<div class="pr-prog">
													Программист 1С (РП)   <br>
													Опыт свыше 10 лет.
												</div>
												

												<div class="pr-label">Ключевые компетенции</div>
												<ul>
													<li>Докуменотоборот</li>
													<li>Оперативный учет</li>
													<li>МСФО</li>
												</ul>
												<a href="">Читать больше</a>
											</div>
										</div>
									</div>
								</div>

								<div class="span6">
									<div class="row">
										<div class="span3">
											<img class="pr-slider1__img" src="images/guru2.jpg" alt="">
										</div>
										<div class="span3">
											<div class="pr-slider__desc">
												<h3>Андрей Винник</h3>
												<div class="pr-prog">
													Программист 1С (РП)   <br>
													Опыт свыше 10 лет.
												</div>
												

												<div class="pr-label">Ключевые компетенции</div>
												<ul>
													<li>Докуменотоборот</li>
													<li>Оперативный учет</li>
													<li>МСФО</li>
												</ul>
												<a href="">Читать больше</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>													
					</div>
				</div>						
			</div>

			<div class="span12 align-center">
				<a href="#" id="left3" class="s-arrows s-left"><i class="icon-left"></i>Предыдущий</a>
				<a href="#" id="right3" class="s-arrows s-right">Следующий<i class="icon-right"></i></a>				
			</div>
		</div>		
	</div>

<!-- Init slider -->
<script>
$(function(){
	var mySwiper3 = $('#slider3').swiper({
		mode:'horizontal',
		speed: 800,
		loop: true,
		simulateTouch: false
	});

	$("#left3").click(function(event) {
		event.preventDefault();
		mySwiper3.swipePrev();
	});

	$("#right3").click(function(event) {
		event.preventDefault();
		mySwiper3.swipeNext();
	});	
});	
</script>

</section>


<section class="pr-other">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2><i class="icon-disc"></i>Вас также может интересовать</h2>					
			</div>
		</div>

		<div class="row">
			<div class="span4">
				<div class="article-item">
					<a href="" class="ar-img">
						<img src="images/article-item.jpg" alt="">
						<i class="icon-right-white"></i>
						<span class="pr-inf">13 000 руб</span>
					</a>

					<div class="ar-desc ar-desc2">
						<a href="" class="pr-link">1С:Зарплата и Управление персоналом</a>
						<a href="" class="pr-buy">Купить</a>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="article-item">
					<a href="" class="ar-img">
						<img src="images/article-item.jpg" alt="">
						<i class="icon-right-white"></i>
						<span class="pr-inf">13 000 руб</span>
					</a>

					<div class="ar-desc ar-desc2">
						<a href="" class="pr-link">1С:Зарплата и Управление персоналом</a>
						<a href="" class="pr-buy">Купить</a>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="article-item">
					<a href="" class="ar-img">
						<img src="images/article-item.jpg" alt="">
						<i class="icon-right-white"></i>
						<span class="pr-inf">13 000 руб</span>
					</a>

					<div class="ar-desc ar-desc2">
						<a href="" class="pr-link">1С:Зарплата и Управление персоналом</a>
						<a href="" class="pr-buy">Купить</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>