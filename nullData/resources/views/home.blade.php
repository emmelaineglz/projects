@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Funcionalidad del Test</div>

                <div class="panel-body">
                    <ul>
                      <li>Integración de Login</li>
                      <li>Integración de seguridad con JWT</li>
                      <li>Integración de llaves unicas con uuidForKey</li>
                      <li>Creación, Edición y Borrado de Empleados</li>
                      <li>Creación, Edición y Borrado de Domicilios, ligados a un Empleado</li>
                      <li>Registro de varios domicilios por empleado</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
