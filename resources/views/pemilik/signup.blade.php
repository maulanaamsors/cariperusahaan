@extends('pemilik.master')

@section('content')
	<div class="row" >
		@if($message == '1')
		<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Admin kami akan segera memverivikasi Akun anda cek kontak masuk atau spam pada email anda<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>
		@endif		
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">.: Signup Pemilik Usaha</div>
				<div class="panel-body">
					<form role="form" action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nama" name="nama" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="No.KTP" name="no_ktp" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" name="email" type="email" placeholder="Email">                                            *Ex: example@gmail.com" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Alamat" name="alamat" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="" name="ttl" type="date">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="" name="password" type="password">
							</div>
							<div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4" style="margin-top:2%"> Upload KTP :</label>
                                    <div class="col-sm-8"> 
										<input class="form-control" placeholder="Upload Gambar KTP" name="ktp_file" type="file"> 
									</div>
                                </div> 
							</div>
                            <div class="form-group">
                               
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
@endsection