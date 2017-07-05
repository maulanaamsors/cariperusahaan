<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kota;
use App\Kecamatan;

class ApiPrusahaanController extends Controller
{
    public function getListProvinsi()
    {
        $results = Provinsi::all();

        return response()->json(["results"=>$results]);
    }


    public function getListKota(Request $req)
    {
        $results = Kota::where('provinsi_id', $req->input('id'))->get();

        return response()->json(["results"=>$results]);
    }

    public function getListKecamatan(Request $req)
    {
        $results = Kecamatan::where('kota_id', $req->input('id'))->get();

        return response()->json(["results"=>$results]);
    }

}
