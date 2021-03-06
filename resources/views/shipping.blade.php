@extends('layouts.appbase')
@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Checkout - Método de Pago</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout - Método de Pago</li>
                </ul>
            </div>
        </div>
    </div>
</div>

  <div id="content">
    <div class="container">
      <div class="row">
        <div id="checkout" class="col-lg-9">
          <div class="box">
            <form method="get" action="shop-checkout3.html">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a href="shop-checkout1.html" class="nav-link"> <i class="fa fa-map-marker"></i><br>Dirección</a></li>
                <li class="nav-item"><a href="shop-checkout2.html" class="nav-link active"><i class="fa fa-truck"></i><br>Método de envío</a></li>
                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-money"></i><br>Método de pago</a></li>
                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Revisión de pedido</a></li>
              </ul>
              <div class="content">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="box shipping-method">
                      <h4>Correo Argentino</h4>
                      <p>Recibí tu producto en la puerta de tu casa en tan solo 5 días hábiles.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="delivery" value="delivery1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box shipping-method">
                      <h4>Andreani</h4>
                      <p>Busca tu producto en la sucursal más cercana en 2 días hábiles.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="delivery" value="delivery2">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box shipping-method">
                      <h4>DHL</h4>
                      <p>Envíos internacionales en 10 días hábiles en la puerta de tu casa.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="delivery" value="delivery3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                <div class="left-col"><a href="shop-checkout1.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Volver a Dirección</a></div>
                <div class="right-col">
                  <button type="submit" class="btn btn-template-main">Continuar al Método de Pago<i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3">
          <div id="order-summary" class="box mb-4 p-0">
            <div class="box-header mt-0">
              <h3>Resumen de la Orden</h3>
            </div>
            <p class="text-muted text-small">El envío y los costos adicionales se calculan en base a los artículos seleccionados.</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <th>$446.00</th>
                  </tr>
                  <tr>
                    <td>Costo de envío</td>
                    <th>$10.00</th>
                  </tr>
                  <tr>
                    <td>Impuestos</td>
                    <th>$0.00</th>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <th>$456.00</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>



@include('layouts.calltoaction')
@endsection

