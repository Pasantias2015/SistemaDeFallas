@extends('app')

@include('tools.sidebar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Operadores por Servicios</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        
                        <div class="col-md-12">
                            
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Servicio</th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>2</td>
                            </tr>
                        </table>                
                        
                                

                            

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
<script>
    /*
@foreach($operadores as $operador)
                            <tr id="row{{ $operador->id }}">
                                <td>
                                    <label  id="label{{ $operador->id }}">{{ $operador->servicio->descripcion }}</label>
                                    <select name="servicio" id="servicio{{ $operador->id }}" name="select" class="form-control">
                                        @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{ $operador->persona->cedula }}</td>
                                <td>{{ $operador->persona->nombrecompleto }}</td>
                                <td>
                                    <button class="btn btn-success"  onclick="selector({{ $operador->id }})" id="editar{{ $operador->id }}">Editar</button>
                                    <button class="btn btn-info"     onclick="selector({{ $operador->id }})" name="asignar" id="asignar{{ $operador->id }}">Asignar</button>
                                    <button class="btn btn-danger"   onclick="eliminar()" id="eliminar">Eliminar</button>
                                </td>
                            </tr>
                                
                            @endforeach
    */
</script>