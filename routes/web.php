<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PengenalanController;
use App\http\Controllers\LatihanController;
use App\http\Controllers\PostController;
use App\http\Controllers\latihansiswaController;
use App\http\Controllers\SlotController;



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


//Route Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f){
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//Route Optional Parameter
Route::get('/pesanan/{makanan?}/{makanan1?}', function ($a,$b,$c="Maaf Pesanan Anda Tidak Ada"){
    return view('pages.pesanan', compact('a','b','c'));
});


//Passing data dari controller ke view
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class,'pengenalan']);

//Passing data dinamis(route parameter) dari controller ke view
Route::get('/pengenalan/{nama}/{alamat}/{umur}', [App\Http\Controllers\PengenalanController::class,'intro']);

Route::get('/siswa', [App\Http\Controllers\PengenalanController::class,'siswa']);


Route::get('/menu',[latihanController::class,'menu']);
Route::get('/dosen',[latihanController::class,'dosen']);
Route::get('/stasiuntv',[latihanController::class,'stasiuntv']);
Route::get('/post',[PostController::class,'index']);

Route::get('/post',[latihansiswaController::class,'latihan']);











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route siswa
Route::resource('slot',SlotController::class);