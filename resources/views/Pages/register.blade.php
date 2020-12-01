@extends('../Layouts/loginTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/page/login-register.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/form.css') }}">
@endsection

@section('content')
<div class="container form-container">
    {{-- Card --}}
    <div class="card">
        <div class="">
            <h1 class="login-header text-center bg-primary text-white py-2">Register</h1>
        </div>

        @foreach ($errors->all() as $error)
        {{-- @php
        dump($error);
        @endphp --}}
        {{ $error }} <br>
        @endforeach


        <form class="p-5" action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row d-flex justify-content-center">
                <label for="usernameForm" class="col-sm-3 col-form-label text-right">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="usernameForm" placeholder="username" name="username">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="emailForm" class="col-sm-3 col-form-label text-right">E-mail Address</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="emailForm" placeholder="email" name="email">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="passwordForm" class="col-sm-3 col-form-label text-right">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="passwordForm" placeholder="password"
                        name="password">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="passwordComfirmForm" class="col-sm-3 col-form-label text-right">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="passwordComfirmForm" placeholder="password"
                        name="password_confirmation">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    Already Have an Account? <a href="{{ route('login') }}">Login Here!</a>
                </div>
            </div>
        </form>
    </div>
    {{-- Card END --}}
</div>

</div>

@endsection

@section('script')
<script src="{{ asset('asset/js/form.js') }}"></script>
<script>
    console.log("Login Page");

</script>
@endsection