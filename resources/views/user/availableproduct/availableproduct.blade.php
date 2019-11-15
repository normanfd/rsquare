@extends('layouts.user')

@section('content')
<section class="cat_product_area section_padding border_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu product_bar_item">
                                <h2>Available Product</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Recycler View Product -->
                    @foreach($product as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="../storage/{{$product->product_image}}" style="width:300px;height:300px;alt="ini gambar product">
                                <div class="category_product_text">
                                    <a href="{{route('user.detail.available', $product->id)}}"><h5>{{$product->product_name}}</h5></a>
                                    <p>Rp.{{$product->product_price}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br>
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn_2">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection