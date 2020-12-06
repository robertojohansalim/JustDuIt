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
            <div class="card-img-frame" style="height: 250px; width: 250px">
                <img class="card-img" src="{{ asset('product_image/'. $shoe->image) }}">
            </div>
        </div>
        <div class="col-8">
            <h2>{{ $shoe->name }}</h5>
                <p>Rp. {{ number_format($shoe->price) }}</p>
                <p>Description:<br>{{ $shoe->description }}</p>
                @can('isAdmin')
                    <a
                        href="{{ route('updateProduct', ['id'=>$shoe->id]) }}">
                        <button type="button" class="btn btn-primary" style="margin-top: 20px">Update Shoe</button>
                    </a>
                @endcan
                @can('isMember')
                    <a
                        href="{{ route('addToCart', ['id'=>$shoe->id]) }}">
                        <button type="button" class="btn btn-primary" style="margin-top: 20px">Add to Cart</button>
                    </a>
                @endcan
        </div>
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
