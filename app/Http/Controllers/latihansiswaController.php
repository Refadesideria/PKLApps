<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\latihansiswa;
use App\Models\latihanpeserta;
use App\Models\latihanmapel;

class latihansiswaController extends Controller
{
    public function latihan()
    {
    $siswa= latihansiswa::all();
    $peserta= latihanpeserta::all();
    $mapel= latihanmapel::all();
        
    return view('post.latihan' , compact('siswa','peserta','mapel'));
    }
    
}

