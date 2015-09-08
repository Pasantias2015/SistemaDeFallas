@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-12">
	<div class="panel panel-danger">
		<div class="panel-heading">Orden de Reparación </div>
		<div class="panel-body">
        @include('tools.errors')
        {!! Form::open(['route'=>'reparaciones.store','method'=>'POST']) !!}
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Datos de la Unidad</div>
                    <div class="panel-body">
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-5"><span>Unidad:</span></div>
                                    <div class="col-md-6">    
                                        <input type="text" disabled value="{{ $correctivo->serviciounidadoperador->unidad->nidentificacion }}" class="form-control">
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-5"><span>Kilometraje:</span></div>
                                    <div class="col-md-6">    
                                        <input type="text" disabled value="{{ $correctivo->kilometraje }} " class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">               
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-5"><span>Combustible: </span></div>
                                    <div class="col-md-6"> 
                                       <input type="text" disabled value="{{ $correctivo->serviciounidadoperador->unidad->modelo->combustible }} " class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group row">
                                   <div class="col-md-6"><span>Aceite de Caja</span></div>
                                   <div class="col-md-4">    
                                       <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                                       <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                                   </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">                       
                            <div class="col-md-6">
                                <div class="form-group row">
                                   <div class="col-md-6"><span>Aceite de Motor:</span></div>
                                   <div class="col-md-4">    
                                       <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                                       <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                                   </div>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-6"><span>Refrigerante: </span></div>
                                    <div class="col-md-4">    
                                        <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                                        <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>  
            </div>
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Datos Sobre la Falla</div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-4"><span>Sección de la fallas: </span></div>
                            <div class="col-md-8">    
                                <input type="text" disabled value="{{ $correctivo->seccion->descripcion }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"><span>Descripción del Trabajo a Realizar: </span></div>
                            <div class="col-md-8"><textarea name="descipcionuno" id="descipcionuno" class="form-control" rows="5"></textarea></div>
                        </div>        
                       
                    </div>
                </div>
            </div>
            <div class="col-md-12"> 
                <div  class="col-md-10 col-md-offset-1">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Solicitado Por:</div>
                        <div class="panel-body">
                            <div class="col-md-5"><span>Usuario:</span></div>
                            <div class="col-md-6"><input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control"></div>   
                                                  <input type="text" disabled value="{{ Auth::user()->id }}" class="hidden">   
                        </div>
                    </div>        
                </div>
            </div>
    @include('tools.botones-registrar')
        </div>
    </div>

</div>
@endsection