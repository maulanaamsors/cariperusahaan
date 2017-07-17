<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles.css')}}" rel="stylesheet">

    <!--Icons-->
    <script src="{{ asset('js/lumino.glyphs.js')}}"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }  
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
          <ul class="user-menu">
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  Login <span class="caret"></span></a>
            </li>
          </ul>
        </div>			
      </div><!-- /.container-fluid -->
    </nav>   
    <div id="map"></div>

<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<script src="js/bootstrap-datepicker.js"></script>

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
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