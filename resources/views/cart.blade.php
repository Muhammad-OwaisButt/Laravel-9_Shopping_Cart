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







{{-- <main class="my-8">
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <h3 class="text-3xl font-bold">Carts</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">Name</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">Qtd</span>
                                    <span class="hidden lg:inline">Quantity</span>
                                </th>
                                <th class="hidden text-right md:table-cell"> price</th>
                                <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                        <a href="#">

                                            <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                                alt="Thumbnail">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">

                                            <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}</p>

                                        </a>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">

                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="text" name="quantity" value="{{ $item->quantity }}"
                                                        class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                    <button
                                                        class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">

                                            ${{ $item->price }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell">

                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button
                                                class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        Total: ${{ Cart::getTotal() }}
                    </div>
                    <div>

                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Clear
                                Carts</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main> --}}
