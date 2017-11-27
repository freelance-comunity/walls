@extends('backLayout.app')
@section('title')
Editar Rol
@stop
@section('title-dashboard')
  Editar Rol
@endsection
@section('content')

    <h1>Editar Rol</h1>
    <hr/>

    {!! Form::model($role, [
        'method' => 'PATCH',
        'url' => ['admin/roles', $role->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('guard_name') ? 'has-error' : ''}}">
                {!! Form::label('guard_name', 'Nombre Secundario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('guard_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('guard_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-lg btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
