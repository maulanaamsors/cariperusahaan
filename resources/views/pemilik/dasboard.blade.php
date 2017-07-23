    @extends('pemilik.master')

    @section('content')
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->
        <div class="row">
        <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Perusahaan</div>
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="nama" data-sortable="true">Nama Usaha</th>
						        <th data-field="email"  data-sortable="true">Produk Utama</th>
						        <th data-field="alamat" data-sortable="true">Kecamatan</th>
                                <th data-field="action"  data-sortable="true">Action</th>
                                
						    </tr>
						    </thead>
                            <tbody>
                            
                            @foreach($results as $i)
                            <tr>
						        <td data-sortable="true">{{ $i->nama_usaha }}</td>
						        <td data-sortable="true">{{ $i->produk_utama }}</td>
						        <td data-sortable="true">{{ $i->nama_kecam }}</td>
                                <td data-sortable="true">
                                <form method="get" action="/pemilik/editperusahaan">
                                    <input type="hidden" name="id_perusahaan" value="{{ $i->id_prusahaan }}">
                                    <input type="submit" class="btn btn-success btn-md" value="Edit"></input>
                                </form>
                                <form method="get" action="/pemilik/editphotoperusahaan">
                                    <input type="hidden" name="id_perusahaan" value="{{ $i->id_prusahaan }}">
                                    <input type="submit" class="btn btn-success btn-md" value="Edit Photo"></input>
                                </form>    
                                <form method="get" action="/pemilik/editperusahaan">
                                    <input type="hidden" name="id_perusahaan" value="{{ $i->id_prusahaan }}">
                                    <input type="submit" class="btn btn-success btn-warning" value="Delete"></input>
                                </form>
                                </td>
                            </tr>
                            @endforeach    
						    
                            </tbody>
						</table>
					</div>
				</div>
			</div>     
        </div>
    </div>	<!--/.main-->


    
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    
@endsection