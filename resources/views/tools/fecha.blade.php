<div class="row">
    <div class="col-md-8 col-md-offset-3"><h4>Seleccione el Rango de Fechas:</h4></div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group row">
            <div class="col-md-5"><span>Desde:</span></div>
            <div class="col-md-6">   
                <input  type="date" name="fechainicio" class="form-control" max="<?php echo date("Y-m-d");?>">
             </div>
        </div>
    </div>
    <div class="col-md-5 ">
        <div class="form-group row">
            <div class="col-md-5"><span>Hasta:</span></div>
            <div class="col-md-6">   
               <input  type="date" name="fechafin" class="form-control" max="<?php echo date("Y-m-d");?>">
             </div>
        </div>
    </div>
</div>