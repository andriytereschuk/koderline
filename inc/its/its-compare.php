

<section class="its-compare">
	<div class="container">
		<div class="hr-top"></div>
		<h2>Сравнительная таблица цен на Договора "1С:ИТС"</h2>

		<div class="compare-nav">
			<div class="nav-item active">ИТС ПРОФ</div>
			<div class="nav-item">ИТС Техно</div>
		</div>
	</div>

	<script>
	$(function(){

		$(".nav-item").click(function(event) {
			event.preventDefault();
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");				
			}
			else {
				$(".nav-item").removeClass("active");
				$(this).addClass("active");
			}
		});
	});
	</script>
</section>