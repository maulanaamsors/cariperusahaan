<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik_usaha;
use Mail;
use App\Mail\ActivateUser;

class pengolahanakunpengusahahController extends Controller
{
    public function index(){
        $results = Pemilik_usaha::all();

        return view('admin.pengolahanakunpengusahah')
        ->with('results', $results);
    }

    public function updateAction(Request $req){
        if ($req->active == '0'){ 
            Pemilik_usaha::where('id_pemilik', $req->id_pemilik)
            ->update(['active' => '1' ]);

            $pemilik=Pemilik_usaha::where('id_pemilik', $req->id_pemilik)->first();
            

            Mail::to($pemilik->email)->send(new ActivateUser());
        }else{
            Pemilik_usaha::where('id_pemilik', $req->id_pemilik)
            ->update(['active' => '0' ]);
        }

        return response()->json([
                "status"=>200, 
                "message"=>"success"]);                 
    }
}
