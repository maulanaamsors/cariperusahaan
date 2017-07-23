<?php

namespace App\Http\Controllers;
use App\Pemilik_usaha;
use App\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class Pemilik_UsahaController extends Controller
{
    public function formlogin(){
        
        return view('pemilik.login');
    }

    public function formsignup()
    {
         return view('pemilik.signup')->with('message', '0');
    }

    public function formlupapassword(){
        return view('pemilik.lupapassword');
    }

    public function profile($id_pemilik){
        $datapemilik = Pemilik_usaha::find($id_pemilik);
        $dataperusahaan = Perusahaan::where('id_pemilik',$id_pemilik)->get();

        return view ('pemilik.profile_pemilik',['results'=>$datapemilik,'results2'=>$dataperusahaan]);
    }

    public function  formeditprofile($id_pemilik){
        $datapemilik = Pemilik_usaha::find($id_pemilik);

        return view ('pemilik.editprofile',['results'=>$datapemilik]);
    }

    public function postSignup(Request $req, UploadRequest $uReq){
         $this->validate($req, [
            'nama' => 'required|max:255',
            'no_ktp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'ttl' => 'required',
            'ktp_file' => 'required'
            
        ]);

        $pemilikusaha = new Pemilik_usaha;
        $pemilikusaha->nama = $req->input('nama');
        $pemilikusaha->no_ktp = $req->input('no_ktp');
        $pemilikusaha->email = $req->input('email');
        $pemilikusaha->password = $req->input('password');
        $pemilikusaha->active = '0';
        $pemilikusaha->ttl = $req->input('ttl');

        $picture = '';
        $file = $uReq->file('ktp_file');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $picture = date('His').$filename;
        $destinationPath = base_path() . '\public\ktp';  
        $file->move($destinationPath, $picture);

        $pemilikusaha-> ktp_file = date('His').$filename;
        $pemilikusaha->save();

        return view('pemilik.signup')->with('message', '1');
    }
}
