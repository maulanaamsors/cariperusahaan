<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginPemilikController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/pemilik/tambahperusahaan';

    public function guard(){
        return Auth::guard('web_pemilik_usaha');
    }
}
