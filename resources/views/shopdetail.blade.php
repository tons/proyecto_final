@extends('layouts.appbase')
@section('content')



               
                

      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Camisa Santiago Flores</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-category.html">Mujer</a></li>
                <li class="breadcrumb-item"><a href="shop-category.html">Remeras</a></li>
                <li class="breadcrumb-item active">Camisa Santiago Flores</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <p class="lead">Camisa estampada ideal para el día como la noche</p>
              <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Consultá información sobre talles, composición y detalles adicionales</a></p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="img/product10.jpg" alt="" class="img-fluid"></div>
                    <div> <img src="img/product10a.jpg" alt="" class="img-fluid"></div>
                    
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
                      <p class="price">$156.00</p>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></button>
                      </p>
                    </form>
                  </div>
                  
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Detalles del producto</h4>
                <p>Camisa amplia floreada</p>
                <h4>Materiales y cuidados</h4>
                <ul>
                  <li>Poliester</li>
                  <li>Lavado en lavarropas</li>
                </ul>
                <h4>Talle</h4>
                <ul>
                  <li>Regular</li>
                  <li>La modelo tiene una altura de 1,68 y usa talle S</li>
                </ul>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Ideal para salidas con amigas o un arduo día laboral, la camisa Santiago es apta para todas las ocasiones del día</em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Mostrasela a tus amigas</h4>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
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
                    <div class="image"><a href="#"><img src="img/product9.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Blusa Canadá Blanca</a></h3>
                      <p class="price">$146.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product7.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Blusa Tenerife Negra</a></h3>
                      <p class="price">$123.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product6.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Blusa Alaska Blanca</a></h3>
                      <p class="price">$146.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categorias</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Hombre </span><span class="badge badge-secondary">42</span></a>
                      <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Polleras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pantalones</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accesorios</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Mujeres</span><span class="badge badge-light">123</span></a>
                      <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Polleras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pantalones</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accesorios</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Niños</span><span class="badge badge-secondary">11</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Polleras</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pantalones</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accesorios</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Marcas</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpiar</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Vitamina  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Cher (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Jazmin Chebar(15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Uma(14)
                        </label>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-titlen">Colores</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> Blanco (14)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Azul (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>Verde (20)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>Amarillo(13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>Rojo(10)
                        </label>
                      </div>
                    </div>
                  
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
     
@endsection