<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kota;
use App\Kecamatan;
use App\Photos;
use App\Perusahaan;
use App\Sektor;
use DB;

class ApiPrusahaanController extends Controller
{
    public function getListProvinsi()
    {
        $results = Provinsi::all();

        return response()->json([
            "results"=>$results
            ]);
    }

    public function getListKota(Request $req)
    {
        $results = Kota::where('provinsi_id', $req->input('id'))->get();

        return response()->json([
            "results"=>$results
            ]);
    }

    public function getListKecamatan(Request $req)
    {
        $results = Kecamatan::where('kota_id', $req->input('id'))->get();

        return response()->json([
            "results"=>$results
            ]);
    }

    public function getListPerusahaan(){
        $listPerusahaan = Perusahaan::all();

        return response()->json([
            "status"=>200 , 
            "message"=>"get data success",
            "results"=>$listPerusahaan
        ]);  
    }

    public function getListSektor(){
        $listSektor = Sektor::all();

        return response()->json([
            "status"=>200 , 
            "message"=>"get data success",
            "results"=>$listSektor
        ]);  
    }

    public function getPerusahaan($id_prusahaan){
        try{
            $result = new Perusahaan;
            $result = Perusahaan::where('id_prusahaan', $id_prusahaan)->first();
            $photos = Photos::where('id_prusahaan', $id_prusahaan)->get();

            return response()->json([
                "status"=>200 , 
                "message"=>"get data ". $result->nama_usaha ." success",
                "results"=>[
                    //"data"=>$result,
                    "photos"=>$photos
                ]]); 
        }catch(\Exception $e){
            return response()->json([
                "status"=>505, 
                "message"=>"Error ". $e]);
        }
    }
}
