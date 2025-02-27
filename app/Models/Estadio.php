<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ciudad', 'capacidad'];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }

    
}
