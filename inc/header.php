

<section class="top">
	<div class="container">
		<div class="row">
			<div class="span2">
				<a href="#" title="KoderLine" class="logo icon-logo"></a>
			</div>
			<div class="span10">
				<div class="pull-right">
					<a href="#" id="order-call" title="Оставьте заявку и мы перезвоним Вам в течении 30 минут" class="order-call">заказать звонок</a>					
				</div>

				<div class="pull-right">
				<?php
				$homepage = "/main.php";
				$currentpage = $_SERVER['REQUEST_URI'];
				if($homepage==$currentpage) {
				echo '<a href="#" class="top1" title="Подробно о проектах">
						<i class="icon-top1"></i>
						<div class="project-count" title="anim">
							<ul>
								<li>0</li>
								<li>11</li>
								<li>23</li>
								<li>25</li>
								<li>26</li>
								<li>29</li>
								<li>37</li>
								<li>38</li>
							</ul>
						</div>
						<div class="top-desc">Реализованных проектов</div>
					</a>
					<a href="#" class="top2" title="Наши клиенты">
						<i class="icon-top2"></i>
						<div class="project-count" title="anim">
							<ul>
								<li>0</li>
								<li>14</li>
								<li>23</li>
								<li>43</li>
								<li>52</li>
								<li>65</li>
								<li>93</li>
								<li>102</li>
							</ul>
						</div>
						<div class="top-desc">Активных клиентов</div>						
					</a>';
				}
				else {
				echo '<a href="#" class="top1" title="Подробно о проектах">
						<i class="icon-top1"></i>
						<div class="project-count">
							<ul>
								<li>38</li>
							</ul>
						</div>
						<div class="top-desc">Реализованных проектов</div>
					</a>
					<a href="#" class="top2" title="Наши клиенты">
						<i class="icon-top2"></i>
						<div class="project-count">
							<ul>
								<li>102</li>
							</ul>
						</div>
						<div class="top-desc">Активных клиентов</div>						
					</a>';
				}
				?>				

					<div class="top3">
						<i class="icon-top3"></i>
						<span>+7 (495) 374 55 29</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="menu">
	<div class="container">
		<div class="row">
			<div class="span7">
				<nav>
					<ul>                              
						<li class="has-lvl2"><a href="#">Компания</a>
							<ul>
								<li><a href="#">О нас</a></li>
								<li><a href="#">Проекты </a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Продукты</a>
							<ul>
								<li><a href="#">Универсальные решения 1С</a></li>
								<li><a href="#"> Отраслевые решения 1С</a></li>
								<li><a href="#">Лицензии на 1С: Предприятие 8</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Услуги</a>
							<ul>
								<li><a href="#"> Проекты и консалтинг</a></li>
								<li><a href="#">Внедрение и доработка</a></li>
								<li><a href="#">Сопровождение</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Компетенции</a>
							<ul>
								<li><a href="#">МСФО</a></li>
								<li><a href="#">Строительство</a></li>
								<li><a href="#">Торговля</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Контакты</a>
							<ul>
								<li><a href="#"> Контактная информация</a></li>
							</ul>
						</li>
					</ul>
				</nav>				
			</div>

			<div class="span4">
				<div class="geo">
					<div class="your-city">
						<b>Ваш город:</b>
						<span class="city">Москва</span>
					</div>

					<div class="your-district">
						<div class="geo-h">Ваш регион определился как:</div>
						<i class="icon-close-grey close-district"></i>
						<div class="clr"></div>

						<div class="city-name">Москва и область</div>
						<div class="red-btn crm-item close-district">Верно</div>
						<a href="" class="read-more open-choose-region"><span>Нет, выбрать другой</span><i class="icon-right-blue"></i></a>
						<div class="clr"></div>
					</div>

					<div class="choose-region">
						<div class="geo-h">Ваш регион определился как:</div>
						<i class="icon-close-grey close-region"></i>
						<div class="clr"></div>

						<div class="country-group">
							<div class="country-h">Россия:</div>
							<ul>
								<li><a href="">Москва и область</a></li>
								<li><a href="">Санкт Петербург и область</a></li>
								<li><a href="">Другие регионы</a></li>
							</ul>
						</div>

						<div class="country-group">
							<div class="country-h">Украина:</div>
							<ul>
								<li><a href="">Киев</a></li>
								<li><a href="">Львов</a></li>
								<li><a href="">Другие регионы</a></li>
							</ul>
						</div>		
					</div>
				</div>

				<script>
				$(function(){
					$('.city').click(function(){
						$('.your-district').fadeIn(100);
					});

					$('.close-district').click(function(){
						$('.your-district').fadeOut(100);
					});

					$('.open-choose-region').click(function(event){
						event.preventDefault();
						$('.your-district').hide();
						$('.choose-region').show();
					});

					$('.close-region').click(function(){
						$('.choose-region').fadeOut(100);
					});

					$('.choose-region a').click(function(event){
						event.preventDefault();
						var chosen = $(this).html();
						$('.city, .city-name').html(chosen);
						$('.choose-region').fadeOut(100);
					});
				});
				</script>
			</div>

			<div class="span1">
				<a href="#" title="1С" class="logo2 icon-logo2"></a>
			</div>
		</div>
	</div>	
</section>