<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class kamarhotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kh = [
            ['no_kamar' => '201','jenis_kamar' => 'Flowers','harga' => '1000000'], 
            ['no_kamar' => '202','jenis_kamar' => 'Star','harga' => '200000'], 
            ['no_kamar' => '204','jenis_kamar' => 'Sky','harga' => '1000000'], 
            ['no_kamar' => '207','jenis_kamar' => 'Rainbow','harga' => '350000'], 
            ['no_kamar' => '204','jenis_kamar' => 'Sun','harga' => '1000000'], 
        ];
         //masukkan data ke database
         DB::table('kamarhotel')->insert($kh);

    }
}
