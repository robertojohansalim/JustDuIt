@extends('../Layouts/loginTemplate')

@section('style')

@endsection

@section('content')
<div class="container">
    <div class="login-header">
        <div class="col-12 text-center">Login</div>
    </div>
    <div class="container">
        <form action="">
            <div class="form-group row">
                <label for="" class="col-sm-2">E-Mail Address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div>

            </div>
        </form>
    </div>

</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection