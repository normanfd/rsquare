@extends('layouts.admin')
@section('content')

<!-- jaket Order detail
id jaket :{{ $single_product->id}} -->

<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Detail Order Available Product ({{$single_product->availableproduct->category->category_name}}) </h3>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet">
                <div class="m-portlet__body m-portlet__body--no-padding">
                    <div class="m-invoice-2">
                        <div class="m-invoice__wrapper">
                            <div class="m-invoice__head">
                                <div class="m-invoice__container m-invoice__container--centered">
                                    <div class="m-invoice__logo">
                                        <a href="https://wa.me/{{ $single_product->wa_number }}?text=">
                                            <h1>{{ $single_product->user->name }}, {{ $single_product->wa_number }}</h1>
                                        </a>
                                        <a href="../../../storage/{{ $single_product->availableproduct->product_image }}">
                                            <img src="../../../storage/{{ $single_product->availableproduct->product_image }}" alt="User Tidak Mengirim desainnya" width=200px>
                                        </a>
                                    </div>
                                    <span class="m-invoice__desc">
                                        <span>{{ $single_product->user->email}}</span>
                                        <span>{{ $single_product->user->name}}</span>
                                    </span>
                                    <div class="m-invoice__items">
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">DATA</span>
                                            <span class="m-invoice__text">{{ $single_product->created_at }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">TOTAL ORDER</span>
                                            <span class="m-invoice__text">{{ $single_product->amount }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">NOTE.</span>
                                            <span class="m-invoice__text">{{ $single_product->note }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-invoice__body m-invoice__body--centered">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ITEM</th>
                                                <th>DETAIL</th>
                                                <!-- <th>RATE</th>
                                                <th>AMOUNT</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Product ID</td>
                                                <td>{{ $single_product->availableproduct_id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td>{{ $single_product->size }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="m-invoice__footer">
                                <div class="m-invoice__table  m-invoice__table--centered table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>NO WA</th>
                                                <th>DATE</th>
                                                <th>PRICE PER ITEM</th>
                                                <th>TOTAL AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $single_product->user->name }}</td>
                                                <td>{{ $single_product->wa_number }}</td>
                                                <td>{{ $single_product->created_at }}</td>
                                                <td>{{ $single_product->availableproduct->product_price }}</td>
                                                <td class="m--font-danger">{{ $single_product->amount * $single_product->availableproduct->product_price }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
