@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h1>View Shoe</h1>
    <div class="row">
        @php
        $collection = [1,2,3,4,5,6]
        @endphp
        @foreach ($collection as $item)
        {{-- Item Display --}}
        <div class="col-md-4 col-6 card-col">
            <div class="card">
                <img class="card-img"
                    {{-- src="https://static.shop.adidas.co.id/media/catalog/product/cache/2/thumbnail/1200x/9df78eab33525d08d6e5fb8d27136e95/E/G/EG4958_SL_eCom.jpg"> --}}
                    src="{{ asset('image/EG4958_SL_eCom.jpg') }}">
                <div class="card-body">
                    <h5>Adidus Superstar Shoes</h5>
                    <p>Rp. 1000000</p>
                </div>
            </div>
        </div>
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
