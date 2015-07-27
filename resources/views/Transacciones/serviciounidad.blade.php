@extends('app') 

@include('tools.sidebar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Unidades por Servicios</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        
                        <div class="col-md-12">
                            
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Servicio</th>
                                <th>Unidad</th>
                                <th>Accion</th>
                            </tr>
                            @foreach($unidades as $unidad)
                            <tr id="row{{ $unidad->id }}">
                                <td>
                                    <label  id="label{{ $unidad->id }}">{{ $unidad->servicio->descripcion }}</label>
                                    <select name="servicio" id="servicio{{ $unidad->id }}" name="select" class="form-control">
                                        @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{ $unidad->unidad->nidentificacion }}</td>
                                <td>
                                    <button  class="btn btn-success" onclick="selector({{ $unidad->id }})" id="editar{{ $unidad->id }}">Editar</button>
                                    <button class="btn btn-info"     onclick="selector({{ $unidad->id }})" name="asignar" id="asignar{{ $unidad->id }}">Asignar</button>
                                    <button class="btn btn-danger"   onclick="eliminar()" id="eliminar">Eliminar</button>
                                </td>
                            </tr>
                                
                            @endforeach
                        </table>          
                                

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

