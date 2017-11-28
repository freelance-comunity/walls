@extends('backLayout.app')
@section('title')
Barber
@stop

@section('content')

    <h1>Barber</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Apellidos</th><th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $barber->id }}</td> <td> {{ $barber->name }} </td><td> {{ $barber->last_name }} </td><td><img class="rounded-circle" src="{{asset('images/avatars')}}/{{ $barber->photo }}"></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
