@extends('admin.master')

@section('content')
@if($message == '1')
<div class="alert bg-warning" role="alert">
	<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>anda salah memasukan no ktp atau password silakan coba lagi <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
</div>
@endif	
    <div class="row" style="margin-top:5%">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">.: Login Admin</div>
				<div class="panel-body">
					<form role="form" method="post" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="NIP" name="nip" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="submit" class="btn btn-primary" value="login"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
    <script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/chart.min.js')}}"></script>
	<script src="{{ asset('js/chart-data.js')}}"></script>
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
@endsection