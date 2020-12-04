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
        <div class="col-4">
            {{-- <img class="card-img"
                src="https://static.shop.adidas.co.id/media/catalog/product/cache/2/thumbnail/1200x/9df78eab33525d08d6e5fb8d27136e95/E/G/EG4958_SL_eCom.jpg"> --}}
            <img class="card-img" src="{{ asset('product_image/'.$shoe->image) }}" style="width: 250px; height: 250px">
        </div>
        <div class="col-8">
            <h2>{{ $shoe->name }}</h5>
                <p>Rp. {{ number_format($shoe->price) }}</p>
                <p>{{ $shoe->description }}</p>
        </div>
    </div>
    <form class="p-5" action="{{ route('updateProduct', ['id'=>$shoe->id]) }}" method="POST"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{ $shoe->id }}">
        <input type="hidden" name="product_image_name" value="{{ $shoe->image }}">
        <div class="form-group row">
            <label for="shoeNameForm" class="col-sm-3 col-form-label text-right">Shoe Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="shoeNameForm" placeholder="Shoe Name" name="name"
                    value="{{ $shoe->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="priceForm" class="col-sm-3 col-form-label text-right">Price</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" id="priceForm" placeholder="price" name="price"
                    value="{{ $shoe->price }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="descriptionForm" class="col-sm-3 col-form-label text-right">Description</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="descriptionForm" placeholder="description"
                    name="description">{{ $shoe->description }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="imageForm" class="col-sm-3 col-form-label text-right">Image</label>
            <div class="col-sm-6">
                <div class="input-group">
                    <input type="file" class="" name="image">
                    {{-- <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label> --}}
                </div>
            </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Update Shoe</button>
            </div>
        </div>
    </form>
    <p><br></p>

</div>

@endsection

@section('script')
<script src="{{ asset('asset/js/form.js') }}"></script>

@endsection