{{-- @extends('../Layouts/loginTemplate') --}}
@extends('../Layouts/loginTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/page/login-register.css') }}">
@endsection

@section('content')
<div class="container form-container">
    {{-- Card --}}
    <div class="card">
        <div class="">
            <h1 class="login-header text-center bg-primary text-white py-2">Login</h1>
        </div>
        <form class="p-5">
            <div class="form-group row d-flex justify-content-center">
                <label for="colFormLabel" class="col-sm-3 col-form-label text-right">E-mail Address</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="email" name="email">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="colFormLabel" placeholder="password"
                        name="password">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            Remember Me
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    Does not have Account? <a href="{{ route('register') }}">Register Here!</a>
                </div>
            </div>
        </form>
    </div>
    {{-- Card END --}}
</div>

</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection