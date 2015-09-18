@extends('app') 
@include('tools.sidebar')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Registro de Personas</div>
					<div class="panel-body">
						@include('tools.errors')
						{!! Form::open(['route'=>'personas.store','method'=>'POST','files'=>'true']) !!}
							@include('Personas.datos')
							@include('tools.botones-registrar')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('#pais').on('change',function(e){
		
			var pais_id = e.target.value;
			$.get('/ajax-estado?pais_id='+pais_id,function(data){
				$('#estado').empty();
				$.each(data,function(index,estadoObj){
					$('#estado').append('<option value="'+estadoObj.id+'">'+estadoObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#estado').on('change',function(e){
		
			var estado_id = e.target.value;
			$.get('/ajax-ciudad?estado_id='+estado_id,function(data){
				$('#ciudad').empty();
				$.each(data,function(index,ciudadObj){
					$('#ciudad').append('<option value="'+ciudadObj.id+'">'+ciudadObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#ciudad').on('change',function(e){
		
			var ciudad_id = e.target.value;
			$.get('/ajax-municipio?ciudad_id='+ciudad_id,function(data){
				//$('#municipio').empty();
				$.each(data,function(index,municipioObj){
					$('#municipio').append('<option value="'+municipioObj.id+'">'+municipioObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#municipio').on('change',function(e){
		
			var municipio_id = e.target.value;
			$.get('/ajax-parroquia?municipio_id='+municipio_id,function(data){
				//$('#parroquia').empty();
				$.each(data,function(index,parroquiaObj){
					$('#parroquia').append('<option value="'+parroquiaObj.id+'">'+parroquiaObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		$('#municipio').on('change',function(e){
		
			var municipio_id = e.target.value;
			$.get('/ajax-parroquia?municipio_id='+municipio_id,function(data){
				$('#parroquia').empty();
				$.each(data,function(index,parroquiaObj){
					$('#parroquia').append('<option value="'+parroquiaObj.id+'">'+parroquiaObj.descripcion+'</option>');
				});
			});
			console.log(e);
		});
		 
	$('#coordinacion').on('change',function(e){      
            var coordinacion = e.target.value;
            $.get('/ajax-cargo?coordinacion='+coordinacion,function(data){
                $('#cargo').empty();
                $.each(data,function(index,cargoObj){
                    $('#cargo_id').append('<option value="'+cargoObj.id+'">'+cargoObj.nombre+'</option>');
                });
            });
            console.log(e);
        });
	});


	 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	</script>
@endsection