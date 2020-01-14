@extends('layouts.appbase')

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Categorías</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                        <li class="breadcrumb-item active">{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row bar">
                <div class="col-md-9">
                    <p class="text-muted lead">
                        En nuestro departamento de Damas, ofrecemos una amplia selección de los mejores productos que
                        hemos encontrado y cuidadosamente seleccionados en todo el mundo.</p>
                    <div class="row products products-big">

                        @foreach($products as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="product">
                                <div class="image"><a href="{{ route('product', $item->id) }}"><img src="{{ URL::asset( '/img/'.$item->image ) }}" alt="" class="img-fluid image1"></a></div>
                                <div class="text">
                                    <h3 class="h5"><a href="">{{ $item->name }}</a></h3>
                                    <p class="price">$ {{ $item->price }}</p>
                                </div>
                                <div class="ribbon-holder">
                                    @if($item->offer)
                                    <div class="ribbon sale">Oferta</div>
                                    @endif
                                    @if($item->offer)
                                    <div class="ribbon new">Nueva</div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="row"></div>

                    <div class="pages">
                        <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i
                                    class="fa fa-chevron-down"></i> Cargar más</a></p>
                        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item"><a href="#" class="page-link"> <i
                                            class="fa fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- MENUS AND FILTERS-->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Categorías</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm category-menu">
                                <li class="nav-item"><a href="shop-category.html"
                                                        class="nav-link d-flex align-items-center justify-content-between"><span>Hombres </span><span
                                            class="badge badge-secondary">42</span></a>
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Camisas</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Pantalones</a></li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Accesorios</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="shop-category.html"
                                                        class="nav-link active d-flex align-items-center justify-content-between"><span>Mujeres  </span><span
                                            class="badge badge-light">123</span></a>
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Polleras</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Pantalones</a></li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Accesorios</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="shop-category.html"
                                                        class="nav-link d-flex align-items-center justify-content-between"><span>Niños  </span><span
                                            class="badge badge-secondary">11</span></a>
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Remeras</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Polleras</a>
                                        </li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Pantalones</a></li>
                                        <li class="nav-item"><a href="shop-category.html"
                                                                class="nav-link">Accesorios</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading d-flex align-items-center justify-content-between">
                            <h3 class="h4 panel-title">Brands</h3><a href="#" class="btn btn-sm btn-danger"><i
                                    class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpiar</span></a>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Armani (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Versace (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Carlo Bruni (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Jack Honey (14)
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Aplicar
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading d-flex align-items-center justify-content-between">
                            <h3 class="h4 panel-titlen">Colours</h3><a href="#" class="btn btn-sm btn-danger"><i
                                    class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpiar</span></a>
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
                                            <input type="checkbox"><span class="colour green"></span> Verde (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"><span class="colour yellow"></span> Amarillo (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"><span class="colour red"></span> Rojo (10)
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Aplicar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
