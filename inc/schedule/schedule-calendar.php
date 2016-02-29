
<section class="filter schedule">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="top-section">
					<div class="up-section">
						<i class="icon-grey-kalendar"></i>
					</div>
					<h1>Расписание мероприятий</h1>
					<h2>Вебинары, мастер-классы, семинары</h2>					
				</div>				
			</div>
		</div>

		<div class="schedule-cal row" id="eventCalendar"></div>

		<!-- http://www.vissit.com/projects/eventCalendar/ -->
		<script src="js/moment.js"></script>				
		<script src="js/jquery.eventCalendar.js"></script>

		<script>
			$(document).ready(function() {
				$("#eventCalendar").eventCalendar({
					eventsjson: 'json/events.json.php',
					locales: {
						locale: "ru",
						monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
					                "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
						dayNames: [ 'воскресенье','понедельник','вторник','среда',
							'четверг','пятница','суббота' ],
						dayNamesShort: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
						txt_noEvents: "Нет событий в этот период",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: "- события:",
						txt_next: "",
						txt_prev: "",
						txt_NextEvents: "Ближайшие события:",
						txt_GoToEventUrl: "Смотреть",
						txt_loading: "Загрузка...",
						"moment": {
					        "months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
					                "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
					        "monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
					                "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
					        "weekdays" : [ "Domingo","Lunes","Martes","Miércoles",
					                "Jueves","Viernes","Sabado" ],
					        "weekdaysShort" : [ "Вс","Пн","Вт","Ср",
					                "Чт","Пт","Сб" ],
					        "weekdaysMin" : [ "Вс","Пн","Вт","Ср",
					                "Чт","Пт","Сб" ]
					    }
					},
					jsonDateFormat: 'human',
					openEventInNewWindow: true,
					moveSpeed: 10,
					moveOpacity: 0
				});
			});
		</script>
	</div>

	<div class="container container-white">
		<div class="row">
			<div class="span4">
				<select class="filter-select">
					<option>Тип мероприятия</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>
			</div>
			<div class="span4">
				<select class="filter-select">
					<option>Направление</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>				
			</div>
			<div class="span4">
				<select class="filter-select">
					<option>Бизнес задача</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>				
			</div>				
		</div>
	</div>

	<div class="container">
		<div class="schedule-item">
			<div class="schedule-item-left">
				<div class="schedule-cal-title"><a href="">Особенности учета НДС в программе «1С: Бухгалтерия предприятия 8 (редакция 3.0)»</a></div>
				<div class="schedule-cal-info">
					<div class="schedule-cal-prop">22 января</div>
					<div class="schedule-cal-prop">15.00-17.00</div>
					<div class="schedule-cal-prop">Москва</div>
					<div class="schedule-cal-prop">Цена: бесплатно</div>
				</div>

				<div class="f-tags">
					<a href="">1С бухгалтерия</a>
					<a href="">1С 8.3</a>
					<a href="">1С 8.3</a>
					<a href="">1С Управление торговлей</a>
				</div>
			</div>

			<div class="schedule-item-right">
				<a href="" class="blue-btn">Записаться</a>
				<a href="">Подробнее</a>
			</div>
		</div>

		<div class="schedule-item">
			<div class="schedule-item-left">
				<div class="schedule-cal-title"><a href="">Особенности учета НДС в программе «1С: Бухгалтерия предприятия 8 (редакция 3.0)»</a></div>
				<div class="schedule-cal-info">
					<div class="schedule-cal-prop">22 января</div>
					<div class="schedule-cal-prop">15.00-17.00</div>
					<div class="schedule-cal-prop">Москва</div>
					<div class="schedule-cal-prop">Цена: бесплатно</div>
				</div>

				<div class="f-tags">
					<a href="">1С бухгалтерия</a>
					<a href="">1С 8.3</a>
					<a href="">1С 8.3</a>
					<a href="">1С Управление торговлей</a>
				</div>
			</div>

			<div class="schedule-item-right">
				<a href="" class="blue-btn">Записаться</a>
				<a href="">Подробнее</a>
			</div>
		</div>

		<div class="schedule-item">
			<div class="schedule-item-left">
				<div class="schedule-cal-title"><a href="">Особенности учета НДС в программе «1С: Бухгалтерия предприятия 8 (редакция 3.0)»</a></div>
				<div class="schedule-cal-info">
					<div class="schedule-cal-prop">22 января</div>
					<div class="schedule-cal-prop">15.00-17.00</div>
					<div class="schedule-cal-prop">Москва</div>
					<div class="schedule-cal-prop">Цена: бесплатно</div>
				</div>

				<div class="f-tags">
					<a href="">1С бухгалтерия</a>
					<a href="">1С 8.3</a>
					<a href="">1С 8.3</a>
					<a href="">1С Управление торговлей</a>
				</div>
			</div>

			<div class="schedule-item-right">
				<a href="" class="blue-btn">Записаться</a>
				<a href="">Подробнее</a>
			</div>
		</div>

		<div class="row mt-20">
			<div class="span12">
				<div class="pagination">
					<a href="#" class="prev-page">&nbsp;</a>
					<a href="#">2</a>
					<a href="#" class="active">3</a>
					<a href="#">4</a>
					<a href="#" class="next-page">&nbsp;</a>
				</div>
			</div>	
		</div>
	</div>	
</section>