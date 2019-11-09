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
                        Detail Hoodie Order
                    </h3>
                </div>
            </div>
        </div>    
        <!--begin::Form-->
        <div class="m-portlet__body">
            <div class="row">
                <label class="col-lg-3 col-sm-12">
                    Kode Produk :
                </label>
                {{ $single_hoodie->hoodie_id}}
            </div>
            <div class="row">
                <label class="col-lg-3 col-sm-12">
                    Nama Pengorder :
                </label>
                {{ $single_hoodie-> user -> name}}
            </div>
        </div>
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
</div>
@endsection
