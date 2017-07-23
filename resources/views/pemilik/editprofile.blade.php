@extends('pemilik.master')

@section('content')
<div class="container" style="margin-left:20%;margin-top:1%">
 <div class="row" style="margin-top:15px;">
    <div class="col-sm-4 col-md-4" >

      <?php
         $id_penyewa = $results->id_penyewa;
         $username = $results->username;
      ?>
      <form action="{{url(''.$id_penyewa.'/'.$username.'/simpanpengaturanakun')}}" method="post" enctype="multipart/form-data">
      <div class="panel panel-primary">
        <div class="panel-body"><img id="prv" src="/images/pemilik/{{$results->foto_pemilik}}" class="img-responsive" alt="Image"></div>
      </div>
          <span class="btn btn-default btn-file" style="margin-top:-5%; margin-bottom:5%;">
            Pilih Foto <input type="file" name="foto" onchange="readURL(this);">
          </span> 
   </div>

   <div class="col-sm-7">
      <div class="panel-group" style="background-color:white;">
      <div class="panel panel-default" style="border-color:blue;">
       <div class="panel-heading"><h4> Akun <br> </h4> <h6> Ubah pengaturan dasar akun Anda. </h6></div>
        <div class="panel-body">

          <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="nama"> Nama </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_penyewa" value="{{$results->nama}}"/>
              </div> <center> <p id="user"> </p> </center><br><br>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;"> No.KTP </label>
              <div class="col-sm-9">
              <input type="text" class="form-control" name="email" value="{{$results->no_ktp}}"/>
              </div>
          </div><br><br><br>
          <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;"> Password </label>
              <div class="col-sm-9">
              <input type="password" class="form-control" name="password" value="{{$results->password}}"/>
              </div><br><br>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;"> Email </label>
              <div class="col-sm-9">
              <input type="email" class="form-control" name="email" value="{{$results->email}}"/>
              </div><br><br>
          </div>
      <div class="form-group has-feedback">
        <label class="control-label col-sm-3 text-right" > Tanggal lahir (MM/DD/YYYY) </label>
        <div class="col-sm-9">
        <input type="date" name="tgl_lahir" class="form-control" value="{{$results->ttl}}" data-date-format="YYYY MM DD">
        </div><br><br>
      </div>
       <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="alamat"> Alamat </label>
              <div class="col-sm-9">
              <textarea class="form-control" name="alamat" value="{{$results->alamat}}"/>{{$results->alamat}} </textarea>
             <br>
       </div>
        <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="alamat"> Foto KTP </label>
              <div class="col-sm-9">
              <a href="/images/{{$results->ktp_file}}"> <img src="/images/{{$results->ktp_file}}" width="100px" height="100px"/> </a>
              <input type="file" class="form-control" name="file_ktp">
              <br><br>
       </div>
           <div class="form-group">
              <label class="control-label col-sm-3 text-right" style="margin-top:5px;" for="alamat"> &nbsp; </label>
              <input type="submit" name="update" class="btn btn-primary btn-md" style="margin-left:2%" value="Simpan"/>

              {{csrf_field()}}
              <input type="hidden" name="_method" value="PUT">
           </div>
        </form>
        </div>
        </div>
      </div>
    </div>

        
 </div>
</div>

</div>
</div>
</div>

@endsection