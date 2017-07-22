<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('hala.welcome');
    }
    
    public function formlogin(){
        return view('admin.login');
    }
}
