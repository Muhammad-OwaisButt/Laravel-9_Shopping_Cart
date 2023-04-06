@extends('user_components.footer')

@section('navbar')

    <div class="jumbotron text-center" style="margin-bottom:0px; padding:0px; background-color: white;">

        <h1 style=" font-size: 50px;">J. Demo</h1>

        <ul class="nav nav-tabs"
            style="justify-content: space-evenly; border-bottom: none; width: 100%; padding: 4px 5px 10px 5px;">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('products') }}">NEW ARRAIVALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">EXCLUSIVE COLLECTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">WOMEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">MEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">BOYS & GIRLS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">FRAGRANCES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">ABOUT US</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#!">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">REGISTER</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('cart')}}"><img height="30px" width="40px" src="{{ asset('cart.png') }}">{{ Cart::getTotalQuantity()}}</a>
            </li>

        </ul>

    </div>

@endsection
