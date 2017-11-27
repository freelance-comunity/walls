@extends('layouts.master-app') @section('title') Clientes @stop @section('title-dashboard') Lista de Clientes @endsection @section('content') @if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<h1>Clientes <a href="{{ url('admin/clients/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Cliente</a></h1>
<div class="table table-responsive">
  <table class="table table-bordered table-striped table-hover" id="clients">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Detalles</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clients as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td><a href="{{ url('admin/clients', $item->id) }}">{{ $item->name }}</a></td>
        <td>{{ $item->last_name }}</td>
        <td>{{ $item->phone }}</td>
        <td>
          <a href="{{ url('admin/clients/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a> {!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/clients', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
          ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection @section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $('#clients').DataTable({
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
      }, ],
      order: [
        [0, "asc"]
      ],
    });
  });
</script>
@endsection
