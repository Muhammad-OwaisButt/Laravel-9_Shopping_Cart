@extends('user_components.navbar')

@section('content')

<div class="container">
    <div class="row container">

    <div class="col col-md-6">
        <img width="500px" height="500px" src="{{asset('product_images/'. $product->imgpath)}}" alt="{{$product->name}}">
    </div>

    <div class="col col-md-6">
        <p>{{$product->name}}</p>
    </div>
    </div>

</div>

@endsection
