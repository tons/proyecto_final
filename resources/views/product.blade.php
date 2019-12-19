@extends('layouts.appbase')
@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">{{ $name }}</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void">Mujer</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void">Remeras</a></li>
                        <li class="breadcrumb-item active">Camisa Santiago Flores</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row bar">
                <!-- LEFT COLUMN -->
                <div class="col-lg-9">
                    <p class="lead">Camisa estampada ideal para el día como la noche</p>
                    <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Consultá información
                            sobre talles, composición y detalles adicionales</a></p>
                    <div id="productMain" class="row">
                        <div class="col-sm-6">
                            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                                <div><img src="{{ asset("img/product10.jpg") }}" alt="" class="img-fluid"></div>
                                <div><img src="{{ asset("img/product10a.jpg") }}" alt="" class="img-fluid"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="box">
                                <form>
                                    <div class="sizes">
                                        <h3>Talles disponibles</h3>
                                        <select class="bs-select">
                                            <option value="small">S</option>
                                            <option value="medium">M</option>
                                            <option value="large">L</option>
                                            <option value="x-large">XL</option>
                                        </select>
                                    </div>
                                    <p class="price">$ {{ number_format($price, 0, ',', '.') }}</p>
                                    <p class="text-center">
                                        <button type="submit" class="btn btn-template-outlined">
                                            <i class="fa fa-shopping-cart"></i>Agregar al carrito
                                        </button>
                                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div id="details" class="box mb-4 mt-4">

                        {!! $description !!}

                    </div>

                    <div id="product-social" class="box social text-center mb-5 mt-5">
                        <h4 class="heading-light">Mostrasela a tus amigas</h4>
                        <ul class="social list-inline">
                            <li class="list-inline-item">
                                <a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="box text-uppercase mt-0 mb-small">
                                <h3>Productos vistos recientemente</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product">
                                <div class="image"><a href="#">
                                        <img src="img/product9.jpg" alt="" class="img-fluid image1"></a></div>
                                <div class="text">
                                    <h3 class="h5"><a href="shop-detail.html">Blusa Canadá Blanca</a></h3>
                                    <p class="price">$146.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#"><img src="img/product7.jpg" alt="" class="img-fluid image1"></a>
                                </div>
                                <div class="text">
                                    <h3 class="h5"><a href="shop-detail.html">Blusa Tenerife Negra</a></h3>
                                    <p class="price">$123.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product">
                                <div class="image">
                                    <a href="#"><img src="img/product6.jpg" alt="" class="img-fluid image1"></a>
                                </div>
                                <div class="text">
                                    <h3 class="h5"><a href="shop-detail.html">Blusa Alaska Blanca</a></h3>
                                    <p class="price">$146.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    @include('layouts.sidebar')

                </div>

            </div>
        </div>
    </div>

@endsection
