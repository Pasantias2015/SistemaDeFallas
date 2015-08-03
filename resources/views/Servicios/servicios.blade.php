@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Paradas Por Servicios</div>
        <div class="panel-body">
         @include('tools.errors')
       <!--  {!! Form::open() !!}-->
            <div class="col-md-12">

                <div class="form-group">
                <label for="serv">Seleccione un Servicio</label>  

                  <select id="serv" name="serv" class="col-md-11 form-control">

                    @foreach($servicios as $servicio)

                      <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>

                    @endforeach

                  </select>

                </div>
                        

            </div>
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <tr>
                  <th>ID</th>
                  <th>Lugar</th>
                  <th>Accion</th>
                </tr>               
                  @foreach( $lugares as $lugar)
                  <tr>
                    <td>{{ $lugar->id }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  @endforeach
              </table>
              @include('tools.botones-registrar')
            </div>
         <!--{!! Form::close() !!}-->
         
        </div>

    </div>

</div>
@endsection