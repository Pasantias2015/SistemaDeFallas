@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-danger">
                <div class="panel-heading">Listado De Operadores</div>
        <table class="table table-bordered table-striped">
        <tr>
            <th>id</th>
            <th>Cedula</th>
            <th>Nombre Completo</th>
            <th>Accion</th>

        </tr>
        <tbody>
        @foreach($operadores as $operador)
        <tr>
        
            <td>{{ $operador->id}}</td>
            <td><img src="{{ $operador->persona->foto}}" alt=""></td>
            <td>{{ $operador->persona->nombrecompleto}}</td>
            <td><a href="" class="label label-success">Ver</a></td>
        
        </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
</div>
</div>
</div>
@endsection