@extends('Layouts/base')

@section('pageTemplate')
<nav class="navbar navbar-light bg-light page-navbar">
  <div class="top-nav-item navbar-brand">
    <a href="">Just Du It !</a>
  </div>
  <form class="form-inline login-register top-nav-item">
    <a class="btn text-primary my-2 my-sm-0" type="submit" href="{{ route('dashboard') }}">Login</a>
    <a class="btn text-primary my-2 my-sm-0" type="submit">Register</a>
  </form>
</nav>
<div class="container-fluid">
  @yield('content')

</div>

@endsection