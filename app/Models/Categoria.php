<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    // Relación: Una categoría tiene muchos sitios
    public function sitios()
    {
        return $this->hasMany(Sitio::class);
    }
}