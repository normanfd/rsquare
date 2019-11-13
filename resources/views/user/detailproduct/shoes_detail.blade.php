@extends('layouts.user')

@section('content')
<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-5">
                <div class="product_slider_img">
                    <div id="vertical">
                        <div data-thumb="../../storage/{{$shoes->shoes_image}}">
                            <img src="../../storage/{{$shoes->shoes_image}}" alt="ini gambar shoes" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{$shoes->shoes_name }}</h3>
                    <h2>{{$shoes->shoes_price }}</h2>
                    <ul class="list">
                        <!-- <li>
                            <a class="active" href="#">
                            <span>Category</span> : cek kategori</a>
                        </li> -->
                        <li>
                            <a href="#"> <span>Availibility</span> : In Stock</a>
                        </li>
                    </ul>
                    <p>
                        {{$shoes->shoes_desc }}                    
                    </p>
                    <div class="card_area">
                        <div class="add_to_cart">
                            <a href="{{route('user.order.shoes', $shoes->id)}}" class="btn_3">Pesan Sekarang</a>
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
