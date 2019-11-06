@extends('layouts.user')

@section('content')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rsquare</title>
    <link rel="icon" href="{{asset('winter/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('winter/css/nice-select.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('winter/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/slick.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/price_rangs.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/style.css')}}">
</head>

<body>
    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Rsquare</h2>
                            <p>Make Your Aesthetic Expression With Your Fashion</p>
                            <a href="{{ route('register') }}" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group p_star{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" class="form-control m-input"   type="email" placeholder="Email" value="{{ old('email') }}" name="email" autocomplete="off">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group p_star{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

<!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('winter/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('winter/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('winter/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('winter/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('winter/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    
    <!-- particles js -->
    <script src="{{asset('winter/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('winter/js/slick.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('winter/js/waypoints.min.js')}}"></script>
    <script src="{{asset('winter/js/contact.js')}}"></script>
    <script src="{{asset('winter/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.form.js')}}"></script>
    <script src="{{asset('winter/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('winter/js/mail-script.js')}}"></script>
    <script src="{{asset('winter/js/stellar.js')}}"></script>
    <script src="{{asset('winter/js/price_rangs.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('winter/js/custom.js')}}"></script>
</body>
@endsection