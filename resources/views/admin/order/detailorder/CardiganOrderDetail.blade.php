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
                        Detail Cardigan Order
                    </h3>
                </div>
            </div>
        </div>    
        <!--begin::Form-->
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Kode Produk *
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    {{ $single_cardigan->id}}
                </div>
            </div>
        </div>
        <!--end::Form-->    
    </div>
    <!--end::Portlet-->
</div>
@endsection
