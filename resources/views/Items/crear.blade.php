@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
      <div class="panel panel-danger">
            <div class="panel-heading">items </div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open(['route'=>'items.store','method'=>'POST']) !!}

                  <div class="col-md-12">
                        
                        <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Pertenece a Mantenimiento: </span>
                                <select name="mantenimiento_id" class="form-control">
                                      @foreach($mantenimientos as $mantenimiento)
                                      <option value="{{ $mantenimiento->id }}">{{ $mantenimiento->nombre }}</option>    
                                      @endforeach
                                </select>
                        </div>
                        @include('tools.botones-registrar')
                  </div>
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Mantenimiento</th>
                                    <th>Accion</th>
                              </tr>
                              @foreach($items as $item)
                              <tr>                                
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->codigo }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->mantenimiento->nombre }}</td>
                              <td>
                                <a href="{{ route('items.edit',$item) }}" class="btn btn-info">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                              </td>                               
                              </tr>
                              @endforeach
                        </table>
                        {!! $items->render() !!}
                  </div>
                  {!! Form::close() !!}
            </div>

      </div>

</div>
@endsection