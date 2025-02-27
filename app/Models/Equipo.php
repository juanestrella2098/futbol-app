<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'estadio_id', 'titulos', 'escudo'];
    protected $table = 'equipos'; // Aquí no es necesario porque Laravel la deduce por el nombre del modelo y la tabla

    public function estadio()
    {
        return $this->belongsTo(Estadio::class, 'estadio_id');
    }
}
