<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class auth extends Controller
{
    function Register(Request $r){
        $user = new admin();
        $user->name = $r->username;
        $user->password = bcrypt($r->password);
        $user->save();
        return null;
    }
    function login(Request $r){
        $user = new admin();
        $data = $user::where('username',$r->username)->first();
        $check = \Hash::check($r->password,$data->password);
        if($check){
            \Session::put('user',$r->username);
            return "";
        }else{
            return "Password Salah";
        }
    }
}
