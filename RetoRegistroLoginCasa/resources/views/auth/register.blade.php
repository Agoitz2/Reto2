@extends('layouts.auth-master')

@section('content')


    <form action="/register" method="POST">
        <h1>Create account</h1>
        @csrf
        @include('layouts.partials.messages')
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
        <input type="text" name="username" placeholder="username" class="form-control" id="exampleInputPassword1">
          <label for="exampleInputPassword1" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            <label for="exampleInputPassword1" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="password_confirmation">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
        </div>
        <div class="mb-3">
            <a href="/login">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
      </form>
@endsection