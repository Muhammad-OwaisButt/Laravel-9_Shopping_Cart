@extends('admin.components.nav')

@section('content')

    <table class="table table-hover container bg-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Color</th>
                <th scope="col">size</th>
                <th scope="col">price</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>

            @php
                $i = 1;
            @endphp

            @foreach ($products as $data)

                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->color }}</td>
                    <td>{{ $data->size }}</td>
                    <td>{{ $data->price }}</td>
                    <td><img width="80px" height="80px" src="{{ asset('product_images/' . $data->imgpath) }}"
                            alt="{{ $data->name }}"></td>
                    <td><a class="btn btn-warning" href="{{ 'edit/' . $data->id }}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{ 'delete/' . $data->id }}">Delete</a></td>
                </tr>

            @endforeach

        </tbody>
    </table>


@endsection
