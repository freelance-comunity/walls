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
                    <th>ID.</th> <th>Name</th><th>Last Name</th><th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $barber->id }}</td> <td> {{ $barber->name }} </td><td> {{ $barber->last_name }} </td><td> {{ $barber->photo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection