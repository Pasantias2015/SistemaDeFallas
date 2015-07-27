@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Nueva Falla</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::open(['route'=>'fallas.store','method'=>'POST','files'=>'true']) !!}


                                <div class="col-md-12">
									<div class="form-group">
										<span>Seleccione una Categoria</span>
										<select class="form-control" name="categoria" id="categoria">
											@foreach($categorias as $categoria)
											<option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
											@endforeach 
											
										</select>
									</div>
									<div class="form-group">
										<span>Seleccione un Tipo</span>
										<select class="form-control" name="tipo" id="">
											@foreach($tipos as $tipo)
											<option value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option>
											@endforeach
										</select>
									</div>
                                	<div class="form-group">
								      <span>Descripcion</span>
								      {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
									</div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-8 form-group">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                                @if(count($fallas)>0)
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th>Tipo</th>
                                        <th>Descripcion</th>
                                        <th>Accion</th>
                                        </tr>
                                        @foreach($fallas as $falla)
                                        
                                        
                                        
                                        
                                        <tr>
                                            <td>{{ $falla->id }}</td>
                                            <td>{{ $falla->Categoria }}</td>
                                            <td>{{ $falla->Tipo }}</td>
                                            <td>{{ $falla->Falla }}</td>
                                            <td>
                                            <a href="{{ route('fallas.edit',$falla->id) }}" class="label label-success">Editar</a>
                                            <a href="#" class="label label-danger">Eliminar</a>
                                            </td>
                                        </tr>



                                        @endforeach
                                    </table>
                                </div>
                                @else
                                <div class="panel-heading">Ninguna Falla Registrada</div>
                                @endif



                        {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
    $('#categoria').on('change',function(e){
        colsole.log(e);
        var cat_id = e.target.value;

        $.get('/ajax-tipo');
    });
</script>


@endsection