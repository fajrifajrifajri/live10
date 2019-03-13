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
        return view('pages.jadwal',[
            "dokter"=>dokter::all(),
            "specialist"=>specialist::all()
        ]);
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
    public function getDashboardJanji(){
        return view('pages.dashboard.dashboard-janji');
    }
    public function getDashboardJadwal(){
        return view('pages.dashboard.dashboard-jadwal');
    }
    public function getDashboardJadwalInput(){
        return view('pages.dashboard.dashboard-jadwal-input');
    }
    public function getDashboardDokter(){
        return view('pages.dashboard.dashboard-dokter');
    }
    public function getDashboardDokterInput(){
        return view('pages.dashboard.dashboard-dokter-input');
    }
    public function getBuatjanjiform($dokterr){
        if($dokterr) {
            return view('pages.buat-janji2', [
                "dokter" => $dokterr,
                "tgl" => date('D, d M Y'),
                "tglhidden"=> date('Y-m-d')
            ]);
        }else{
            return redirect()->back();
        }
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
        return view('pages.dashboard.dashboard');
    }
}
