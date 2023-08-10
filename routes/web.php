<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function(){
//     return view('home');
// });

Route::get('/home',[HomeController::class,'index'])->name('home');
// Route::match(['get', 'post'], '/home', [HomeController::class, 'index'])->name('home');
// Route::post('/home/create', [HomeController::class, 'create'])->name('home.create');
// Route::post('/home', [HomeController::class, 'store'])->name('home.store');

// Route::get('/home', function (){
//     return view('home');
// });


Route::post('/home', [HomeController::class, 'store']);

Route::get('/about',function(){
    return 'I am from about <br> <a href="/home">Home</a>';
});

Route::delete('/home/{id}', [HomeController::class, 'destroy']);