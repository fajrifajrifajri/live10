<?php

namespace App\Http\Controllers;

use App\dokter;
use App\specialist;
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
    function logout(){
        \Session::forget('user');
        return redirect('/admin');
    }
    function pagi_dokter(Request $r){
        $dokter = new dokter();
        $tipe = new specialist();
        $data = $datatipe = "";
        if($r->pagination == "all"){
            $data = $dokter::all();
        }else {
            $datatipe = $tipe::where('id', $r->pagination)->first();
            $data = $dokter::where('specialist', $datatipe->specialist)->get();
        }
        if($data) {
            foreach ($data as $pagination) {
                return "
                <div class=\"col-lg-4\">
                    <img src=\"http://localhost:8000/img/Female doctor.jpg \" class=\"rounded-circle dokter-img\" alt=\"dokter\">
                    <p> $pagination[nama] </p>
                </div>
            ";
            }
        }else{
            return "
                <div class=\"col-lg-12\">
                    <h1>Data Kosong</h1>
                </div>
            ";
        }
    }
}
