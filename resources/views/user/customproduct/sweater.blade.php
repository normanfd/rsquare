@extends('layouts.user')

@section('content')
<section class="cat_product_area section_padding border_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="{{ route('user.cardigan') }}">Cardigan</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.hoodie') }}">Hoodie</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.jacket') }}">Jacket</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.shirt') }}">Shirt</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.shoes') }}">Shoes</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.sweater') }}">Sweater</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.tshirt') }}">T-Shirt</a>
                                </li>

                                <!-- <li class="sub-menu">
                                    <a href="#Electronics" class=" d-flex justify-content-between">
                                        Electronics
                                        <div class="right ti-plus"></div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#Electronics">Home Appliances</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Smartphones</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Kitchen Appliances</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Computer Accessories</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Appliances</a>
                                        </li>
                                    </ul>
                                </li> -->
                            
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu product_bar_item">
                                <h2>Sweater</h2>
                            </div>
                            <!-- <div class="product_top_bar_iner product_bar_item d-flex">
                                <div class="product_bar_single">
                                    <select class="wide">
                                        <option data-display="Default sorting">Default sorting</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3">Potato</option>
                                    </select>
                                </div>
                                <div class="product_bar_single">
                                    <select>
                                        <option data-display="Show 12">Show 12</option>
                                        <option value="1">Show 20</option>
                                        <option value="2">Show 30</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Recycler View Product -->
                    @foreach($sweater as $sweaters)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="../storage/{{$sweaters->sweater_image}}" width="200" height="200" alt="ini gambar sweater">
                                <div class="category_product_text">
                                    <a href="{{ route('user.detail.sweater', $sweaters->id) }}"><h5>{{$sweaters->sweater_name}}</h5></a>
                                    <p>{{$sweaters->sweater_price}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn_2">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection