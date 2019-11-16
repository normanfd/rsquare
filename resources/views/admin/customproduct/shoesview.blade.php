<!-- Mendapatkan data available product -->
@extends('layouts.admin')

@section('content')
<div class="m-content">

    <!--begin:: Widgets/New Users-->
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        View Shoes Product
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                    <!--begin::Widget 14-->
                    @foreach($shoes as $produk)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                                <img src="../storage/{{ $produk->shoes_image }}" alt="" width="50" height="50">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $produk->shoes_name }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    harga produk : {{ $produk->shoes_price }}
                                </span>
                            </div>
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.Editcustomshoes', $produk->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Edit</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{ route('admin.Deletecustomshoes', $produk->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    

@endsection
