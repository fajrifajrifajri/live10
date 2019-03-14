<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\dokter;
use App\specialist;
use App\list_dokter;

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
        $data_dokter = DB::table('list_dokter')
            ->select(
                'id',
                'nama_dokter',
                'spesialis',
                'foto'
            )
            ->join('specialist_dokter','specialist');
        return view('pages.dokter',[
            "list_dokter"=>list_dokter::all(),
            "dokter"=>dokter::all()
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

        return view('pages.dashboard.dashboard-dokter-input',[
            "spesialis"=>specialist::all()
        ]);
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
