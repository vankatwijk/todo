<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        //DB::insert('insert into users (name,email,password) values (?,?,?)',['tom','tom@vanniks.com','password']);
        $users = DB::select('select * from users');
        return $users;
        return view('home');
    }
}
