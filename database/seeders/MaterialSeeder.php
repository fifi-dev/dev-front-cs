<?php

namespace Database\Seeders;
use App\Models\Material;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //material 1
     Material::create([
        'type' => 'Perceuse',
        'ring' => '0002111',
        'sensor' => 'C ID 2999',
        'status' => 'Détecté',
        'current_area' => 'Chalie Connect',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Chantier Lille',
        'state' => 'Conforme',
        'next_control' => '2024-04-15',
    ]);
    //material 2
    Material::create([
        'type' => 'Nom du type',
        'ring' => 'Bague',
        'sensor' => 'Capteur',
        'status' => 'Détecté',
        'current_area' => 'Nom de zone',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Nom de site',
        'state' => 'Conforme',
        'next_control' => '2024-04-15',
    ]);
    //material 3
    Material::create([
        'type' => 'Nom du type',
        'ring' => 'Bague',
        'sensor' => 'Capteur',
        'status' => 'Détecté',
        'current_area' => 'Nom de zone',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Nom de site',
        'state' => 'Conforme',
        'next_control' => '2024-04-15',
    ]);
    //material 4
    Material::create([
        'type' => 'Nom du type',
        'ring' => 'Bague',
        'sensor' => 'Capteur',
        'status' => 'Non détecté',
        'current_area' => 'Nom de zone',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Nom de site',
        'state' => 'Conforme',
        'next_control' => '2024-04-15',
    ]);
    //material 5
    Material::create([
        'type' => 'Nom du type',
        'ring' => 'Bague',
        'sensor' => 'Capteur',
        'status' => 'Détecté',
        'current_area' => 'Nom de zone',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Nom de site',
        'state' => 'À reviser',
        'next_control' => '2024-05-17',
    ]);
    //material 6

    Material::create([
        'type' => 'Nom du type',
        'ring' => 'Bague',
        'sensor' => 'Capteur',
        'status' => 'Détecté',
        'current_area' => 'Nom de zone',
        'detection' => '2023-06-12 16:34:51',
        'site' => 'Nom de site',
        'state' => 'À reviser',
        'next_control' => '2024-05-17',
    ]);
    }
}
