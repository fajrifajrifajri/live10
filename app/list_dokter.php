<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class list_dokter extends Model
{
    protected $table = 'list_dokter';
    protected $fillable = ['id','hari','jam','nama_dokter'];

    public $timestamps = true;
}