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

        <form class="p-3" action="{{ route('register') }}" method="POST">
            {{-- @if ($errors->all())
            <div class="alert alert-danger text-center" role="alert">
                @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
    </div>
    @endif --}}
    {{ csrf_field() }}
    <div class="form-group row d-flex justify-content-center">
        <label for="usernameForm" class="col-sm-3 col-form-label text-right">Username</label>
        <div class="col-sm-6">
            <input type="text" class="form-control {{ $errors->has('username') ?"is-invalid" : ""}}" id="usernameForm"
                placeholder="username" name="username" value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $errors->first('username') }}
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row d-flex justify-content-center">
        <label for="emailForm" class="col-sm-3 col-form-label text-right">E-mail Address</label>
        <div class="col-sm-6">
            <input type="email" class="form-control {{ $errors->has('email') ?"is-invalid" : ""}}" id="emailForm"
                placeholder="email" name="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row d-flex justify-content-center">

        <label for="passwordForm" class="col-sm-3 col-form-label text-right">Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control {{ $errors->has('password') ?"is-invalid" : ""}}"
                id="passwordForm" placeholder="password" name="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row d-flex justify-content-center">
        <label for="passwordComfirmForm" class="col-sm-3 col-form-label text-right">Confirm Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control {{ $errors->has('password') ?"is-invalid" : ""}}"
                id="passwordComfirmForm" placeholder="password" name="password_confirmation">
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
