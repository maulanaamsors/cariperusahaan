@extends('pemilik.master')

@section('content')
@if($message == '1')
<div class="alert bg-warning" role="alert">
	<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> Akun yang anda gunakan belum aktif, atau anda salah memasukan no ktp dan password <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
</div>
@endif	
<style>
a.lupa:link { font-weight: bold;text-decoration: none;}a.lupa:visited{  font-weight: bold;  text-decoration: line-through;}a.lupa:hover, a.lupa:focus {  text-decoration: none; color:gray}
</style>
	<div class="row" style="margin-top:10%">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">.: Login Pemilik Usaha</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ url('/login') }}">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="No Ktp" name="ktp" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<label>
									<b><a class="lupa" href="{{url('pemilik/lupapassword')}}" > Lupa Password ? </a> </b>
								</label>
							</div>
							<button type="submit" class="btn btn-primary">
                                    Login
                            </button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
@endsection