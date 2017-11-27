@extends('backLayout.app')
@section('title')
Provider
@stop

@section('content')

    <h1>Provider</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Address</th><th>Phone</th>
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