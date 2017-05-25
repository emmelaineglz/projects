<!DOCTYPE html>
<html>
<head>
	<title>ATM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>
<body>
	<div class="container-fluid">
			<div class="row">
				<div class="panel-heading"><a role="button" href="http://prueba.laravel:8000/" class="btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-chevron-left"></span> Volver Atras</a></div>
			</div>
			<div class="row">
					<div class="col-md-12">
							<div class="panel panel-default">
									<div class="descripcion">
										<p>Resultado de la Disposición del Cajero</p>
									</div>
									<div class="panel-body">
											<div class="table-responsive">
													<table class="table table-striped">
															<thead>
																	<tr>
																			<th class="titulo"><strong>Denominación</strong></th>
																	</tr>
															</thead>
															<tbody>
															@foreach($res as $re)
																	<tr>
																			<td>{{ $re }}</td>
																	</tr>
															@endforeach
															</tbody>
													</table>
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQfxTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
