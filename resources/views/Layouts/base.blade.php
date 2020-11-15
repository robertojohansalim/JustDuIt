<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap/bootstrap.min.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    @yield('style')

</head>

<body>

    @yield('pageTemplate')

    {{-- JQuery --}}
    <script src="{{ asset('asset/js/jquery-3.5.1.min.js') }}"></script>
    {{-- Bootstrap JS --}}
    <script src="{{ asset('asset/js/bootstrap/bootstrap.bundle.min.js') }}"></script>


    {{-- Dynamic Script --}}
    @yield('script')
</body>

</html>