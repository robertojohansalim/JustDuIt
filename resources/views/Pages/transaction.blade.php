@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h1>Transaction</h1>
    <div class="row">
        @php
        $collection = [1,2,3]
        @endphp
        @foreach ($collection as $item)
            <div class="col-md-12 col-6 card-col">
                <div class="item">
                    <div class="card-body">
                        <p>2020-12-01 12:00:00 Total Rp. 2000000</p>
                    </div>
                    <img class="card-img" style="width: 150px; height: 150px"
                        src="{{ asset('image/Adidus_Superstar.jpg') }}">
                </div>
            </div>
        @endforeach
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
