<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\latihanpeserta;

class latihanpesertaController extends Controller
{
    public function latihan()
    {
    $post= Latihanpeserta::all();
    return view('post.latihan' , compact('post'));
    }
}
