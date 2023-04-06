@extends('admin.dashboard')

@section('nav')

    <div class="jumbotron text-center" style="margin-bottom:0px; padding:0px; background-color: white;">

        <h1 style=" font-size: 50px; background-color: black; color:antiquewhite">Admin J.</h1>

        <ul class="nav nav-tabs"
            style="justify-content: space-evenly; border-bottom: none; width: 100%; padding: 4px 5px 10px 5px;">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin99') }}">ADD PRODUCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin99/data') }}">PRODUCT COLLECTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('products') }}">NEW ARRAIVALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">ORDER COLLECTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">BOYS & GIRLS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">FRAGRANCES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">MAKEUP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">CATALOGE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!">40% - 50%</a>
            </li>

        </ul>

    </div>

@endsection
