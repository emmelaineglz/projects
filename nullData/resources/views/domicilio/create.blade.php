@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar domicilio a Empleado</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ URL::route('domicilios.store') }}">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('empleado_id') ? ' has-error' : '' }}">
                                <label for="empleado_id">Empleado</label>
                                <select class="form-control" id="empleado_id" name="empleado_id" required>
                                    @foreach($empleados as $empleado)
                                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('empleado_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empleado_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('calle') ? ' has-error' : '' }}">
                                <label for="calle">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="calle" required>
                                @if ($errors->has('calle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('calle') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('colonia') ? ' has-error' : '' }}">
                                <label for="calle">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia" required>
                                @if ($errors->has('colonia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colonia') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                                <label for="calle">CP</label>
                                <input type="text" class="form-control" id="cp" name="cp" placeholder="cp" required>
                                @if ($errors->has('cp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cp') }}</strong>
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
