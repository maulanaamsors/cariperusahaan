@if(Session::get('id_pemilik') != '' or Request::path() == 'login'  or Request::path() == 'signup')
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
				<a class="navbar-brand" href="#"><span>Concerns</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						@if(Request::path() == 'login')	
						<a href="{{url('/singup')}}" >Register </a> &nbsp;
						@else
						    @if(Request::path() != 'signup')
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Session::get('nama')}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
								<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
								<li><a href="/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
							</ul>
							@endif
						@endif
					</li>
				</ul>
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
 @if(Request::path() != 'login' && Request::path() != 'signup')		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<br>
		<ul class="nav menu">
			<li class="{{Request::path()=='pemilik' ? 'active':''}}"><a href="/pemilik"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Daftar Perusahaan</a></li>
			<li class="{{Request::path()=='pemilik/tambahperusahaan' ? 'active':''}}"><a href="/pemilik/tambahperusahaan"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Perusahaan</a></li>
			
		</ul>

	</div><!--/.sidebar-->
@endif	


@yield('content')

	
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
	
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
@else
	<script> window.location.href = '/'; </script>
@endif

