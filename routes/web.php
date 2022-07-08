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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/belajar', function () {
    echo '<center>';
    echo '<h1><u>HALO SEMUANYA</h1></u><br>';
    echo '<h1>Kami sedang belajar laravel dasar</h1>';
    echo '</center>';

});

//Route basic lanjut ke view
Route::get('/home',function () {
    return view('home');
});
Route::get('/index',function (){
    return view('pages.index');
});

Route::get('/belajar',function (){
    return view('pages.belajar');
});
Route::get('/bio',function (){
    return view('pages.bio');
});


//Route Paramete
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f){
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//Route Optional Parameter
Route::get('/pesanan/{makanan?}', function ($a="Pesanan Kosong"){
    return view('pages.pesanan', compact('a'));
});











