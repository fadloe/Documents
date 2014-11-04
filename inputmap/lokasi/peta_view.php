<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 

  
          <style type="text/css">
          	#map img { 
  max-width: none;
}

#map label { 
  width: auto; display:inline; 
} 
          	
          </style>
</head> 
<body>
	

  <div id="map" style="width: 650px; height: 300px;"></div>

  <script type="text/javascript">
    var locations = [
   <?php
            include('inc/config.php');
            	$sql_lokasi="select idlokasi,nama,lat,lng
            	from lokasi  ";
            	$result=mysql_query($sql_lokasi) or die(mysql_error());
            	while($data=mysql_fetch_object($result)){
            		 ?>
            		    ['<?=$data->nama;?>', <?=$data->lat;?>, <?=$data->lng;?>],
       <?
				}
		?>
		
    
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(-7.785153, 110.366567),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>