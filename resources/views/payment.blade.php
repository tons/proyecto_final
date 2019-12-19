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
            <form method="get" action="shop-checkout4.html">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a href="shop-checkout1.html" class="nav-link"> <i class="fa fa-map-marker"></i><br>Dirección</a></li>
                <li class="nav-item"><a href="shop-checkout2.html" class="nav-link"><i class="fa fa-truck"></i><br>Método de Envío</a></li>
                <li class="nav-item"><a href="shop-checkout3.html" class="nav-link active"><i class="fa fa-money"></i><br>Método de Pago</a></li>
                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Revisión de Pedido</a></li>
              </ul>
              <div class="content">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="box payment-method">
                      <h4>Paypal</h4>
                      <p>Aceptamos todas las tarjetas.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="payment" value="payment1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box payment-method">
                      <h4>Pasarela de Pago</h4>
                      <p>Sólo VISA y Mastercard.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="payment" value="payment2">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box payment-method">
                      <h4>Contra reembolso</h4>
                      <p>Pagas cuando lo obtienes.</p>
                      <div class="box-footer text-center">
                        <input type="radio" name="payment" value="payment3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                <div class="left-col"><a href="shop-checkout2.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Volver a Método de Envío</a></div>
                <div class="right-col">
                  <button type="submit" class="btn btn-template-main">Revisión de Pedido<i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3">
          <div id="order-summary" class="box mb-4 p-0">
            <div class="box-header mt-0">
              <h3>Resumen de Pedido</h3>
            </div>
            <p class="text-muted text-small">Los costos de envío y adicionales se calculan en función de los valores ingresados.</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Subtotal de Pedido</td>
                    <th>$446.00</th>
                  </tr>
                  <tr>
                    <td>Preparación y Envío</td>
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
    </div>
  </div>
@endsection

