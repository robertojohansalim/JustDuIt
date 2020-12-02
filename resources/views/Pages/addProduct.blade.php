@extends('../Layouts/mainTemplate')

@section('style')
{{-- <link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('asset/css/page/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/form.css') }}">
@endsection

@section('content')
<div class="container content-container pt-5">
    {{-- Card --}}
    <div class="card">
        <div class="">
            <h1 class="login-header text-center bg-primary text-white py-2">Add Shoe</h1>
        </div>

        {{-- @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach --}}

        <form class="p-5" action="{{ route('addProduct_post') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row d-flex justify-content-center">
                <label for="shoeNameForm" class="col-sm-3 col-form-label text-right">Shoe Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="shoeNameForm" placeholder="Shoe Name" name="name">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="priceForm" class="col-sm-3 col-form-label text-right">Price</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="priceForm" placeholder="price" name="price">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="descriptionForm" class="col-sm-3 col-form-label text-right">Description</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descriptionForm" placeholder="description" name="description">
                    </textarea>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="imageForm" class="col-sm-3 col-form-label text-right">Image</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Add Shoe</button>
                </div>
            </div>
        </form>
    </div>
    {{-- Card END --}}
</div>
@endsection

@section('script')
<script>
    console.log("Login Page");
</script>
@endsection