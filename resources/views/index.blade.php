<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rsquare</title>
    <link rel="icon" href="{{asset('winter/img/rsquare.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('winter/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('winter/css/style.css')}}">
    <!-- chat css -->
    <link rel="stylesheet" href="{{asset('winter/css/chat.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}"> <img src="{{asset('winter/img/logorsquare.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.availableproduct')}}">Available Product</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Custom Product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{ route('user.jacket') }}"> Jaket </a>
                                        <a class="dropdown-item" href="{{ route('user.shirt') }}">Kemeja</a>
                                        <a class="dropdown-item" href="{{ route('user.shoes') }}">Sepatu</a>
                                        <a class="dropdown-item" href="{{ route('user.tshirt') }}">Kaos</a>
                                        
                                    </div>
                                </li>

                                @if (!Auth::guest())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.order.list', Auth::getUser()->id)}}">My Order</a>
                                </li>
                                @endif
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Akun
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    @if (Auth::guest())
                                        <a class="dropdown-item" href="{{ route('login') }}"> Login</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">Registrasi</a>
                                    @else
                                        <a class="dropdown-item" href="single-blog.html">Hello  {{ Auth::user()->name }}</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="dropdown-item">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="https://wa.me/6285888019534?text=">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="hearer_icon d-flex">
                            <div class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </div>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-bag"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div>
                            </div>
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
        
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h5>Hello, we are</h5>
                                    <h1>RSquare Confection</h1>
                                    <!-- <a href="#" class="btn_1">shop now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part pt-4">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="arrival_tittle">
                                <h2>Custom Product</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_feature_post_text">
                                <img src="{{asset('winter/img/home_jacket.png')}}" alt="#">
                                <div class="hover_text">
                                    <a href="{{ route('user.jacket') }}" class="btn_2">Costum Jacket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_feature_post_text">
                                <img src="{{asset('winter/img/home_shirt.png')}}" alt="#">
                                <div class="hover_text">
                                    <a href="{{ route('user.shirt') }}" class="btn_2">Costum Shirt</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_feature_post_text">
                            <img src="{{asset('winter/img/home_tshirt.png')}}" alt="#">
                                <div class="hover_text">
                                    <a href="{{ route('user.shoes') }}" class="btn_2">Costum Shoes</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_feature_post_text">
                                <img src="{{asset('winter/img/home_shoes.png')}}" alt="#">
                                <div class="hover_text">
                                    <a href="{{ route('user.tshirt') }}" class="btn_2">Costum T-shirt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/home_tshirt.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.tshirt') }}" class="btn_2">Costum Tshirt</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <br>
            
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/feature_1.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.cardigan') }}" class="btn_2">Custom Cardigan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/feature_2.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.hoodie') }}" class="btn_2">Costum Hoddie</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/feature_2.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.sweater') }}" class="btn_2">Costum Sweater</a>
                        </div>
                    </div>
                </div>
            </div> -->
            
        </div>
    </section>

    <section class="feature_part pt-4">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="arrival_tittle">
                                <h2>Available Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/home_jacket.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.detail.available',1) }}" class="btn_2">Jaket1</a>
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="{{asset('winter/img/home_shoes.png')}}" alt="#">
                        <div class="hover_text">
                            <a href="{{ route('user.shoes') }}" class="btn_2">Costum Shoes</a>
                        </div>
                    </div>
                </div> -->
                <br>
                <br>
                <div class="col-lg-12 text-center">
                    <a href="{{ route('user.availableproduct') }}" class="btn_2">More Items</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- upcoming_event part start-->

    <!-- new arrival part here -->
    <!-- <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="arrival_tittle">
                        <h2>Pesan Produk Jadi</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container">
                        <div class="single_arrivel_item weidth_1 mix shoes">
                            <img src="{{asset('winter/img/arrivel/arrivel_5.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single_arrivel_item weidth_2 mix women">
                            <img src="{{asset('winter/img/arrivel/arrivel_2.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single_arrivel_item weidth_3 mix shoes women" >
                            <img src="{{asset('winter/img/arrivel/arrivel_3.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single_arrivel_item weidth_3 mix women men">
                            <img src="{{asset('winter/img/arrivel/arrivel_4.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single_arrivel_item weidth_2 mix men women">
                            <img src="{{asset('winter/img/arrivel/arrivel_1.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single_arrivel_item weidth_1 mix shoes men">
                            <img src="{{asset('winter/img/arrivel/arrivel_6.png')}}" alt="#">
                            <div class="hover_text">
                                <p>Canvas</p>
                                <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                <h5>$150</h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section> -->
    <!-- new arrival part end -->

    <!-- free shipping here -->
    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="{{asset('winter/img/icon/icon_1.png')}}" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="{{asset('winter/img/icon/icon_2.png')}}" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="{{asset('winter/img/icon/icon_3.png')}}" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="{{asset('winter/img/icon/icon_4.png')}}" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container-fluid">
            <div class= "row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="{{asset('winter/img/instagram/inst_4.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="{{asset('winter/img/instagram/inst_5.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Male</a></li>
                            <li><a href="#">Female</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="">About</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Bogor, West Java</a></li>
                            <li><a href="#">+62 897-8042-276</a></li>
                            <li><span>contact@rsquare.id</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
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
    <script src="{{asset('winter/js/mixitup.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('winter/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('winter/js/slick.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.counterup.min.js')}}"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="{{asset('winter/js/contact.js')}}"></script>
    <script src="{{asset('winter/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('winter/js/jquery.form.js')}}"></script>
    <script src="{{asset('winter/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('winter/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('winter/js/custom.js')}}"></script>

<section>
        <!-- <button class="open-button" onclick="openForm()"> <a href="https://wa.me/628978042276?text=" type="submit" class="btn" >Chat</button> -->
    <a href="https://wa.me/628978042276?text=" class="float">
        <i class="fa fa-envelope my-float"></i>
    </a>
        <!-- <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
                <h1>Chat</h1>
                    <label for="msg"><b>Message</b></label>
                    <textarea placeholder="Type message.." name="msg" required></textarea>
                    <a href="https://wa.me/6285888019534?text=" type="submit" class="btn" >Send</a>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
        </div> -->
        <!-- <script>
        // function openForm() {
        //   document.getElementById("myForm").style.display = "block";
        // }

        // function closeForm() {
        //   document.getElementById("myForm").style.display = "none";
        // }
        </script> -->
</section>
</body>

</html>