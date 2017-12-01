<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DokterKompiActive;
use App\Mail\DokterKompiDeactive;
use App\Mail\DokterKompiGreating;
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

    public function postDeactive(Request $req){
        Mail::to($req->input('email'))->send(new DokterKompiDeactive());

        return response()->json([
            "status"=>200,
            "message"=>"Success send email"
        ]);
    }

    public function postGreating(Request $req){
        Mail::to($req->input('email'))->send(new DokterKompiGreating());

        return response()->json([
            "status"=>200,
            "message"=>"Success send email"
        ]);
    }
}
