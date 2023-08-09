<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = Home::all();
        return view('/home',['homes'=>$home]);
    }
}
