@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Domicilios <a role="button" href="{{ URL::route('domicilios.create') }}" class="btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar Domicilio</a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><strong>Empleado</strong></td>
                                        <td><strong>Calle</strong></td>
                                        <td><strong>Colonia</strong></td>
                                        <td><strong>CP</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($domicilios as $domicilio)
                                    <tr>
                                        <td>{{ $domicilio->empleado->nombre }}</td>
                                        <td>{{ $domicilio->calle }}</td>
                                        <td>{{ $domicilio->colonia }}</td>
                                        <td>{{ $domicilio->cp }}</td>
                                        <td>{{ $domicilio->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a role="button" href="{{ URL::route('domicilios.delete',['domicilio' => $domicilio->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                                            <a role="button" href="{{ URL::route('domicilios.edit',['domicilio' => $domicilio->id]) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $domicilios->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
