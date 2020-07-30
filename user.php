<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;
use Session;
class user extends Controller
{
    //
    function list()
    {
       // return Session::get('logData');
        $user=users::all();
        return view('users',['users'=>$user]);
    }
}
