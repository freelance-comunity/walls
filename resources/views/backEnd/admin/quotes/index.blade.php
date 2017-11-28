@extends('backLayout.app')
@section('title')
Citas
@stop
@section('title-dashboard')
Lista de citas
@endsection
@section('content')
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
    <h1>Citas <a href="{{ url('admin/quotes/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nueva Cita</a></h1>
    {{-- <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="quotes">
            <thead>
                <tr>
                    <th>ID</th><th>Hora</th><th>Nombre del Cliente</th><th>Barbero</th><th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($quotes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/quotes', $item->id) }}">{{ $item->hour }}</a></td><td>{{ $item->client_name }}</td><td>{{ $item->barber }}</td>
                    <td>
                        <a href="{{ url('admin/quotes/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/quotes', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div> --}}
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#quotes').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection
