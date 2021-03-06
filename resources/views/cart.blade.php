@extends('layouts.appbase')

@section('content')
  <div id="content">
  <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">CARRITO DE COMPRAS</h1>
            </div>
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <p class="text-muted lead"></p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="get" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Producto</th>
                          <th>Cantidad</th>
                          <th>Precio Unitario</th>
                          <th>Descuento</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>


                            {{--@foreach ($cart as $item)
                            <tr>
                                    <td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani" class="img-fluid"></a></td>
                                    <td><a href="#">White Blouse Armani</a></td>
                                    <td>
                                      <input type="number" value="" class="form-control">
                                    </td>
                                    <td>$123.00</td>
                                    <td>$0.00</td>
                                    <td>$246.00</td>
                                    <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                  </tr>

                            @endforeach--}}
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="shop-category.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continúe la compra</a></div>
                    <div class="right-col">
                      <button class="btn btn-secondary"><i class="fa fa-refresh"></i> Actualizar Carrito</button>
                      <button type="submit" class="btn btn-template-outlined">Proceder al checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-2">
                    <h3>También te pueden gustar estos productos</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product6.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Blusa Tenerife</a></h3>
                      <p class="price">$154.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product7.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Camisa Lisboa</a></h3>
                      <p class="price">$122.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product8.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Camisola Amsterdam</a></h3>
                      <p class="price">$153.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Resumen de Pedido</h3>
                </div>
                <p class="text-muted">
                    Los costos de envío y adicionales se calculan en función de los valores ingresados.</p>
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

  </div>
@endsection
