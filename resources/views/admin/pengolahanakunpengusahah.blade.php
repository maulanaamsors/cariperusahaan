@extends('admin.master')

@section('content')			
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
               <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="nama" data-sortable="true">Nama</th>
						        <th data-field="email"  data-sortable="true">Email</th>
						        <th data-field="alamat" data-sortable="true">Alamat</th>
                                <th data-field="action"  data-sortable="true">Action</th>
						    </tr>
						    </thead>
                            <tbody>
							@foreach($results as $i)
                                <tr>
                                    <td data-sortable="true">{{ $i->nama }}</td>
                                    <td data-sortable="true">{{$i->email}}</td>
                                    <td data-sortable="true">{{$i->alamat}}</td>
                                    <td data-sortable="true">
										@if($i->active == 0)
											<button class="btn btn-warning btn-md deactivasi" data-idpemilik="{{$i->id_pemilik}}" data-active="{{$i->active}}" onclick="return deactivasi();" id="btn-chat">Deactivate</button></td>
										@else
											<button class="btn btn-success btn-md activasi" data-idpemilik="{{$i->id_pemilik}}" data-active="{{$i->active}}" onclick="return activasi();" id="btn-chat">Activate</button></td>
										@endif
                                </tr>
							@endforeach	
                            </tbody>
						</table>
					</div>
				</div>
			</div>     
		</div><!--/.row-->
	</div>	<!--/.main-->

<div id="myModalDeactive" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body">Deactivasi ?</h4> 
            </div>
            <div class="modal-footer">  
                <button type="button" class="btn sent-btn" data-dismiss="modal">
                    <span id="footer-action-button" >Deaktivasi</span>
                </button>
                <button type="button" class="btn actionBtnRight" data-dismiss="modal">
                    <span id="footer-action-button-right" >Cancel</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="myModalActive" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body">Aktivasi ?</h4>
            </div>
            <div class="modal-footer">  
                <button type="button" class="btn sent-btn" data-dismiss="modal">
                    <span id="footer-action-button" >Aktivasi</span>
                </button>
                <button type="button" class="btn actionBtnRight" data-dismiss="modal">
                    <span id="footer-action-button-right" >Cancel</span>
                </button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="id_prusahaan">
<input type="hidden" id="active">

    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>
-->
	<script>
		function deactivasi(){
			$(".deactivasi").click(function(){

				$('#id_prusahaan').val($(this).data('idpemilik'));
				$('#active').val($(this).data('active'));
				$('#myModalDeactive').modal('show');

				console.log($(this).data('idpemilik'));
			});
		}

		function activasi(){
			$(".activasi").click(function(){
                
				$('#id_prusahaan').val($(this).data('idpemilik'));
				$('#active').val($(this).data('active'));
				$('#myModalActive').modal('show');

				console.log($(this).data('idpemilik'));
			});
		}		

		$(".sent-btn").click(function(e){
			e.preventDefault();

				console.log($('#active').val());
			$.ajax({
				type: 'put',
				url: '/admin/olahpemilik',
				data: {
					_token:'{{ csrf_token() }}',
					id_pemilik: $('#id_prusahaan').val(),
					active: $('#active').val()

					
				},
				success: function(data) {
					window.location.reload();
				},
			});
		});	

	</script>
		
		


@endsection

