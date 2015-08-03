@extends('app')

@include('tools.sidebar')



@section('content') 
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Editar Unidad : {{ $unidad->nidentificacion }}</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::model($unidad,['route'=>['unidades.update',$unidad],'method'=>'PUT']) !!}


                            <div class=" col-md-12">
                            @include('Unidades.form.form')
                            </div>

                            @include('tools.botones')
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection