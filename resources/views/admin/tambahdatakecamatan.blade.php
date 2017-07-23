@extends('admin.master')

@section('content')	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
  <div class="row">
	<div class="col-sm-10" style="margin-top:5%; margin-left:8%;">
		      <div class="panel-group" style="background-color:white;color:black">
		      <div class="panel panel-default" style="border-color:red;">
		       <div class="panel-heading"><h4> Kecamatan <br> </h4> <h6> Tambah Data Kecamatan. </h6></div>
		        <div class="panel-body">
		        <form method="post" action="{{url('/admin/olahdatawilayah/kecamatan/tambah')}}" enctype="multipart/form-data">	        
		              <input type="hidden" class="form-control" name="id" value=""/>
		          <div class="form-group">
		              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="nama kota"> Kota </label>
		              <div class="col-sm-9">
		                <select class="form-control kokab_nama" name="kokab_nama" value="{{old('kokab_nama')}}">
                            <option value="" selected="true" disabled="true">Pilih Kota</option>   
                                 @foreach ($datakota as $row2 => $key2)  
                                    <option value="{{$row2}}">{{$key2}}</option>
                                @endforeach
                        </select>
                        @if($errors->has('kokab_nama'))  
                            <font color="red">Pilih nama kota!</font><br>
                        @endif   
		              </div> <br><br>
		          </div>    
		          <div class="form-group">
		              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="nama_kecam"> Kecamatan </label>
		              <div class="col-sm-9">
		                <input type="nama" class="form-control" name="nama_kecam" value="{{old('nama_kecam')}}"/>
                            @if($errors->has('nama_kecam'))  
                                <font color="red">Nama Kecamatan Harus Diisi!</font><br>
                            @endif   
		              </div> <br><br>
		          </div>
		           <div class="form-group" style="margin:15px 15px 0px 0px;">
				        {{csrf_field()}}
                		<input type="hidden" name="_method" value="POST">
					  <div class="col-sm-3"> </div>	
		              <div class="col-sm-9">
					  	<input type="submit" name="update" class="btn btn-danger btn-md" value="Simpan"/>
					  </div>
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

