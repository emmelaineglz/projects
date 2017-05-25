@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Empleados <a role="button" href="{{ URL::route('empleados.create') }}" class="btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar Empleado</a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><strong>Nombre</strong></td>
                                        <td><strong>Email</strong></td>
                                        <td><strong>Fecha de Nacimiento</strong></td>
                                        <td><strong>Acciones</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empleados as $empleado)
                                    <tr>
                                        <td>{{ $empleado->nombre }}</td>
                                        <td>{{ $empleado->email }}</td>
                                        <td>{{ $empleado->fecha_nac }}</td>
                                        <td>{{ $empleado->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a role="button" href="{{ URL::route('empleados.delete',['empleado' => $empleado->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                                            <a role="button" href="{{ URL::route('empleados.edit',['empleado' => $empleado->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $empleados->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
