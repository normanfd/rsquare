<!-- Mendapatkan data cardigandata -->
@extends('layouts.admin')

@section('content')
<!-- <div class="m-content">
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Cardigan
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($cardigan as $cardigandata)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $cardigandata->user->name }} , {{ $cardigandata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$cardigandata->amount}}<br>
                                    Nomor WA : {{$cardigandata->wa_number}}<br>
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Edit</a>
                            </div>
                            <div class="m-widget4__ext">
                                <a href="{{ route('admin.detailcardiganorder', $cardigandata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                                 <form action="#" method="post">
                                    <button class="m-btn  btn btn-sm btn-info" type="submit">Detail</button>
                                </form> -->
                            <!-- </div>
                            
                        </div>
                    </div>
                    <br>
                @endforeach
                    begin::Widget 14
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="m-content">
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Hoodie
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($hoodie as $hoodiedata)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $hoodiedata->user->name }} , {{ $hoodiedata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$hoodiedata->amount}} <br>
                                    Nomor WA : {{$hoodiedata->wa_number}} 
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Edit</a>
                            </div>
                            <div class="m-widget4__ext">
                            <a href="{{ route('admin.detailhoodieorder', $hoodiedata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                                <form action="#" method="post">
                                    <button class="m-btn  btn btn-sm btn-info" type="submit">Detail</button>
                                </form> -->
                            <!-- </div>
                            
                        </div>
                    </div>
                    <br>
                @endforeach -->
                    <!--begin::Widget 14-->
                <!-- </div>
            </div>
        </div>
    </div>
</div> -->

<div class="m-content">
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Jacket
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($jacket as $jacketdata)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $jacketdata->user->name }}, {{ $jacketdata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$jacketdata->amount}} <br>
                                    Nomor WA : {{$jacketdata->wa_number}}
                                </span>
                            </div>
                            <!-- <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-info">Edit</a>
                            </div> -->
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.detailjacketorder', $jacketdata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{route('admin.delete.jacket.order', $jacketdata->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                    <!--begin::Widget 14-->
                </div>
            </div>
        </div>
    </div>
<!-- </div>

<div class="m-content"> -->
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Shirt
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($shirt as $shirdata)   
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $shirdata->user->name }}, {{ $shirdata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$shirdata->amount}} <br>
                                    Nomor WA : {{$shirdata->wa_number}} <br>
                                
                                </span>
                            </div>
                            <!-- <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Edit</a>
                            </div> -->
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.detailshirtorder', $shirdata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{route('admin.delete.shirt.order', $shirdata->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                @endforeach
                    <!--begin::Widget 14-->
                </div>
            </div>
        </div>
    </div>
<!-- </div>

<div class="m-content"> -->
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order Shoes
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($shoes as $shoesdata)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $shoesdata->user->name }}, {{ $shoesdata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$shoesdata->amount}} <br>
                                    Nomor WA : {{$shoesdata->wa_number}} <br>
                                </span>
                            </div>
                            <!-- <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-primary" >Edit</a>
                            </div> -->
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.detailshoesorder', $shoesdata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{route('admin.delete.shoes.order', $shoesdata->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                    <!--begin::Widget 14-->
                </div>
            </div>
        </div>
    </div>
    <div class="m-portlet m-portlet--full-height ">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Order T-Shirt
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="m_widget4_tab1_content">

                @foreach($tshirt as $tshirtdata)
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    {{ $tshirtdata->user->name }}, {{ $tshirtdata->created_at->format('l jS F Y') }}
                                </span>
                                <br>
                                <span class="m-widget4__sub">
                                    Jumlah : {{$tshirtdata->amount}} <br>
                                    Nomor WA : {{$tshirtdata->wa_number}} <br>
                                </span>
                            </div>
                            <!-- <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="#" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Edit</a>
                            </div> -->
                            <div class="m-widget4__ext" style="padding-right:10px;">
                                <a href="{{ route('admin.detailtshirtorder', $tshirtdata->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
                            </div>
                            <div class="m-widget4__ext">
                                <form action="{{route('admin.delete.tshirt.order', $tshirtdata->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                    <!--begin::Widget 14-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
