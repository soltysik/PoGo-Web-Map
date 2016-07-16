//add left buttons to map
function CenterControl(controlDiv, map) {


console.log("add here");
    addYourLocationButton(map);
  //    addYourAddLocationButton(map);
  //  addYourFavoritesButton(map);
 //   addYourPortalsButton(map);
   // addYourSearchButton(map);
}

//get dropdown item
function getMenu(value) {

    switch (value) {
        case "1":
            getStats();
            break;
       
        default:
            closewindow();
            break;
    }


}

         
function getLayers(value) {
 clearAllMarkers(markers);
   
    locType = value ;
getData(value);

}