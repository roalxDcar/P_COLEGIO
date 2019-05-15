@extends('layouts.app')
@section('content')
 <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Institución</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="admininstitution.php">Institución</a></li>
              <li role="presentation"><a href="provider.html">Proveedores</a></li>
              <li role="presentation" class="active"><a href="category.html">Contratos</a></li>
              <li role="presentation"><a href="section.html">Secciones</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/category.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos contratos del personal, debes de llenar el siguiente formulario para registrar el contrato
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo contrato</li>
                      <li><a href="listcategory.html">Listado de contratos</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar una nuevo contrato</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                       		<legend>Datos personales</legend>
                       		<br>
                       		<div class="group-material">
                                <span>Usuario</span>
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el turno que labora el docente" name="gender">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Tipo de contrato</span>
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el turno que labora el docente" name="gender">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
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
		                    <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el código de categoría"  required="" pattern="[0-9]{1,200}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Pago</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el código de categoría"  required="" pattern="[0-9]{1,200}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Total de horas</label>
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