<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function index(){
        return view('hala.welcome');
    }
    
    public function formlogin(){
        return view('admin.login')->with('message','0'); 
    }

    public function login(Request $req){
        $count = Admin::where('nip', $req->input('nip'))
        ->where('password', $req->input('password'))
        ->count();

        if ($count != 0){
            Session::put('nip', $req->input('nip'));
            return redirect('/admin');
        }else{

           return view('admin.login')->with('message','1');  
        }
       // $req->session()->set('ktp', $req->input('ktp'));
    }

     public function logout(){
        Session::put('nip', '');

        return redirect('/');   
    }
}
