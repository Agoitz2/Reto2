@extends('layout.layout')

@section('title', 'Registrarse')
@section('nav')
  @include('nav.landingNav')
@endsection
@section('content')


    <div class="card position-absolute top-50 start-50 translate-middle col-6" >
        
    <div class="card-body">
    <form action="/register" method="POST">
        <h1>Registrarse</h1>
        @csrf

        <!-- usuario -->

        <div class="form-floating mb-3">
        <input type="text" name="usuario" placeholder="usuario" class="form-control" id="usuario">
          <label for="usuario" class="form-label">Usuario <span class="letraRoja">*</span></label>
        </div>

        <!-- email -->

        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
          <label for="exampleInputEmail1" class="form-label">Correo Electronico <span class="letraRoja">*</span></label>
         
        <!-- nombre y apellidos -->

        </div>
        <div class="form-floating mb-3">
        <input type="text" name="nombre" placeholder="nombre" class="form-control" id="nombre">
          <label for="nombre" class="form-label">Nombre <span class="letraRoja">*</span></label>
        </div>


        <div class="form-floating mb-3">
        <input type="text" name="apellidos" placeholder="apellidos" class="form-control" id="apellidos">
          <label for="apellidos" class="form-label">Apellido/s <span class="letraRoja">*</span></label>
        </div>

        <!-- contraseña -->

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            <label for="exampleInputPassword1" class="form-label">Contraseña <span class="letraRoja">*</span></label> 
        </div>


        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="password_confirmation">
            <label for="confirmPassword" class="form-label">Confirmación de contraseña <span class="letraRoja">*</span></label>
        </div>
        <div class="mb-3">
            <a href="/login" class="letraRoja">Iniciar sesión</a>
        </div>

        <!-- enviar -->
        <button type="submit" class="btn botonRojo">Registrarse</button>
      </form>
    </div>
    </div>



@endsection