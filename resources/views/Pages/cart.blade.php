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
        @php
        $collection = [1,2,3]
        @endphp
        @foreach ($collection as $item)
            <div class="col-md-12 col-6 card-col">
                <div class="item" style="display: flex">
                    <img class="card-img" style="width: 150px; height: 150px"
                        src="{{ asset('product_image/Adidus_Super_Star.jpeg') }}">
                    <div class="card-body" style="margin-top: 40px">
                        <h6>Adidus Superstar Shoes</h6>
                    </div>
                    <div class="card-body" style="margin-top: 40px">
                        <p>Rp. 1000000</p>
                    </div>
                    <a href="{{ route('updateCart', ['id'=>1]) }}">
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
