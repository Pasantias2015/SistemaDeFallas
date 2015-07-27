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
                            <tr>
                            @if($opc)
                                <td><select class="selectpicker show-tick form-control" >
                                        @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}">{{ $servicio->descripcion }}</option>
                                        @endforeach
                                    </select></td> 
                            @else
                                <td>Linea 1</td>
                            @endif
                                                               
                                <td>Y-001</td>                                
                                <td>
                                    <button class="btn btn-info" onclick="Asignar()">Asignar</button>
                                    <button class="btn btn-danger" >Eliminar</button>
                                </td>                                
                            </tr>
                        </table>          
                                

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function Asignar() {

    alert("asignastes");
}
</script>



@endsection