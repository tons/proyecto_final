@extends('layouts.appbase')

{{--@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

@endsection--}}

@section('content')
<div id="all">

    <section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;"
             class="bar background-white relative-positioned">
        <div class="container">
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
                            </div>
                        </div><br><br>

                        <div class="item">
                            <div class="row">
                                <div class="col-md-7 text-center"><img src="img/foto-de-familia-png-2.png" alt=""
                                                                       class="img-fluid"></div>
                                <div class="col-md-5">
                                    <h2>VESTÍ A TODA TU FAMILIA EN SU SÓLO LUGAR</h2>
                                    <ul class="list-unstyled">
                                        <li>Ropa para Ellas</li>
                                        <li>Indumentaria para ellos</li>
                                        <li>Onda Jóven, cosas para los Chicos, Bebés, y MUCHO MÁS</li>
                                        <li>Sorprendente con nuestra infinita oferta de modelos, colores y talles  </li>
                                    </ul>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-5 text-right">
                                    <h1>DISEÑOS</h1>
                                    <ul class="list-unstyled">
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
        </div>
    </section>
    </section>

</div>

@endsection
