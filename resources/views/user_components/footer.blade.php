@extends('welcome')

@section('footer')

    <div id="_last" class="d-flex flex-column"
        style="align-items: center; width: 95%; height: 30vh; background-color: black; color: snow; padding: 30px 0px 0px 0px;">
        <div class="">
            <h4>BE THE FIRST</h4>
        </div>
        <div class="">
            <h6>New arrivals. Exclusive previews. First access to sales.</h6>
        </div>
        <div class="">
            <h6>Sign up to stay in know.</h6>
        </div>
        <div class=""><input type="email" placeholder="Enter your E-mail Address.." style="border: none;"><button
                class="_button" type="submit">Sign up</button></div>
    </div>

    <div class="d-flex"
        style="width: 95%; height: 45vh; margin-top: 30px; justify-content: space-evenly; text-align: left;">

        <div id="_footer" class="p-2" style="flex: 30%; height: 45vh;">
            <h4 style="padding-bottom: 20px;">NEED HELP?</h4>
            <h6>+92-1234567890 (9am - 10pm , Mon - Sat)</h6>
            <h6> &nbsp;</h6>
            <h6><a href="">eshopingwebsite.com</a></h6>
        </div>
        <div class="p-2" style="flex: 25%; height: 45vh;">
            <h4 style="padding-bottom: 20px;">CUSTOMER SERVICE</h4>
            <h6>Contact Us</h6>
            <h6>Delivery & Orders</h6>
            <h6>Returns & Exchanges</h6>
            <h6>Terms & Conditions</h6>
            <h6>Privacy Policy</h6>
            <h6>Track My Order</h6>
            <h6>Payment Guide</h6>
        </div>
        <div class="p-2" style="flex: 20%; height: 45vh;">
            <h4 style="padding-bottom: 20px;">COMPANY</h4>
            <h6>Abouts Us</h6>
            <h6>Careers</h6>
        </div>
        <div class="p-2" style="flex: 25%; height: 45vh;">
            <h4 style="padding-bottom: 20px;">FOLLOW US</h4>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-pinterest"></a>
        </div>

    </div>

@endsection
