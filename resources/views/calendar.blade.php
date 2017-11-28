@extends('backLayout.app')
@section('title')
Crear nueva Cita
@stop
@section('title-dashboard')
Crear nueva cita
@endsection
@section('content')
  {!! $calendar->calendar() !!}
  {!! $calendar->script() !!}
@endsection
