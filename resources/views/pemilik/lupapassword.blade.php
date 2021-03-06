@extends('master2')

@section('content')
@if($message == '1')
		<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Silahkan cek kontak masuk atau spam pada email anda <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>
		@endif		
<style>
a.lupa:link { font-weight: bold;text-decoration: none;}a.lupa:visited{  font-weight: bold;  text-decoration: line-through;}a.lupa:hover, a.lupa:focus {  text-decoration: none; color:gray}
</style>
	<div class="row" style="margin-top:10%">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">.: Lupa Password</div>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
							<div class="form-group">
                            <div class="alert bg-primary" role="alert">
					            <span class="glyphicon glyphicon-info-sign"></span> Mohon masukan alamat email kamu. Kamu akan menerima password lewat email
				            </div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<input class="form-control" placeholder="Email" name="email" type="text" autofocus="">
							</div>
							<input type="submit" value="Dapatkan" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
@endsection