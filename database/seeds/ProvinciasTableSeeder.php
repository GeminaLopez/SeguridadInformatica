<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Cargo datos
         DB::table('provincias')->insert([
            'id_provincia' => 1,
            'provincia' => 'Misiones',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 2,
            'provincia' => 'San Luis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 3,
            'provincia' => 'San Juan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 4,
            'provincia' => 'Entre Ríos',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 5,
            'provincia' => 'Santa Cruz',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 6,
            'provincia' => 'Río Negro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 7,
            'provincia' => 'Chubut',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 8,
            'provincia' => 'Córdoba',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 9,
            'provincia' => 'Mendoza',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 10,
            'provincia' => 'La Rioja',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 11,
            'provincia' => 'Catamarca',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 12,
            'provincia' => 'La Pampa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 13,
            'provincia' => 'Santiago del Estero',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 14,
            'provincia' => 'Corrientes',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 15,
            'provincia' => 'Santa Fe',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 16,
            'provincia' => 'Tucumán',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 17,
            'provincia' => 'Neuquén',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 18,
            'provincia' => 'Salta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 19,
            'provincia' => 'Chaco',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 20,
            'provincia' => 'Formosa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 21,
            'provincia' => 'Jujuy',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 22,
            'provincia' => 'Ciudad Autónoma de Buenos Aires',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 23,
            'provincia' => 'Buenos Aires',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('provincias')->insert([
            'id_provincia' => 24,
            'provincia' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
