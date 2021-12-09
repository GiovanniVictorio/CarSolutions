@extends('taller.layouts.plantillabase')

@section('contenido')
<h3 class="text-bold text-center">Agregar un nuevo taller</h3>

<form action="/talleres" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Horarios</label>
        <input id="horario" name="horario" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Google Maps</label>
        <input id="googlemaps" name="googlemaps" type="text" class="form-control" tabindex="4">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="5">
    </div>

    <a href="/talleres" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
</form>
@endsection