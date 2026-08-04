<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SitioController extends Controller
{
    private function getLugaresFromJson()
    {
        $path = database_path('lugares.json');

        if (!File::exists($path)) {
            return [];
        }

        $json = File::get($path);
        return json_decode($json, true);
    }

    // Muestra la vista del catálogo completo
    public function index()
    {
        $lugares = $this->getLugaresFromJson();
        return view('sitios.index', compact('lugares'));
    }

    // Muestra la vista de detalle de un sitio
    public function show(string|int $id)
    {
        $lugares = $this->getLugaresFromJson();
        $lugar = collect($lugares)->firstWhere('id', (int)$id);

        if (!$lugar) {
            abort(404, 'Destino no encontrado');
        }

        return view('sitios.show', compact('lugar'));
    }

    // Muestra el formulario de contacto
    public function contacto()
    {
        return view('contacto');
    }

    // Procesa el envío del formulario
    public function procesarContacto(Request $request)
    {
        // Redirecciona de vuelta con un mensaje de éxito
        return back()->with('exito', '¡Gracias por contactarnos! Te responderemos pronto.');
    }
}