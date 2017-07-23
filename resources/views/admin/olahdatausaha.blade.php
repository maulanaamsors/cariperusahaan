@extends('admin.master')

@section('content')	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
               <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h2>	Pengolahan Data Usaha <h2></div>
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
							    <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="pemilik" data-sortable="true">Nama Pemilik</th>
						        <th data-field="usaha"  data-sortable="true">Nama Usaha</th>
						        <th data-field="produk" data-sortable="true">Produk</th>
                                <th data-field="alamat"  data-sortable="true">Alamat</th>
								<th width="200px" data-field="action"  data-sortable="true">Action</th>
						    </tr>
						    </thead>
                            <tbody>
							@foreach($results as $i)
                                <tr>
                                    <td data-sortable="true">{{ $i->id_prusahaan }}</td>
                                    <td data-sortable="true">{{$i->id_pemilik}}</td>
                                    <td data-sortable="true">{{$i->nama_usaha}}</td>
									<td data-sortable="true">{{$i->produk_utama}}</td>
									<td data-sortable="true">{{$i->alamat}}</td>
									<td data-sortable="true"> 
										<a href="#" class="btn btn-success btn-sm open_modal" title="ubah" id="{{$i->id_prusahaan}}"><i class="glyphicon glyphicon-pencil"> </i></a> &nbsp;
										<a href="" class="btn btn-info btn-sm" title="tampil" ><i class="glyphicon glyphicon-open"> </i></a> &nbsp;
										<a href="" class="btn btn-danger btn-sm" title="hapus" ><i class="glyphicon glyphicon-trash"> </i></a> &nbsp;
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
        <script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "{{url('/admin/olahdatausaha/edit')}}",
                        type: "GET",
                        data : {id_prusahaan: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>

</div>

    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>
-->

		
		


@endsection

