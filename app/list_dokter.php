<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class list_dokter extends Model
{
    protected $table = 'list_dokter';
    protected $fillable = ['id','nama_dokter','spesialis','foto','created_at','updated_at'];

    public $timestamps = true;
}