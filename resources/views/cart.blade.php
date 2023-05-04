@extends('user_components.navbar')

@section('content')

    <h1>Hello CART</h1>
    <div class="container">

        {{-- ADD --}}
        @if ($message = Session::get('success'))
            <div class="p-3 mb-3 rounded" style="background-color: rgb(94, 195, 151)">
                <h3 class="text-green-800">{{ $message }}</h3>
            </div>
        @endif
        {{-- UPDATE --}}
        @if ($message = Session::get('warning'))
            <div class="p-3 mb-3 rounded" style="background-color: rgb(227, 227, 97)">
                <h3 class="text-green-800">{{ $message }}</h3>
            </div>
        @endif
        {{-- REMOVE & DELETE --}}
        @if ($message = Session::get('destroy'))
            <div class="p-3 mb-3 rounded" style="background-color: rgb(236, 95, 95)">
                <h3 class="text-green-800">{{ $message }}</h3>
            </div>
        @endif


        @if(count($cartItems) < 1)

        <div class="p-4 mb-3 bg-green-400 rounded">
            <h1 class="text-green-800">OOPs ! there is no product in your cart !!!</h1>
            <h2 class="text-green-800">Lets shop first !</h2>
            <a class="btn btn-primary p-3 px-4" href="{{url('/products')}}">ADD PRODUCTS</a>
        </div>

        @else

        <table class="table table-hover container bg-white">
            <thead>
                <tr class="row">
                    <th scope="col" class="col col-md-1">#</th>
                    <th scope="col" class="col col-md-2">NAME</th>
                    <th scope="col" class="col col-md-1">COLOR</th>
                    <th scope="col" class="col col-md-1">SIZE</th>
                    <th scope="col" class="col col-md-1">PRICE</th>
                    <th scope="col" class="col col-md-2">IMAGE</th>
                    <th scope="col" class="col col-md-2">QUANTITY</th>
                    <th scope="col" class="col col-md-2">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($cartItems as $item)
                    <tr class="row">
                        {{-- 1 --}}
                        <th scope="row" class="col col-md-1">{{ $i++ }}</td>
                            {{-- 2 --}}
                        <td scope="row" class="col col-md-2">{{ $item->name }}</td>
                        {{-- 3 --}}
                        <td scope="row" class="col col-md-1">{{ $item->attributes->color }}</td>
                        {{-- 4 --}}
                        <td scope="row" class="col col-md-1">{{ $item->attributes->size }}</td>
                        {{-- 5 --}}
                        <td scope="row" class="col col-md-1">RPs:{{ $item->price }}</td>
                        {{-- 6 --}}
                        <td scope="row" class="col col-md-2"><img width="100px" height="100px"
                                src="{{ asset('product_images/' . $item->attributes->imgpath) }}" alt=""></td>
                        {{-- 7 --}}
                        <td scope="row" class="col col-md-2">
                                <div class="">
                                    {{-- cart Update --}}
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        {{-- Add how much is in stock in max='' --}}
                                        <button class="btn btn-warning"><input type="number" name="quantity" min="1" max="5" step="1" value="{{ $item->quantity }}" style="width: 100%"></button>
                                        {{-- <button class="btn btn-warning">UPDATE</button> --}}
                                    </form>
                                </div>
                        </td>
                        <td scope="row" class="col col-md-2">
                            {{-- product remove --}}
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <button class="btn btn-danger"><img height="30px" width="40px"
                                        src="{{ asset('trash bin.png') }}" alt=""></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <div class="row container">

            <div class="col col-md-10">
                {{-- Continue Shoping --}}
            <a class="btn btn-primary p-3 px-4" href="{{url('/products')}}">CONTINUE SHOPPING</a>

            </div>

            <div class="col col-md-2">


                <div>
                    Total Items: {{ Cart::getTotalQuantity() }}
                    <br><br>
                    Total: RPs:{{ Cart::getTotal() }}
                </div>
                <div>
                    {{-- Cart clear --}}
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-dark p-3 px-4">CLEAR CART</button>
                    </form>
                </div>

                <hr>
                    {{-- Check Out --}}
                <a class="btn btn-dark p-3 px-4">CHECK OUT NOW</a>

            </div>

        </div>

        @endif

    </div>
@endsection
