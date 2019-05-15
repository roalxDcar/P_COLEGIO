@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Nuevo pago</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Agregar nuevo</li>
                <li class="active"><a href="{{ route('pagos.index') }}">Listado de pagos</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registro de pago</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row border">
          <div class="col-md-4 col-sm-12 col-12">
            <div class="form-group">
              <label for="ci_autocomplete">Estudiante:</label>
              <input type="text" placeholder="Introduzca CI" class="form-control" id="ci_autocomplete">
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Nombre Estudiante</label>
              <input type="text" placeholder="Seleccione un cliente"class="form-control" disabled id="nombre-estudiante">
            </div>
          </div>
          {{-- <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Impuesto</label>
              <input type="number" placeholder="Introduzca impuesto" class="form-control">
              
            </div>
          </div> --}}
        </div>
        <div class="row border">
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Tipo de Comprobante</label>
              <select class="form-control" id="tipo_comprobante">
                <option value="0">Seleccione tipo de Comprobante</option>
                <option value="Factura">Factura</option>
                <option value="Boleta">Boleto</option>
                <option value="Ticket">Ticket</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Serie de Comprobante</label>
              <input type="text" placeholder="Introduzca la serie de comprobante" class="form-control">
              <span>Campo no obligatorio</span>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Numero de Comprobante</label>
              <input type="text" placeholder="Introduzca numero de comprobante" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="form-row">
              <input type="text" id="id_mensualidad">
              <div class="form-group col-md-6">
                <label for="">Pago</label>
                <input type="text" placeholder="Haga click para agregar el pago" class="form-control" disabled id="description-1">
              </div>
              <div class="form-group col-md-2">
                <button class="btn btn-info" id="btn-mensualidades">...</button>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <label for="">Precio:</label>
              <input type="number" placeholder="Introduzca impuesto" step="any" class="form-control">
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="form-group">
              <label for="">Cantidad:</label>
              <input type="number" placeholder="Introduzca impuesto" class="form-control">
            </div>
          </div> --}}
          {{-- <div class="col-md-1">
            <div class="form-group">
              <button class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
          </div> --}}
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Detalle de Ingreso de Articulos</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Descripcion de pago</th>
                      <th>Precio</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody id="llenado">

                  </tbody>
                </table>
                <div >
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button class="btn btn-secondary">Cerrar</button>
            <button class="btn btn-success">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal inmodal" id="modal-mensualidades" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Lista <small>Mensualidades</small></h2>
                <div class="nav navbar-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id Mensualidad</th>
                      <th class="text-center">Descripcion</th>
                      <th class="text-center">Fecha inicio</th>
                      <th class="text-center">Fecha final</th>
                      <th class="text-center">Accion</th>
                    </tr>
                  </thead>
                  <tbody id="tabla-mensualidades">
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
  let mensualidades = [];
  var arr = ['hola','como','estas'];
  var students = {!! $students !!};
  var stu = students.map( e => e.ci);
  $('#ci_autocomplete').autocomplete({
    source:stu,
    select:function(event,item){
      var ci_est = item.item.value;
      console.log(ci_est);
      $.ajax({
        url: "{{ url('obtener/estudiante') }}"+"/"+ci_est,
        method: "GET",
        success: function(data){
          console.log(data);
          $('#nombre-estudiante').val(data.student.name+" "+data.student.paternal+" "+data.student.maternal);
        }
      });
    }
  });
  console.log(stu);
    
  $('#btn-mensualidades').click(function() {
    let juntar;
    $.ajax({
      url: "{{ url('obtener/mensualidades') }}",
      method: "GET",
      success: function(data){
        console.log(data.monthly.data); 
        for (var i = 0;i<data.monthly.data.length;i++) {
            juntar+=`<tr>
              <td> ${data.monthly.data[i].idmonthly_payment} </td>
              <td> ${data.monthly.data[i].description} </td>
              <td> ${data.monthly.data[i].start_date} </td>
              <td> ${data.monthly.data[i].end_date} </td>
              <td>
                <button type="button" class="btn btn-success btn-xs seleccionado modal-ml"
                    data-id="${data.monthly.data[i].idmonthly_payment}"
                    data-description="${data.monthly.data[i].description}">
                    <i class="glyphicon glyphicon-plus"></i>
                </button>
              </td>
          </tr>`;
        }
        $('#tabla-mensualidades').html(juntar);
      }
      
    });
    $('#modal-mensualidades').modal('show');
  });

  $('#tabla-mensualidades').on("click","button.seleccionado",function(){
      let id = $(this).data('id');
      let descripcion = $(this).data('description');
      mensualidades.push(
        {
          mensualidad_id: id,
          descripcion: descripcion
        }
      );
      $('#modal-mensualidades').modal('hide');
      $('#id_mensualidad').val(id);
      $('#description-1').val(descripcion);
      let juntar2;
      for (var i = 0;i<mensualidades.length;i++) {
          juntar2+=`<tr>
            <td> ${mensualidades[i].mensualidad_id} </td>
            <td> ${mensualidades[i].descripcion} </td>
        </tr>`;
      }
      $('#llenado').html(juntar2);
      console.log(mensualidades);
  });
</script>
@endsection