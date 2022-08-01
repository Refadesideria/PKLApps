<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class latihanpeserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta = [
            ['nosiswa' => '2001','kode_MP' => 'MP01'],
            ['nosiswa' => '2002','kode_MP' => 'MP02'],
            ['nosiswa' => '2003','kode_MP' => 'MP03'],
            ['nosiswa' => '2004','kode_MP' => 'MP04'],
            ['nosiswa' => '2005','kode_MP' => 'MP05'],
            ['nosiswa' => '2006','kode_MP' => 'MP06'],
        ];
        //masukkan data ke database
        DB::table('latihanpeserta')->insert($peserta);
    }
}
