@extends('layouts.appbase')

@section('content')
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                    <h2 class="text-uppercase">Nueva Cuenta</h2>
                    <p class="lead">¿Cliente no registrado aún?</p>
                    <p>Registrate con nosotros y accede a un nuevo mundo de la moda. ¡No te llevará más de un minuto!</p>
                    <p class="text-muted">Si tenes alguna pregunta, no dudes en <a href="{{ route('contact') }}">contactarnos</a>,
                        nuestro centro de atención al cliente está a disposición las 24 hs.</p>
                    <hr>
                    <form action="" method="post">
                        <input type="hidden" name="registry" value="registrarse">
                        <div class="form-group">
                            <label for="name-login">Nombre</label>
                            <input id="name" type="text" class="form-control" name="name" value="<?=$name?>">
                        </div>
                        <div class="form-group">
                            <label for="email-login">Email</label>
                            <input id="email" type="text" class="form-control" name="mail" value="<?=$mail?>">
                        </div>
                        <div class="form-group">
                            <label for="password-login">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" value="<?=$pass?>">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                            <label class="custom-file-label" for="customFileLang">Sube tu foto de perfil</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Registrarse</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <h2 class="text-uppercase">Ingresar</h2>
                    <p class="lead">¿Ya sos cliente?</p>
                    <hr>

                    <form action="" method="post">
                        <input type="hidden" name="login" value="ingresar">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="mail" id="mail" type="mail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input name="password" id="password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="recordar" name="recordar" value="si">
                                <label class="form-check-label" for="recordar">Recordar Usuario</label>
                            </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined">Ingresar <i class="fa fa-sign-in"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
