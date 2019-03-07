<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;
use App\specialist;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }
    public function getJadwal(){
        return view('pages.jadwal');
    }
    public function getDokter(){
        $dokter = new dokter();
        $specialist = new specialist();
        return view('pages.dokter',[
            "datadokter"=>$dokter::all(),
            "dataspecialist"=>$specialist::all()
        ]);
    }
    public function getBuatjanji(){
        $dokter = new dokter();
        return view('pages.buat-janji',[
                "data"=>$dokter::all(),
        ]);
    }
    public function getAmbilnomor(){
        return view('pages.ambil-nomor');
    }
    public function getAdmin(){
        if(\Session::get('user')){
            return redirect('/admin/dashboard');
        }else {
            return view('pages.admin');
        }
    }
    public function getDashboard(){
        return view('pages.dashboard');
    }
}
