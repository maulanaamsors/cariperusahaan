@if(Session::get('nip') != '' or Request::path() == 'admin/login')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>admin</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-table.css')}}" rel="stylesheet">
  <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <script src="{{ asset('js/lumino.glyphs.js') }}"></script>

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
				<a class="navbar-brand" href="#"><span>Concerns</span>Admin</a>
				@if(Request::path() != 'admin/login')
				<ul class="user-menu">
					<li class="dropdown pull-right">	
					<a href="/admin/logout"> Logout <span class="caret"></span></a>
					</li>
				</ul>
				@endif
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
    
	@if(Request::path() != 'admin/login')		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<br>
		<ul class="nav menu">
			<li><a href="/admin/olahpemilik"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg> Aktivasi/Deaktivasi User</a></li>
			<li><a href="/admin/olahdatawilayah/kecamatan"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Olah Kecamatan</a></li>
			<li><a href="/admin/olahdatawilayah/kota"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Olah Kota</a></li>
			<li><a href="/admin/olahdatausaha"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Olah Data Usaha</a></li>
		</ul>

	</div><!--/.sidebar-->
	@endif

    @yield('content')
    <script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    </body>

</html>
@else
	<script> window.location.href = '/'; </script>
@endif