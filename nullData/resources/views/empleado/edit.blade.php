@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Empleado</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ URL::route('empleados.update',['empleado' => $empleado->id]) }}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{ $empleado->nombre }}" required>
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $empleado->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('fecha_nac') ? ' has-error' : '' }}">
                                <label for="fecha_nac">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Fecha de Nacimiento" value="{{ $empleado->fecha_nac }}" required>
                                @if ($errors->has('fecha_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
