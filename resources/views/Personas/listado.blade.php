@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
<div>
<div class="panel panel-danger">
            <div class="panel-heading">Personas Registradas</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dirección</th>
                                    <th>Profesion</th>
                                    <th>Accion</th>
                              </tr>
                              @foreach($personas as $persona)
                              <tr>                                
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->cedula }}</td>
                                <td>{{ $persona->pnombre }}</td>
                                <td>{{ $persona->papellido }}</td>
                                <td>{{ $persona->direccion }}</td>
                                <td>{{ $persona->profesion->descripcion }}</td>
                                <td>
                                  <a href="" class="btn btn-info">Ver</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                  </div>
                  {!! Form::close() !!}
            </div>
      </div>
<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
</div>
@endsection