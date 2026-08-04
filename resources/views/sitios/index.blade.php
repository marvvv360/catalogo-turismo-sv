@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h1 class="display-5 fw-bold text-success">Descubre El Salvador</h1>
    <p class="lead text-secondary">Explora los mejores destinos turísticos de nuestro país</p>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach($lugares as $lugar)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ $lugar['imagen'] }}" class="card-img-top" alt="{{ $lugar['titulo'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-info text-dark mb-2 w-auto align-self-start">{{ $lugar['categoria'] }}</span>
                    <h5 class="card-title fw-bold">{{ $lugar['titulo'] }}</h5>
                    <p class="card-text text-muted small">📍 {{ $lugar['departamento'] }}</p>
                    <p class="card-text text-truncate">{{ $lugar['descripcion'] }}</p>
                    
                    <div class="mt-auto">
                        <p class="fw-bold text-success mb-2">💰 {{ $lugar['precio'] }}</p>
                        <a href="{{ url('/sitios/' . $lugar['id']) }}" class="btn btn-outline-success w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection