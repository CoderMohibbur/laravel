<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = Home::all();
        return view('/home',['home'=>$home]);
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request){

        $home = new Home;
        $home->id = $request->id;
        $home->save();

        return redirect('/home');
    }

    public function destroy($id){
        $home = Home::find($id);
        $home->delete();
        return redirect('/home');
    }
}
