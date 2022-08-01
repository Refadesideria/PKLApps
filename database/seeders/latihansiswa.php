<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class latihansiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['noSiswa' => '2001','nama' => 'Badu','jk' => 'L','jurusan' =>'TK'],
            ['noSiswa' => '2002','nama' => 'Muliati','jk' => 'P','jurusan' =>'TE'],
            ['noSiswa' => '2003','nama' => 'Rahmiadi','jk' =>'L','jurusan' =>'TE'],
            ['noSiswa' => '2004','nama' => 'Nasrol','jk' =>'L','jurusan' =>'TK'],
          
         ];
           //masukkan data ke database
           DB::table('latihansiswa')->insert($siswa);
    }
}
