@extends('Layouts/base')

@section('style')
{{-- <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
--}}
@endsection

@section('pageTemplate')
{{-- Top Navigation --}}
<nav class="navbar navbar-light bg-light page-navbar">
    <div class="top-nav-item navbar-brand">
        <a href="{{ route("dashboard") }}" style="text-decoration: none">Just Du It !</a>
    </div>
    <form class="form-inline top-nav-item top-nav-searchbar">
        <div class="row btn-group">
            <input class="form-control col-9" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary col-3" type="submit">Search</button>
        </div>
    </form>
    @if(auth()->user())
    <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->username }} ({{ auth()->user()->role->role_name }})
        </a>
        <div class="dropdown-menu  dropdown-menu-right">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    @else
    <div class="login-register top-nav-item">
        <a class="btn text-primary my-2 my-sm-0 {{ (request()->path() == 'login') ? 'active' : '' }}" type="submit"
            href="{{ route('login') }}">Login</a>
        <a class="btn text-primary my-2 my-sm-0" type="submit" href="{{ route("register") }}">Register</a>
    </div>
    @endif
</nav>
{{-- END of Top Navigation --}}
{{-- Side Bar --}}
<div class="wrapper container-fluid">
    <div class="row h-100">
        <div id="sidebar" class="col-md-3 col-lg-2 container-fluid">
            <div class="row sidebar-content">
                <a href="{{ route('dashboard') }}"> View All Shoe </a>
            </div>
            {{-- Authenticate Login --}}
            {{-- Member Login Sidebar --}}
            @can('isMember')
            <div class="row sidebar-content">
                <a href="{{ route('cart') }}"> View Cart </a>
            </div>
            <div class="row sidebar-content">
                <a href="{{ route('transaction') }}"> View Transaction </a>
            </div>
            @endcan
            {{-- END of Member Login Sidebar --}}
            {{-- Admin Login Sidebar --}}
            {{-- @if(auth()->user()->role->role_name == "admin") --}}
            @can('isAdmin')
            <div class="row sidebar-content">
                <a href="{{ route('addProduct') }}">Add Shoe </a>
            </div>
            <div class="row sidebar-content">
                <a href="{{ route('transaction') }}"> View All Transaction </a>
            </div>
            @endcan
            {{-- END of Admin Login Sidebar --}}
        </div>

        <div class="col-md-9 col-lg-10">
            @yield('content')
        </div>
    </div>

</div>
{{-- END of Side Bar --}}
@endsection

@section('script')
<script src="{{ asset('asset/js/script.js') }}"></script>
@endsection