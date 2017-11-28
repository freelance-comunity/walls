@extends('backLayout.app')
@section('title')
Citas
@stop
@section('title-dashboard')
Detalles de cita
@endsection
@section('content')

    <h1>Quote</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Hora</th><th>Cliente</th><th>Barbero</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $barber = App\Barber::find($quote->barber)
                @endphp
                <tr>
                    <td>{{ $quote->id }}</td> <td> {{ $quote->hour }} </td><td> {{ $quote->client_name }} </td><td> {{ $barber->name }} {{ $barber->last_name}} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
