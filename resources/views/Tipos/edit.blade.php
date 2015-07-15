
@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Editar Tipo : {{ $tipo->descripcion }}</div>
                    <div class="panel-body">
                        @include('tools.errors')
                            {!! Form::model($tipo,['route'=>['tipos.update',$tipo],'method'=>'PUT']) !!}


                            @include('Tipos.form.form')

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