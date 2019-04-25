@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Pensiones</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li><a href="{{ route('pensiones.create') }}">Agregar nuevo</a></li>
                <li class="active">listado de pensiones</li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h2 class="text-center all-tittles">Lista de pensiones</h2>
    <div class="div-table">
        <div class="div-table-row div-table-head">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">Descripcion</div>
            <div class="div-table-cell">Nivel</div>
            <div class="div-table-cell">Monto</div>
            <div class="div-table-cell">Fecha inicial</div>
            <div class="div-table-cell">Fecha de vencimiento</div>
            <div class="div-table-cell">Estado</div>
            <div class="div-table-cell">Actualizar</div>
        </div>  
        @foreach($pensiones as $p)
	        <div class="div-table-row">
	            <div class="div-table-cell">{{ $p->id }}</div>
	            <div class="div-table-cell">{{ $p->descripcion }}</div>
	            @if($p->nivel == 1)
	            	<div class="div-table-cell">Primaria</div>
	            @else
	            	<div class="div-table-cell">Secundaria</div>
	            @endif
	            <div class="div-table-cell">{{ $p->monto }}</div>
	            <div class="div-table-cell">{{ $p->fecha_inicio }}</div>
	            <div class="div-table-cell">{{ $p->fecha_final }}</div>
	            <div class="div-table-cell">
	                <button type="submit" class="btn btn-info tooltips-general" data-toggle="tooltip" data-placement="top" title="Cuenta desactivada, pulsa el botón para activarla"><i class="zmdi zmdi-swap"></i></button>
	            </div>
	            <div class="div-table-cell">
	                <a href="{{ route('pensiones.edit',$p->id) }}" class="btn btn-success"><i class="zmdi zmdi-refresh"></i></a>
	            </div>
	        </div>
	    @endforeach
    </div>                  
</div>
@endsection