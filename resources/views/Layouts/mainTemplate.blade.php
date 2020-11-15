@extends('Layouts/base')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
@endsection

@section('pageTemplate')
<nav class="navbar navbar-light bg-light page-navbar">
    <div class="container-fluid">
        <a class="navbar-brand">Just Du It !</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <form class="form-inline">
            <a class="btn text-primary my-2 my-sm-0" type="submit">Login</a>
            <a class="btn text-primary my-2 my-sm-0" type="submit">Register</a>
        </form>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 body-navbar">
            <div class="row">
                <div class="col-12">
                    <h4><a href=""> View All Shoe </a></h4>
                    <hr>
                </div>
                <div class="col-12">
                    <h4><a href=""> View Cart </a></h4>
                    <hr>
                </div>
                <div class="col-12">
                    <h4><a href=""> View Transaction </a></h4>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-10 content-wrapper">
            @yield('content')
        </div>
    </div>
</div>

@endsection