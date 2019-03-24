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
    function update(Request $r){
        DB::table($r->table)
            ->where('id',$r->id)
            ->update([
                $r->row => $r->val
            ]);
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
            $filename = time().\Session::get('user').rand(100,1000);
            \Storage::disk('uploads')->put($filename,\File::get($file));
            //------------------------------------------------
            $dokter = new list_dokter();
            $dokter->nama_dokter = $r->namadokter;
            $dokter->spesialis = $r->spesialis;
            $dokter->foto = $filename;
            $dokter->save();
            return "";
        }
    }
    function updatedokter(Request $r){
        $dokter = new list_dokter();
        $datadokter = $dokter::findOrFail($r->id);
        if($r->hasFile('foto')){
            $file = $r->file('foto');
            $filename = time().\Session::get('user').rand(100,1000);
            \Storage::disk('uploads')->put($filename,\File::get($file));
            //------------------------------------------------
            $datadokter->update([
                "nama_dokter"=>$r->namadokter,
                "spesialis"=>$r->spesialis,
                "foto"=>$filename,
            ]);
        }else{
            $datadokter->update([
                "nama_dokter"=>$r->namadokter,
                "spesialis"=>$r->spesialis,
            ]);
        }

        return "";
    }
}
