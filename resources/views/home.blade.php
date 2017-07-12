<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }  
    </style>
  </head>
  <body>

   
    <div id="map"></div>
   <!-- <script>
    
        function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: -34.397, lng: 150.644},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

  
            
            infoWindow.setPosition(pos);
            infoWindow.setContent('You in here');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
          
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
        
      }
      
    </script>-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB--m_ndjyEvbE_ELOcvc0jSGVzLRN0fzg&libraries=places" type="text/javascript" async defer></script>    
         <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
         <script>
             $.ajax({
                type: 'get',
                url: '/api/listperusahaan',
                success: function(data) {
                    var results = data.results;
                   
                      if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(function(position) {
                           
                          var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 17,
                              center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                          });

                          var infowindow = new google.maps.InfoWindow();
                          var marker;
                          var i = 0;

                          results.forEach(function(item) {
                              marker = new google.maps.Marker({
                              position: new google.maps.LatLng(item.latitude, item.longitude),
                              map: map
                            });

                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                              return function() {
                                infowindow.setContent(item.nama_usaha);
                                infowindow.open(map, marker);
                              }
                            })(marker, i));

                            i++;
                          });

                          }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                          });
                        } else {
                          // Browser doesn't support Geolocation
                           navigator.geolocation.getCurrentPosition(function(position) {
                           
                          var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 17,
                              center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                          });

                          var infowindow = new google.maps.InfoWindow();
                          var marker;
                          var i = 0;

                          results.forEach(function(item) {
                              marker = new google.maps.Marker({
                              position: new google.maps.LatLng(item.latitude, item.longitude),
                              map: map
                            });

                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                              return function() {
                                infowindow.setContent(item.nama_usaha);
                                infowindow.open(map, marker);
                              }
                            })(marker, i));

                            i++;
                          });

                          }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                          });
                        }
                },
            });
         </script>

  </body>
</html>