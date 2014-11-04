function updateMarkerPosition(latLng) {
		document.getElementById('lat').value = [latLng.lat()];
		document.getElementById('lng').value = [latLng.lng()];
	}

 
	
    var myOptions = {
      zoom: 12,
        scaleControl: true,
      center:  new google.maps.LatLng(-7.791446,110.366909),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

	
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

	var marker1 = new google.maps.Marker({
	position : new google.maps.LatLng(-7.791446,110.366909),
	title : 'lokasi',
	map : map,
	draggable : true
	});
	
	//updateMarkerPosition(latLng);

	google.maps.event.addListener(marker1, 'drag', function() {
		updateMarkerPosition(marker1.getPosition());
	});
	

	

	