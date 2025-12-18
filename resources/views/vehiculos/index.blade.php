@extends('layouts.app')
@section('titulo', 'Vehículos')
@section('contenido')
<div class="d-flex justify-content-between mb-3">
    <h1>Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">
        Nuevo</a>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Observaciones</th>
                <th>Entrada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculo as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->propietario ?? '-'}}</td>
                    <td>{{ $vehiculo->observacion ?? '-'}}</td>
                    <td>{{ $vehiculo->entrada->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning">
                            Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

