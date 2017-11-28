@extends('backLayout.app')
@section('title')
Provider
@stop
@section('title-dashboard')
Detalles de Proveedor
@endsection
@section('content')

    <h1>Provider</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Dirección</th><th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $provider->id }}</td> <td> {{ $provider->name }} </td><td> {{ $provider->address }} </td><td> {{ $provider->phone }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
