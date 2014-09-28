

<section class="main-slider">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="section-icon"><i class="icon-speach"></i></div>
				<h2>Проекты и отзывы</h2>
				<h3>Текущий проект</h3>

				<div class="swiper-container slider">
					<div class="swiper-wrapper">

					<!-- slide #1 -->
					<div class="swiper-slide">
						<a href="#" class="project-img">
							<img src="images/slider-img1.jpg" alt="">
							<span class="border-overlay">
								<span class="bg-overlay"></span>
							</span>
							<i class="icon-plus"></i>							
						</a>

						 <div class="project-info">
						 	<h2>Стройтрансгаз</h2>
						 	<p>Внедрение финансового учета на базе  1С
						 	 Предприятие чета на базе  предприят</p>

						 	 <div class="h">Отрасль:</div>
						 	 <p>Строительство и лизинг</p>

						 	 <div class="h">Компетенция:</div>
						 	 <p>Документооборот</p>

						 	 <div class="h">Решение:</div>
						 	 <p>Строительство и лизинг</p>

						 	 <div class="h">Результат:</div>
						 	 <p>Автоматизирована работа бухгалтерии
							отдела кадров, склад и логистыку предприятия,
							 Автоматизирована работа бухгалтерии</p>
						 </div>

						 <div class="slider-comment">
						 	<div class="com-h">Отзыв:</div>
						 	<div class="mark-h">Оценка:</div>
						 	<div class="mark"><img src="images/temp-marks.png" alt=""></div>
						 	<div class="clr"></div>
						 	<div class="comm">
						 		<p>Всё очень поравилось! Ни одного штриха не мог бы я сделать,
						 		 а никогда не был таким большим художником,
						 		  как в эти минуты. Когда от милой моей долины поднимается пар
						 		   и полдневное солнце стоит над непроницаемой чащей темного леса и</p>

						 		   <a href="#" class="read-more"><i class="icon-plus-blue"></i><span>Читать больше</span></a>

						 		   <div class="comm-poster">Главный бухгалтер, компания Стротрансгаз. Игорь Марутяк, 2014</div>
						 	</div>
						 	
						 </div>
					</div>

					<!-- slide #2 -->
					<div class="swiper-slide">
						<a href="#" class="project-img">
							<img src="images/slider-img1.jpg" alt="">
							<span class="border-overlay">
								<span class="bg-overlay"></span>
							</span>
							<i class="icon-plus"></i>							
						</a>

						 <div class="project-info">
						 	<h2>Стройтрансгаз</h2>
						 	<p>Внедрение финансового учета на базе  1С
						 	 Предприятие чета на базе  предприят</p>

						 	 <div class="h">Отрасль:</div>
						 	 <p>Строительство и лизинг</p>

						 	 <div class="h">Компетенция:</div>
						 	 <p>Документооборот</p>

						 	 <div class="h">Решение:</div>
						 	 <p>Строительство и лизинг</p>

						 	 <div class="h">Результат:</div>
						 	 <p>Автоматизирована работа бухгалтерии
							отдела кадров, склад и логистыку предприятия,
							 Автоматизирована работа бухгалтерии</p>
						 </div>

						 <div class="slider-comment">
						 	<div class="com-h">Отзыв:</div>
						 	<div class="mark-h">Оценка:</div>
						 	<div class="mark"><img src="images/temp-marks.png" alt=""></div>
						 	<div class="clr"></div>
						 	<div class="comm">
						 		<p>Всё очень поравилось! Ни одного штриха не мог бы я сделать,
						 		 а никогда не был таким большим художником,
						 		  как в эти минуты. Когда от милой моей долины поднимается пар
						 		   и полдневное солнце стоит над непроницаемой чащей темного леса и</p>

						 		   <a href="#" class="read-more"><i class="icon-plus-blue"></i><span>Читать больше</span></a>

						 		   <div class="comm-poster">Главный бухгалтер, компания Стротрансгаз. Игорь Марутяк, 2014</div>
						 	</div>
						 	
						 </div>
					</div>

					</div>
				</div>						
			</div>

			<div class="span12 align-center">
				<a href="#" class="slider-arrows slider-left"><i class="icon-left"></i>Предыдущий</a>
				<a href="#" class="all-projects blue-btn">Все проекты и отзывы</a>
				<a href="#" class="slider-arrows slider-right">Следующий<i class="icon-right"></i></a>				
			</div>
		</div>		
	</div>

<!-- Plugin for slider -->
<script src="js/idangerous.swiper.min.js"></script>
<!-- Init slider -->
<script>
$(function(){
	var mySwiper = $('.slider').swiper({
		mode:'horizontal',
		speed: 800,
		loop: true
	});

	$(".slider-left").click(function(event) {
		event.preventDefault();
		mySwiper.swipePrev();
	});

	$(".slider-right").click(function(event) {
		event.preventDefault();
		mySwiper.swipeNext();
	});	
});	
</script>

</section>