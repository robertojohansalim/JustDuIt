@extends('Layouts/base')

@section('style')
{{-- <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}"> --}}
@endsection

@section('pageTemplate')

<nav class="navbar navbar-light bg-light page-navbar">
    <div class="top-nav-item navbar-brand">
        <a href="{{ route("dashboard") }}">Just Du It !</a>
    </div>
    <form class="form-inline top-nav-item top-nav-searchbar">
        <div class="row btn-group">
            <input class="form-control col-9" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary col-3" type="submit">Search</button>
        </div>
    </form>
    <div class="login-register top-nav-item">
        <a class="btn text-primary my-2 my-sm-0 {{ (request()->path() == 'login') ? 'active' : '' }}" type="submit"
            href="{{ route('login') }}">Login</a>
        <a class="btn text-primary my-2 my-sm-0" type="submit" href="{{ route("register") }}">Register</a>
    </div>
</nav>

<div class="wrapper container-fluid">
    <div class="row h-100">
        {{-- <div id="sidebar" class="col-md-3 container-fluid"> --}}
        <div id="sidebar" class="col-md-3 container-fluid">
            <div class="row sidebar-content">
                <a href=""> View All Shoe </a>
            </div>
            <div class="row sidebar-content">
                <a href=""> View Cart </a>
            </div>
            <div class="row sidebar-content">
                <a href=""> View Transaction </a>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>

    {{-- <div class="row">
                <div class="col-md-2" id="sidebar">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-large"><a href=""> View All Shoe </a></h5>
                            <hr>
                        </div>
                        <div class="col-12">
                            <h5><a href=""> View Cart </a></h5>
                            <hr>
                        </div>
                        <div class="col-12">
                            <h5><a href=""> View Transaction </a></h5>
                            <hr>
                        </div>
                    </div>
                </div> --}}
    {{-- <div class="col-md-10 content-wrapper"> --}}

    {{-- </div> --}}
    {{-- </div> --}}
</div>

@endsection

@section('script')
{{-- <script src="{{ asset('asset/js/script.js') }}"></script> --}}
@endsection