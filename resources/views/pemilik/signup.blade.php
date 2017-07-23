@extends('master')

@section('content')
	<div class="row" style="margin-top:10%">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">.: Signup Pemilik Usaha</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nama" name="nama" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="No.KTP" name="no_ktp" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" name="email" type="email" placeholder="Email                                            *Ex: example@gmail.com" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Alamat" name="alamat" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="ttl" type="date">
							</div>
							<div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4" style="margin-top:2%"> Upload KTP :</label>
                                    <div class="col-sm-8"> <input class="form-control" placeholder="Upload Gambar KTP" name="ktp_file" type="file"> </div>
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