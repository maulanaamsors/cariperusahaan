<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Pemilik_usaha;
use Session;


class LoginPemilikController extends Controller
{
    public function login(Request $req){
        $count = Pemilik_usaha::where('no_ktp', $req->input('ktp'))
        ->where('password', $req->input('password'))
        ->count();

        if ($count != 0){
            $id = Pemilik_usaha::where('no_ktp', $req->input('ktp'))->first();
            Session::put('id_pemilik', $id->id_pemilik);
            Session::put('nama', $id->nama);
            return redirect('/pemilik');
        }else{

           return view('master');  
        }
       // $req->session()->set('ktp', $req->input('ktp'));
    }


    public function logout(){
        Session::put('id_pemilik', '');

        return redirect('/');   
    }
}
