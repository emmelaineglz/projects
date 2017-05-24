@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="{{ URL::route('empleados.destroy',['empleado' => $empleado->id]) }}">
                    <div class="panel panel-default">
                        <div class="panel-heading">Eliminar Empleado</div>
                        <div class="panel-body">
                            <p>¿Seguro desea eliminar permanentemente el Empleado: <del>{{ $empleado->email }}</del> ?</p>
                            <input type="hidden" name="_method" value="DELETE" />
                            {!! csrf_field() !!}
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                            <a class="btn btn-primary btn-sm" href="{{ URL::route('empleados') }}" role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
