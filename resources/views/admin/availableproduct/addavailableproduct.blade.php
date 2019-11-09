<!-- INI FORM AVAILABLE PRODUCT -->
@extends('layouts.admin')

@section('content')
<div class="m-content">
<!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Tambahkan Produk Jadi
                    </h3>
                </div>
            </div>
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" method="POST" action="{{ route('admin.StoreAvailProduct') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
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
                        Kode Produk *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="product_id" placeholder="masukan kode produk" data-toggle="m-tooltip" title="masukan kode produk" value="{{ old('product_id') }}">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Kategori Produk *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <!-- value="{{ old('category_id') }}" -->
                        <select class="form-control m-input" name="category_id" id="category_id" >
                            <!-- perulangan data category -->
                            @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">
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
                        Nama Produk *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="product_name" placeholder="masukan nama produk" value="{{ old('product_name') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Harga Produk
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="product_price" placeholder="masukan harga produk" value="{{ old('product_price') }}">
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
                        Stok Produk
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="product_stock" placeholder="masukan jumlah stok tersedia" value="{{ old('product_stock') }}">
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
                        Merk Produk *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="product_brand" placeholder="Masukan brand produk" value="{{ old('product_brand') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Deskripsi Produk *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" name="product_description" placeholder="masukan deskripsi produk">{{old('product_description')}}</textarea>
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
                        <input type="file" name="product_image">
                    </div>
                </div>
                <!-- <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Credit Card
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="creditcard" placeholder="Enter card number">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-credit-card"></i>
                                </span>
                            </div>
                        </div>
                        <span class="m-form__help">
                            Please enter your credit card number
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        US Phone
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="phone" placeholder="Enter phone">
                            <div class="input-group-append">
                                <a href="#" class="btn btn-brand">
                                    <i class="la la-phone"></i>
                                </a>
                            </div>
                        </div>
                        <span class="m-form__help">
                            Please enter your US phone number
                        </span>
                    </div>
                </div>
                
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Options *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <select class="form-control m-input" name="options" multiple size="5">
                            <option>
                                1
                            </option>
                            <option>
                                2
                            </option>
                            <option>
                                3
                            </option>
                            <option>
                                4
                            </option>
                            <option>
                                5
                            </option>
                        </select>
                        <span class="m-form__help">
                            Please select at least one or maximum 4 options
                        </span>
                    </div>
                </div>
                
                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Checkbox *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-checkbox-inline">
                            <label class="m-checkbox">
                                <input type="checkbox" name="checkbox">
                                Tick me
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                            Please tick the checkbox
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Checkboxes *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-checkbox-list">
                            <label class="m-checkbox">
                                <input type="checkbox" name="checkboxes">
                                Option 1
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="checkboxes">
                                Option 2
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="checkboxes">
                                Option 3
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                            Please select at lease 1 and maximum 2 options
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Radios *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-radio-inline">
                            <label class="m-radio">
                                <input type="checkbox" name="radio">
                                Option 1
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="checkbox" name="radio">
                                Option 2
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="radio" name="radio">
                                Option 3
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">
                            Please select an option
                        </span>
                    </div>
                </div> -->
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
