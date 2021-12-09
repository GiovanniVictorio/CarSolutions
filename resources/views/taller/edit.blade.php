@extends('taller.layouts.plantillabase')

@section('contenido')
<h3 class="text-bold text-center">Editar la informacion de un taller</h3>

<form action="/talleres/{{$taller->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{ $taller->nombre }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Horarios</label>
        <input id="horario" name="horario" type="text" class="form-control" tabindex="2" value="{{ $taller->horario }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" value="{{ $taller->telefono }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Google Maps</label>
        <input id="googlemaps" name="googlemaps" type="text" class="form-control" tabindex="4" value="{{ $taller->googlemaps }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="5" value="{{ $taller->tipo }}">
    </div>

    <a href="/talleres" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection