@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h1>Lorem Ipsum</h1>
    <div class="row">
        <div class="col-4">
            <img class="card-img" src="{{ asset('image/EG4958_SL_eCom.jpg') }}">
        </div>
        <div class="col-8">
            <h1>Name : Adidas</h1>
            <h3>Price: Rp. 4.000.000</h3>
            <p>Description: <br>
                Real Adidas Shoe
            </p>
            @if (auth()->user())
            @if (auth()->user()->role->role_name == 'admin')
            <a href="">Update Shoe</a>
            @else
            <a href="">Add to Cart</a>
            @endif
            @endif
            {{-- Add To cart --}}
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
console.log("Login Page");
</script>
@endsection