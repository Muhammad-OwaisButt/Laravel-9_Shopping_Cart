@extends('user_components.navbar')

@section('content')

<h1>Add Information to proceed to check out !!</h1>

    <div class="container p-3" style="width: 70%">

        <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label class="form-label">Name</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="col-md-4">
                <label class="form-label">@ Email</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="col-md-6">
                <label class="form-label">Country</label>
                <select class="form-select" name="country">
                    <option selected>Choose your Country ...</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="England">England</option>
                    <option value="America">America</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">City</label>
                <select class="form-select" name="city">
                    <option selected>Choose your City ...</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Home address</label>
                <input class="form-control" type="text" name="home_address">
            </div>
            <div class="col-md-6">
                <label class="form-label">Shipping address</label>
                <input class="form-control" type="text" name="shipping_address">
            </div>
            <div class="col-md-6">
                <label class="form-label">Post Code</label>
                <input class="form-control" type="text" name="post_code">
            </div>
            <div class="col-md-12 p-2"></div>
            <div class="col-12">
                <button type="submit" class="px-4 p-3 btn btn-primary">Proceed to check Out</button>
            </div>
        </form>
    </div>

@endsection
