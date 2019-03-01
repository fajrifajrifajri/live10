<?php
/**
 * Created by PhpStorm.
 * User: Eric Anthony
 * Date: 02/03/2019
 * Time: 2:04
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['id','username','password','remember_token','created_at','updated_at'];

    public $timestamps = true;
}