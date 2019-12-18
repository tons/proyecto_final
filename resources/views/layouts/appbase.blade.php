<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.red.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
    <div id="app">

        <!-- Top bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                        <p>Contáctenos +54 351 2345678 o por e-mail: hola@viste.me</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-between">
                            <ul class="list-inline contact-info d-block d-md-none">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Ingresar</span></a>
                                <a href="registro.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Registrarme</span></a>
                            </div>
                            <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar end-->

        <!-- Login Modal-->
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="login-modalLabel" class="modal-title">Registro Cliente</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="get">
                            <div class="form-group">
                                <input id="email_modal" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password_modal" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i>Registrarse</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">¿No se registro aun?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Registrese ahora</strong></a> ¡Es fácil! Lo podes hacer en 1 minuto y tenes acceso descuentos increibles!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login modal end-->

        <!-- Navbar Start-->
        <header class="nav-holder make-sticky">
            <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
                <div class="container">
                    <a href="index.php" class="navbar-brand home">
                        <img src="img/logo visteme.jpg" alt="Viste.me!" class="d-none d-md-inline-block">
                        <img src="img/logo visteme.jpg" alt="Viste.me!" class="d-inline-block d-md-none">
                        <span class="sr-only">Inicio</span>
                    </a>
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Cambiar navegación</span><i class="fa fa-align-justify"></i></button>
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>

                            <!--<li class="nav-item dropdown active">
                                <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                                    <li class="dropdown-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                                    <li class="dropdown-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                                    <li class="dropdown-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                                    <li class="dropdown-item dropdown-submenu"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown link</a>
                                        <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                                            <li class="dropdown-item"><a href="#" class="nav-link">Action</a></li>
                                            <li class="dropdown-item"><a href="#" class="nav-link">Another action</a></li>
                                            <li class="dropdown-item"><a href="#" class="nav-link">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mujer<b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>Pantallas</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="perfil.php" class="nav-link">Mi Cuenta</a></li>
                                                    <li class="nav-item"><a href="registro.php" class="nav-link">Login</a></li>
                                                    <li class="nav-item"><a href="registro.php" class="nav-link">Registro</a></li>
                                                    <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
                                                    <li class="nav-item"><a href="producto.php" class="nav-link">Producto</a></li>
                                                    <li class="nav-item"><a href="categoria.php" class="nav-link">Listado Categoría</a></li>
                                                    <li class="nav-item"><a href="carrito.php" class="nav-link">Carrito</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>Header variations</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                                                    <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                                                    <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Hombre <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>Portfolio</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>About</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                                    <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                                    <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                                </ul>
                                                <h5>Marketing</h5>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Niño <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>Portfolio</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5>About</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                                    <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                                    <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                                </ul>
                                                <h5>Marketing</h5>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>

                            <!-- ========== FULL WIDTH MEGAMENU ==================
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Home</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                                                    <li class="nav-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                                                    <li class="nav-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                                                    <li class="nav-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                                                    <li class="nav-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                                                </ul>
                                                <h5>About</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                                    <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                                    <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                                </ul>
                                                <h5>Marketing</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Portfolio</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                                </ul>
                                                <h5>User pages</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="customer-register.html" class="nav-link">Register / login</a></li>
                                                    <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                                                    <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                                                    <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                                                    <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Shop</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                                                    <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                                                    <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                                                    <li class="nav-item"><a href="shop-detail.html" class="nav-link">Product detail</a></li>
                                                </ul>
                                                <h5>Shop - order process</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="shop-basket.html" class="nav-link">Shopping cart</a></li>
                                                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - step 1</a></li>
                                                    <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - step 2</a></li>
                                                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - step 3</a></li>
                                                    <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - step 4</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Contact</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                                    <li class="nav-item"><a href="contact2.html" class="nav-link">Contact - version 2</a></li>
                                                    <li class="nav-item"><a href="contact3.html" class="nav-link">Contact - version 3</a></li>
                                                </ul>
                                                <h5>Pages</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                                    <li class="nav-item"><a href="text-left.html" class="nav-link">Text page - left sidebar</a></li>
                                                    <li class="nav-item"><a href="text-full.html" class="nav-link">Text page - full width</a></li>
                                                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                                    <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                                </ul>
                                                <h5>Blog</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing big</a></li>
                                                    <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog listing medium</a></li>
                                                    <li class="nav-item"><a href="blog-small.html" class="nav-link">Blog listing small</a></li>
                                                    <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                            <!-- ========== Contact dropdown ==================
                            <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="contact.html" class="nav-link">Contact option 1</a></li>
                                    <li class="dropdown-item"><a href="contact2.html" class="nav-link">Contact option 2</a></li>
                                    <li class="dropdown-item"><a href="contact3.html" class="nav-link">Contact option 3</a></li>
                                </ul>
                            </li>
                            -->
                            <!-- ========== Contact dropdown end ==================-->
                        </ul>
                    </div>
                    <div id="search" class="collapse clearfix">
                        <form role="search" class="navbar-form">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End-->

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          @yield('content')
        </main>

        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h4 class="h6">Sobre Nosotros</h4>
                        <p>Estamos desarrollando nuestras aptitudes y conocimientos sobre programación web</p>
                        <hr>
                        <h4 class="h6">Sumate a nuestro Newsletter</h4>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <hr class="d-block d-lg-none">
                    </div>
                    <div class="col-lg-3">
                        <h4 class="h6">Novedades Moda</h4>
                        <ul class="list-unstyled footer-blog-list">
                            <li class="d-flex align-items-center">
                                
                                <div class="text">
                                    <h5 class="mb-0"> <a href="post.html">Nuestras Noticias</a></h5>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                
                                <div class="text">
                                    <h5 class="mb-0"> <a href="post.html">Trabajá con nosotros</a></h5>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                
                                <div class="text">
                                    <h5 class="mb-0"> <a href="post.html">Responsabilidad social</a></h5>
                                </div>
                            </li>
                        </ul>
                        <hr class="d-block d-lg-none">
                    </div>
                    <div class="col-lg-3">
                        <h4 class="h6">Contacto</h4>
                        <p class="text-uppercase">
                            <strong>Viste.me</strong><br>José Biagorri 673
                            <br>Alta Córdoba <br>5000<br>Córdoba <br>
                            <strong>Argentina</strong>
                        </p>
                        <a href="contacto.php" class="btn btn-template-main">Contáctenos</a>
                        <hr class="d-block d-lg-none">
                    </div>
                  
                </div>
            </div>
            <div class="copyrights">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 text-center-md">
                            <p>&copy; 2019. Viste.me - Indumentaria para mujeres y hombres a la moda!</p>
                        </div>
                        <div class="col-lg-8 text-right text-center-md">
                            <p>Equipo Proyecto Integrador 1</p>
                            <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
