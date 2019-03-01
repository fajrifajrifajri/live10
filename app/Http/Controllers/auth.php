<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class auth extends Controller
{
    function Register(Request $r){
        $user = new User();
        $user->name = $r->username;
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        $user->save();
        return "";
    }
    function login(Request $r){
        $user = new User();
        $data = $user::where('name',$r->username)->first();
        $check = \Hash::check($r->password,$data->password);
        if($check){
            \Session::put('user',$r->username);
            return "";
        }else{
            return response()->json("password salah");
        }
    }
}
