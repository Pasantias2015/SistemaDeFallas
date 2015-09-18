@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
		<div class="panel-heading">Almacen </div> <!-- faltan los filtros -->
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!}          
            <div class="col-md-6 col-md-offset-4"><span>¿Que Desea Registrar en el Almacen?: </span></div>
            <div class="col-md-10 col-md-offset-2">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pieza1">Pieza Yutong</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza2">Pieza Neoplan</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Herramienta</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#articulo">Articulo</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#caja">Caja</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fluidos">Fluidos</button>
            </div>
            <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                        @foreach($almacenes as $almacen)
                        <tr>                            
                            <td>{{ $almacen->id }}</td>
                            <td>{{ $almacen->codigo }}</td>
                            <td>{{ $almacen->descripcion }}</td>
                            <td>{{ $almacen->cantidad }}</td>
                            <td>{{ $almacen->tipo }}</td>
                            <td>
                                <a href="{{ route('almacen.edit',$almacen) }}" class="btn btn-info">Actualizar Cantidad</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $almacenes->render() !!}
                </div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
<script>
$(document).ready(function(){
        $('#marca').on('change',function(e){
        
            var marca_id = e.target.value;
            $.get('/ajax-modelo?marca_id='+marca_id,function(data){
                //$('#modelo').empty();
                $.each(data,function(index,modeloObj){
                    $('#modelo').append('<option value="'+modeloObj.id+'">'+modeloObj.codigo+'</option>');
                });
            });
            console.log(e);
        });
        $('#modelo').on('change',function(e){
        
            var modelo_id = e.target.value;
            $.get('/ajax-seccion?modelo_id='+modelo_id,function(data){
               // $('#seccion').empty();
                $.each(data,function(index,seccionObj){
                    $('#seccion').append('<option value="'+seccionObj.id+'">'+seccionObj.descripcion+'</option>');
                });
            });
        
        });
        $('#seccion').on('change',function(e){
                
            var seccion_id = e.target.value;
            $.get('/ajax-grupo?seccion_id='+seccion_id,function(data){
                //$('#grupo').empty();
                $.each(data,function(index,grupoObj){
                    $('#grupo').append('<option value="'+grupoObj.id+'">'+grupoObj.descripcion+'</option>');
                });
            });
           
        });
        $('#grupo').on('change',function(e){
                
            var grupo_id = e.target.value;
            $.get('/ajax-pieza?grupo_id='+grupo_id,function(data){
                //$('#pieza').empty();
                $.each(data,function(index,piezaObj){
                    $('#pieza').append('<option value="'+piezaObj.codigo+piezaObj.descripcion+'">'+piezaObj.descripcion+'</option>');
                });
            });
          
        });

    });

</script>
@endsection

<!-- Modal Herramienta-->
<div class="modal fade" id="herramienta" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Herramienta al Almacen
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                <div class="form-group">
                    <span>Herramientas: </span>
                    <select name="codigo" class="form-control">
                        @foreach($herramientas as $herramienta)
                            <option value="{{ $herramienta->codigo." : ".$herramienta->descripcion }}">{{ $herramienta->codigo."-".$herramienta->descripcion }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span>Descripción: </span>
                    {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <span>Cantidad: </span>
                    {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                        <input type="hidden" name="tipo" value="Herramienta">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Registrar</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
      </div>
    </div>
</div>

<!-- Modal Pieza Neoplan-->
<div class="modal fade" id="pieza2" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Pieza Neoplan al Almacen
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                <div class="form-group">
                    <span>Piezas Neoplan: </span>
                    <select name="codigo" class="form-control">
                        @foreach($piezasneo as $piez)
                            <option value="{{ $piez->codigo." : ".$piez->descripcion }}">{{ $piez->codigo."-".$piez->descripcion }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span>Descripción: </span>
                    {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <span>Cantidad: </span>
                    {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                        <input type="hidden" name="tipo" value="Pieza Neoplan">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Registrar</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
      </div>
    </div>
</div>

<!-- Modal Articulo -->
<div class="modal fade" id="articulo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Articulo al Almacen
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                    <div class="form-group">
                        <span>Codigo: </span>
                        {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Descripción: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Cantidad: </span>
                         {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="tipo" value="Articulo">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
 
<!--  Modal Caja -->
<div class="modal fade" id="caja" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Articulo al Almacen
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                    <div class="form-group">
                        <span>Caja: </span>
                        <select name="codigo" class="form-control">
                            @foreach($cajas as $caja)
                                <option value="{{ $caja->id." : ".$caja->descripcion }}">{{ $caja->id."-".$caja->descripcion }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Descripción: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Cantidad: </span>
                         {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="tipo" value="Caja">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Registrar</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal Fluidos -->
<div class="modal fade" id="fluidos" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Fluidos al Almacen
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                    <div class="form-group">
                        <span>Codigo: </span>
                        {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Descripción: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                         <span>Cantidad(Lts): </span>{!! Form::number('cantidad',null,['class'=>'form-control']) !!} 
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="tipo" value="Fluidos">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Registrar</button>
              <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal Pieza-->
<div class="modal fade" id="pieza1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      
      <div class="modal-content panel panel-danger">
        <div class="modal-header panel-heading">
           Ingresar Pieza Yutong al Almacen
        </div>
        <div class="modal-body">
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
            <div class="form-group">
                <span>Marca: </span>
                <select name="marca" id="marca" class="form-control">
                    <option default>Seleccione</option>
                        @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>    
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Modelo: </span>
                <select name="modelo" id="modelo" class="form-control">
                    <option default>Seleccione</option>
                </select>
            </div>
            <div class="form-group">
                <span>Sistema: </span>
                <select name="seccion" id="seccion" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Grupo: </span>
                <select name="grupo" id="grupo" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Pieza: </span>
                <select name="codigo" id="pieza" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Descripción: </span>
                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <span>Cantidad: </span>
                {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
            </div> 
            <div class="form-group">
                    <input type="hidden" name="tipo" value="Pieza Yutong">
            </div>       
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      {!! Form::close() !!}
      </div>
    </div>
</div>

