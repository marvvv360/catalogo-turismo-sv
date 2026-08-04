<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = [
            'Ahuachapán', 'Cabañas', 'Chalatenango', 'Cuscatlán',
            'La Libertad', 'La Paz', 'La Unión', 'Morazán',
            'San Miguel', 'San Salvador', 'San Vicente', 'Santa Ana',
            'Sonsonate', 'Usulután'
        ];

        foreach ($departamentos as $depto) {
            Departamento::create(['nombre' => $depto]);
        }
    }
}