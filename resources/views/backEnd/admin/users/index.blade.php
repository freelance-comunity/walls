@extends('backLayout.app')
@section('title')
Usuarios
@stop
@section('title-dashboard')
Lista de Usuarios
@endsection
@section('content')

    <h1>Usuarios <a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Usuario</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="users">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Email</th><th>Contraseña</th><th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->email }}</td><td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ url('admin/users/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/users', $item->id],
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
        $('#users').DataTable({
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
