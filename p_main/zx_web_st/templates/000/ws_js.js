//
//	Template A - js code
//
//	@pablo
//
// 
// Google Maps Script  
var map; 
var center_1 = new google.maps.LatLng([45.0011737,11.2948665]);
//var center_2 = new google.maps.LatLng(44.4911, 11.3441);
var zoomv = 15;
//var directionsDisplay;
//var directionsService = new google.maps.DirectionsService();

function initialize() {

//  directionsDisplay = new google.maps.DirectionsRenderer();
  
	var myOptions = {
		zoom:zoomv,
		mapTypeControl: true,
		mapTypeControlOptions: {
        	 style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
		     position: google.maps.ControlPosition.TOP_RIGHT,
		     mapTypeIds: [
		        google.maps.MapTypeId.ROADMAP,
		        google.maps.MapTypeId.HYBRID
		      ]
    	},
    	zoomControl: true,
	    zoomControlOptions: {
	        position: google.maps.ControlPosition.RIGHT_CENTER
	    },
    	scaleControl: true,
    	streetViewControl: true,
    	scaleControlOptions: {
        	position: google.maps.ControlPosition.RIGHT_TOP
    	},    
		center: center_1,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
	};
 	var styles = [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
 
	var map = new google.maps.Map(document.getElementById("ws_b2b1"), myOptions);

//    directionsDisplay.setMap(map);
	
	map.setOptions({styles: styles});

// --- markers ---
 /* 
  var marker_1 = new google.maps.Marker({
      position: center_1, 
      map: map, 
	  draggable:true,
      animation: google.maps.Animation.DROP,
    //  title:"Cremeria Funivia"
  });   
    
  var marker_2 = new google.maps.Marker({
      position: center_2, 
      map: map, 
	  draggable:true,
      animation: google.maps.Animation.DROP,
      title:"Cremeria Cavour"
  });
 */ 
// --- info windows ---
/*var contentString_1 = '<div id="map_info_content">'+
    '<div id="map_info_title">Cremeria Funivia</div>' +
	'</div>';
	
var contentString_2 = '<div id="map_info_content">'+
    '<div id="map_info_title">Cremeria Funivia</div>' +
	'</div>';
*/

/*
var infowindow_1 = new google.maps.InfoWindow({
    content: contentString_1
}); 
  
var infowindow_2 = new google.maps.InfoWindow({
    content: contentString_2
});  
*/ 
/*
// --- close on mouseover ---
google.maps.event.addListener(marker_1, 'mouseover', function() {
  infowindow_1.close(map,marker_1);
});  

google.maps.event.addListener(marker_2, 'mouseover', function() {
  infowindow_2.close(map,marker_2);
});  
*/
// -- open info --
//function showinfo_1() { infowindow_1.open(map,marker_1); }
//function showinfo_2() { infowindow_2.open(map,marker_2); }
//window.setTimeout( showinfo_1 ,3000);
//window.setTimeout( showinfo_2 ,5000);
	 
	

// --- call the HomeControl() constructor passing ---
  
/*	var homeControlDiv = document.createElement('DIV');
  	var homeControl = new HomeControl(homeControlDiv, map);
  	homeControlDiv.index = 1;
  	map.controls[google.maps.ControlPosition.TOP_LEFT].push(homeControlDiv);
*/	
	
//  --- icon ---

 	var image = '../zx_web_st/templates/000/imgs/map_pin.png';
 	var marker = new google.maps.Marker({
      	position: center_1, 
      	map: map, 
	  	icon: image,
   	 });   
 /*	
 var image = '_images/logo_ico_2.png';
 	var marker = new google.maps.Marker({
      	position: center_2, 
      	map: map, 
	  	icon: image,
 		title:'Siamo qui!'
   	 });   
*/


//
// dial gauge
//
jQuery(".dial_hours").knob({
    readOnly: false,
    fgColor: "#10baaf",
    bgColor: "#666666",
    thickness: 0.3,
    max: 12, 
    width: 50 ,
    height: 50 ,
    font: "Montserrat",

                });
jQuery(".dial_mins").knob({
    readOnly: false,
    fgColor: "#10baaf",
    bgColor: "#666666",
    thickness: 0.3,
    max: 60, 
    width: 50 ,
    height: 50 ,
    font: "Montserrat",

                });

}
// --- home ---
/*
function HomeControl(controlDiv, map) {

  controlDiv.style.padding = '5px';

  var controlUI = document.createElement('DIV');
  controlUI.style.backgroundColor = 'white';
  controlUI.style.borderStyle = 'solid';
  controlUI.style.borderWidth = '2px';
  controlUI.style.cursor = 'pointer';
  controlUI.style.textAlign = 'center';
  controlUI.title = 'Click per centrare la mappa su di Noi';
  controlDiv.appendChild(controlUI);

  var controlText = document.createElement('DIV');
  controlText.style.fontFamily = 'Arial,sans-serif';
  controlText.style.fontSize = '12px';
  controlText.style.paddingLeft = '4px';
  controlText.style.paddingRight = '4px';
  controlText.innerHTML = ' Centra la mappa ';
  controlUI.appendChild(controlText);

  // Setup the click event listeners: simply set the map to center
  
  google.maps.event.addDomListener(controlUI, 'click', function() {
   	 map.setCenter(center_1),
	 map.setZoom(14)
  });
} 
}  */

// --- route ---
/*
function calcRoute() {

 
  //---------------------
  var start_addr = document.getElementById("start_addr").value;
  var start_zip = document.getElementById("start_zip").value;
  // --- check start addr ---
  if (start_addr == "Indirizzo di Partenza")	{
      alert("L'indirizzo di partenza non e' inserito");
      return;	
	}  
  // --- check end --
  if (document.getElementById("check_1").checked) { var end = center_1}
  if (document.getElementById("check_2").checked) { var end = center_2}
  // --- check type ---
  if (document.getElementById("travel_mode").checked)
  	 { var travel_mode = google.maps.TravelMode.DRIVING} else
 	 { var travel_mode = google.maps.TravelMode.WALKING}

  var request = {
    origin:start_addr + "," + start_zip ,
    destination:end,
    travelMode: travel_mode
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    } else {
      alert("L'indirizzo di partenza non e' rintracciabile");
    }   
  });
}
*/ 

// run map and dial script
initialize();
 