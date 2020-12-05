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
    @if($transactions == null || count($transactions) == 0)
        <div class="alert alert-secondary text-center" role="alert">
            Transaction Is Empty
        </div>
    @endif
    <div class="row">
        @foreach($transactions as $transaction)
            <div class="col-md-12 col-6 card-col">
                <div class="item" style="margin-bottom: 35px">
                    <div class="center"
                        style="background-color: #699eee; width: 500px; margin-bottom: 20px; margin-top: 10px">
                        <p>{{ $transaction->date }}</p>
                        {{-- <h5>Total Rp. {{ number_format($transaction->total_price) }}</h5> --}}
                        <h5>Total Rp. {{ number_format($transaction->totalPrice[0]->value) }}</h5>
                    </div>
                    <div class="row">
                        @foreach($transaction->details as $detail)
                            <div class="col-3">
                                <div class="card-img-frame m-1" style="height: 200px;">
                                    <img class="card-img"
                                        src="{{ asset('product_image/'.$detail->image) }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row d-flex justify-content-center" style="margin-top: 15px">
        {{ $transactions->links() }}
    </div>
</div>




@endsection

@section('script')
<script>
    console.log("Login Page");

</script>
@endsection
