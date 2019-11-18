@extends('layouts.admin')

@section('content')
<div class="m-content">
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Available Product
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($order as $product)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $product->user->name }}, {{ $product->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$product->amount}} <br>
                                    Nomor WA : {{$product->wa_number}} <br>
                                    Kategori : {{$product->availableproduct->category->category_name}}
                                </span>
                            </div>
                            <!-- <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-info">Edit</a>
                            </div> -->
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.detail.availableproduct', $product->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{ route('admin.delete.available.order', $product->id)}} " method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                    <!--begin::Widget 14-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
