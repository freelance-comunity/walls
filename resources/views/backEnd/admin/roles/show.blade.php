@extends('backLayout.app')
@section('title')
Rol
@stop
@section('title-dashboard')
  Detalles de Rol
@endsection
@section('content')

    <h1>Role</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Nombre Secundario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $role->id }}</td> <td> {{ $role->name }} </td><td> {{ $role->guard_name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
