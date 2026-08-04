<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'imagen',
        'departamento_id',
        'categoria_id',
    ];

    // Relación: Un sitio pertenece a un departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    // Relación: Un sitio pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}