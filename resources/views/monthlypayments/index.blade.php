@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Mensualidad</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li><a href="{{ route('monthly.create') }}">Agregar nuevo</a></li>
                <li class="active">Listado de Mensualidades</li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h2 class="text-center all-tittles">Lista de Mensualidades</h2>
    <div class="div-table">
        <div class="div-table-row div-table-head">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">Fecha Inicial</div>
            <div class="div-table-cell">Fecha Final</div>
            <div class="div-table-cell">Descripción</div>
            <div class="div-table-cell">Estado</div>
            <div class="div-table-cell">Actualizar</div>
        </div>  
        @foreach($monthly as $m)
	        <div class="div-table-row">
	            <div class="div-table-cell">{{ $m->idmonthly_payment}}</div>
	            <div class="div-table-cell">{{ $m->start_date }}</div>
	            <div class="div-table-cell">{{ $m->end_date }}</div>
	            <div class="div-table-cell">{{ $m->description }}</div>
	            <div class="div-table-cell">
	                       <button type="submit" class="btn btn-info tooltips-general" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-swap"></i></button>
	            </div>
	            <div class="div-table-cell">
	                       <a href="{{ route('monthly.edit',$m->idmonthly_payment) }}" class="btn btn-success"><i class="zmdi zmdi-refresh"></i></a>
	            </div>
	        </div>
	    @endforeach
    </div>                  
</div>
@endsection