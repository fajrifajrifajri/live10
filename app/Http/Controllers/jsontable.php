<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\dokter;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\janji_pasien;
use App\jadwal_dokter;
use App\list_dokter;

class jsontable extends Controller
{
    function jadwal_dokter_user(Request $r){
        if($r->filter){
            $dokter = new dokter();
            $data = $dokter::where('specialist',$r->filter)->all();
            return response()->json([
                "data"=> $data
            ]);
        }else {

            return response()->json([
                "data" => dokter::all()
            ]);
        }
    }
    function janji_pasien(){
        return response()->json([
            "data"=>janji_pasien::all()
        ]);
    }

    function jadwal_dokter(){
        return response()->json([
            "data"=>jadwal_dokter::all()
        ]);
    }

    function list_dokter(){
        return response()->json([
            "data"=>list_dokter::all()
        ]);
    }
}