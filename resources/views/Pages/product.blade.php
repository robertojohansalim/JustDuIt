@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h1>Lorem Ipsum</h1>
    <div class="row">
        <div class="col-4">
            <img class="card-img"
                src="https://static.shop.adidas.co.id/media/catalog/product/cache/2/thumbnail/1200x/9df78eab33525d08d6e5fb8d27136e95/E/G/EG4958_SL_eCom.jpg">
        </div>
        <div class="col-8">

        </div>
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection