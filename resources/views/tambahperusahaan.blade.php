<!DOCTYPE html>
<html lang="en">

<head>
<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/plugins/images/favicon.png') }}">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('/css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <input type="hidden" id="kotaval">
    <input type="hidden" id="provinsival">
    <input type="hidden" id="kecamatanval">
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/pixeladmin-text.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{ asset('/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Basic Table</span></a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Icons</span></a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Blank Page</span></a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
                    </li>
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile page</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
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

                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
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
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/custom.min.js') }}"></script>

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
</body>

</html>
