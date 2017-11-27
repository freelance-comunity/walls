@extends('backLayout.app')
@section('title')
User
@stop
@section('title-dashboard')
  Detalle de Usuario
@endsection
@section('content')

    <h1>Usuario</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Email</th><th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> {{ $user->password }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
