<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\latihanmapel;

class latihanmapelController extends Controller
{
    public function latihan()
    {
    $post= Latihanmapel::all();
    return view('post.latihan' , compact('post'));
    }
}
