@extends('pemilik.master')

@section('content')
    
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Perusahaan</h1>
        </div>
    </div><!--/.row-->
        <div class="row">
        <div class="col-lg-12">
				<div class="panel panel-default">
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
                                        <button class="btn btn-warning btn-md deactivasi" data-idperusahaan="{{ $i->id_prusahaan }}" data-active="{{$i->active}}" onclick="return deactivasi();" id="btn-chat">Delete</button>
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body">Are your sure ?</h4> 
            </div>
            <div class="modal-footer">  
                <button type="button" class="btn sent-btn actionBtn" data-dismiss="modal">
                    <span id="footer-action-button " >Delete</span>
                </button>
                <button type="button" class="btn" data-dismiss="modal">
                    <span id="footer-action-button-right" >Cancel</span>
                </button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="id_prusahaan"/>

    
    
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-table.js')}}"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>
-->
	<script>
		function deactivasi(){
			$(".deactivasi").click(function(){

				$('#id_prusahaan').val($(this).data('idperusahaan'));
				$('#myModal').modal('show');

				console.log($(this).data('idperusahaan'));
			});
		}

        $(".actionBtn").click(function(e){
			e.preventDefault();

            console.log('faisal');   
                
            $.ajax({ 
                type:'delete',
                url:'{{ url("/pemilik/deletephotoperusahaan") }}',							
                      data:{_token:'{{ csrf_token() }}', 
                      id_perusahaan:$('#id_prusahaan').val(),
                success:function(){
                    window.location.href = "/pemilik"; 
                }},
            });
        });

    </script>
    
@endsection