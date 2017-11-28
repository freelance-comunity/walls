@extends('layouts.master-app') @section('content') @section('title-dashboard') Inicio @endsection
<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-comments"></i>
        </div>
        <div class="mr-5">26 Citas Hoy!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">Detalles</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-list"></i>
        </div>
        <div class="mr-5">11 Nuevos Productos!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Detalles</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-users"></i>
        </div>
        <div class="mr-5">123 Nuevos Clientes!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                              <i class="fa fa-angle-right"></i>
                            </span>
                          </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-money"></i>
        </div>
        <div class="mr-5">${{number_format(40000,2)}} MXN</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">Detalles</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8">
    <!-- Example Bar Chart Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-area-chart"></i> Visitas en el mes</div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <div class="col-lg-4">
    <!-- Example Notifications Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-bell-o"></i> Citas Programadas del Día</div>
      <div class="list-group list-group-flush small">
        @if($quotes->isEmpty())
        <div class="well text-center">No se han creado citas.</div>
        @else @foreach ($quotes as $key => $quote) @php $barber = App\Barber::find($quote->barber); @endphp
        <a class="list-group-item list-group-item-action" href="#">
          <div class="media">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
            <div class="media-body">
              Cliente: <strong>{{$quote->client_name}}</strong><br> Barbero: <strong>{{$barber->name}} {{$barber->last_name}}</strong>.
              <div class="text-muted smaller">Fecha: {{$quote->start_date}} Hora: {{$quote->hour}}</div>
            </div>
          </div>
        </a>
        @endforeach @endif
        <a class="list-group-item list-group-item-action" href="{{url('admin/quotes')}}">Ver todas...</a>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>
@endsection
