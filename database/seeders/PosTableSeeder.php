<?php

namespace Database\Seeders;

use DB; 
use Illuminate\Database\Seeder;

class PosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
           ['title' => 'Tips Cepat Nikah','content' => 'assalaam studio'],
           ['title' => 'Harus Menunda Nikah?','content' => 'assalaam studio'],
           ['title' => 'Membangun Visi Misi Keluarga','content' => 'assalaam studio'],
        ];

        //masukkan data ke database
        DB::table('posts')->insert($sampel);
    }
}
