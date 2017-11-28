@extends('backLayout.app')
@section('title')
Client
@stop
@section('title-dashboard')
Detalles de cliente
@endsection
@section('content')

    <h1>Client</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Apellidos</th><th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $client->id }}</td> <td> {{ $client->name }} </td><td> {{ $client->last_name }} </td><td> {{ $client->phone }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
