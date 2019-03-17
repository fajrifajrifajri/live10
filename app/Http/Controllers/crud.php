<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\dokter;
use App\list_dokter;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{
    function delete(Request $r,$table){
        DB::table($table)->where('id',$r->id)->delete();
        return $table;
    }
    function insertdokter(Request $r){
        $validator = Validator::make($r->all(),[
            'namadokter'=>'required',
            'spesialis'=>'required',
            'foto'=>'required|file'
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else {
            $file = $r->file('foto');
            $path = $file->store('public/dokter');
            $exppath = explode('/',$path);
            //------------------------------------------------
            $dokter = new list_dokter();
            $dokter->nama_dokter = $r->namadokter;
            $dokter->spesialis = $r->spesialis;
            $dokter->foto = $exppath[2];
            $dokter->save();
            return "";
        }
    }
}
