<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Playas', 'descripcion' => 'Costas, surf y paisajes marinos.'],
            ['nombre' => 'Montañas y Volcanes', 'descripcion' => 'Ecoturismo, senderismo y clima fresco.'],
            ['nombre' => 'Pueblos y Cultura', 'descripcion' => 'Rutas artesanales, historia y arquitectura colonial.'],
            ['nombre' => 'Lagos y Lagunas', 'descripcion' => 'Cuerpos de agua dulce, paseos en lancha y relajación.'],
            ['nombre' => 'Gastronomía', 'descripcion' => 'Platillos típicos y experiencias culinarias.'],
        ];

        foreach ($categorias as $cat) {
            Categoria::create($cat);
        }
    }
}