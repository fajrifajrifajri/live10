<?php
/**
 * Created by PhpStorm.
 * User: Eric Anthony
 * Date: 01/03/2019
 * Time: 19:21
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class janji_pasien extends Model
{
    protected $table = 'janji_pasien';
    protected $fillable = ['id','kode-janji','kode-antrian','notelp','email','nama_pasien','kelamin','gol_darah','pekerjaan','tgllahir_pasien','nama_dokter','tgl_bertemu'];

    public $timestamps = true;
}