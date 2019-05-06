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
              <label for="">Estudiante</label>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Nombre Cliente</label>
              <input type="text" placeholder="Seleccione un cliente" v-model="datosVenta.nombre_cliente" class="form-control" disabled>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="">Impuesto</label>
              <input type="number" placeholder="Introduzca impuesto" class="form-control">
              
            </div>
          </div>
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
              <input type="text">
              <div class="form-group col-md-6">
                <label for="">Articulo</label>
                <input type="text" placeholder="Haga click para agregar un Articulo" class="form-control">
              </div>
              <div class="form-group col-md-2">
                <button class="btn btn-info">...</button>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
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
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <button class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
          </div>
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
                      <th>Nº compra</th>
                      <th>Articulo</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>SubTotal</th>
                      <th>Accioes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>
          <input type="number" class="form-control">
                      </td>
                      <td>
                        <input type="number" class="form-control">
                      </td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn btn-danger btn-sm modal-ml">
                          <i class="fa fa-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4" align="right"><strong>Total Parcial:  </strong></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="4" align="right"><strong>Total Impuesto: </strong></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="4" align="right"><strong>Total Compra: </strong></td>
                      <td></td>
                    </tr>
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
            <button class="btn btn-success">Agregar Compra</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
    
</script>
@endsection