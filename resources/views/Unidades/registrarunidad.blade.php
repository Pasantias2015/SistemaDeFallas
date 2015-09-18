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
<script type="text/javascript">
    $(document).ready(function(){
        $('#marca').on('change',function(e){
        
            var marca_id = e.target.value;
            $.get('/ajax-modelo?marca_id='+marca_id,function(data){
                $('#modelo').empty();
                $.each(data,function(index,modeloObj){
                    $('#modelo').append('<option value="'+modeloObj.id+'">'+modeloObj.codigo+'</option>');
                });
            });
            console.log(e);
        });
    });
</script>
@endsection
