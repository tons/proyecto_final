@extends('layouts.appbase')

@section('content')
<div id="all">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section style="background: url('{{ asset("img/photogrid.jpg")}}') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
        <!-- Carousel Start-->
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                {{--<p><img src="img/logo.png" alt="" class="ml-auto"></p>--}}
                                <h1>ENCONTRÁ LO QUE BUSCAS CON UN SOLO CLICK</h1>
                                <p>Casual. Elegante. Trendy.<br>Deportiva. Para cada temporada del año.</p>
                            </div>
                            <div class="col-md-7"><img src="img/2-1.png" alt="" class="img-fluid">
                            </div>
                        </div><br><br>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-5 text-right">
                                    <h1>DISEÑOS</h1>
                                    <ul class="list-unstyled">
                                        <li>Modelos de los mejóres diseñadores</li>
                                        <li>Formal y Elegante</li>
                                        <li>Canchero y de Fiesta</li>
                                        <li>Casual para Todos los Días</li>
                                        <li>Deportiva</li>
                                    </ul>
                                </div>
                                <div class="col-md-7"><img src="img/diseno-grafico-valencia-branding.png" alt=""
                                                           class="img-fluid"></div>
                            </div>
                        </div><br><br>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-7"><img src="img/devices.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-5">
                                    <h1>FACIL DE COMPRAR</h1>
                                    <ul class="list-unstyled">
                                        <li>Ingresá desde cualquier lugar y en el dispositivo que quieras</li>
                                        <li>Elegí tus prendas y calculá tu talle</li>
                                        <li>Llená tu carrito y recibilo en Tu Casa</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7"><img src="img/diseno-grafico-valencia-branding.png" alt=""
                                                       class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7"><img src="img/devices.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h1>FACIL DE COMPRAR</h1>
                                <ul class="list-unstyled">
                                    <li>Elegí tus prendas y calculá tu talle</li>
                                    <li>Llená tu carrito y recibilo en Tu Casa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End-->
    </section>

    @include('featuredproducts')

</div>

@endsection
