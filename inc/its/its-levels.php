

<section class="its-levels">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Тарифы</h2>
				<h3>Сравнительная таблица возможностей разных уровней</h3>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<table class="tarifu-table">
					<tr>
						<th>Описание</th>
						<th>Договор уровня ТЕХНО</th>
						<th>Договор уровня ПРОФ</th>
					</tr>

					<tr>
						<td>Обновление программ и конфигураций "1С:Предприятие"</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Методические материалы по настройке и эффективному использованию
программ 1С</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Рекомендации по разработке и администрированию программ 1С</td>
						<td></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Справочники по бухгалтерскому и налоговому учету в программах 1</td>
						<td></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<!-- hidden rows -->

					<tr>
						<td>Обновление программ и конфигураций "1С:Предприятие"</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Методические материалы по настройке и эффективному использованию
программ 1С</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Рекомендации по разработке и администрированию программ 1С</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>

					<tr>
						<td>Справочники по бухгалтерскому и налоговому учету в программах 1</td>
						<td><i class="icon-check-green"></i></td>
						<td><i class="icon-check-green"></i></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="span12 spec-all-pro">
				<a href="" id="allRows"><span class="spec-all-show">Читать больше</span><span class="spec-all-hide">Свернуть</span> <i class="icon-down-blue"></i></a>
			</div>
		</div>
	</div>

	<script>
	$(function(){
		var $rows = $(".tarifu-table tr");
		if($rows.length < 6) $("#allRows").hide();

		$("#allRows").click(function(event) {
			event.preventDefault();
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				$rows.removeClass("row-show");
				
			}
			else {
				$(this).addClass("active");
				$rows.removeClass("row-show");
				$rows.addClass("row-show");
			}
		});
	});
	</script>
</section>