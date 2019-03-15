<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;
use App\list_dokter;

class crud extends Controller
{
    function insertdokter(Request $r){
        $file = $r->file('foto');
        $path = $file->store('public/storage/dokter/');
        //------------------------------------------------
        $dokter = new list_dokter();
        $dokter->nama_dokter = $r->nama_dokter;
        $dokter->spesialis = $r->spesialis;
        $dokter->foto = $file->getClientOriginalName();
        $dokter->save();
        return "";
    }
}
