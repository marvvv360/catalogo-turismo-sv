@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 p-4">
            <h3 class="fw-bold text-success text-center mb-3">Contáctanos</h3>
            <p class="text-center text-muted">¿Tienes dudas sobre algún destino? Envíanos un mensaje.</p>

            @if(session('exito'))
                <div class="alert alert-success text-center">
                    {{ session('exito') }}
                </div>
            @endif

            <form action="{{ url('/contacto') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" required>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label fw-bold">Mensaje / Consulta</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Enviar Formulario</button>
            </form>
        </div>
    </div>
</div>
@endsection