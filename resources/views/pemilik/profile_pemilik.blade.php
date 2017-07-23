@extends('pemilik.master')

@section('content')	 
<div class="container" style="margin-left:20%;margin-top:5%">  
  <div class="row">
   <div class="col-sm-3">
	    <div class="col-sm-99" style="border:0px;">
	      <div class="panel panel-default">
	        <div class="panel-heading" style="background-color: #00A1F1">{{$results->nama}}</div> 
	        <div class="panel-body"><img src="" class="img-responsive" alt="Image"></div>
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
  </div>
  <div class="col-sm-6">
    <div class="row">
        <div class="panel panel-default">
        <div class="panel panel-heading">
        Hello
        </div>

        <div class="panel panel-body">
        </div>
        </div>
    </div>
  </div>
  	

  </div>
</div><br>
</div>
@endsection