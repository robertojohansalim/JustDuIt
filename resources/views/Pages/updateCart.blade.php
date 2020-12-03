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
            <img class="card-img" src="{{ asset('product_image/'.$item->image) }}" style="width: 250px; height: 250px">
        </div>
        <div class="col-8">
            <h2>{{ $item->name }}</h5>
                <p>Rp. {{ number_format($item->price) }}</p>
                <p>{{ $item->description }}</p>
                <div class="qty">
                    <div class="form-group row d-flex justify-content" style="margin-top: 40px">
                        <form action="">
                            <label for="qtyForm" class="col-sm-1 col-form-label text-left"
                                style="margin-right: 40px">Quantity</label>
                            <button type="button" class="minus"><i class="fas fa-minus"></i></button>
                            <input class="quantity" min="0" name="quantity" value="{{ $quantity }}" type="number"
                                style="width: 50px; text-align: center">
                            <button type="button" class="plus"><i class="fas fa-plus"></i></button>
                        </form>
                    </div>
                    <div class="row" style="margin-top: 25px">
                        <button type="button" class="btn btn-primary" style="margin-left: 10px">Update Cart</button>
                        {{-- Delete Btn --}}
                        <form action="{{ route('removeCartItem') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="cart_id" value="{{ $cart_id }}">
                            <button type="submit" class="btn btn-outline-warning" style="margin-left: 20px">
                                Delete Cart
                            </button>
                        </form>
                        {{-- END of Delete Btn --}}
                    </div>
                </div>
        </div>
    </div>
    <p><br></p>

</div>

@endsection

@section('script')
<script src="{{ asset('asset/js/form.js') }}"></script>

@endsection