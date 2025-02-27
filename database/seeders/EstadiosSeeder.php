<?php

namespace Database\Seeders;

use App\Models\Estadio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estadios')->insert([
            ['nombre' => 'Camp Nou', 'ciudad' => 'Barcelona', 'capacidad' => 99000],
            ['nombre' => 'Wanda Metropolitano', 'ciudad' => 'Madrid', 'capacidad' => 68000],
            ['nombre' => 'Santiago Bernabéu', 'ciudad' => 'Madrid', 'capacidad' => 81000],
        ]);
        Estadio::factory()->count(5)->create();
    }
}
