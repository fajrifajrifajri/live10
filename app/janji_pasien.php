<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class janji_pasien extends Model
{
    protected $table = 'janji_pasien';
    protected $fillable = ['id','kode-janji','kode-antrian','notelp','email','nama_pasien','kelamin','gol_darah','pekerjaan','tgllahir_pasien','nama_dokter','tgl_bertemu'];

    public $timestamps = true;
}

class jadwal_dokter extends Model
{
    protected $table = 'jadwal_dokter';
    protected $fillable = ['id','hari','jam','nama_dokter'];

    public $timestamps = true;
}

class list_dokter extends Model
{
    protected $table = 'list_dokter';
    protected $fillable = ['id','hari','jam','nama_dokter'];

    public $timestamps = true;
}