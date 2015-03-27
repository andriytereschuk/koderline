<section class="product-info">
	<div class="container">
		<hr class="hr-top">
		<div class="row">
			<div class="span12">
				<h2><i class="icon-solution-white"></i>О решении Koderline: CRM</h2>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<a href="#" class="blue-btn crm-download">
					<i class="icon-download-white"></i>
					<span>Скачать презентацию</span>
				</a>

				<div class="toggle-blok">
					<p>Cистема управления взаимоотношений с клиентами (CRM, customer relationship management) – это не прихоть, а необходимый инструмент для любой компании, стремящейся к развитию, оптимизации производственных процессов, рациональному использованию своих ресурсов и управлению информацией в разных аспектах, что в итоге должно привести к наращиванию присутствия на рынке. Но при этом во главу угла ставится клиент – главный актив в деятельности компании.</p>

					<p>Cистема управления взаимоотношений с клиентами (CRM, customer relationship management) – это не прихоть, а необходимый инструмент для любой компании, стремящейся к развитию, оптимизации производственных процессов, рациональному использованию своих ресурсов и управлению информацией в разных аспектах, что в итоге должно привести к наращиванию присутствия на рынке. Но при этом во главу угла ставится клиент – главный актив в деятельности компании.</p>
				</div>

				<div class="more-center crm-center">
					<a href="#" class="more-about toggle-btn">
						<i class="icon-plus-blue"></i>
						<br>
						<span>Подробнее о решении</span>
					</a>
				</div>
			</div>
		</div>

	</div>

	<script>
	$(function(){
		$('.toggle-btn').on('click', function(e){
			e.preventDefault();
			if($(this).hasClass('toggle-open')) {
				$(this).removeClass('toggle-open');
				$(this).children('span').text('Подробнее о решении');
				$(this).parent('div').prev('.toggle-blok').css('height','75px');
			}
			else {
				$(this).addClass('toggle-open');
				$(this).children('span').text('Скрыть текст');
				$(this).parent('div').prev('.toggle-blok').css('height','auto');
			}
		});
	});
	</script>
</section>