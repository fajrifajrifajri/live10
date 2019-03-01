<?php
/**
 * Created by PhpStorm.
 * User: Eric Anthony
 * Date: 02/03/2019
 * Time: 0:57
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = ['id','nama','tipe_dokter','jadwalawal','jadwalakhir','keahlian'];

    public $timestamps = true;
}