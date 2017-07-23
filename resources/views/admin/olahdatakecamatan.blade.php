@extends('admin.master')

@section('content')	
    
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
               <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h2>	Pengolahan Data Kecamatan <h2></div>
					<div class="panel-body">
					@include('admin._pesan')
					<a class="btn btn-primary" href='{{url('admin/olahdatawilayah/kecamatan/tambah')}}'> Tambah </a>
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
							    <th data-field="id" data-sortable="true">ID Kecamatan</th>
						        <th data-field="kecamatan" data-sortable="true">Nama Kecamatan</th>
								<th width="200px" data-field="action"  data-sortable="true">Action</th>
						    </tr>
						    </thead>
                            <tbody>
							@foreach($results as $i)
                                <tr>
                                    <td data-sortable="true">{{ $i->kecam_id}}</td>
                                    <td data-sortable="true">{{$i->nama_kecam}}</td>
									<td data-sortable="true"> 
                                    <form action="{{url('/admin/olahdatawilayah/kecamatan/'.$i->kecam_id.'/hapus')}}" method="post">
										<a href="{{url('/admin/olahdatawilayah/kecamatan/'.$i->kecam_id.'/edit')}}" class="btn btn-success btn-sm" title="ubah"><i class="glyphicon glyphicon-pencil"> </i></a> &nbsp;
										<a href="{{url('/admin/olahdatawilayah/kecamatan/'.$i->kecam_id.'/tampil')}}" class="btn btn-info btn-sm" title="tampil" ><i class="glyphicon glyphicon-open"> </i></a> &nbsp;
										<button type="submit" class="btn btn-danger btn-sm" title="hapus" ><i class="glyphicon glyphicon-trash"> </i></a> &nbsp;
                                        {{csrf_field()}}
                  					    <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                    </td>
                                </tr>
							@endforeach	
                            </tbody>
						</table>
					</div>
				</div>
			</div>     
		</div><!--/.row-->
	</div>	<!--/.main-->
    

</div>

    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>
-->

		
		


@endsection

