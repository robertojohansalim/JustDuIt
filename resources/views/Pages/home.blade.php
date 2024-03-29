@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
@endsection

@section('content')
<div class="container content-container" style="margin-top: 10px">
    <div class="title" style="margin-bottom: 35px">
        <h2>View Shoe</h2>
    </div>
    @if($allShoe == null || count($allShoe) == 0)
        <div class="alert alert-secondary text-center" role="alert">
            The item "<b>{{ Request::get('qs') }}</b>" you search is not found
            <i class="fas fa-frown"></i>
        </div>
    @endif
    <div class="row">
        {{-- @foreach ($collection as $item) --}}
        @foreach($allShoe as $shoe)
            {{-- Item Display --}}
            <div class="col-md-4 col-6 card-col">
                <a class="card"
                    href="{{ route('product', ['id'=>$shoe->id]) }}"
                    style="text-decoration: none; max-width:250px">
                    <div class="card-img-frame" style="height: 248px">
                        <img class="card-img"
                            src="{{ asset('product_image/' . $shoe->image) }}">
                    </div>
                    <div class="card-body" style="height: 145px">
                        <h5>{{ $shoe->name }}</h5>
                        <p>Rp. {{ number_format($shoe->price) }}</p>
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
    <div class="row d-flex justify-content-center" style="margin-top: 15px">
        {{ $allShoe->withQueryString()->links() }}
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
