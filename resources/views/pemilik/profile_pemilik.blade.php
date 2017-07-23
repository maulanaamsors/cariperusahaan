@extends('pemilik.master')

@section('content')	 
<div class="container" style="margin-left:20%;margin-top:1%">  
  <div class="row">
   <div class="col-sm-3">
	    <div class="col-sm-99" style="border:0px;">
	      <div class="panel panel-default">
	        <div class="panel-heading" style="background-color: #00A1F1">{{$results->nama}}</div> 
	        <div class="panel-body"><img src="/images/pemilik/{{$results->foto_pemilik}}"" class="img-responsive" alt="Image"></div>
	      </div>
	    </div>

	    <div class="col-sm-99" style="border:0px;">
	      <div class="panel panel-default">
	       <div class="panel-heading" style="background-color: #00A1F1">Profil User</div>
	       <div class="panel-body">
	         <table class="col-sm-12">
	          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> NO KTP  </font></th>
	            <tr class="col-sm-12">
	              <td style="float:right;">{{$results->no_ktp}}</td>
	            </tr>
	          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> Email  </font> </th>
	            <tr class="col-sm-12">
	              <td style="float:right;">{{$results->email}}</td>
	            </tr>
	          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> Alamat  </font> </th>
	            <tr class="col-sm-12">
	              <td style="float:right;">{{$results->alamat}}</td>
	            </tr>
	             <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"> <font size="2">Ttl</font></th>
	            <tr class="col-sm-12">
	              <td style="float:right;">{{$results->ttl}}</td>
	            </tr>
	         </table>
	       </div>
	      </div>
	    </div>
        <div class="col-sm-99" style="border:0px;">
	      <div class="panel panel-default">
	        <div class="panel-heading" style="background-color: #00A1F1">Foto KTP</div> 
	        <div class="panel-body"><img src="/images/{{$results->ktp_file}}" class="img-responsive" alt="Image"></div>
	      </div>
	    </div>
  </div>
  <div class="col-sm-7">
    <div class="row">
        <div class="panel panel-default">
        <div class="panel panel-heading">
        Data Perusahaan
        </div>
        <table class="table table-bordered table-hover">
           <thread> 
            <tr>
                <th> NO  </th>
                <th> Nama Usaha  </th>
                <th> Nama Produk </th>
                <th> Alamat</th>
            </tr>
            </thread>
            <tbody>
            <?php $no=1;?>
            @foreach($results2 as $result)
                <tr> 
                    <td><?php echo $no++?> </td>
                    <td>{{$result->nama_usaha}} </td>
                    <td>{{$result->produk_utama}}</td>
                    <td>{{$result->alamat}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="panel panel-body">
        </div>
        </div>
    </div>
  </div>
  	

  </div>
</div><br>
</div>
@endsection