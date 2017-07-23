    @extends('pemilik.master')

    @section('content')
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Photo</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        @foreach($results as $i)
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
					<image src="{{ url('images/'.$i->photo_name.'') }}" width="200px" height="200px">	
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>	<!--/.main-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
    <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <label class="col-sm-12">Tambah Gambar Perusahaan</label>
            </div>
            <div class="panel-body">
                <form class="form-horizontal form-material" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">                        
                        <div class="col-sm-12">
                            <input type="file" name="images[]" multiple/>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id_perusahaan" value="{{ $id_perusahaan }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-success" value="Simpan"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>	<!--/.main-->
    
@endsection