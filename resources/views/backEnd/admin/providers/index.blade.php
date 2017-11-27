@extends('backLayout.app')
@section('title')
Proveedores
@stop
@section('title-dashboard')
Lista de Proveedores
@endsection
@section('content')
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
    <h1>Proveedores <a href="{{ url('admin/providers/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Proveedor</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="providers">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($providers as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/providers', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->address }}</td><td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{ url('admin/providers/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/providers', $item->id],
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
        $('#providers').DataTable({
          "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página.",
            "zeroRecords": "Lo sentimos. No se encontraron registros.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros aún.",
            "infoFiltered": "(filtrados de un total de _MAX_ registros)",
            "search": "Búsqueda",
            "LoadingRecords": "Cargando ...",
            "Processing": "Procesando...",
            "SearchPlaceholder": "Comience a teclear...",
            "paginate": {
              "previous": "Anterior",
              "next": "Siguiente",
            }
          },
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
