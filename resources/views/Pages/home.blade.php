@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container" style="margin-top: 10px">
    <h1>View Shoe</h1>
    <div class="row">
        {{-- @foreach ($collection as $item) --}}
        @foreach ($allShoe as $shoe)
        {{-- Item Display --}}
        <div class="col-md-4 col-6 card-col">
            <a class="card" href="{{ route('product', ['id'=>$shoe->id]) }}" style="text-decoration: none; width:250px">
                <img class="card-img" src="{{ asset('product_image/' . $shoe->image) }}">
                <div class="card-body">
                    <h5>{{ $shoe->name }}</h5>
                    <p>Rp. {{ $shoe->price }}</p>
                </div>
            </a>
        </div>
        {{-- <div class="col-md-4 col-6 card-col">
            <a class="card" href="{{ route('product', ['id'=>1]) }}">
        <img class="card-img" src="{{ asset('product_image/Adidus_Super_Star.jpeg') }}">
        <div class="card-body">
            <h5>Adidus Superstar Shoes</h5>
            <p>Rp. 1000000</p>
        </div>
        </a>--}}
        {{-- Item Display END --}}
        @endforeach
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection