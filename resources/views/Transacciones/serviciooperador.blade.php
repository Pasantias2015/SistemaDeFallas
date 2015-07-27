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
                        {!! Form::open() !!}
                        <div class="col-md-12">
                            
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Servicio</th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Accion</th>
                            </tr>
                            <tr>
                            @if(Auth::guest())
                                <td><select class="selectpicker show-tick form-control" >
                                        @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>
                                        @endforeach
                                    </select></td> 
                            @else
                                <td>Linea 1</td>
                            @endif
                                                               
                                <td>21295782</td>                                
                                <td>Leonardo Antonio Loyo</td>                                
                                <td><a href=""><button class="btn btn-info">Asignar</button></a></td>                                
                            </tr>
                        </table>               
                        
                                

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection