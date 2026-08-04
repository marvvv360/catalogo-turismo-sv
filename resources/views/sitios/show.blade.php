@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <a href="{{ url('/sitios') }}" class="btn btn-outline-secondary mb-3">← Volver al catálogo</a>
        
        <div class="card shadow-sm border-0 overflow-hidden">
            <img src="{{ $lugar['imagen'] }}" class="card-img-top" alt="{{ $lugar['titulo'] }}" style="max-height: 400px; object-fit: cover;">
            <div class="card-body p-4">
                <span class="badge bg-info text-dark mb-2">{{ $lugar['categoria'] }}</span>
                <h2 class="fw-bold text-success">{{ $lugar['titulo'] }}</h2>
                <h5 class="text-muted mb-3">📍 Departamento: {{ $lugar['departamento'] }}</h5>
                
                <hr>

                <h5>Descripción</h5>
                <p class="card-text fs-5">{{ $lugar['descripcion'] }}</p>

                <div class="alert alert-success mt-4">
                    <h5 class="alert-heading mb-1 fw-bold">💰 Precio / Entrada:</h5>
                    <p class="mb-0 fs-5">{{ $lugar['precio'] }}</p>
                </div>

                <div class="mt-4 text-end">
                    <a href="{{ url('/contacto') }}" class="btn btn-success btn-lg">Solicitar Información</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection