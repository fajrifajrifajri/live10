<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_dokter extends Model
{
    protected $table = 'jadwal_dokter';
    protected $fillable = ['id','hari','jam','nama_dokter'];

    public $timestamps = true;
}