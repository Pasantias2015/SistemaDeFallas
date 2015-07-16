@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Editar Falla : {{ $falla->descripcion }}</div>
                    <div class="panel-body">
                        @include('tools.errors')
                            {!! Form::model($falla,['route'=>['fallas.update',$falla],'method'=>'PUT']) !!}
                            <div class=" col-md-12">
                              <div class="form-group">
                                  <span>Descripcion de la Falla</span>
                                      {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                              </div>
                            </div>

                            <div class="form-group">
                                <span>Seleccione una Categoria</span>
                                <select class="form-control" name="tipo" id="">
                                @foreach($categorias as $categoria)
                                    <option>{{ $categoria->descripcion }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <span>Seleccione un Tipo</span>
                                <select class="form-control" name="tipo" id="">
                                @foreach($tipos as $tipo)
                                    <option>{{ $tipo->descripcion }}</option>
                                @endforeach
                                </select>
                            </div>

                            

                            <div class="col-md-12">
                                <div class="col-md-offset-4 col-md-8 form-group">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                    <button type="submit" class="btn btn-danger">Regresar</button>

                                </div>
                            </div>
                            {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection