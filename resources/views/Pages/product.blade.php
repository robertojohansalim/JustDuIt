@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h2><br></h2>
    <div class="row">
        <div class="col-4">
            {{-- <img class="card-img"
                src="https://static.shop.adidas.co.id/media/catalog/product/cache/2/thumbnail/1200x/9df78eab33525d08d6e5fb8d27136e95/E/G/EG4958_SL_eCom.jpg"> --}}
            <img class="card-img" src="{{ asset('image/Adidus_Superstar.jpg') }}">
        </div>
        <div class="col-8">
            <h2>Adidus Superstar Shoes</h5>
                <p>Rp. 1000000</p>
                <p>Description:<br>Good Quality Shoes!</p>
                @if (auth()->user())
                <a href="{{ route('addToCart', ['id'=>1]) }}">
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </a>
                @endif
        </div>
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
