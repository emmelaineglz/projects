<!DOCTYPE html>
<html>
<head>
	<title>ATM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>
<body>
	<div class="container">
		<div class="cajero-automatico">
			<div class="row">
				<div class="col-xs-12">
					<div class="titulo">
						<h1>Cajero Autom&aacute;tico</h1>
					</div>
					<div class="descripcion">
						<p>Denominación Disponible en Cajero</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<div class="disponibilidad">
						<div class="icono">
					 		<i class="glyphicon glyphicon-usd"></i>
					 		<span>100</span>
					 	</div>
						<div class="icono">
					 		<i class="glyphicon glyphicon-usd"></i>
					 		<span>50</span>
					 	</div>
						<div class="icono">
					 		<i class="glyphicon glyphicon-usd"></i>
					 		<span>20</span>
					 	</div>
						<div class="icono">
					 		<i class="glyphicon glyphicon-usd"></i>
					 		<span>10</span>
					 	</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<div class="formulario">
						<form class="form-inline" method="POST" action="{{ URL::route('cajeros.atm') }}">
              {!! csrf_field() !!}
						  <div class="form-group">
						    <label class="sr-only" for="importe">Importe</label>
						    <div class="input-group">
						      <div class="input-group-addon">$</div>
						      <input type="text" class="form-control" name="importe" id="importe" placeholder="Importe">
						      <div class="input-group-addon">.00</div>
						    </div>
						  </div>
						  <button type="submit" class="btn btn-lg btn-primary">Retirar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQfxTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
