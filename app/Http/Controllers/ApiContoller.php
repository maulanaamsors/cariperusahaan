<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ApiContoller extends Controller
{
    public function postActive(Request $req){
        Mail::to($req->input('email'))->send(new DokterKompiActive());

        return response()->json([
            "status"=>200,
            "message"=>"Success send email"
        ]);
    }
}
