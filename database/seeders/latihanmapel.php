<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class latihanmapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = [
            ['kodeMP' => 'MP01','nama_MP' => 'algoritma','SKS'=> '2','Semester' => '1'],
            ['kodeMP' => 'MP02','nama_MP' => 'basis data','SKS'=> '3','Semester' => '1'],
            ['kodeMP' => 'MP03','nama_MP' => 'assembly','SKS'=> '2','Semester' => '2'],             
        ];
        //masukkan data ke database
        DB::table('latihanmapel')->insert($mapel);
    }
}
