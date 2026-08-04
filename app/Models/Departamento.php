<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    // Relación: Un departamento tiene muchos sitios
    public function sitios()
    {
        return $this->hasMany(Sitio::class);
    }
}