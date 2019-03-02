<?php
/**
 * Created by PhpStorm.
 * User: Eric Anthony
 * Date: 02/03/2019
 * Time: 18:33
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    protected $table = 'specialist_dokter';
    protected $fillable = ['id','specialist','created_at','updated_at'];

    public $timestamps = true;
}