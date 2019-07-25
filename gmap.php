<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iTaiwan HotSpot Map</title>
<style type="text/css">

html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
#map_canvas { width:100%; height:100%; }

#map_canvas>div:nth-child(2) {
 display:none !important;
}


</style>
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyApJQgXM4JK4mlaaK2EqazDNgJl7ShqZBw&v=3.6"></script>
<script type="text/javascript">

var map;
var lon = "120.921021";
var lat = "23.82052";
	
function checkNavigator(){

	if (navigator.geolocation) {
	
		navigator.geolocation.getCurrentPosition(successFunction, errorFunction);

	}else{
		
		load(7);
	
	}
}

function successFunction(position) {

	lat = position.coords.latitude;
	lon = position.coords.longitude;
	 
	load(10);

}

function errorFunction(position) {
	
	load(7);
	
}
	
function load(size) {

  var BASE_URL = 'https://wmts.nlsc.gov.tw/wmts/EMAP/default/GoogleMapsCompatible';

  var PixelkarteType = new google.maps.ImageMapType({
        maxZoom: 19,
        minZoom: 7,
        name: "Pixelkarte",
        tileSize: new google.maps.Size(256, 256),
        credit: 'swisstopo',
        getTileUrl: function(coord, zoom) {
			return BASE_URL + "/" + zoom + "/" + coord.y + "/" + coord.x ;
        	}
    	});
	
  map = new google.maps.Map(document.getElementById('map_canvas'), {
  
    center: new google.maps.LatLng(lat, lon),
    zoom: size,
    //mapTypeId: google.maps.MapTypeId.ROADMAP
    mapTypeControlOptions: {
           mapTypeIds: ['Pixelkarte', google.maps.MapTypeId.TERRAIN],
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
        }

  });
  map.mapTypes.set('Pixelkarte', PixelkarteType);
  map.setMapTypeId('Pixelkarte');
  
  layer = new google.maps.FusionTablesLayer("3768386");
  layer.setMap(map);
  
}
</script>

</head>
<body onload="checkNavigator();">
<div id="map_canvas"></div>

</body>
</html>
