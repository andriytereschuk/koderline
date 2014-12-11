

<section class="filter">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="top-section">
					<div class="up-section">
						<i class="icon-book"></i>
					</div>
					<h1>Новости</h1>
					<h2>Все новости компании, а также мероприятия</h2>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<a href="#" class="fltr-btn fltr1 picked"><i class="icon-fltr1"></i>Все</a>
				<a href="#" class="fltr-btn fltr2"><i class="icon-fltr2"></i>Мероприятия</a>
				<a href="#" class="fltr-btn fltr3"><i class="icon-fltr3"></i>Фото</a>
				<a href="#" class="fltr-btn fltr4"><i class="icon-fltr4"></i>Видео</a>
				<a href="#" class="fltr-btn fltr5"><i class="icon-fltr5"></i>Новости 1С</a>
				<a href="#" class="fltr-btn fltr6"><i class="icon-fltr6"></i>Новости компании</a>
				<a href="#" class="fltr-btn fltr7"><i class="icon-fltr7"></i>Обратная связь</a>
			</div>
		</div>

		<hr class="blue-bottom-border">

		<script>
		$(function() {
			$(".fltr-btn").click(function() {
				event.preventDefault();
				if ($(this).hasClass("picked"))
				{
					$(this).removeClass("picked");
				}

				else {
					$(".fltr-btn").removeClass("picked");
					$(this).addClass("picked");
				}
			});
		});
		</script>
	</div>	
</section>