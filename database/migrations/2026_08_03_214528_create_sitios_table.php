<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('sitios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->text('descripcion');
        $table->string('ubicacion')->nullable();
        $table->string('imagen')->nullable();
        
        // Claves foráneas para conectar con las otras dos tablas
        $table->foreignId('departamento_id')->constrained('departamentos')->onDelete('cascade');
        $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
        
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitios');
    }
};
