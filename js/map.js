function init() {
	var latLng = new google.maps.LatLng(55.7263,37.39);

	var settings = {
		center: latLng,
		zoom: 15,
		scrollwheel: false,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{
			"stylers": [
				{ "saturation": -100 },
				{ "lightness": -8 }
			]
		}]
	};

	var map = new google.maps.Map(document.getElementById("map"), settings);
	
	var marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng(55.7263,37.3995),
		draggable: false,
		title: 'Главный офис',
		icon:'images/icons/icon-marker.png'
	});
}

google.maps.event.addDomListener(window, 'load', init);