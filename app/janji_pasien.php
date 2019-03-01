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
    protected $fillable = ['id','notelp','email','nama_pasien','tgllahir_pasien','nama_dokter','tgl_bertemu'];

    public $timestamps = true;
}