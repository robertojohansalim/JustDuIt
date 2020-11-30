@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h1>Cart</h1>
    <div class="row">
        {{-- @php
        $collection = [1,2,3,4,5,6]
        @endphp
        @foreach ($collection as $item)

        <div class="col-md-4 col-6 card-col">
            <div class="card">
                <a href="{{ url("product/1") }}" style="text-decoration: none">
                    <img class="card-img"
                        src="{{ asset('image/EG4958_SL_eCom.jpg') }}">
                    <div class="card-body">
                        <h5>Adidus Superstar Shoes</h5>
                        <p>Rp. 1000000</p>
                    </div>
                </a>
            </div>
        </div>

        @endforeach --}}
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
