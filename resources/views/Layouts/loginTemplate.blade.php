@extends('Layouts/base')

@section('pageTemplate')
<nav class="navbar navbar-light bg-light page-navbar">
  <div class="container-fluid">
    <a class="navbar-brand">Just Du It !</a>
    <form class="form-inline">
      <a class="btn text-primary my-2 my-sm-0" type="submit">Login</a>
      <a class="btn text-primary my-2 my-sm-0" type="submit">Register</a>
    </form>
  </div>
</nav>
<div class="container-fluid">
  @yield('content')

</div>

@endsection