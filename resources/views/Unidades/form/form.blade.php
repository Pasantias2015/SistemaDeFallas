<div class="form-group">
        <span>Numero de Identificacion</span>
        {!! Form::text('nidentificacion',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
       <span>Numero de VIN</span>
        {!! Form::text('vin',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
        <span>Serial de Carroceria</span>
        {!! Form::text('serialcarroceria',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
        <span>Serial del Motor</span>
        {!! Form::text('serialmotor',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
        <span>Año:</span>
        {!! Form::number('year',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
        <span>Uso: </span>
         <select name="uso" class="form-control">
            <option >Comercial</option>                                      
            <option >No Comercial</option>                                      
        </select>
</div>
    