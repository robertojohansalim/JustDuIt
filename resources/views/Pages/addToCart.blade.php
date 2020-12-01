@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/form.css') }}">
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
                <p>Good Quality Shoes!</p>
                {{-- @if (auth()->user())
                <a href="">
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </a>
            @endif --}}
        </div>
    </div>
    <p><br></p>
    <div class="qty">
        <div class="form-group row d-flex justify-content">
            <label for="qtyForm" class="col-sm-1 col-form-label text-left">Quantity</label>
            <button class="minus"><i class="fas fa-minus"></i></button>
            <input class="quantity" min="0" name="quantity" value="1" type="number">
            <button class="plus"><i class="fas fa-plus"></i></button>
        </div>
        <button type="button" class="btn btn-primary">Add to Cart</button>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('asset/js/form.js') }}"></script>

@endsection