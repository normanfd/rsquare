<!-- Old data <br>
id produk : {{$product->id}}
kategory produk : {{$product->category_id}}
Kode Produk : {{$product->product_id}}
Name produk : {{$product->product_name}}
Harga produk : {{$product->product_price}}
<a class="btn btn-primary"   href=" {{ route('admin.PostEditAvailableProduct', $product->id) }}" role="button">Simpan Perubahan</a> -->

@extends('layouts.admin')

@section('content')
<div class="m-content">
<!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Edit {{ $product->product_name }}
                    </h3>
                </div>
            </div>
            </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" method="POST" action="{{ route('admin.PostEditAvailableProduct', $product->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="m-portlet__body">
                <div class="m-form__content">
                    <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                        <div class="m-alert__icon">
                            <i class="la la-warning"></i>
                        </div>
                        <div class="m-alert__text">
                            Oh snap! Change a few things up and try submitting again.
                        </div>
                        <div class="m-alert__close">
                            <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Produk ID *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="product_id" placeholder="Enter your produk ID" data-toggle="m-tooltip" title="Input Produk ID" value="{{$product->product_id}}">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Category ID *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control m-input" name="category_id" id="category_id">
                            @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"
                                @if ( $cat->id === $product->category_id )
                                    selected
                                @endif
                            >   
                                {{ $cat->category_name }}
                            </option>
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            Please select an option.
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Name *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="product_name" placeholder="Enter your Category" value="{{$product->product_name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Price
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="product_price" placeholder="Enter digits" value="{{$product->product_price}}">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                <span>
                                    <i class="la la-calculator"></i>
                                </span>
                            </span>
                        </div>
                        <span class="m-form__help">
                            Please enter only digits
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Stocks
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="product_stock" placeholder="Enter digits" value="{{$product->product_stock}}">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                <span>
                                    <i class="la la-calculator"></i>
                                </span>
                            </span>
                        </div>
                        <span class="m-form__help">
                            Please enter only digits
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Brand *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="product_brand" placeholder="Enter your Category" value="{{$product->product_brand}}">
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Description *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" name="product_description" placeholder="Enter a description" >{{$product->product_desc}}</textarea>
                        <span class="m-form__help">
                            Please enter a Description of Product
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product Photo
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="file" name="product_image" value="{{$product->product_image}}>
                    </div>
                </div>
            </div>
            
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">
                                Create
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
</div>
@endsection
