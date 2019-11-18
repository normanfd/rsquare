@extends('layouts.admin')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Detail Order Kaos</h3>
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
                            <div class="m-invoice__head" style="background-image: url(../../assets/app/media/img//logos/bg-6.jpg);">
                                <div class="m-invoice__container m-invoice__container--centered">
                                    <div class="m-invoice__logo">
                                        <a href="https://wa.me/{{ $single_tshirt->wa_number }}?text=">
                                            <h1>{{ $single_tshirt->user->name }}, {{ $single_tshirt->wa_number }}</h1>
                                        </a>
                                        <a href="../../../storage/{{ $single_tshirt->upload_design }}">
                                            <img src="../../../storage/{{ $single_tshirt->upload_design }}" alt="User Tidak Mengirim desainnya" width=200px>
                                        </a>
                                    </div>
                                    <span class="m-invoice__desc">
                                        <span>{{ $single_tshirt->user->email}}</span>
                                        <span>{{ $single_tshirt->user->name}}</span>
                                    </span>
                                    <div class="m-invoice__items">
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">DATE</span>
                                            <span class="m-invoice__text">{{ $single_tshirt->created_at }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">TOTAL ORDER</span>
                                            <span class="m-invoice__text">{{ $single_tshirt->amount }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">NOTE</span>
                                            <span class="m-invoice__text">{{ $single_tshirt->note }}</span>
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
                                                <td>T-Shirt ID</td>
                                                <td>{{ $single_tshirt->tshirt_id }}</td>
                                                <!-- <td>$40.00</td>
                                                <td class="m--font-danger">$3200.00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Material</td>
                                                <td>{{ $single_tshirt->material }}</td>
                                                <!-- <td>$40.00</td>
                                                <td class="m--font-danger">$4800.00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>{{ $single_tshirt->color }}</td>
                                                <!-- <td>$60.00</td>
                                                <td class="m--font-danger">$12600.00</td> -->
                                            </tr>
                                            
                                            <tr>
                                                <td>Sleeve</td>
                                                <td>{{ $single_tshirt->sleeve }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td>{{ $single_tshirt->size }}</td>
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
                                                <td>{{ $single_tshirt->user->name }}</td>
                                                <td>{{ $single_tshirt->wa_number }}</td>
                                                <td>{{ $single_tshirt->created_at }}</td>
                                                <td>{{ $single_tshirt->tshirt->tshirt_price }}</td>
                                                <td class="m--font-danger">{{ $single_tshirt->amount * $single_tshirt->tshirt->tshirt_price }}</td>
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
