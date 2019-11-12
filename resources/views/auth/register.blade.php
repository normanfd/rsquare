@extends('layouts.user')

@section('content')

<body>
    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>RSquare</h2>
                            <p>Make Your Aesthetic Expression with Your Fashion
                            </p>
                            <a href="{{ route('login') }}" class="btn_3">Sign in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="register_part_form">
                        <div class="register_part_form_iner">
                            <h3>Welcome to Rsquare! </h3>
                                <form class="m-register__form m-form" method="POST" action="{{ route('register') }}">

                                {{ csrf_field() }}
                                    <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }} m-form__group">
                                        <input id="name" class="form-control m-input"   type="name" placeholder="Name" value="{{ old('name') }}" name="name" >
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }} m-form__group">
                                        <input id="email" type="email" class="form-control m-input" name="email" value="{{ old('email') }}" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }} m-form__group">
                                        <input id="password" class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" >
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 form-group p_star m-form__group">
                                        <input id="password-confirm" class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================regis_part end =================-->
</body>
@endsection