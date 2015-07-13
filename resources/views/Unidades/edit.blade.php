@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Editar Unidad : {{ $unidad->nidentificacion }}</div>
                    <div class="panel-body">
                        @include('tools.cabecera')
                        {!! Form::model($unidad,['route'=>['unidades.update',$unidad],'method'=>'PUT']) !!}


                        <div class=" col-md-12">
                            @include('Unidades.form.form')
                            <div class="col-md-12">
                                <div class="col-md-offset-4 col-md-8 form-group">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                    <button type="button" class="btn btn-danger">Regresar</button>
                                </div>
                            </div>



                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection