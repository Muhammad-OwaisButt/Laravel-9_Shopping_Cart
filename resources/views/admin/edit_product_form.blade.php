@extends('admin.components.nav')

@section('content')

    <h1>Update Properties of your Product</h1>

    <div class="container p-3" style="width: 70%">

        <form class="row g-3" method="POST" action="{{ url('admin99/update') }}" enctype="multipart/form-data">
            @csrf

            <input class="form-control" type="hidden" name="id" value="{{ $product->id }}">

            <div class="col-md-6">
                <label class="form-label">Product Name</label>
                <input class="form-control" type="text" name="name" value="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Category</label>
                <select class="form-select" name="category">
                    <option value='{{ $product->category }}' selected>{{ $product->category }}</option>
                    <option value="Shirts">Shirts</option>
                    <option value="Pants">Pants</option>
                    <option value="Shoes">Shoes</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Color</label>
                <select class="form-select" name="color">
                    <option value='{{ $product->color }}' selected>{{ $product->color }}</option>
                    <option value="red">red</option>
                    <option value="yellow">yellow</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                    <option value="pink">pink</option>
                    <option value="gray">gray</option>
                    <option value="black">black</option>
                    <option value="brown">brown</option>
                    <option value="white">white</option>
                    <option value="violet">violet</option>
                    <option value="peach">peach</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Size</label>
                <select class="form-select" name="size">
                    <option value='{{ $product->size }}' selected>{{ $product->size }}</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Price</label>
                <input class="form-control" type="number" name="price" value='{{ $product->price }}'>
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Image</label>
                <input class="form-control" type="file" name="imgpath" value='{{ $product->imgpath }}'>
            </div>
            <div class="col-md-12 p-2"></div>
            <div class="col-12">
                <button type="submit" class="btn btn-warning">Update product</button>
            </div>
        </form>
    </div>

@endsection
