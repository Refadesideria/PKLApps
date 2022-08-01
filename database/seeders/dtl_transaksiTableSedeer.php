<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class dtl_transaksiTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trans = [
            ['no_transaksi' => '100985','id_pengunjung' => '1897652002','id_karyawan' => '1903458','jmlh_kamar' => '201','tgl_masuk' => '19','tgl_keluar' => '22','lama_nginap' =>'3 hari','total_harga' => '1000000'],
    }
}
