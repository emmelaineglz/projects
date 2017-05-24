@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Domicilio</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ URL::route('domicilios.update',['domicilio' => $domicilio->id]) }}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group{{ $errors->has('domicilio_id') ? ' has-error' : '' }}">
                                <label for="domicilio_id">domicilio</label>
                                <select class="form-control" id="domicilio_id" name="domicilio_id" required>
                                  @foreach($empleados as $empleado)
                                      <option value="{{ $empleado->id }}" {{ $empleado->id == $domicilio->empleado_id ? 'selected="selected"' : '' }}>{{ $empleado->nombre }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('domicilio_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('domicilio_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('calle') ? ' has-error' : '' }}">
                                <label for="calle">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="calle" value="{{ $domicilio->calle }}" required>
                                @if ($errors->has('calle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('calle') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('colonia') ? ' has-error' : '' }}">
                                <label for="calle">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia" value="{{ $domicilio->colonia }}" required>
                                @if ($errors->has('colonia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colonia') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                                <label for="calle">CP</label>
                                <input type="text" class="form-control" id="cp" name="cp" placeholder="cp" value="{{ $domicilio->cp }}" required>
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
