<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sitio;
use App\Models\Departamento;
use App\Models\Categoria;

class SitioSeeder extends Seeder
{
    public function run(): void
    {
        // Buscamos los IDs de referencias para no poner números fijos (Hardcoding)
        $laLibertad = Departamento::where('nombre', 'La Libertad')->first();
        $santaAna = Departamento::where('nombre', 'Santa Ana')->first();

        $playas = Categoria::where('nombre', 'Playas')->first();
        $montanas = Categoria::where('nombre', 'Montañas y Volcanes')->first();

        // Crear Sitio 1
        Sitio::create([
            'nombre' => 'El Tunco',
            'descripcion' => 'Famosa playa ideal para el surf y con gran vida nocturna.',
            'ubicacion' => 'Tamanique, La Libertad',
            'imagen' => 'https://ejemplo.com/eltunco.jpg',
            'departamento_id' => $laLibertad->id,
            'categoria_id' => $playas->id,
        ]);

        // Crear Sitio 2
        Sitio::create([
            'nombre' => 'Volcán de Santa Ana (Ilamatepec)',
            'descripcion' => 'El volcán más alto de El Salvador con una hermosa laguna de azufre en su cráter.',
            'ubicacion' => 'Parque Nacional Los Volcanes',
            'imagen' => 'https://ejemplo.com/ilamatepec.jpg',
            'departamento_id' => $santaAna->id,
            'categoria_id' => $montanas->id,
        ]);
    }
}