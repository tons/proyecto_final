@extends('layouts.appbase')

@section('content')

    <div id="all">

            <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Contacto</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contacto</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="contact" class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>Estamos aquí para ayudarte</h2>
                </div>
                <p class="lead">¿Tenes curiosidad por algo? ¿Tenes algún tipo de problema con nuestros productos?</p>
                <p class="text-sm">No dudes en contactarnos, nuestro centro de atención al cliente está trabajando para vos las 24 horas los 365 días del año.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="row text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                  <h3 class="h4">Dirección</h3>
                  <p>José Baigorrí 643<br>                                      Alta Córdoba, <br>                                        Córdoba,  <strong>Argentina</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                  <h3 class="h4">Atención telefónica</h3>
                  <p>Este número es gratuito si llama desde Argentina; de lo contrario, le recomendamos que utilice la forma de comunicación electrónica.</p>
                  <p><strong>+54 9 351 4828282</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                  <h3 class="h4">Soporte electrónico</h3>
                  <p>No dude en escribirnos un correo electrónico o utilizar nuestro sistema de tickets electrónicos.</p>
                  <ul class="list-unstyled text-sm">
                    <li><strong><a href="mailto:">atencionalcliente@visteme.com</a></strong></li>
                    <li><strong><a href="#">TicketME</a></strong> - Nuestra plataforma de soporte de tickets electrónico</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="bar pt-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Formulario de contacto</h2>
                </div>
              </div>
              <div class="col-md-8 mx-auto">
                <form>
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
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"> Enviar</button>
                      <script> 
                      var mensaje = "Estás a punto de enviar una consulta";
                      var resultado = confirm(mensaje);
                      </script></i>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>

      <
    </div>
    @endsection

