@extends('app')
@include('tools.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Asignar Unidad</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::open(['route'=>'unidadoperadores.store','method'=>'POST']) !!}
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <input class="hidden" type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                                        <span>Seleccione un Servicio</span>
                                        <select name="servicio_id" class="form-control">
                                              @foreach($servicios as $servicio)
                                              <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>    
                                              @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span >Seleccione un Unidad</span>
                                        <select name="unidad_id" class="form-control">
                                              @foreach($unidades as $unidad)
                                              <option value="{{ $unidad->id }}">{{ $unidad->nidentificacion }}</option>    
                                              @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span>Seleccionar Operador</span>
                                        <select name="operador_id" id="operador_id" class="form-control">
                                              @foreach($operadores as $operador)
                                              <option value="{{ $operador->id }}">{{ $operador->persona->pnombre." ".$operador->persona->papellido}}</option>    
                                              @endforeach
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-12">
                                <span class="label label-success">Unidades Asignadas</span>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Servicio</th>
                                            <th>Unidad</th>
                                            <th>Operador</th>
                                            <th>Accion</th>
                                        </tr>
                                        @foreach($asignadas as $asignad)
                                        <tr>                            
                                            <td>{{ $asignad->id }}</td>
                                            <td>{{ $asignad->fecha }}</td>
                                            <td>{{ $asignad->servicio->descripcion }}</td>
                                            <td>{{ $asignad->unidad->nidentificacion }}</td>
                                            <td>{{ $asignad->operador->persona->pnombre." ".$asignad->operador->persona->papellido }}</td>
                                            <td>
                                                <a href="#" class="label label-warning">Editar</a>
                                                <a href="#" class="label label-success">ver</a>
                                            </td>                           
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @include('tools.botones-registrar')
                                </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection