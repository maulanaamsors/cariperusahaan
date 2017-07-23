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
          <a class="navbar-brand" href="#"><span>CONCERNS</span></a>
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

  @yield('content')



 <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>

  </body>
</html>