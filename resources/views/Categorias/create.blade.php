@extends('app')

@include('tools.sidebar')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Nueva Categoria De Fallas</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}


                                @include('Categorias.form.form')

                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-8 form-group">
                                        <button type="submit" class="btn btn-success">Crear</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                                @if(count($categorias)>0)
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Accion</th>
                                        </tr>
                                        @foreach($categorias as $categoria)
                                        <tr>
                                            <td>
                                                {{ $categoria->id  }}
                                            </td>
                                            <td>
                                                {{ $categoria->descripcion  }}
                                            </td>
                                            <td>
                                                <a href="{{ route('categorias.edit',$categoria) }}">Editar</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @else
                                <div class="panel-heading">Ninguna Categoria registrada</div>
                                @endif



                        {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection