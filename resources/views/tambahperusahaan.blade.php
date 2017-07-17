<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
<title>Lumino - Dashboard</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ asset('js/lumino.glyphs.js')}}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Dropdown </span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="container">
                            <div class="col-md-1">
                            </div>    
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <form class="form-horizontal form-material" method="POST" action="">
                                        <div class="form-group">
                                            <label class="col-md-12">Nama Usaha</label>
                                            <div class="col-md-12">
                                                <input type="text" name="nama_usaha" placeholder="ex : PT. Indofood, PT. Sarimurni...." class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Produk Utama</label>
                                            <div class="col-md-12">
                                                <input type="text" name="produk_utama" placeholder="ex : Lenovo...." class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" name="telp" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Skala</label>
                                            <div class="col-sm-12">
                                                <select name="skala" class="form-control form-control-line">
                                                    <option id="kecamatan-option" value="0">Pilih-Skala</option>
                                                    <option id="kecamatan-option" value="Kecil">Kecil</option>
                                                    <option id="kecamatan-option" value="Menengah">Menengah</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Sektor</label>
                                            <div class="col-sm-12">
                                                <select id="sektor" name="id_sektor" class="form-control form-control-line">
                                                    <option id="kecamatan-option" value="0">Pilih-Sektor</option>
                                                    @foreach ($listSektor as $item) 
                                                        <option id="kecamatan-option" value="{{ $item->id_sektor }}">{{ $item->sektor }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <input id="latitude" type="hidden" name="latitude" value="">
                                        <input id="longitude" type="hidden" name="longitude" value="">
                                        
                                        <div class="form-group">
                                            <label class="col-md-12">Alamat</label>
                                            <div class="col-md-12">
                                                <input id="alamat" type="text" name="alamat" placeholder="ex: Jl. Cempaka VI No.1 ...." class="form-control form-control-line"> </div>
                                        </div>

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

                                        <div id="map"></div>

                                        <br>
                                        
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" value="Selesai"></input>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!--panelbody-->
                            </div> <!--panel-->
                        </div> <!-- container-->
                    </div>
                </div><!-- /.row -->		
	        </div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>



    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>


    <script>

    function initMap(latParam, lonParam) {

            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: new google.maps.LatLng(latParam, lonParam),
            mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            i=1;

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(latParam, lonParam),
                map: map
            
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent('faisal');
                    infowindow.open(map, marker);
                }
            })(marker, 0));
      }

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
                url: 'https://cors-anywhere.herokuapp.com/' +  'https://maps.googleapis.com/maps/api/place/textsearch/json',
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


	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

