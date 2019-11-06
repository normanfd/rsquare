@extends('layouts.app')

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
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="{{ route('register') }}" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
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