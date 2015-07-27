@extends('app')

@include('tools.sidebar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Registrar Incidencia</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::open() !!}
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon " id="basic-addon1">Unidad</span>
                                    
                                    <select class="selectpicker show-tick form-control" >
                                        <option>Cabudare</option>
                                        <option>Lara</option>
                                        <option>Tamaca</option>
                                    </select>

                                </div>
                            </div>
                            {!! Form::label('Unidad') !!}
                            {!! Form::text('unidad',null) !!}
                        </div>                                
                        <div class="col-md-12">
                            <div class="col-md-offset-4 col-md-8 form-group">
                                <button type="submit" class="btn btn-success">Registrar</button>
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