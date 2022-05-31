@extends('layouts.auth-register-master')

@section('content')

<form action="/register" method="POST">
    <h1>Create account ⛓</h1>
     @csrf
     @include('layouts.partials.messages')
 <div class="form-floating mb-3">
     <input type="text" name="username" class="form-control" placeholder="username" id="exampleInputEmail1" aria-describedby="emailHelp">
     <label for="exampleInputEmail1" class="form-label">Username</label>
  </div>
  <div class="form-floating mb-3">
      <input type="email" name="email" placeholder="name@example.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
  </div>
  <div class="form-floating mb-3">
      <input type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
  </div>
  <div class="form-floating mb-3">
      <input type="password" name="password_confirmation" placeholder="password" class="form-control" id="exampleInputPassword2">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
  </div>
  <div class="mb-3">
      <a href="/login">Login</a>
  </div>

  <button type="submit" class="btn btn-secondary">Create account</button>
</form>
@endsection
