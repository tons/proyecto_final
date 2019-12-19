@extends('layouts.appbase');

@section('content');


      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Sobre nosotros</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="-back-template/index-back.html">Home</a></li>
                <li class="breadcrumb-item active">Sobre nosotros</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <section class="bar">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <h2>Sobre VISTE.ME</h2>
                </div>
                <p class="lead">Con una trayectoria de más de 25 años, VISTE.ME es una de las empresas de indumentaria más importante del país. La característica distintiva de VISTE.ME es la calidad de sus productos y la amplitud de opciones tanto para el público femenino como masculino.</p>
              </div>
            </div>
            
          </section>
          <section class="bar mt-0">
            <div class="row">
              <div class="col-md-4">
                <div class="heading">
                  <h2>Nuestras fortalezas</h2>
                </div>
                <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                  <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar bg-primary">Variedad</div>
                </div>
                <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                  <div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" class="progress-bar bg-primary">Asesoramiento</div>
                </div>
                <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                  <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar bg-primary">Calidad</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="heading">
                  <h2>Nuestros servicios</h2>
                </div>
                <ul class="ul-icons list-unstyled">
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>Contamos con un sistema de entrega propio que agiliza la llegada del producto a tu hogar.
                  </li>
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>Nuestro equipo está compuesto por profesionales capacitados para darte el mejor asesoramiento.
                  </li>
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>El precio más bajo, siempre. Sino te devolvemos el dinero.
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="heading">
                  <h2>Nuestros valores</h2>
                </div>
                <ul class="ul-icons list-unstyled">
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>Rapidez
                  </li>
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>Confianza
                  </li>
                  <li>
                    <div class="icon-filled"><i class="fa fa-check"></i></div>Calidad
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <section class="bar background-pentagon no-mb">
          <div class="container">
            <div class="row showcase text-center">
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify"></i></div>
                  <h4><span class="h1 counter">2580</span><br> Clientes satisfechos por mes</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
                  <h4><span class="h1 counter">100</span><br>Sucursales en todo el país</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-copy"></i></div>
                  <h4><span class="h1 counter">500</span><br>Asesores disponibles</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font"></i></div>
                  <h4><span class="h1 counter">923</span><br>Productos</h4>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bar no-mb">
          <div class="container">
            <div class="col-md-12">
              <div class="heading">
                <h2>Conoce nuestro equipo</h2>
              </div>
              <div class="row text-center">
                <div class="col-md-3">
                  <div data-animate="fadeInUp" class="team-member">
                    <div class="image"><a href="-back-template/team-member.html"><img src="img/person-1.jpg" alt="" class="img-fluid rounded-circle"></a></div>
                    <h3><a href="-back-template/team-member.html">Diego Hernández</a></h3>
                    <p class="role">Fundador</p>
                    <ul class="social list-inline">
                      <li class="list-inline-item"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="text">
                      <p>Diego trabaja desde los inicios de la companía, dando día a día lo mejor para mejor la experiencia del cliente.</p>
                    </div>
                  </div>
                </div>
                <!-- /.team-member-->
                <div data-animate="fadeInUp" class="col-md-3">
                  <div class="team-member">
                    <div class="image"><a href="-back-template/team-member.html"><img src="img/person-2.jpg" alt="" class="img-fluid rounded-circle"></a></div>
                    <h3><a href="-back-template/team-member.html">Gastón Fontaine</a></h3>
                    <p class="role">CEO</p>
                    <ul class="social list-inline">
                      <li class="list-inline-item"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="text">
                      <p>Gastón tiene una trayectoria de más de 12 años en las principales empresas de indumentaria de Europa y Asia.</p>
                    </div>
                  </div>
                </div>
                <!-- /.team-member-->
                <div data-animate="fadeInUp" class="col-md-3">
                  <div class="team-member">
                    <div class="image"><a href="-back-template/team-member.html"><img src="img/person-3.png" alt="" class="img-fluid rounded-circle"></a></div>
                    <h3><a href="-back-template/team-member.html">Santiago Jofre</a></h3>
                    <p class="role">Líder de Equipo</p>
                    <ul class="social list-inline">
                      <li class="list-inline-item"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="text">
                      <p>Desde hace 5 años Santiago trabaja en VISTE.ME coordinando el equipo de producción y atención al cliente, mejorando la eficiencia de las tareas y las relaciones interpersonales.</p>
                    </div>
                  </div>
                </div>
                <!-- /.team-member-->
                <div data-animate="fadeInUp" class="col-md-3">
                  <div class="team-member">
                    <div class="image"><a href="-back-template/team-member.html"><img src="img/person-4.jpg" alt="" class="img-fluid rounded-circle"></a></div>
                    <h3><a href="-back-template/team-member.html">Belén Schmid</a></h3>
                    <p class="role">Líder de Desarrollo</p>
                    <ul class="social list-inline">
                      <li class="list-inline-item"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="text">
                      <p>Con un énfasis exhaustivo en la creatividad e innovación, Belén lidera el equipo encargado de ofrecer nuevos y originales productos a los clientes, garantizando la calidad de los mismos.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="see-more text-center"><a href="-back-template/portfolio-4.html" class="btn btn-template-outlined">Todos los miembros de nuestro equipo</a></div>
            </div>
          </div>
        </section>
        <section class="bar bg-gray">
          <div class="container">
            <div class="heading text-center">
              <h2>Nuestros clientes</h2>
            </div>
            <ul class="list-unstyled owl-carousel customers no-mb">
              <li class="item"><img src="img/afa.png" alt="" class="img-fluid"></li>
              <li class="item"><img src="img/customer-2.png" alt="" class="img-fluid"></li>
              <li class="item"><img src="img/customer-3.png" alt="" class="img-fluid"></li>
              <li class="item"><img src="img/customer-4.png" alt="" class="img-fluid"></li>
              <li class="item"><img src="img/customer-5.png" alt="" class="img-fluid"></li>
              <li class="item"><img src="img/customer-6.png" alt="" class="img-fluid"></li>
            </ul>
          </div>
        </section>
        <section class="bar background-pentagon mb-0">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Testimonios</h2>
                </div>
                <p class="lead">Diariamente llegan a nuestras redes sociales comentarios de nuestros clientes satisfechos:</p>
                <!-- Carousel Start-->
                <ul class="owl-carousel testimonials list-unstyled equal-height">
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>Necesité asesoramiento para elegir la mejor prenda para un evento especial de mi trabajo. Sorprendentemente la vendedora supo indicarme la vestimenta más adecuada para mí. No puedo estar más contenta!</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>Juana Colucci</h5>
                            <p>Administrativa, OSDE</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>Es la primera vez que compro en VISTE.ME. Estoy impresionada por la rapidez con la que llego mi pedido y la calidad de los productos. Totalmente recomendable!</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>Mariano Leguizamón</h5>
                            <p>Profesor de Música, Córdoba</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>La calidad es innigualable. Las fotos retratan idénticamente el calce del producto.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>Luisa Sánchez</h5>
                            <p>Médica pediatra, Tucumán</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>Impresiona la variedad de productos que ofrece VISTE.ME. Ya se lo recomendé a mis hijos y nietos!</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>Marta Azcuenaga</h5>
                            <p>Jubilada, Río Gallegos</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- Carousel End-->
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection
