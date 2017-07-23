@extends('admin.master')

@section('content')

  <!-- Modal -->
  <div class="modal fade" id="ModalUbah" role="dialog">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Data Usaha</h4>
        </div>
        <div class="modal-body">
		<form class="form-horizontal" action="/action_page.php">
			<div class="form-group">
			<label class="control-label col-sm-3" for="nama">Nama Pemilik:</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="isi nama pemilik" name="nama_pemilik" value="{{$results->nama_usaha}}">
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-3" for="pwd">Nama Usaha:</label>
			<div class="col-sm-9">          
				<input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			</div>
			</div>
			<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
				<label><input type="checkbox" name="remember"> Remember me</label>
				</div>
			</div>
			</div>
			<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
			</div>
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  @endsection