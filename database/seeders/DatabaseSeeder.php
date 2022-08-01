<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
       PosTableSeeder::class,
    );
    $this->call(
        latihansiswa::class,
     );
     $this->call(
        latihanpeserta::class,
     );
     $this->call(
        latihanmapel::class,
     );
     $this->call(
      pengunjungTableSeeder::class,
   );
  
     
    }
}
