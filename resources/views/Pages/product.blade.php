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
            <img class="card-img" src="{{ asset('product_image/'. $shoe->image) }}" style="width: 250px; height: 250px">
        </div>
        <div class="col-8">
            <h2>{{ $shoe->name }}</h5>
                <p>Rp. {{ $shoe->price }}</p>
                <p>Description:<br>{{ $shoe->description }}</p>
                @if (auth()->user())
                @if (auth()->user()->role->role_name == 'admin')
                <a href="">
                    <button type="button" class="btn btn-primary" style="margin-top: 20px">Update Shoe</button>
                </a>
                @else
                <a href="{{ route('addToCart', ['id'=>$shoe->id]) }}">
                    <button type="button" class="btn btn-primary" style="margin-top: 20px">Add to Cart</button>
                </a>
                @endif
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