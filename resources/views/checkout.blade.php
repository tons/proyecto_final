@extends('layouts.appbase')

@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Checkout</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div id="checkout" class="col-lg-9">
                    <div class="box border-bottom-0">
                        <form method="get" action="shop-checkout2.html">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item"><a href="shop-checkout1.html" class="nav-link active"> <i
                                            class="fa fa-map-marker"></i><br>Dirección</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i
                                            class="fa fa-truck"></i><br>Método de envío</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i
                                            class="fa fa-money"></i><br>Método de pago</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Revisión
                                        de pedido</a></li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre</label>
                                            <input id="firstname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Apellido</label>
                                            <input id="lastname" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Compañía</label>
                                            <input id="company" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Calle</label>
                                            <input id="street" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">Ciudad</label>
                                            <input id="city" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">Código Postal</label>
                                            <input id="zip" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="province">Provincia</label>
                                            <select id="province" class="form-control">
                                            <script>
window.addEventListener("load", function() {
fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=nombre')
  .then(function(response){
    return response.json();
})
  .then(function(data){
    var province = data.province;
    var miSelect = document.getElementById('province');
    for (var i = 0; i < province.length; i++){
      miSelect.innerHTML += '<option>'+province[i].nombre+'</option>';
    }
  })
})
</script>
                                            </select>
                                        </div>

                                    </div>
                                    
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="country" name="country">País</label>
                                            <select id="country" class="form-control">
                                          
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Teléfono</label>
                                            <input id="phone" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                                <div class="left-col"><a href="shop-basket.html" class="btn btn-secondary mt-0"><i
                                            class="fa fa-chevron-left"></i>Volver al carrito</a></div>
                                <div class="right-col">
                                    <button type="submit" class="btn btn-template-main">Continuar a Método de envío<i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div id="order-summary" class="box mb-4 p-0">
                        <div class="box-header mt-0">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted text-small">El envío y los costos adicionales son calculados en base a los
                            valores ingresados.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <th>$446.00</th>
                                </tr>
                                <tr>
                                    <td>Despacho y envío</td>
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
