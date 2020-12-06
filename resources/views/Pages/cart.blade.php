@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container" style="margin-top: 10px">
    <div class="title" style="margin-bottom: 35px">
        <h2>View Cart</h2>
    </div>
    @if($cart_items == null || count($cart_items) == 0)
        <div class="alert alert-secondary text-center" role="alert">
            Cart Is Empty
        </div>
    @else
        <div class="row">
            @foreach($cart_items as $item)
                <div class="col-md-12 col-6 card-col">
                    <div class="item" style="display: flex">
                        <div class="card-img-frame" style="width: 150px; height: 150px">
                            <img class="card-img"
                                src="{{ asset('product_image/'. $item->shoe->image) }}">
                        </div>
                        <div class="card-body" style="margin-top: 40px">
                            <h6>{{ $item->shoe->name }}</h6>
                        </div>
                        <div class="card-body" style="margin-top: 40px">
                            <p>Rp. {{ (number_format($item->shoe->price * $item->quantity)) }}</p>
                        </div>
                        <a
                            href="{{ route('updateCartItem', ['id'=>$item->id]) }}">
                            <button type="button" class="btn btn-primary" style="margin-top: 50px">Edit</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- @if(count($cart_items) != 0) --}}
        <form action="{{ route('checkoutCart') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
            <div class="row d-flex justify-content-center" style="margin-top: 25px">
                <button type="submit" class="btn btn-primary">Check Out</button>
            </div>
        </form>
        {{-- @endif --}}
    @endif
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
