@extends('../Layouts/mainTemplate')

@section('style')
<link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/form.css') }}">
@endsection

@section('content')
<div class="container content-container">
    <h2><br></h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card-img-frame" style="max-width: 250px; height: 250px">
                <img class="card-img" src="{{ asset('product_image/'.$shoe->image) }}">
            </div>
        </div>
        <div class="col-md-8">
            <h2>{{ $shoe->name }}</h5>
                <p>Rp. {{ number_format($shoe->price) }}</p>
                <p>{{ $shoe->description }}</p>
                {{-- Form --}}
                <form
                    action="{{ route('addToCart', ['id'=>$shoe->id]) }}"
                    method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $shoe->id }}">
                    <div class="qty">
                        <div class="form-group row d-flex justify-content" style="margin-top: 40px">
                            <label for="qtyForm" class="col-sm-1 col-form-label text-left"
                                style="margin-right: 40px">Quantity</label>
                            <button type="button" class="minus"><i class="fas fa-minus"></i></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number"
                                style="width: 50px; text-align: center">
                            <button type="button" class="plus"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Add to Cart</button>
                    </div>
                </form>
                {{-- END of Form --}}
        </div>
    </div>
    <p><br></p>

</div>

@endsection

@section('script')
<script src="{{ asset('asset/js/form.js') }}"></script>

@endsection
