@extends('admin.master')

@section('content')	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
  <div class="row">
	<div class="col-sm-10" style="margin-top:5%; margin-left:8%;">
		      <div class="panel-group" style="background-color:white;color:black">
		      <div class="panel panel-default" style="border-color:red;">
		       <div class="panel-heading"><h4> Kecamatan <br> </h4> <h6> Tampil Data Kecamatan. </h6></div>
		        <div class="panel-body">
		        <form method="post" enctype="multipart/form-data">	        
		              <input type="hidden" class="form-control" name="id" value=""/><br>
		          <div class="form-group">
		              <label class="control-label col-sm-3 text-right"  for="kecam_id"> Id Kecamatan </label>
		              <div class="col-sm-9">
		               : {{$results->kecam_id}}
		              </div> <br>
		          </div>  
		          <div class="form-group">
		              <label class="control-label col-sm-3 text-right" for="nama_kecam"> Kecamatan </label>
		              <div class="col-sm-9">
		                : {{$results->nama_kecam}}
		              </div> <br>
		          </div>
              <div class="form-group">
		              <label class="control-label col-sm-3 text-right" for="nama kecamatan">  Kota </label>
		              <div class="col-sm-9">
		                : {{$results->Kota->kokab_nama}}
		              </div> <br>
		          </div>  
		        </form>
		        </div>
		        </div>
		      </div>
		</div>
  </div>
</div>	

    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>
-->

@endsection

