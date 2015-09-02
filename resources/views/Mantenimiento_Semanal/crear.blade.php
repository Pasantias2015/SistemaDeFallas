@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Semanal</div>
        <div class="panel-body">
         	@include('tools.errors')
            {!! Form::open(['route'=>'semanal.store','method'=>'POST']) !!}
				<div class="row">
					<div class="row">
                		<div class="col-md-4">
                    		<div class="form-group row">
                        		<div class="col-md-4"><span>Fecha:</span></div>
                        		<div class="col-md-7">
                                    <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                        			<input type="text" name="usuario_id" class="hidden" value="{{ Auth::user()->id }}">
                        			<input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                        		</div>
                    		</div>
                		</div>
                		<div class="col-md-4">
                    		<div class="form-group row">
                        		<div class="col-md-3"><span>Unidad:</span></div>
                        		<div class="col-md-9">   
                            		<select name="serviciounidadoperador_id" id="unidad" class="form-control">
                                	@foreach($unidades as $unidad)
                                    <option value="{{ $unidad->id }}">{{$unidad->unidad->nidentificacion}}</option>    
                                	@endforeach
                            		</select>
                        		</div>
                    		</div>
               			</div>
                		<div class="col-md-4">
                    		<div class="form-group row">
                        		<div class="col-md-5"><span>Hora actual de motor:</span></div>
                        		<div class="col-md-6">
                            		{!! Form::text('horamotor',null,['class'=>'form-control']) !!}
                        		</div>
                    		</div>
                		</div>
            		</div>
				</div>

				<div class="row">
            		<div class="col-md-12">
                		<div class="panel panel-danger">
                    		<div class="panel-heading">Parametros a Revisar</div>
                    			 <div class="form-group row">
                      				<div class="col-md-8 col-md-offset-1"><span>Llenado del nivel del liquido del dispositivo del limpia parabrisas.</span></div>
                        			<div class="col-md-2">
                            			<select name="cnliquido" id="cnliquido" class="form-control">
                                			<option value="No">No</option>
                                			<option value="Si">Si</option>
                            			</select>    
                        			</div>
                    			</div>
                    				<div class="form-group row liquido">
                           				<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            			<div class="col-md-2">
                            			<input type="number" name="litrosl" id="litrosl" default="0" min="0" class="form-control"/></div>
                            			<div class="col-md-2"><span>Lts</span></div>
                        			</div>
                        		<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Revisión de la presion de los Cauchos.</span><strong>  ¿Se encuentran con la presion requerida?</strong></div>
                        			<div class="col-md-2">
                            			<select name="presionc" id="presionc" class="form-control">
                                			<option value="No">No</option>
                                			<option value="Si">Si</option>                                			
                            			</select>    
                        			</div>
                   				</div>
                   					<div class="form-group row presioncauchos">
                            			<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Psi/Bar Completó?</strong></div>
                            			<div class="col-md-2"><input type="number" name="cantidadpre" id="cantidadpre" default="0" min="0" class="form-control"/></div>
                            			<div class="col-md-2"><span>Psi/Bar</span></div>
                        			</div>
                        		<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Limpieza de la estera de Filtros del Aire Acondicionado.</span><strong>  ¿Lo ha Reemplazada?</strong></div>
                        			<div class="col-md-2">
                            			<select name="filtrosa" id="filtrosa" class="form-control">
                                			<option value="No">No</option>
                                			<option value="Si">Si</option>                                			
                            			</select>    
                        			</div>
                   				</div>
                   				<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Revision del Filtro previo de Combustible.</span><strong>  ¿Lo Reemplazado?</strong></div>
                        			<div class="col-md-2">
                            			<select name="filtropre" id="filtropre" class="form-control">
                                			<option value="Si">Si</option>
                                			<option value="No">No</option>    			
                            			</select>    
                        			</div>
                   				</div>

                        		<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Refrigerante.</span><strong>  ¿Esta en el Nivel Indicado?</strong></div>
                        			<div class="col-md-2">
                            			<select name="cantrefrigerante" id="cantrefrigerante" class="form-control">
                                			<option value="Si">Si</option>              
                                			<option value="No">No</option>
                            			</select>    
                        			</div>
                    			</div>
                        			<div class="form-group row refrigerantes">
                            			<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            			<div class="col-md-2"><input type="number" name="litrosref" id="litrosref" default="0" min="0" class="form-control"/></div>
                            			<div class="col-md-2"><span>Lts</span></div>
                        			</div>
                        		<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Aceite del Motor.</span><strong> ¿Esta en el Nivel Indicado?</strong></div>
                        			<div class="col-md-2">
                            			<select name="cnaceitem" id="cantaceitem" class="form-control">
                                			<option value="Si">Si</option>              
                                			<option value="No">No</option>
                            			</select>    
                        			</div>
                    			</div>
                        			<div class="form-group row aceitemotor">
                            			<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            			<div class="col-md-2">
                            			<input type="number" name="litrosam" id="litrosam" default="0" min="0" class="form-control"/></div>
                            			<div class="col-md-2"><span>Lts</span></div>
                        			</div>
                        		<div class="form-group row">
                        			<div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Aceite del Sistema Hidraulico.</span><strong> ¿Esta en el Nivel Indicado?</strong></div>
                        			<div class="col-md-2">
                            			<select name="cantaceiteh" id="cantaceiteh" class="form-control">
                                			<option value="Si">Si</option>              
                                			<option value="No">No</option>
                            			</select>    
                        			</div>
                    			</div>
                        			<div class="form-group row aceitesh">
                            			<div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            			<div class="col-md-2">
                            			<input type="number" name="litroshidra" id="litrosahidra" default="0" min="0" class="form-control"/></div>
                            			<div class="col-md-2"><span>Lts</span></div>
                        			</div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Revision del Estado de los Fuelles Neumáticos.</span><strong>¿Buen Estado?</strong></div>
                                    <div class="col-md-2">
                                        <select name="fuelle" id="fuelle" class="form-control">
                                            <option value="Si">Si</option>              
                                            <option value="No">No</option>
                                        </select>    
                                    </div>
                                </div>
                                    <div class="form-group row repararfuelle">
                                        <div class="col-md-7 col-md-offset-1"><strong>¿Lo ha sustituido?</strong></div>
                                        <div class="col-md-2">
                                            <select name="reparado" id="reparado" class="form-control">
                                                <option value="Si">Si</option>              
                                                <option value="No">No</option>
                                            </select>    
                                        </div>
                                    </div>

                		</div>
                			@include('tools.botones-registrar')
            		</div>
            			{!! Form::close() !!}
            	</div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
$(document).ready(function(){
        $(".liquido").toggle();
        $(".presioncauchos").toggle(); //por cada uno
        $(".refrigerantes").toggle();
        $(".aceitemotor").toggle();
        $(".aceitesh").toggle();
        $(".repararfuelle").toggle();

        

 $('#cnliquido').on('change', function() {
            if(this.value == "No"){
                $(".liquido").toggle();
            }
            else{
                 $(".liquido").toggle();
            };
});
 $('#presionc').on('change', function() {
            if(this.value == "No"){
                $(".presioncauchos").toggle();
            }
            else{
                 $(".presioncauchos").toggle();
            };

});
 
$('#cantrefrigerante').on('change', function() {
            if(this.value == "No"){
                $(".refrigerantes").toggle();
            }
            else{
                 $(".refrigerantes").toggle();
            };
});

$('#cantaceitem').on('change', function() {
            if(this.value == "No"){
                $(".aceitemotor").toggle();
            }
            else{
                 $(".aceitemotor").toggle();
            };
});

$('#cantaceiteh').on('change', function() {
            if(this.value == "No"){
                $(".aceitesh").toggle();
            }
            else{
                 $(".aceitesh").toggle();
            };
});

$('#fuelle').on('change', function() {
            if(this.value == "No"){
                $(".repararfuelle").toggle();
            }
            else{
                 $(".repararfuelle").toggle();
            };
});
 


 
});

</script>   
@endsection
