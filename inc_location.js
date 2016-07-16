function locError(error) {
    // the current position could not be located
    alert("The current position could not be found!");
}

function setCurrentPosition(pos) {
    currentPos = new google.maps.LatLng(
                pos.coords.latitude,
                pos.coords.longitude
                );
        
    var image = {
  url: "../images/gps_dot.svg",
  size: new google.maps.Size(25, 25),
  origin: new google.maps.Point(0, 0),
  anchor: new google.maps.Point(13, 12)
 
};


    currentPositionMarker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(
                pos.coords.latitude,
                pos.coords.longitude
                ),
        icon: image,
        title: "Current Position"
    });
   // map.panTo(new google.maps.LatLng(
   //         pos.coords.latitude,
   //         pos.coords.longitude
   //         ));
}

function displayAndWatch(position) {
    // set current position
   setCurrentPosition(position);
    // watch position
    watchCurrentPosition();
}

function watchCurrentPosition() {
    var positionTimer = navigator.geolocation.watchPosition(
            function (position) {
                setMarkerPosition(currentPositionMarker,position);},error,options );
}
function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
}


options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};
function setMarkerPosition(marker, position) {
    marker.setPosition(
            new google.maps.LatLng(
                    position.coords.latitude,
                    position.coords.longitude)
            );
}

function initLocationProcedure() {
   
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(displayAndWatch, locError);
    } else {
        alert("Your browser does not support the Geolocation API");
    }
}

