@extends('backLayout.app')
@section('title')
Permiso
@stop
@section('title-dashboard')
  Detalles de Permiso
@endsection
@section('content')

    <h1>Permiso</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Nombre Secundario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $permission->id }}</td> <td> {{ $permission->name }} </td><td> {{ $permission->guard_name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
