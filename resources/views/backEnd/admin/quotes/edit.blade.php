@extends('backLayout.app')
@section('title')
Edit Quote
@stop

@section('content')

    <h1>Edit Quote</h1>
    <hr/>

    {!! Form::model($quote, [
        'method' => 'PATCH',
        'url' => ['admin/quotes', $quote->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('hour') ? 'has-error' : ''}}">
                {!! Form::label('hour', 'Hour: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'hour', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('hour', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('client_name') ? 'has-error' : ''}}">
                {!! Form::label('client_name', 'Client Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('client_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('client_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('barber') ? 'has-error' : ''}}">
                {!! Form::label('barber', 'Barber: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('barber', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('barber', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('service') ? 'has-error' : ''}}">
                {!! Form::label('service', 'Service: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('service', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('service', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
                {!! Form::label('start_date', 'Start Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('start_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
                {!! Form::label('end_date', 'End Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('end_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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