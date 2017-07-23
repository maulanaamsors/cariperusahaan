<?php

namespace App\Http\Controllers;
use App\Kecamatan;
use App\Kota;
use Illuminate\Http\Request;
use Session;

class WilayahController extends Controller
{

   //CRUD KECAMATAN
   public function olahdatakecamatan(){
       $datakecamatan = Kecamatan::all();

       return view('admin/olahdatakecamatan',['results'=> $datakecamatan]);
   }

   public function formtambahdatakecamatan(){
       $datakota = Kota::pluck('kokab_nama','kota_id');

        return view('admin/tambahdatakecamatan',compact('datakota'));
   }

   public function tambahdatakecamatan(Request $request){
        $this->validate($request, [ 
            'kokab_nama' => 'required',
            'nama_kecam' => 'required',
        ]);
      
        $datakecamatan = new Kecamatan;
        $datakecamatan->kota_id = $request->kokab_nama;
        $datakecamatan->nama_kecam = $request->nama_kecam;
        $datakecamatan->save();

         Session::flash('sukses','Data Diperbarui !');
        return redirect('admin/olahdatawilayah/kecamatan');
   }

   public function formeditdatakecamatan($kecam_id){
       $datakecamatan = Kecamatan::find($kecam_id);

       return view('admin.editdatakecamatan',['results'=> $datakecamatan]);
   }

   public function editdatakecamatan(Request $request, $kecam_id)
   {
        $datakecamatan = Kecamatan::find($kecam_id);
        $datakecamatan->kecam_id = $request->kecam_id;
        $datakecamatan->nama_kecam = $request->nama_kecam;
        $datakecamatan->save();

        Session::flash('suksesedit','Data Diperbarui !');
        return redirect('admin/olahdatawilayah/kecamatan');

   }

   public function tampildatakecamatan($kecam_id)
   {
        $datakecamatan = Kecamatan::find($kecam_id);

        return view('admin.tampildatakecamatan',['results'=> $datakecamatan]);

   }

    public function hapusdatakecamatan($kecam_id){
        $databarang = Kecamatan::find($kecam_id);
        $databarang->delete();

        Session::flash('sukseshapus','Data Terhapus !');
        return redirect('admin/olahdatawilayah/kecamatan');

    }

    //CRUD KOTA
    public function olahdatakota(){
       $datakota = Kota::all();

       return view('admin/olahdatakota',['results'=> $datakota]);
    }

    public function formeditdatakota($kota_id){
       $datakota = Kota::find($kota_id);

       return view('admin.editdatakota',['results'=> $datakota]);
    }

    public function editdatakota(Request $request, $kota_id)
   {
        $datakota = Kota::find($kota_id);
        $datakota->kota_id = $request->kota_id;
        $datakota->kokab_nama = $request->kokab_nama;
        $datakota->save();

        Session::flash('suksesedit','Data Diperbarui !');
        return redirect('admin/olahdatawilayah/kota');

   }

   public function tampildatakota($kota_id)
   {
        $datakota = Kota::find($kota_id);

        return view('admin.tampildatakota',['results'=> $datakota]);

   }

    public function hapusdatakota($kota_id){
        $databarang = Kota::find($kota_id);
        $databarang->delete();

        Session::flash('sukseshapus','Data Terhapus !');
        return redirect('admin/olahdatawilayah/kota');

    }
}
