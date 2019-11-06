@extends('layouts.user')

@section('content')
<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-5">
                <div class="product_slider_img">
                    <div id="vertical">
                        <div data-thumb="../../../storage/{{$cardigan->cardigan_image}}">
                            <img src="../../../storage/{{$cardigan->cardigan_image}}" alt="ini gambar cardigan" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{$cardigan->cardigan_name }}</h3>
                    <h2>{{$cardigan->cardigan_price }}</h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                            <span>Category</span> : cek kategori</a>
                        </li>
                        <li>
                            <a href="#"> <span>Availibility</span> : In Stock</a>
                        </li>
                    </ul>
                    <p>
                        {{$cardigan->cardigan_desc }}                    
                    </p>
                    <div class="card_area">
                        <div class="add_to_cart">
                            <a href="{{route('user.order.cardigan', $cardigan->id)}}" class="btn_3">Order This Product</a>
                        </div>
                        <!-- <div class="social_icon">
                            <a href="#" class="fb"><i class="ti-facebook"></i></a>
                            <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                            <a href="#" class="li"><i class="ti-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
@endsection
