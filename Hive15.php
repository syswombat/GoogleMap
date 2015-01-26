<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Hives</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=weather"></script>
    <script>

function initialize() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(47.283159,7.938896), 

//  mapTypeId Optionen (HYBRID, ROADMAP, SATELLITE, TERRAIN) //
    mapTypeId: google.maps.MapTypeId.HYBRID
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

// Wetter und Wolken ---------- //
  var weatherLayer = new google.maps.weather.WeatherLayer({
      temperatureUnits: google.maps.weather.TemperatureUnit.CELSIUS
      });
  weatherLayer.setMap(map);
// ---------- // 
  var cloudLayer = new google.maps.weather.CloudLayer();
      cloudLayer.setMap(map);
// ende Wetter und Wolken ---------- //

// Location ----------//
  var ag41022LatLng = new google.maps.LatLng(47.283159,7.938896);
//  var agx2LatLng = new google.maps.LatLng(47.292858,7.922545);
//  var FuchsLatLng = new google.maps.LatLng(47.312627,7.991283);
//  var UeliLatLng = new google.maps.LatLng(47.271185,7.920752);
// Location ende -----// 

// Image ------------ // 
  var image1 ='images/stock.gif';
  var image2 ='images/hive.png';
// Image ende -------// 

// Icon to location ---- //     
var fuchs = new google.maps.Marker 
       ( {position: FuchsLatLng,
       map: map,
       icon: image2   });

  var ueli = new google.maps.Marker 
       ( {position: UeliLatLng,
       map: map,
       icon: image2   });

  var ag41022 = new google.maps.Marker 
       ( {position: ag41022LatLng,
       map: map,
       icon: image1   }); 

  var agx2 = new google.maps.Marker 
       ( {position: agx2LatLng,
       map: map,
       icon: image1   }); 


// ende Icon 2 location ---- //

// ag41022 Circel 1 ---------// 
  var ag41022cir1 = new google.maps.Circle({
      center:ag41022LatLng,
      radius:1500, // meter
      strokeColor:"#F5ECCE",
      strokeOpacity:0.3,
      strokeWeight:2,
      fillColor:"#F5ECCE",
      fillOpacity:0.1
});
ag41022cir1.setMap(map);
// ende ag41022 Circel 1 ---------// 


// ag41022 Circel 2 // 
  var ag41022cir2 = new google.maps.Circle({
      center:ag41022LatLng,
      radius:3000, // meter
      strokeColor:"#F9ECCE",
      strokeOpacity:0.3,
      strokeWeight:2,
      fillColor:"#F9ECCE",
      fillOpacity:0.1
});
ag41022cir2.setMap(map);
// ende ag41022 Circel 2 ---------// 



// agx2 Circel 1 ---------// 
  var agx2cir1 = new google.maps.Circle({
      center:agx2LatLng,
      radius:1500, // meter
      strokeColor:"#F5ECCE",
      strokeOpacity:0.3,
      strokeWeight:2,
      fillColor:"#F5ECCE",
      fillOpacity:0.1
});
agx2cir1.setMap(map);
// ende agx2 Circel 1 ---------//

// Fuchs Circel 1 ---------// 
  var Fuchscir1 = new google.maps.Circle({
      center:FuchsLatLng,
      radius:2000, // meter
      strokeColor:"#F70A2A",
      strokeOpacity:0.3,
      strokeWeight:2,
      fillColor:"#F5ECCE",
      fillOpacity:0.1
});
Fuchscir1.setMap(map);
// ende Fuchs Circel 1 ---------// 

// Ueli Circel 1 ---------// 
  var Uelicir1 = new google.maps.Circle({
      center:UeliLatLng,
      radius:2000, // meter
      strokeColor:"#F70A2A",
      strokeOpacity:0.3,
      strokeWeight:2,
      fillColor:"#F5ECCE",
      fillOpacity:0.1
});
Uelicir1.setMap(map);
// ende Ueli Circel 1 ---------//

}


google.maps.event.addDomListener(window, 'load', initialize);

  </script>
  </head>
    <body>

	<div id="map-canvas"></div>
    </body>
	<div style="float:left; width:40% id="innen">1500 meter Flugradius</div>
	<div style="float:left; width:40% id="aussen">3000 meter Flugradius</div>
</html>
