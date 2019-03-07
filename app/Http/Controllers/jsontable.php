<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\janji_pasien;

class jsontable extends Controller
{
    function janji_pasien(){
        return response()->json([
            "data"=>janji_pasien::all()
        ]);
    }
}
