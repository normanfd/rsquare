@extends('layouts.admin')

@section('content')
<div class="m-content">
<!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Add New Custom T-Shirt
                    </h3>
                </div>
            </div>
            </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" method="POST" action="{{ route('admin.Storeaddcustomtshirt') }}" enctype="multipart/form-data">
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
                        T-Shirt ID *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="text" class="form-control m-input" name="tshirt_id" placeholder="Enter your produk ID" data-toggle="m-tooltip" title="Input Produk ID">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        T-Shirt Name*
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control m-input" name="tshirt_name" placeholder="Enter your product name">
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        T-Shirt Price
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" name="tshirt_price" placeholder="Enter digits">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                <span>
                                    <i class="la la-calculator"></i>
                                </span>
                            </span>
                        </div>
                        <span class="m-form__help">
                            Input rentang harga /pcs (ex : 50000 - 100000)
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        T-Shirt Description *
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" name="tshirt_desc" placeholder="Enter a description"></textarea>
                        <span class="m-form__help">
                            Please enter a Description of T-Shirt
                        </span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Product T-Shirt Image
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="file" name="tshirt_image">
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