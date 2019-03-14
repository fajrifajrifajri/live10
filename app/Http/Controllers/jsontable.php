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
    function jadwal_dokter_janji(){
        $data = DB::table('dokter')
            ->select(
                'jamawal',
                'jamakhir',
                DB::raw('GROUP_CONCAT(nama) as nama_dokter'),
                DB::raw('GROUP_CONCAT(hari) as hari')
            )
            ->groupBy('jamawal','jamakhir')
            ->get();
        return response()->json([
            "data"=>$data
        ]);
    }
    function jadwal_dokter_user(){
        $data = DB::table('dokter')
            ->select(
                'nama',
                'specialist_dokter.specialist as specialist',
                'hari',
                'jamawal',
                'jamakhir'
            )
            ->join(
                'specialist_dokter',
                'dokter.specialist',
                "=",
                "specialist_dokter.id"
            )
            ->get();
            return response()->json([
                "data" => $data
            ]);
    }
    function janji_pasien(){
        return response()->json([
            "data"=>janji_pasien::all()
        ]);
    }

    function jadwal_dokter(){
        $data = DB::table('dokter')
        ->select(
            'dokter.id',
            'nama',
            'specialist_dokter.specialist as specialist',
            'hari',
            'jamawal',
            'jamakhir'
        )
        ->join(
            'specialist_dokter', 'dokter.specialist',
            "=",
            "specialist_dokter.id"
        )
        ->get();
        return response()->json([
            "data" => $data
        ]);
    }

    function list_dokter(){
        return response()->json([
            "data"=>list_dokter::all()
        ]);
    }
}