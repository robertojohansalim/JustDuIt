<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap/bootstrap.min.css') }}">

    {{-- Font Awsome CDN --}}
    {{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    @yield('style')

</head>

<body>

    @yield('pageTemplate')

    {{-- JQuery --}}
    <script src="{{ asset('asset/js/bootstrap/jquery-3.5.1.min.js') }}"></script>
    {{-- Bootstrap JS --}}
    <script src="{{ asset('asset/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

    {{-- Dynamic Script --}}
    @yield('script')
</body>

</html>