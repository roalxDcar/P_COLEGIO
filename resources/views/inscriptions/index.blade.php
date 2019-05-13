@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Nueva Inscripcion</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Registrar nueva Inscription</div>
        <form method="POST" action="{{ route('parallels.store') }}">
            @csrf
            <div class="row">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2">



                    <div class="group-material">
                            <span>Grado</span>
                            <select name="nivel" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección encargada del docente">
                                <option value="" disabled="" selected="">Selecciona un Grado</option>
                                    @foreach ($degrees as $d)
                                        <option value="{{$d->name}}" selected="">{{$d->name}}</option>
                                    @endforeach

                            </select>
                        </div>

                        <div class="group-material">
                                <span>Paralelo</span>
                                <select name="nivel" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección encargada del docente">
                                    <option value="" disabled="" selected="">Selecciona un Paralelo</option>
                                        @foreach ($parallels as $p)
                                            <option value="{{$p->name}}" selected="">{{$p->name}}</option>
                                        @endforeach

                                </select>
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
