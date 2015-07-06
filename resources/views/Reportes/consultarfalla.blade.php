@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-danger">
				<div class="panel-heading">
					Grafica
				</div>
				<div class="col-md-2 well">
				<label for="">Unidades</label>
					<select name="" id="">
						<option>Unidad Y2-112</option>
						<option>Unidad Y2-113</option>
						<option>Unidad Y2-114</option>
						<option>Unidad Y2-115</option>
					</select>

				<label for="">Falla</label>
				<select name="" id="">
					<option>Bujia</option>
					<option>Cauchos</option>
					<option>Modulo</option>
					<option>Bobina</option>
				</select>
				
				<label for="">Periodo</label>
				<select name="" id="">
					<option>Enero - Febrero - Marzo</option>
					<option>Abril - Mayo - Junio</option>
					<option>Julio - Agosto - Septiembre</option>
					<option>Octubre - Noviembre - Diciembre</option>
				</select>
				<button class="btn btn-danger col-md-12">Ver</button>
								</div>
				<div class="col-md-offset-1 col-md-9 well">
					<img src="images/grafico.jpg" alt="">
					<div class="col-md-12">
						<button class="btn btn-success right">Exportar Pdf</button>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
