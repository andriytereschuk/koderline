

<section class="its-compare">
	<div class="container">
		<div class="hr-top"></div>
		<h2>Сравнительная таблица цен на Договора "1С:ИТС"</h2>

		<div class="compare-nav">
			<div class="nav-item active">ИТС ПРОФ</div>
			<div class="nav-item">ИТС Техно</div>
		</div>

		<!-- ИТС ПРОФ -->
		<table class="compare-table active">
			<tr>
				<th>Период</th>
				<th>Для постоянных клиентов</th>
				<th>Новый договор возобновление договора</th>
			</tr>

			<tr>
				<td>3 мес.</td>
				<td>9 636 руб. <a href="#">Заказать</a></td>
				<td>8 031 руб. <a href="#">Заказать</a></td>
			</tr>

			<tr>
				<td>6 мес.</td>
				<td>18 600 руб. <a href="#">Заказать</a></td>
				<td>15 498 руб. <a href="#">Заказать</a></td>
			</tr>

			<tr>
				<td>12 мес.</td>
				<td>35 592 руб. <a href="#">Заказать</a></td>
				<td>29 664 руб. <a href="#">Заказать</a></td>
			</tr>
		</table>

		<!-- ИТС Техно -->
		<table class="compare-table">
			<tr>
				<th>Период</th>
				<th>Для постоянных клиентов</th>
				<th>Новый договор возобновление договора</th>
			</tr>

			<tr>
				<td>3 мес.</td>
				<td>1 111 руб. <a href="#">Заказать</a></td>
				<td>1 111 руб. <a href="#">Заказать</a></td>
			</tr>

			<tr>
				<td>6 мес.</td>
				<td>2 222 руб. <a href="#">Заказать</a></td>
				<td>2 222 руб. <a href="#">Заказать</a></td>
			</tr>

			<tr>
				<td>12 мес.</td>
				<td>33 333 руб. <a href="#">Заказать</a></td>
				<td>33 333 руб. <a href="#">Заказать</a></td>
			</tr>
		</table>
	</div>

	<script>
	$(function(){

		$(".nav-item").on('click', function() {
			if (!$(this).hasClass("active")) {
				$(".nav-item").removeClass("active");
				$(this).addClass("active");
				var activeIndex = $(this).index();
				$('.compare-table').removeClass('active');	
				$('.compare-table').eq(activeIndex).addClass('active');	
			}
			else return;
		});
	});
	</script>
</section>