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
                            <p>Category</p><span>: Tshirt</span>
                        </li>
                        @if ($single_tshirt->upload_design != "null")
                            <li>
                                <p>Desain</p><span>: <a href="../../../storage/{{ $single_tshirt->upload_design }}">Lihat Desain</a></span>
                            </li>
                        @endif
                        <li>
                            <p>Order Date</p><span>: {{ $single_tshirt -> created_at -> format('l jS F Y') }}</span>
                        </li>
                        <li>
                            <p>Total Amount</p><span>: {{ $single_tshirt -> amount }}</span>
                        </li>
                        <li>
                            <p>Total Price</p><span>: Rp{{ $single_tshirt -> amount * $single_tshirt -> tshirt -> tshirt_price }}</span>
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
                                <th>{{$single_tshirt->size}}</th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Material</span></th>
                                <th><span>{{ $single_tshirt->material }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Color</span></th>
                                <th><span>{{ $single_tshirt->color }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Sleeve</span></th>
                                <th><span>{{ $single_tshirt->sleeve }}</span></th>
                            </tr>
                            <tr>
                                <th colspan="3"><span>Ukuran</span></th>
                                <th><span>{{ $single_tshirt->size }}</span></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col" colspan="3">Quantity</th>
                                <th scope="col">{{ $single_tshirt -> amount }}</th>
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