<?php

namespace App\Http\Controllers;
use App\Pemilik_usaha;
use App\Perusahaan;
use Illuminate\Http\Request;

class Pemilik_UsahaController extends Controller
{
    public function formlogin(){
        
        return view('pemilik.login');
    }


    public function formsignup()
    {
         return view('pemilik.signup');
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
}
