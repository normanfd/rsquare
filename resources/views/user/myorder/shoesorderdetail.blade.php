@extends('layouts.user')
@section('content')

<!--================ confirmation part start =================-->
<section class="confirmation_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lx-4">
                <div class="single_confirmation_details">
                    <h4>Detail Order</h4>
                    <ul>
                        <li>
                            <p>Category</p><span>: Shoes</span>
                        </li>
                        <li>
                            <p>Order Date</p><span>: {{ $single_shoes -> created_at -> format('l jS F Y') }}</span>
                        </li>
                        <li>
                            <p>Total Amount</p><span>: {{ $single_shoes -> amount }}</span>
                        </li>
                        <li>
                            <p>Total Price</p><span>: Rp{{ $single_shoes -> amount * $single_shoes -> shoes -> shoes_price }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="order_details_iner">
                    <h3>Order Details</h3>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="3">ITEM</th>
                                <th scope="col">DETAIL</th>
                                <!-- <th scope="col">Total</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="3"><span>Ukuran</span></th>
                                <th>{{$single_shoes->size}}</th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col" colspan="3">Quantity</th>
                                <th scope="col">{{ $single_shoes -> amount }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ confirmation part end =================-->

@endsection