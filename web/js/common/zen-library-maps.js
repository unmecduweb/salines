var domain = "http://"+window.location.hostname;

var map;
var markersMaps = {};

function initializeGmaps(id, zoom, callback){
    log('new test');
    //initialize la google maps
    map = google.maps.event.addDomListener(window, 'load', function () {
        
        map = setGmaps(id, zoom);
        
        callback(map);
    });
    google.maps.event.trigger(window, "load");
    

}

      
function setGmaps(id, zoom) {
    
    var mapOptions = {
        center: { lat:0, lng:0},
        zoom: zoom,
        scrollwheel: false
    };
       
    map = new google.maps.Map(document.getElementById(id), mapOptions);
        
    return map;
}


//place les markers sur la google maps
function displayMarkers(markers){
    clearOverlays();
//    log('displayMarkers');
//    log(markers);
    //May return an error in old navigators
    if(Object.keys(markers).length>0){
        for(i=0; i< Object.keys(markers).length; i++){
            
            log(markers[i]);

            var myLatlng = new google.maps.LatLng(markers[i][2],markers[i][3]);

            var marker = {};
            marker.id = markers[i][0];
            
            if(markers[i][4] == 'light'){
                icon = markerIconLight;
            }else if(markers[i][4]="highlight"){
                icon = markerIcon;
            }
            
            //Info window
            if($.trim(markers[i][5])){
                infoWindow = new google.maps.InfoWindow({
                    content: 'random host',
                    disableAutoPan: true
                });
            }else{
                infoWindow =false;
            }
            
//            if(isHotelLiked(marker.id)){
//                icon = markerIconLike;
//            }else{
//                icon = markerIcon;
//            }
            marker.marker = new google.maps.Marker({
                id:markers[i][0],
                position: myLatlng,
                map: map,
                title: markers[i][1],
                icon : icon,
                html :markers[i][5]
            });
            
            //Adding infowindow
            if(infoWindow){
                google.maps.event.addListener(marker.marker,'click', function() {
                    	infoWindow.setContent(this.html);
                	infoWindow.open(map, this);
                    slider();
    
    
                        $('.hotel-legend-wrap').hover(
                            function(){
                                $(this).find('.hotel-content').stop().slideDown();
                            },function(){
                                $(this).find('.hotel-content').stop().slideUp();
                            }
                        );
            });
                
            }
            google.maps.event.addListener(marker.marker, 'mouseover', function(e,d) {
                
                $('.hotel.hover').removeClass('hover');
                $('#hotel-'+this.id).addClass('hover');
            });
//            google.maps.event.addListener(marker.marker, 'click', function(e,d) {
// 
//                $('.hotel.selected').find('.hotel-content').stop().slideUp();
//                $('.hotel.selected').removeClass('selected');
//                
//                hotelPos = $('#hotel-'+this.id).position();
//                $('#hotel-'+this.id).addClass('selected').find('.hotel-content').stop().slideDown();
//                log(hotelPos.top)
//                scrollH = hotelPos.top+$('#search-result').scrollTop();
//                
//                $('#search-result').animate({scrollTop: scrollH-20+'px'},500);
//            });
            google.maps.event.addListener(marker.marker, 'mouseout', function() {
                $('.hotel.hover').removeClass('hover');
            });
            markersMaps[marker.id] = marker;
        }
    }
    log('markers');
}


//suppime tous les markers de la google maps
function clearOverlays() {
    
    
  for (var markerKey in markersMaps ) {
      if (markerKey != "length")
      {
          markersMaps[markerKey].marker.setMap(null);
      }
    
  }
  markersMaps.length = 0;
}



//Requete au service geocoding de google, pour récupèrer des coodornées à partir d'une adresse
function getCoordsFromAdress(address, callback){
   geocoder = new google.maps.Geocoder();

    return geocoder.geocode(
        {'address': address },
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                callback(results[0].geometry.location);
               
            } else {
                callback(status);
            }
        }
    );
}

//Requete au service geocoding de google, pour récupèrer la zone de de coordonnée gps à partir d'une ville, d'une région, ou d'un pays
function getBoundsFromPlace(place, callback){
   geocoder = new google.maps.Geocoder();

    return geocoder.geocode(
        {'address': place },
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                callback(new google.maps.LatLngBounds(results[0].geometry.viewport.getSouthWest(), results[0].geometry.viewport.getNorthEast()));
               
            } else {
                callback(status);
            }
        }
    );
}

function getZoomedBoundsFromPlace(place, callback){
   geocoder = new google.maps.Geocoder();

    return geocoder.geocode(
        {'address': place },
        function(results, status) {
            
            if (status == google.maps.GeocoderStatus.OK) {
                
                var circleOptions = {
                    center: results[0].geometry.location,
                    fillOpacity: 0,
                    strokeOpacity:0,
                    map: map,
                    radius: parseInt(20)*1000 /* 20 miles */
                    //$('#searchZoneText .value').html()
                };
                
                var myCircle = new google.maps.Circle(circleOptions);
                
                callback(myCircle);
               
            } else {
                callback(status);
            }
        }
    );
}


