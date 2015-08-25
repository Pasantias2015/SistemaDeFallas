<div class="row">
    <div class="col-md-8 col-md-offset-3"><h4>Para Generar los Reportes debe Escoger las Fechas:</h4></div>
    <div class="col-md-5 col-md-offset-1">
        <div class="form-group row">
            <div class="col-md-5"><span>Fecha Inicio:</span></div>
            <div class="col-md-6">   
                <input  type="date" name="fechainicio" class="form-control" max="<?php echo date("Y-m-d");?>">
             </div>
        </div>
    </div>
    <div class="col-md-5 ">
        <div class="form-group row">
            <div class="col-md-5"><span>Fecha Fin:</span></div>
            <div class="col-md-6">   
               <input  type="date" name="fechafin" class="form-control" max="<?php echo date("Y-m-d");?>">
             </div>
        </div>
    </div>
</div>