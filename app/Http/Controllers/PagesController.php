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
        $data_dokter = DB::table('list_dokter')
            ->select(
                'nama_dokter',
                'specialist_dokter.specialist as spesialis',
                'specialist_dokter.id as specialist_id',
                'foto'
            )
            ->join(
                'specialist_dokter',
                'list_dokter.spesialis',
                '=',
                'specialist_dokter.id'
                )->get();
        return view('pages.dokter',[
            "dokter"=>$data_dokter,
            "list_dokter"=>specialist::all()
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
    public function getDashboardJadwalEdit(){
        return view('pages.dashboard.dashboard-jadwal-edit');
    }
    public function getDashboardDokter(){
        return view('pages.dashboard.dashboard-dokter');
    }
    public function getDashboardDokterInput(){

        return view('pages.dashboard.dashboard-dokter-input',[
            "spesialis"=>specialist::all()
        ]);
    }
    public function getDashboardDokterEdit(){

        return view('pages.dashboard.dashboard-dokter-edit',[
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
