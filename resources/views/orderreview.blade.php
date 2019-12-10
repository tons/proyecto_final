
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VISTE.ME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Heebo-->
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contactanos al +54 9 351 4822424 or atencionalcliente@visteme.com.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="-back-template/customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
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
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">No se registró aún?</p>
              <p class="text-center text-muted"><a href="-back-template/customer-register.html"><strong>Registrese ahora</strong></a>! Es fácil. En menos de 1 minuto tendrás acceso a increíbles descuentos y sorpresas!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="-back-template/index-back.html" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="-back-template/index-back.html" class="nav-link">Option 1: Default Page</a></li>
                    <li class="dropdown-item"><a href="-back-template/index2.html" class="nav-link">Option 2: Application</a></li>
                    <li class="dropdown-item"><a href="-back-template/index3.html" class="nav-link">Option 3: Startup</a></li>
                    <li class="dropdown-item"><a href="-back-template/index4.html" class="nav-link">Option 4: Agency</a></li>
                    <li class="dropdown-item dropdown-submenu"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown link</a>
                      <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="nav-link">Action</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Another action</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/template-accordions.html" class="nav-link">Accordions</a></li>
                            <li class="nav-item"><a href="-back-template/template-alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="-back-template/template-buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="-back-template/template-content-boxes.html" class="nav-link">Content boxes</a></li>
                            <li class="nav-item"><a href="-back-template/template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                            <li class="nav-item"><a href="-back-template/template-pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="-back-template/template-tabs.html" class="nav-link">Tabs</a></li>
                            <li class="nav-item"><a href="-back-template/template-typography.html" class="nav-link">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/template-header-default.html" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="-back-template/template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="-back-template/template-header-light.html" class="nav-link">Light header</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">Sobre nosotros</a></li>
                            <li class="nav-item"><a href="-back-template/team.html" class="nav-link">Nuestro Equipo</a></li>
                            <li class="nav-item"><a href="-back-template/team-member.html" class="nav-link">Miembro del equipo</a></li>
                            <li class="nav-item"><a href="-back-template/services.html" class="nav-link">Servicios</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="-back-template/packages.html" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5>Home</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/index-back.html" class="nav-link">Option 1: Default Page</a></li>
                            <li class="nav-item"><a href="-back-template/index2.html" class="nav-link">Option 2: Application</a></li>
                            <li class="nav-item"><a href="-back-template/index3.html" class="nav-link">Option 3: Startup</a></li>
                            <li class="nav-item"><a href="-back-template/index4.html" class="nav-link">Option 4: Agency</a></li>
                            <li class="nav-item"><a href="-back-template/index5.html" class="nav-link">Option 5: Portfolio</a></li>
                          </ul>
                          <h5>Acerca</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">Sobre nosotros</a></li>
                            <li class="nav-item"><a href="-back-template/team.html" class="nav-link">Nuestro Equipo</a></li>
                            <li class="nav-item"><a href="-back-template/team-member.html" class="nav-link">Miembro del equipo</a></li>
                            <li class="nav-item"><a href="-back-template/services.html" class="nav-link">Servicios</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/packages.html" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="-back-template/portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                          <h5>User pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/customer-register.html" class="nav-link">Register / login</a></li>
                            <li class="nav-item"><a href="customer-orders.html" class="nav-link">Historial de pedidos</a></li>
                            <li class="nav-item"><a href="customer-order.html" class="nav-link">Detalle historial de pedidos</a></li>
                            <li class="nav-item"><a href="-back-template/customer-wishlist.html" class="nav-link">Wishlist</a></li>
                            <li class="nav-item"><a href="-back-template/customer-account.html" class="nav-link">Cuenta Cliente / Cambiar contraseña</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Comprar</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                            <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                            <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                            <li class="nav-item"><a href="shop-detail.html" class="nav-link">Detalle del producto</a></li>
                          </ul>
                          <h5>Shop - order process</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-basket.html" class="nav-link">Carro de compras</a></li>
                            <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - Paso 1</a></li>
                            <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - Paso 2</a></li>
                            <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - Paso 3</a></li>
                            <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - Paso 4</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Contacto</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/contact.html" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="-back-template/contact2.html" class="nav-link">Contact - version 2</a></li>
                            <li class="nav-item"><a href="-back-template/contact3.html" class="nav-link">Contact - version 3</a></li>
                          </ul>
                          <h5>Pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/text.html" class="nav-link">Text page</a></li>
                            <li class="nav-item"><a href="-back-template/text-left.html" class="nav-link">Text page - left sidebar</a></li>
                            <li class="nav-item"><a href="-back-template/text-full.html" class="nav-link">Text page - full width</a></li>
                            <li class="nav-item"><a href="-back-template/faq.html" class="nav-link">FAQ</a></li>
                            <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          </ul>
                          <h5>Blog</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="-back-template/blog.html" class="nav-link">Blog listing big</a></li>
                            <li class="nav-item"><a href="-back-template/blog-medium.html" class="nav-link">Blog listing medium</a></li>
                            <li class="nav-item"><a href="-back-template/blog-small.html" class="nav-link">Blog listing small</a></li>
                            <li class="nav-item"><a href="-back-template/blog-post.html" class="nav-link">Blog Post</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="-back-template/contact.html" class="nav-link">Contact option 1</a></li>
                    <li class="dropdown-item"><a href="-back-template/contact2.html" class="nav-link">Contact option 2</a></li>
                    <li class="dropdown-item"><a href="-back-template/contact3.html" class="nav-link">Contact option 3</a></li>
                  </ul>
                </li>
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

      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Dirección</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                <li class="breadcrumb-item active">Checkout - Dirección</li>
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
                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link active"> <i class="fa fa-map-marker"></i><br>Dirección</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-truck"></i><br>Método de envío</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-money"></i><br>Método de pago</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Revisión de pedido</a></li>
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
                          <label for="state">Provincia</label>
                          <select id="state" class="form-control"></select>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label for="country">País</label>
                          <select id="country" class="form-control"></select>
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
                    <div class="left-col"><a href="shop-basket.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Volver al carrito</a></div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main">Continuar a Método de envío<i class="fa fa-chevron-right"></i></button>
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
                <p class="text-muted text-small">El envío y los costos adicionales son calculados en base a los valores ingresados.</p>
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
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Querés recibir los mejores descuentos y promociones?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Adherite a nuestro Newsletter</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">Sobre nosotros</h4>
              <p>Una empresa con más de 20 años de trayectoria vistiendo a toda la familia.</p>
              <hr>
              <h4 class="h6">Trabajá con nosotros</h4>
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
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Viste.me S.A.</strong><br>José Baigorrí 643 <br>Alta Córdoba <br> 5000 <br>Córdoba <br><strong>Argentina</strong></p><a href="-back-template/contact.html" class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2019. Viste.me</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a>& <a href="https://fity.cz/ostrava">Fity</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
