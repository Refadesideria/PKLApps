<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanController extends Controller
{
    public function menu(){
            $a = [  
                array(
                    'menu1' => 'Beranda',
                    'menu2' => 'Berita',
                    'menu3' => 'Tentang',
                    'menu4' => 'Olahraga',
                    'jenisor' => [
                        'Bulu Tangkis','Sepak Bola'],
                    'menu5' => ['Politik','Manca Negara']
                )
                    ];
            // dd($a);
            return view('pages.menu',['menu' => $a]);
        }  

    public function dosen(){
    $b=[
        ['id' => 1, 'namadosen' => 'Yusuf Bachtiar','matkul' => 'Pemrograman Web',
        'mahasiswa' => [
            ['nama' => 'Muhammad Soleh', 'nilai' => 78],
            ['nama' => 'Jujun Junaedi', 'nilai' => 85],
            ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
            ['nama' => 'Ubay Holin', 'nilai' => 87],
            ['nama' => 'Fadillah', 'nilai' => 95],
        ]
        ],

        ['id' => 1, 'namadosen' => 'Yusuf ','matkul' => 'Pemrograman Web',
        'mahasiswa' => [
            ['nama' => 'Alfred McTomminary', 'nilai' => 67],
            ['nama' => 'Bruno Kashmir', 'nilai' =>90 ],
            ['nama' => 'Akid Hendra', 'nilai' =>50 ],
            ['nama' => 'Dany Irawan', 'nilai' =>70 ],
            ['nama' => 'Chandra Mega Putra', 'nilai' =>60 ],
        ]
        ],

        ];
        // dd($a);
        return view('pages.dosen',['dosen' => $b]);
    }
    public function stasiuntv(){
        $c =[
            ['stasiun' => 'NET','siaran' => 'Catatan Si Boy','jam' => '16.00','tgl' => '10 Juli 2022'],
            ['stasiun' => 'TVRI','siaran' => 'Ceramah','jam' => '17.00','tgl' => '11 Mei 2022'],
            ['stasiun' => 'Ochannel','siaran' => 'Berita','jam' => '15.00','tgl' => '17 Juni 2022'],
            ['stasiun' => 'BEINSPORT','siaran' => 'sepak bola','jam' => '14.00','tgl' => '09 Juli 2022'],
            ['stasiun' => 'Indosiar','siaran' => 'dangdut academy','jam' => '19.00','tgl' => '26 Mei 2022'],
 
        ];
        // dd($a);
        return view('pages.stasiuntv',['stasiuntv' => $c]);
    }
}



