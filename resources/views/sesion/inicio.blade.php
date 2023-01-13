@extends('layout.layout')

@section('title', 'Inicio Sesion')
@section('nav')
  @include('nav.landingNav')
@endsection
@section('content')

    <div class="card position-absolute top-50 start-50 translate-middle col-6" >
        
    <div class="card-body">
        <form action="/login" method="POST">
                @csrf
                <h1>Iniciar Sesión</h1>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario / Correo Electronico</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <a href="/register" class="letraRoja link">No tienes una cuenta aún? Registrate</a>
                </div>
                <button type="submit" class="btn botonRojo">Iniciar sesión</button>
            </form>
    </div>
    </div>




@endsection