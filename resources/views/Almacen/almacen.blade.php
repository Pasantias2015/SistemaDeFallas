@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading">Almacen </div> <!-- faltan los filtros -->
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!}          
            <div class="col-md-10">
                <span>¿Que Desea Registrar en el Almacen?: </span>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza1">Pieza</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Herramienta</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#articulo">Articulo</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#caja">Caja</button>
            </div>
            <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($almacenes as $almacen)
                        <tr>                            
                            <td>{{ $almacen->id }}</td>
                            <td>{{ $almacen->codigo }}</td>
                            <td>{{ $almacen->descripcion }}</td>
                            <td>{{ $almacen->cantidad }}</td>
                            <td>{{ $almacen->tipo }}</td>
                            <td>
                                <a href="{{ route('almacen.edit',$almacen) }}" class="btn btn-info">Modificar</a>
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
{!! Html::script('js/selectmultiples.js') !!}    

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
                    <span>Descripcion: </span>
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
                        <span>Descripcion: </span>
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
                        <span>Descripcion: </span>
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
              <button type="submit" class="btn btn-warning">Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
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
           Ingresar Pieza al Almacen
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
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <span>Sistema: </span>
                <select name="seccion" id="seccion" class="form-control">
                    <option value=""></option>          
                  </select>
            </div>
            <div class="form-group">
                <span>Grupo: </span>
                <select name="grupo" id="grupo" class="form-control">
                    <option value=""></option>          
                  </select>
            </div>
            <div class="form-group">
                <span>Pieza: </span>
                <select name="codigo" id="pieza" class="form-control">
                    <option value=""></option>          
                  </select>
            </div>
            <div class="form-group">
                <span>Descripcion: </span>
                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <span>Cantidad: </span>
                {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
            </div> 
            <div class="form-group">
                    <input type="hidden" name="tipo" value="Pieza">
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

