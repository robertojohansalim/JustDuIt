@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container" style="margin-top: 10px">
    <div class="title" style="margin-bottom: 35px">
        <h2>View All Transaction</h2>
    </div>
    <div class="row">
        @php
        $collection = [1,2,3];
        $collection2 = [1,2,3,4,5,6]
        @endphp
        @foreach ($collection as $item)
            <div class="col-md-12 col-6 card-col">
                <div class="item" style="margin-bottom: 35px">
                    <div class="center" style="background-color: #699eee; width: 500px; margin-bottom: 20px; margin-top: 10px">
                        <p>2020-12-01 12:00:00</p>
                        <h5>Total Rp. 2000000</h5>
                    </div>
                    @foreach ($collection2 as $item)
                        <img class="card-img" style="width: 200px; height: 150px; margin-bottom: 10px;"
                            src="{{ asset('product_image/Adidus_Super_Star.jpeg') }}">
                    @endforeach
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
