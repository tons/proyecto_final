@extends('layouts.appbase')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Checkout - Revisión de pedido</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout - Revisión de pedido</li>
                </ul>
            </div>
        </div>
    </div>
</div>

     
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Revisión de pedido</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                <li class="breadcrumb-item active">Checkout - Revisión de pedido</li>
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
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link"><i class="fa fa-money"></i><br>Método de Pago</a></li>
                    <li class="nav-item"><a href="shop-checkout4.html" class="nav-link active"><i class="fa fa-eye"></i><br>Revisión de pedido</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Cantidad</th>
                          <th>Precio Unidad</th>
                          <th>Descuento</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                          <td><a href="#">White Blouse Armani</a></td>
                          <td>2</td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="img/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                          <td><a href="#">Black Blouse Armani</a></td>
                          <td>1</td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th>$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="shop-checkout3.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Volver a Método de Pago</a></div>
                  <div class="right-col">
                    <button type="submit" class="btn btn-template-main">Orden<i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Resumen de pedido</h3>
                </div>
                <p class="text-muted text-small">El envío y costos adicionales se calculan en base a los elementos seleccionados.</p>
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
        </div>
      </div>

  @include('layouts.calltoaction')    
@endsection

