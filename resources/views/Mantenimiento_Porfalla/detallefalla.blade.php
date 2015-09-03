@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Piezas Remplazadas</div>
                    <div class="panel-body">
                    <div class="col-md-12">
                         {!! Form::open(['route'=>'pporfalla.store','method'=>'POST']) !!} 
                            <div class="form-group">
                                <span>Piezas Neoplan: </span>
                                <select name="id_piezaneoplan" class="form-control">
                                    @foreach($piezasneo as $piez)
                                        <option value="{{ $piez->id }}">{{ $piez->codigo."-".$piez->descripcion }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <span>Cantidad: </span>
                                {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                                <input class="hidden" type="text" name="id_porfallas" value="{{ $fallaid }}" class="form-control">

                            </div>
                        </div>
                        @include('tools.botones-registrar')
                        {!! Form::close() !!}
                    
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Pieza Neoplan</th>
                                    <th>Correctivo</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($piezas as $pieza)
                                <tr>                            
                                    <td>{{ $pieza->id }}</td>
                                    <td>{{ $pieza->id_piezaneoplan}}</td>
                                    <td>{{ $pieza->id_porfallas }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Eliminar</a>
                                    </td>                           
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection