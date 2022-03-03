<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function (){
    return view('home');
});
Route::get('/about', function () {
    return view('about',[
        "nama" => "Vieky syahputrie anwar ",
        "email" =>  "3103120227@student.smktelkom-pwt.sch.id",
        "gambar" => "chaew.jpeg "
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});



