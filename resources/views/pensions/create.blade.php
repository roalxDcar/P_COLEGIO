@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Nueva Pension</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Agregar nuevo</li>
                <li><a href="{{ route('pensiones.index') }}">listado de pensiones</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Registrar nueva Pension</div>
        <form method="POST" action="{{ route('pensiones.store') }}">
            @csrf
            <div class="row">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Descripcion de la pension" required="" maxlength="70" data-toggle="tooltip" data-placement="top" name="descripcion" title="Escribe la descripcion de la pension">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Descripcion</label>
                    </div>
                   <div class="group-material">
                        <span>Nivel</span>
                        <select name="nivel" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección encargada del docente">
                            <option value="" disabled="" selected="">Selecciona un nivel</option>
                            <option value=1>Primaria</option>
                            <option value=2>Secundaria</option>
                        </select>
                    </div>
                    <div class="group-material">
                        <input type="numeric" class="material-control tooltips-general" placeholder="Monto de la pension" required=""  maxlength="50" data-toggle="tooltip" data-placement="top" title="Monto de la pension" name="monto">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Monto</label>
                    </div>
                    <div class="group-material">
                        <input type="date" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Fecha de inicio de pension" name="fecha_inicio">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Fecha inicio</label>
                    </div>
                    <div class="group-material">
                        <input type="date" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Fecha final de pension" name="fecha_final">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Fecha Final</label>
                    </div>
                    <p class="text-center">
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p> 
               </div>
           </div>
        </form>
    </div>
</div>
@endsection