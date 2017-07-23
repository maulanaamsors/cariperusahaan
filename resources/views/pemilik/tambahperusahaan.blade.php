    @extends('pemilik.master')

    @section('content')
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="container">
                            <div class="col-md-1">
                            </div>    
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-12">Nama Usaha</label>
                                            <div class="col-md-12">
                                                <input type="text" name="nama_usaha" placeholder="ex : PT. Indofood, PT. Sarimurni...." class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Produk Utama</label>
                                            <div class="col-md-12">
                                                <input type="text" name="produk_utama" placeholder="ex : Lenovo...." class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" name="telp" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Skala</label>
                                            <div class="col-sm-12">
                                                <select name="skala" class="form-control form-control-line">
                                                    <option id="kecamatan-option" value="0">Pilih-Skala</option>
                                                    <option id="kecamatan-option" value="Kecil">Kecil</option>
                                                    <option id="kecamatan-option" value="Menengah">Menengah</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Sektor</label>
                                            <div class="col-sm-12">
                                                <select id="sektor" name="id_sektor" class="form-control form-control-line">
                                                    <option id="kecamatan-option" value="0">Pilih-Sektor</option>
                                                    @foreach ($listSektor as $item) 
                                                        <option id="kecamatan-option" value="{{ $item->id_sektor }}">{{ $item->sektor }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <input id="latitude" type="hidden" name="latitude" value="">
                                        <input id="longitude" type="hidden" name="longitude" value="">  
                                        
                                        <div class="form-group">
                                            <label class="col-md-12">Alamat</label>
                                            <div class="col-md-12">
                                                <input id="alamat" type="text" name="alamat" placeholder="ex: Jl. Cempaka VI No.1 ...." class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Select Province</label>
                                            <div class="col-sm-12">
                                                <select id="provinsi" name="provinsi_id" class="form-control form-control-line">
                                                    <option id="provinsi-option" value="">Pilih-Provinsi</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Select Kota</label>
                                            <div class="col-sm-12">
                                                <select id="kota" name="kota_id" class="form-control form-control-line">
                                                    <option id="kota-option" value="">Pilih-Kota</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Select Kecamatan</label>
                                            <div class="col-sm-12">
                                                <select id="kecamatan" name="kecam_id" class="form-control form-control-line">
                                                    <option id="kecamatan-option" value="">Pilih-Kecamatan</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div id="map"></div>

                                        <br>

                                        <div class="form-group">
                                            <label class="col-sm-12">Pilih Gambar Perusahaan</label>
                                            <div class="col-sm-12">
                                                <input type="file" name="images[]" multiple/>
                                            </div>
                                        </div>

                                        <br>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" value="Selesai"></input>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!--panelbody-->
                            </div> <!--panel-->
                        </div> <!-- container-->
                    </div>
                </div><!-- /.row -->		
	        </div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->


    <input type="hidden" id="provinsival" >
    <input type="hidden" id="kotaval">
    <input type="hidden" id="kecamatanval">

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAGLfLd_L8RZiiKH5HKgH0OZDdi_Af8F0"> </script>


    <script>

    function initMap(latParam, lonParam) {

            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: new google.maps.LatLng(latParam, lonParam),
            mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            i=1;

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(latParam, lonParam),
                map: map
            
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent('faisal');
                    infowindow.open(map, marker);
                }
            })(marker, 0));
      }

          $.ajax({
                type: 'get',
                url: '{{ url("api/listprovinsi")}}',
                success: function(data) {
                    var results = data.results;

                    /*
                    $('#provinsi').append('<select id="provinsi" name="provinsi" class="form-control"> <option id="provinsi-option" value="0">Select Province</option> </select>');
                    $('#provinsi').empty('');
                    $('#provinsi').append('<option id="provinsi-option" value="0">Select Provinsi</option> ');
                    results.forEach(function(item){
                        $('#provinsi').append('<option id="provinsi-option" value="'+ item.provinsi_nama +'"></option>');
                    }); 
                    */

                    results.forEach(function(item){
                        $('#provinsi').append('<option id="provinsi-option" value="'+ item.provinsi_id +'">'+ item.provinsi_nama +'</option>');
                    });
                 },
            });


        $('#provinsi').change(function() {
           var id_province = $(this).val();
            $('#provinsival').val($("#provinsi option:selected").text()); 
            $.ajax({
                type: 'get',
                crossDomain: true,
                url: '{{ url("api/listkota") }}',
                data: {
                    id:id_province
                },
                success: function(data) {
                    var results = data.results; 

                    $('#kota').append('<select id="kota" name="kota" class="form-control"> <option id="kota-option" value="0">Pilih Kota</option> </select>');
                    $('#kota').empty('<select id="kota" name="kota" class="form-control"> <option id="kota-option" value="0">Pilih Kota</option> </select>');
                    $('#kota').append('<option id="kota-option" value="0">Pilih kota</option> ');

                    results.forEach(function(item){
                        $('#kota').append('<option id="kota-options" value="'+ item.kota_id +'">'+ item.kokab_nama +'</option>');
                    });                
                },
            });
        });


        $('#kota').change(function() {
           var id_city = $(this).val();
           $('#kotaval').val($('#kota option:selected').text());

           $.ajax({
                type: 'get',
                url: '{{ url("api/listkecamatan") }}',
                data: {
                    id: id_city, 
                },
                success: function(data) {
                    var results = data.results;

                    $('#kecamatan').append('<select id="kecamatan" name="kecamatan" class="form-control"> <option id="kecamatan-option" value="0">Pilih-Kecamatan</option> </select>');
                    $('#kecamatan').empty('');
                    $('#kecamatan').append('<option id="kecamatan-option" value="0">pilih-kecamatan</option> ');

                    results.forEach(function(item){
                        $('#kecamatan').append('<option id="kecamatan-options" value="'+ item.kecam_id +'">'+ item.nama_kecam +'</option>');
                    });

                   //$('#alert-email').text(results); 
                },
            });
        });


        $('#kecamatan').change(function() {
           var id_kecamatan = $(this).val();
           $('#kecamatanval').val($('#kecamatan option:selected').text());

           $.ajax({
                type: 'get',
                url:  'https://cors-anywhere.herokuapp.com/' +'https://maps.googleapis.com/maps/api/place/textsearch/json',
                data: {
                    query:$('#provinsival').val() + ' ' + $('#kotaval').val() + ' ' + $('#kecamatanval').val() + ' ' + $('#alamat').val(),
                    key:'AIzaSyDHlQ7ea5Zqvr3mOUSQSd7djmnGCtPkw9A'
                },
                success: function(data) {
                     var results = data.results;

                     console.log(results[0].geometry.location.lat);
                     console.log(results[0].geometry.location.lng);
                     $('#latitude').val(results[0].geometry.location.lat);
                     $('#longitude').val(results[0].geometry.location.lng);
                     initMap(results[0].geometry.location.lat, results[0].geometry.location.lng);
                },
            });
            

            // initMap(3.443, 9.88);
            // $('#latitude').val(3.443);
            // $('#longitude').val(9.88);
        });
    </script>
@endsection