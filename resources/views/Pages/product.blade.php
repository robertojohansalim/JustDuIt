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
            <img class="card-img" src="{{ asset('product_image/'. $shoe->image) }}">
        </div>
        <div class="col-8">
            {{-- <h2>Adidus Superstar Shoes</h5>
                <p>Rp. 1000000</p>
                <p>Description:<br>Good Quality Shoes!</p> --}}
            <h2>{{ $shoe->name }}</h5>
                <p>Rp. {{ $shoe->price }}</p>
                <p>Description:<br>{{ $shoe->description }}</p>
                @if (auth()->user())
                <a href="{{ route('addToCart', ['id'=>$shoe->id]) }}">
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