/*==============================================================*/
// EduStudy Map  JS
/*==============================================================*/
(function($) {
    "use strict";
    var marker;

    window.initMap = function() {
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: {lat: 31.99513153008336, lng: 35.872757602776424}
        });

        marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat: 31.99513153008336, lng: 35.872757602776424}
        });
        marker.addListener('click', toggleBounce);
    };

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
        } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
}(jQuery));
