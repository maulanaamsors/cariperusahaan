<?php

namespace App\Http\Controllers;
use App\Pemilik_usaha;
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

        return view ('pemilik.profile_pemilik',['results'=>$datapemilik]);
    }
}
