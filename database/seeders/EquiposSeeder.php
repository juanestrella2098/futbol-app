<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Estadio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1. Primer modo manual de creacion de datos
        $estadio = Estadio::where('nombre', 'Camp Nou')->first();
        $estadio->equipos()->create([
            'nombre' => 'Barça Femenin',
            'titulos' => 30,
        ]);
        $estadio = Estadio::where('nombre', 'Wanda Metropolitano')->first();
        $estadio->equipos()->create([
            'nombre' => 'Atlético de Madrid',
            'titulos' => 10,
        ]);
        $estadio = Estadio::where('nombre', 'Santiago Bernabéu')->first();
        $estadio->equipos()->create([
            'nombre' => 'Real Madrid Femenino',
            'titulos' => 5,
        ]);
        //2. Segundo modo de creacion de datos, en este caso es automatico de como este puesto en la factoria
        Equipo::factory()->count(10)->create();
    }
}
