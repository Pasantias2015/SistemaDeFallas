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
                    $('#pieza').append('<option value="'+piezaObj.codigo+'">'+piezaObj.descripcion+'</option>');
                });
            });
          
        });
        $('#mecanico').on('change',function(e){
        
            var mecanico_id = e.target.value;
            $.get('/ajax-mecanico?mecanico_id='+mecanico_id,function(data){
                $('#cedula').empty();
                $.each(data,function(index,cedulaObj){
                    $('#cedula').append('<option value="'+cedulaObj.id+'">'+cedulaObj.cedula+'</option>');
                });
            });
            console.log(e);
        });

    });
