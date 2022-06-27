function initMap(){
    var options = {
        zoom : 8,
        center:{lat:40.409264,lng:49.867092},
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    var polemak = {lat:40.409264,lng:49.867092}
    var map  = new google.maps.Map(document.getElementById("map"),options);
    var marker = new google.maps.Marker({
            position : polemak,
            map: map,
            animation: google.maps.Animation.DROP,
            icon : 'img/mapLocation.svg',
      });
}
