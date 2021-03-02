// let map;
//
// function initMap() {
//     map = new google.maps.Map(document.getElementById("map"), {
//         center: { lat: 10.7704245, lng: 106.6922063 },
//         zoom: 8,
//     });
// }

// function initMap() {
//     var myOptions = {
//         zoom: 15,
//         center: new google.maps.LatLng(10.7704192,106.694395),
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     };
//     map = new google.maps.Map(document.getElementById('map'), myOptions);
//     marker = new google.maps.Marker({
//         map: map,
//         position: new google.maps.LatLng(10.7704192,106.694395)
//     });
//     infowindow = new google.maps.InfoWindow({
//         content: '<img src="<?php echo get_template_directory_uri() ?>/images/logo-vn4u.png" alt="" style="width:90px; "><div>Soraesushi</div>'
//     });
//     google.maps.event.addListener(marker, 'click', function() {
//         infowindow.open(map, marker);
//     });
//     infowindow.open(map, marker);
// }
// google.maps.event.addDomListener(window, 'load', initMap);

//
//
// var google;
//
// function initMap() {
//     // Basic options for a simple Google Map
//     // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
//
//     // GET LOCATION
//     var myLatlng = new google.maps.LatLng(10.7704245,106.6922063);
//     // const uluru = { lat: 10.7704245, lng: 106.6922063 };
//
//     var mapOptions = {
//         // How zoomed in you want the map to start at (always required)
//         zoom: 7,
//
//         // The latitude and longitude to center the map (always required)
//         center: myLatlng,
//
//         // How you would like to style the map.
//         scrollwheel: false,
//         styles: [
//             {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
//             {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
//             {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
//             {
//               featureType: 'administrative.locality',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#d59563'}]
//             },
//             {
//               featureType: 'poi',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#d59563'}]
//             },
//             {
//               featureType: 'poi.park',
//               elementType: 'geometry',
//               stylers: [{color: '#263c3f'}]
//             },
//             {
//               featureType: 'poi.park',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#6b9a76'}]
//             },
//             {
//               featureType: 'road',
//               elementType: 'geometry',
//               stylers: [{color: '#38414e'}]
//             },
//             {
//               featureType: 'road',
//               elementType: 'geometry.stroke',
//               stylers: [{color: '#212a37'}]
//             },
//             {
//               featureType: 'road',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#9ca5b3'}]
//             },
//             {
//               featureType: 'road.highway',
//               elementType: 'geometry',
//               stylers: [{color: '#746855'}]
//             },
//             {
//               featureType: 'road.highway',
//               elementType: 'geometry.stroke',
//               stylers: [{color: '#1f2835'}]
//             },
//             {
//               featureType: 'road.highway',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#f3d19c'}]
//             },
//             {
//               featureType: 'transit',
//               elementType: 'geometry',
//               stylers: [{color: '#2f3948'}]
//             },
//             {
//               featureType: 'transit.station',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#d59563'}]
//             },
//             {
//               featureType: 'water',
//               elementType: 'geometry',
//               stylers: [{color: '#17263c'}]
//             },
//             {
//               featureType: 'water',
//               elementType: 'labels.text.fill',
//               stylers: [{color: '#515c6d'}]
//             },
//             {
//               featureType: 'water',
//               elementType: 'labels.text.stroke',
//               stylers: [{color: '#17263c'}]
//             }
//           ]
//     };
//
//     // Get the HTML DOM element that will contain your map
//     // We are using a div with id="map" seen below in the <body>
//     var mapElement = document.getElementById('map');
//
//     // Create the Google Map using out element and options defined above
//     // var map = new google.maps.Map(mapElement, mapOptions);
//     var map = new google.maps.Map(mapElement, mapOptions);
//
//     var addresses = ['Ho Chi Minh'];
//
//     for (var x = 0; x < addresses.length; x++) {
//         $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
//             var p = data.results[0].geometry.location
//             var latlng = new google.maps.LatLng(p.lat, p.lng);
//             new google.maps.Marker({
//                 position: latlng,
//                 map: map,
//                 icon: 'images/loc.png'
//             });
//
//         });
//     }
//     // const marker = new google.maps.Marker({
//     //     position: uluru,
//     //     map: map,
//     // });
//
// }
// google.maps.event.addDomListener(window, 'load', init);
