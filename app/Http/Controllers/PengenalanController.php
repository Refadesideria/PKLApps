<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function Pengenalan(){
    $nama ="Refa Desi Deria";
    $umur ="17";
    return view('pages.pengenalan',compact('nama','umur'));
    }
    public function intro($nama,$alamat,$umur)
    {
        return view('pages.intro', compact('nama','alamat','umur'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' =>"Refa",'age'=>17,'mapel' =>['Matematika','B.Indonesia']),
            array('id' => 2, 'name' =>"Rafeyfa",'age'=>16,'mapel'=>['B.Sunda','Fisika'])
        ];
        // dd($a);
        return view('pages.siswa',['siswa' => $a]);
    }
}
