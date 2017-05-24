<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datepicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		<div class="row">
			<div class="header">
				<div class="col-xs-3"><img class="logo" src="../img/logos/logo_supply_hor.png"/></div>
				<div class="col-xs-5">
					<div class="titulo">
						<span>EMPRESA: XXX SERVICIOS SA DE CV</span><br/>
						<span>RFC: XXX000000XXX</span><br/>
						<span>PROVEEDOR: XXX CORPORATIVO SA DE CV</span><br/>
						<span>RFC: XXX000000XXX</span><br/>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="header-iconos">
						<img src="../img/sc_iconos/calendario_s.png"/>
						<label> Fecha de: </label>
						<input class="datepicker datepickerInput" value="" name="fecha_inicial" id="fecha_inicial"/>
						<label> a: </label>
						<input class="datepicker datepickerInput" value="" name="fecha_final" id="fecha_final"/>
						<img onclick="btn_newFactura();" src="../img/sc_iconos/cargar_archivos_s.png"/>
						<img id="btnResfresh" src="../img/sc_iconos/lupa_icono_s.png"/>
						<img id="btnCerrarSesion" src="../img/sc_iconos/cerrar_sesion_s.png"/>
					</div>
				</div>
			</div>
		</div>
	@yield('content')
	</div>
</body>
<script type="text/javascript">
$('.datepicker').datepicker({
    format: "dd/mm/yyyy",
    language: "es",
    autoclose: true
});
</script>
