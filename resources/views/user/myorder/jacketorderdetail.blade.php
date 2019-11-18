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
                            <p>Category</p><span>: Jacket</span>
                        </li>
                        @if ($single_jacket->upload_design != "null")
                        <li>
                            <p>Desain</p><span>: <a href="../../../storage/{{ $single_jacket->upload_design }}">Lihat Desain</a></span>
                        </li>
                        @endif
                        <li>
                            <p>Order Date</p><span>: {{ $single_jacket -> created_at -> format('l jS F Y') }}</span>
                        </li>
                        <li>
                            <p>Total Amount</p><span>: {{ $single_jacket -> amount }}</span>
                        </li>
                        <li>
                            <p>Total Price</p><span>: Rp{{ $single_jacket -> amount * $single_jacket -> jacket -> jacket_price }}</span>
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
                                <th>{{$single_jacket->size}}</th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Material</span></th>
                                <th><span>{{ $single_jacket->material }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Color</span></th>
                                <th><span>{{ $single_jacket->color }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Collar</span></th>
                                <th><span>{{ $single_jacket->collar }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Sleeve</span></th>
                                <th><span>{{ $single_jacket->sleeve }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Sleeve Model</span></th>
                                <th><span>{{ $single_jacket->sleeve_model }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Kantong</span></th>
                                <th><span>{{ $single_jacket->pocket }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Kancing</span></th>
                                <th><span>{{ $single_jacket->buttons }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Ukuran</span></th>
                                <th><span>{{ $single_jacket->size }}</span></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col" colspan="3">Quantity</th>
                                <th scope="col">{{ $single_jacket -> amount }}</th>
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