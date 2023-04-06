@extends('user_components.navbar')

@section('content')

    <div class='w-100 row p-0 m-0'>

        {{-- Side Bar --}}
        <div class='col-3 col-sm-3 p-4' style="border:none; backgroundColor:black; color:white">
            <h3 style="color: black">Search Filters</h3>
        </div>

        {{-- Content --}}
        <div class='col-9 col-sm-9 d-flex flex-wrap justify-content-between p-4'
            style="border:none; background-color:whitesmoke; min-height:60vh; height: auto ">

            @foreach ($products as $data)

            <div id="_product" style="width: 20.29rem; background-color:white; border: 2px solid white" class=' mt-4' key={{ $data->id }}>
                <a href="{{url('single_product/'. $data->id)}}">
                    <div>
                        <img style="height: 45vh; min-height: 45vh; min-width: 20rem; width: 20rem"
                            variant="top" src="{{ asset('product_images/' . $data->imgpath) }}" alt="{{ $data->name }}" />
                    </div>
                    <div>
                        <h4>{{ $data->name }}</h4>
                        <p>RPs: {{ $data->price }}</p>
                        {{-- <p style="display: none">{{$data->size}}</p>
                        <p style="display: none">{{$data->color}}</p> --}}
                        <form action="{{route('cart.list')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <input type="hidden" value="{{ $data->name }}" name="name">
                            <input type="hidden" value="{{ $data->size }}" name="size">
                            <input type="hidden" value="{{ $data->color }}"  name="color">
                            <input type="hidden" value="{{ $data->price }}" name="price">
                            <input type="hidden" value="{{ $data->imgpath }}"  name="imgpath">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 btn btn-primary" type="submit">Add To Cart</button>
                        </form>
                        {{-- <a class="btn btn-primary" href="{{ 'product_cart/' . $data->id }}">Add to Cart</a> --}}
                    </div>
                </a>
            </div>

            @endforeach

        </div>

    </div>

@endsection
