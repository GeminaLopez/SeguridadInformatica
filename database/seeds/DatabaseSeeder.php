<?php

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
        $this->call(EquiposTableSeeder::class);
        $this->call(NacionalidadesTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(CorredoresTableSeeder::class);
    }
}
