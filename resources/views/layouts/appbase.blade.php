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

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/assets/owl.theme.default.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

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

                                @guest
                                     <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Ingresar</span></a>
                                    @if (Route::has('register'))
                                        <a class="signup-btn" href="{{ route('register') }}"><i class="fa fa-user"></i><span class="d-none d-md-inline-block"> {{ __('Register') }}</span></a>
                                    @endif
                                @else
                                    <ul class="navbar-nav ml-auto">
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
                                    </ul>
                                @endguest


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
                        <h4 id="login-modalLabel" class="modal-title">{{ __('Login') }}</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-mail') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p class="text-center">
                                <button type="submit" class="btn btn-template-outlined">
                                    <i class="fa fa-sign-in"></i>{{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </p>
                        </form>
                        <p class="text-center text-muted">¿No se registro aun?</p>
                        <p class="text-center text-muted"><a href="{{ route('register') }}"><strong>Registrese ahora</strong></a><br>¡Es fácil! Lo podes hacer en 1 minuto y tenes acceso descuentos increibles!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login modal end-->

        @include('layouts.menuheader')

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


{{--    @yield('scripts')--}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.min.js') }}" defer></script>
    <script src="{{ asset('plugins/owl.carousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('plugins/jquery.scrollto/jquery.scrollTo.min.js') }}" defer></script>


    <!-- Javascript files-->
    {{--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>--}}

    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>--}}


</body>
</html>
