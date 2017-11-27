@extends('backLayout.app')
@section('title')
Permisos
@stop
@section('title-dashboard')
  Lista de Permisos
@endsection
@section('content')

    <h1>Permisos <a href="{{ url('admin/permissions/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Permiso</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="permissions">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Nombre Secundario</th><th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($permissions as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/permissions', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->guard_name }}</td>
                    <td>
                        <a href="{{ url('admin/permissions/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/permissions', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#permissions').DataTable({
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
