

<section class="bg-top program-top">
	<div class="container">

		<div class="row">
			<div class="span12">
				<ul class="ar-cat">
					<li class="ar-act"><span>Типовые решения</span></li>
					<li><span>Отраслевые решения</span></li>
				</ul>
			</div>
		</div>

		<div class="ar-tabs">
			<div class="ar-tab ar-tab-open">
				<a href="">Зарплата и управление персоналом</a>
				<a href="" class="ar-link-act">Бухгалтерский и налоговый учёт</a>
				<a href="">Торговый и складской учёт</a>
				<a href="">Документооборот</a>
				<a href="">Платформа 1С: Предприятие 8</a>
				<a href="">Комплексная автоматизация</a>
				<a href="">Управление производственным</a>
				<a href="">Управленческий учет (МСФО)</a>
				<a href="">Документооборот</a>
				<a href="">Платформа 1С: Предприятие 8</a>
				<a href="">Совместные продукты 1C и Microsoft</a>
			</div>

			<div class="ar-tab">
				<a href="">Управление производственным</a>
				<a href="">Управленческий учет (МСФО)</a>
				<a href="">Документооборот</a>
				<a href="">Платформа 1С: Предприятие 8</a>
				<a href="">Совместные продукты 1C и Microsoft</a>
				<a href="">Зарплата и управление персоналом</a>
				<a href="">Бухгалтерский и налоговый учёт</a>
				<a href="">Торговый и складской учёт</a>
				<a href="">Документооборот</a>
				<a href="">Платформа 1С: Предприятие 8</a>
				<a href="">Комплексная автоматизация</a>
			</div>
		</div>
	</div>

	<script>
	$(".ar-cat li").click(function() {
		var self = $(this);
		if(self.hasClass('ar-act')) return;
		$(".ar-cat li").removeClass('ar-act');
		self.addClass('ar-act');
		var index = self.index();
		

		$('.ar-tab').removeClass('ar-tab-open');
		$('.ar-tabs .ar-tab').eq(index).addClass('ar-tab-open');
	});
	</script>
</section>