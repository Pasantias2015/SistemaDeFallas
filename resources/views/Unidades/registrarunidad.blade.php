@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Nueva Unidad</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::open(['route'=>'unidades.store','method'=>'POST']) !!}

                                <div class=" col-md-12">

                                    @include('Unidades.form.form')

                                    <div class="form-group">
                                            <span>Modelo: </span>
                                            <select name="modelo_id" class="form-control">
                                                 @foreach($modelos as $modelo)
                                                    <option value="{{ $modelo->id }}">{{ $modelo->descripcion." - ".$modelo->combustible." - ".$modelo->year." - ".$modelo->dimension." - ".$modelo->transmision }}</option>    
                                                 @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-8 form-group">
                                        <button type="submit" class="btn btn-success">Crear</button>
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