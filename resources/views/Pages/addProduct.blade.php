@extends('../Layouts/mainTemplate')

@section('style')
{{-- <link rel="stylesheet" href="{{ asset('asset/css/item-card.css') }}">
--}}
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
        <form class="p-3" action="{{ route('addProduct') }}" method="POST"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row d-flex justify-content-center">
                <label for="shoeNameForm" class="col-sm-3 col-form-label text-right">Shoe Name</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}"
                        id="shoeNameForm" placeholder="Shoe Name" name="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="priceForm" class="col-sm-3 col-form-label text-right">Price</label>
                <div class="col-sm-6">
                    <input type="number"
                        class="form-control {{ $errors->has('price') ? "is-invalid" : "" }}"
                        id="priceForm" placeholder="price" name="price" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="descriptionForm" class="col-sm-3 col-form-label text-right">Description</label>
                <div class="col-sm-6">
                    <textarea
                        class="form-control {{ $errors->has('description') ? "is-invalid" : "" }}"
                        id="descriptionForm" placeholder="description"
                        name="description">{{ old('descriptor') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <label for="imageForm" class="col-sm-3 col-form-label text-right">Image</label>
                <div class="col-sm-6">
                    <input type="file" class="form-contntrol" name="image">
                    @error('image')
                        <div class="small text-danger">
                            {{ $errors->first('image') }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class=" form-group row d-flex justify-content-center">
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
