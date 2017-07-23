<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Home</title>
      <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/styles.css')}}" rel="stylesheet">

    <!--Icons-->
      <script src="{{ asset('/js/lumino.glyphs.js')}}"></script>
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
          <a class="navbar-brand" href="#"><span>Pemilik</span>Usaha</a>
          <ul class="user-menu">
            <li class="dropdown pull-right">
              <a href="{{url('pemilik/login')}}" class="dropdown-toggle" data-toggle="dropdown">Login </a> &nbsp;
              <a href="{{url('pemilik/singup')}}" class="dropdown-toggle" data-toggle="dropdown">Register </a>
              <a href="#" class="btn btn-primary filter" onclick="return filter();" data-toggle="dropdown">Filter </a>
            </li>
          </ul>
        </div>			
      </div><!-- /.container-fluid -->
    </nav>   

    <div id="map"></div>

  @yield('content')

  <div id="myModalFilter" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="body">Filter</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                    <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">   
                      <div class="form-group">
                          <label class="col-sm-12">Sektor</label>
                          <div class="col-sm-12">
                              <select id="sektor" name="id_sektor" class="form-control form-control-line">
                                 <option id="sektor-option" value="0">Pilih-Sektor</option> 
                              </select>
                          </div>
                      </div>

                      <input id="latitude" type="hidden" name="latitude" value="">
                      <input id="longitude" type="hidden" name="longitude" value="">  
                      
                      <div class="form-group">
                          <label class="col-sm-12">Select Province</label>
                          <div class="col-sm-12">
                              <select id="provinsi" name="provinsi_id" class="form-control form-control-line">
                                  <option id="provinsi-option" value="0">Pilih-Provinsi</option> 
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-12">Select Kota</label>
                          <div class="col-sm-12">
                              <select id="kota" name="kota_id" class="form-control form-control-line">
                                  <option id="kota-option" value="0">Pilih-Kota</option> 
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-12">Select Kecamatan</label>
                          <div class="col-sm-12">
                              <select id="kecamatan" name="kecam_id" class="form-control form-control-line">
                                  <option id="kecamatan-option" value="0">Pilih-Kecamatan</option> 
                              </select>
                          </div>
                      </div>
                    </form> <!--/form-->    
              </div> <!--/Body-->
              <div class="modal-footer">  
                  <button type="button" class="btn sent-btn" data-dismiss="modal">
                      <span id="footer-action-button" >Selesai</span>
                  </button>
                  <button type="button" class="btn actionBtnRight" data-dismiss="modal">
                      <span id="footer-action-button-right" >Cancel</span>
                  </button>
              </div>
          </div>
      </div>
  </div>

 <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB--m_ndjyEvbE_ELOcvc0jSGVzLRN0fzg&libraries=places" type="text/javascript" async defer></script>    
         <script>
          function filter(){
              $(".filter").click(function(){

                //$('#id_prusahaan').val($(this).data('idpemilik'));
                //$('#active').val($(this).data('active'));
                $('#myModalFilter').modal('show');

                //console.log($(this).data('idpemilik'));
              });
            }

            function initMap(){

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
            }

            initMap();

            $.ajax({
                type: 'get',
                url: '{{ url("api/listsektor")}}',
                success: function(data) {
                    var results = data.results;

                    /*
                    $('#provinsi').append('<select id="provinsi" name="provinsi" class="form-control"> <option id="provinsi-option" value="0">Select Province</option> </select>');
                    $('#provinsi').empty('');
                    $('#provinsi').append('<option id="provinsi-option" value="0">Select Provinsi</option> ');
                    results.forEach(function(item){
                        $('#provinsi').append('<option id="provinsi-option" value="'+ item.provinsi_nama +'"></option>');
                    }); 
                    */

                    results.forEach(function(item){
                        $('#sektor').append('<option id="sektor-option" value="'+ item.id_sektor +'">'+ item.sektor +'</option>');
                    });
                 },
            });


            $.ajax({
                type: 'get',
                url: '{{ url("api/listprovinsi")}}',
                success: function(data) {
                    var results = data.results;

                    /*
                    $('#provinsi').append('<select id="provinsi" name="provinsi" class="form-control"> <option id="provinsi-option" value="0">Select Province</option> </select>');
                    $('#provinsi').empty('');
                    $('#provinsi').append('<option id="provinsi-option" value="0">Select Provinsi</option> ');
                    results.forEach(function(item){
                        $('#provinsi').append('<option id="provinsi-option" value="'+ item.provinsi_nama +'"></option>');
                    }); 
                    */

                    results.forEach(function(item){
                        $('#provinsi').append('<option id="provinsi-option" value="'+ item.provinsi_id +'">'+ item.provinsi_nama +'</option>');
                    });
                 },
            });


        $('#provinsi').change(function() {
           var id_province = $(this).val();
            $('#provinsival').val($("#provinsi option:selected").text()); 
            $.ajax({
                type: 'get',
                crossDomain: true,
                url: '{{ url("api/listkota") }}',
                data: {
                    id:id_province
                },
                success: function(data) {
                    var results = data.results; 

                    $('#kota').append('<select id="kota" name="kota" class="form-control"> <option id="kota-option" value="0">Pilih Kota</option> </select>');
                    $('#kota').empty('<select id="kota" name="kota" class="form-control"> <option id="kota-option" value="0">Pilih Kota</option> </select>');
                    $('#kota').append('<option id="kota-option" value="0">Pilih kota</option> ');

                    results.forEach(function(item){
                        $('#kota').append('<option id="kota-options" value="'+ item.kota_id +'">'+ item.kokab_nama +'</option>');
                    });                
                },
            });
        });


        $('#kota').change(function() {
           var id_city = $(this).val();
           $('#kotaval').val($('#kota option:selected').text());

           $.ajax({
                type: 'get',
                url: '{{ url("api/listkecamatan") }}',
                data: {
                    id: id_city, 
                },
                success: function(data) {
                    var results = data.results;

                    $('#kecamatan').append('<select id="kecamatan" name="kecamatan" class="form-control"> <option id="kecamatan-option" value="0">Pilih-Kecamatan</option> </select>');
                    $('#kecamatan').empty('');
                    $('#kecamatan').append('<option id="kecamatan-option" value="0">pilih-kecamatan</option> ');

                    results.forEach(function(item){
                        $('#kecamatan').append('<option id="kecamatan-options" value="'+ item.kecam_id +'">'+ item.nama_kecam +'</option>');
                    });

                   //$('#alert-email').text(results); 
                },
            });
        });


        $('#kecamatan').change(function() {
           var id_kecamatan = $(this).val();
           $('#kecamatanval').val($('#kecamatan option:selected').text());

           $.ajax({
                type: 'get',
                url:  'https://cors-anywhere.herokuapp.com/' +'https://maps.googleapis.com/maps/api/place/textsearch/json',
                data: {
                    query:$('#provinsival').val() + ' ' + $('#kotaval').val() + ' ' + $('#kecamatanval').val() + ' ' + $('#alamat').val(),
                    key:'AIzaSyDHlQ7ea5Zqvr3mOUSQSd7djmnGCtPkw9A'
                },
                success: function(data) {
                     var results = data.results;

                     console.log(results[0].geometry.location.lat);
                     console.log(results[0].geometry.location.lng);
                     $('#latitude').val(results[0].geometry.location.lat);
                     $('#longitude').val(results[0].geometry.location.lng);
                     initMap(results[0].geometry.location.lat, results[0].geometry.location.lng);
                },
            });
        });
            
         </script>
  </body>
</html>