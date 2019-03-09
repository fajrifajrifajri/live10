<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\janji_pasien;
use App\jadwal_dokter;
use App\list_dokter;

class jsontable extends Controller
{
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