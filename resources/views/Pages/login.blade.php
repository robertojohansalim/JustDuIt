@extends('../Layouts/loginTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/page/login-register.css') }}">
@endsection

@section('content')
<div class="container form-container">
    {{-- <div class="login-header row" style="background-color: blue">
        <div class="col-12 text-center">Login</div>
    </div> --}}
    <div class="card">
        <div class="">
            <h1 class="login-header text-center bg-primary text-white py-2">Login</h1>
        </div>
        <form class="p-5">
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label text-right">E-mail Address</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="colFormLabel" placeholder="password"
                        name="password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            Can't check this
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>

        </form>

    </div>
    {{-- <div class="form-group row">
                <label for="" class="col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div> --}}
</div>

</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection