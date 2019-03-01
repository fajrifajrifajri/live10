<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\janji_pasien;

class action extends Controller
{
    function buatjanji(Request $r){
        $janji = new janji_pasien();
        $janji->notelp = $r->notelp;
        $janji->email = $r->email;
        $janji->nama_pasien = $r->nama_pasien;
        $janji->tgllahir_pasien = $r->tgllahir_pasien;
        $janji->nama_dokter = $r->nama_dokter;
        $janji->tgl_bertemu = $r->tgl_bertemu;
        $janji->save();
        return "";
    }
}
