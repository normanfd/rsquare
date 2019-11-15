@extends('layouts.admin')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Detail Order Kemeja</h3>
        </div>
        <!-- <div>
            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                    <i class="la la-plus m--hide"></i>
                    <i class="la la-ellipsis-h"></i>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first m--hide">
                                        <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-share"></i>
                                            <span class="m-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                            <span class="m-nav__link-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-info"></i>
                                            <span class="m-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                            <span class="m-nav__link-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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
                                        <a href="https://wa.me/{{ $single_shirt->wa_number }}?text=">
                                            <h1>{{ $single_shirt->user->name }}, {{ $single_shirt->wa_number }}</h1>
                                        </a>
                                        <a href="../../../storage/{{ $single_shirt->upload_design }}">
                                            <img src="../../../storage/{{ $single_shirt->upload_design }}" alt="User Tidak Mengirim desainnya" width=200px>
                                        </a>
                                    </div>
                                    <span class="m-invoice__desc">
                                        <span>{{ $single_shirt->user->email}}</span>
                                        <span>{{ $single_shirt->user->name}}</span>
                                    </span>
                                    <div class="m-invoice__items">
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">DATA</span>
                                            <span class="m-invoice__text">{{ $single_shirt->created_at }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">TOTAL ORDER</span>
                                            <span class="m-invoice__text">{{ $single_shirt->amount }}</span>
                                        </div>
                                        <div class="m-invoice__item">
                                            <span class="m-invoice__subtitle">NOTE.</span>
                                            <span class="m-invoice__text">{{ $single_shirt->note }}</span>
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
                                                <td>Shirt ID</td>
                                                <td>{{ $single_shirt->shirt_id }}</td>
                                                <!-- <td>$40.00</td>
                                                <td class="m--font-danger">$3200.00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Material</td>
                                                <td>{{ $single_shirt->material }}</td>
                                                <!-- <td>$40.00</td>
                                                <td class="m--font-danger">$4800.00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>{{ $single_shirt->color }}</td>
                                                <!-- <td>$60.00</td>
                                                <td class="m--font-danger">$12600.00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Collar</td>
                                                <td>{{ $single_shirt->collar }}</td>
                                            </tr>
                                            <tr>
                                                <td>Sleeve</td>
                                                <td>{{ $single_shirt->sleeve }}</td>
                                            </tr>
                                            <tr>
                                                <td>Sleeve Model</td>
                                                <td>{{ $single_shirt->sleeve_model }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kantong</td>
                                                <td>{{ $single_shirt->pocket }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kancing</td>
                                                <td>{{ $single_shirt->buttons }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td>{{ $single_shirt->size }}</td>
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
                                                <td>{{ $single_shirt->user->name }}</td>
                                                <td>{{ $single_shirt->wa_number }}</td>
                                                <td>{{ $single_shirt->created_at }}</td>
                                                <td>{{ $single_shirt->shirt->shirt_price }}</td>
                                                <td class="m--font-danger">{{ $single_shirt->amount * $single_shirt->shirt->shirt_price }}</td>
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
