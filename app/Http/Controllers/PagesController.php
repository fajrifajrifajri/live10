<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }
    public function getJadwal(){
        return view('pages.jadwal');
    }
    public function getDokter(){
        return view('pages.dokter');
    }
    public function getBuatjanji(){
        $dokter = new dokter();
        return view('pages.buat-janji',[
            "data"=>$dokter::all()
        ]);
    }
    public function getAmbilnomor(){
        return view('pages.ambil-nomor');
    }
    public function getAdmin(){
        return view('pages.admin');
    }
    public function getDashboard(){
        return view('pages.dashboard');
    }
}
