<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sektor;
use App\Perusahaan;

class PerushaanController extends Controller
{
    public function index(){
        $listSektor = Sektor::all();

        return view('pemilik.tambahperusahaan')->with('listSektor', $listSektor);
    }

    public function create(Request $req){
        $this->validate($req, [
            'nama_usaha' => 'required|max:255',
            'produk_utama' => 'required',
            'alamat' => 'required',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecam_id' => 'required',
            'telp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'skala' => 'required',
            'id_sektor' => 'required',
        ]);

        $perusahaan = new Perusahaan;
        $perusahaan->nama_usaha = $req->input('nama_usaha');
        $perusahaan->id_pemilik = 2;
        $perusahaan->produk_utama = $req->input('produk_utama');
        $perusahaan->alamat = $req->input('alamat');
        $perusahaan->provinsi_id = $req->input('provinsi_id');
        $perusahaan->kota_id = $req->input('kota_id');
        $perusahaan->kecam_id = $req->input('kecam_id');
        $perusahaan->telp = $req->input('telp');
        $perusahaan->latitude = $req->input('latitude');
        $perusahaan->longitude = $req->input('longitude');
        $perusahaan->skala = $req->input('skala');
        $perusahaan->id_sektor = $req->input('id_sektor');
        $perusahaan->save();

        $listSektor = Sektor::all();

        //return redirect('tambahperusahaan')
        return view('tambahperusahaan')
        ->with('message', 'Berhasil membuat perusahaan baru')
        ->with('listSektor', $listSektor);
    }

    public function home(){
        
        return view('home');
    }

    public function formlogin(){
        
        return view('pemilik.login');
    }
}
