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
                                        <span>Seleccione un Servicio</span>
                                        <select class="form-control" name="tipo" id="">
                                            
                                            <option>Linea 1</option>
                                            <option>Linea 2</option>
                                            <option>Ruta 604</option>
                                            <option>Ruta 605</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span >Seleccione un Unidad</span>
                                        <select class="form-control" name="tipo" id="">
                                            
                                            <option>Y-001</option>
                                            <option>Y-002</option>
                                            <option>Y-003</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span>Seleccionar Operador</span>
                                        <select class="form-control" name="tipo" id="">
                                            
                                            <option>21295782-Leonardo Loyo</option>
                                            <option>23584785-Carlos Melendez</option>
                                            
                                            
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-12">
                                <span class="label label-success">Unidades Asignadas</span>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Servicio</th>
                                            <th>Unidad</th>
                                            <th>Operador</th>
                                            <th>Accion</th>
                                        </tr>
                                        <tr>
                                            <td>22/07/2015</td>
                                            <td>Linea 1</td>
                                            <td>Y-001</td>
                                            <td>21295782-Ruben Aguirre</td>
                                            <td>
                                            <a href="#" class="label label-warning">Editar</a>
                                            <a href="#" class="label label-success">ver</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22/07/2015</td>
                                            <td>Linea 2</td>
                                            <td>Y-002</td>
                                            <td>25844625-Carlos Mendoza</td>
                                            <td>
                                            <a href="#" class="label label-warning">Editar</a>
                                            <a href="#" class="label label-success">ver</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>




                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-8 form-group">
                                        <button type="submit" class="btn btn-success">Asignar</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>



                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection