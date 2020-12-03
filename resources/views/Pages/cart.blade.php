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
    <div class="row">
        @foreach ($cart_items as $item)
        <div class="col-md-12 col-6 card-col">
            <div class="item" style="display: flex">
                <img class="card-img" style="width: 150px; height: 150px"
                    src="{{ asset('product_image/'. $item->shoe->image) }}">
                <div class="card-body" style="margin-top: 40px">
                    <h6>{{ $item->shoe->name }}</h6>
                </div>
                <div class="card-body" style="margin-top: 40px">
                    <p>Rp. {{ number_format($item->shoe->price) }}</p>
                </div>
                <a href="{{ route('updateCart', ['id'=>$item->id]) }}">
                    <button type="button" class="btn btn-primary" style="margin-top: 50px">Edit</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <a href="">
        <button type="button" class="btn btn-primary">Check Out</button>
    </a>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection