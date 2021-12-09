@extends('taller.layouts.plantillabase')

@section('contenido')
<a href="talleres/create" class="btn btn-primary">Agregar Nuevo</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Horarios</th>
            <th scope="col">Telefono</th>
            <th scope="col">GoogleMaps</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($talleres as $taller)
        <tr>
            <td>{{ $taller->id }}</td>
            <td>{{ $taller->nombre }}</td>
            <td>{{ $taller->horario }}</td>
            <td>{{ $taller->telefono }}</td>
            <td>{{ $taller->googlemaps }}</td>
            <td>{{ $taller->tipo }}</td>
            <td>
                <form action="{{ route ('talleres.destroy', $taller->id) }}" method="POST">
                    <a href="/talleres" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection