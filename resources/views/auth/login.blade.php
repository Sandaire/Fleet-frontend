@extends('layouts.loginlayout')

@section('content')
<div class="col-md-8 col-xl-7" style="margin-left:300px; margin-top: 70px;">
    <!--  -->
        <div class="card mb-3 widget-content bg-midnight" style="background: linear-gradient(to right, #006666 40%, #ffffff 44%);">
            <div class="signup-thumb">
                <img style="width:322px; margin-left:-10px; margin-top: -60px" src="{{ asset('images/dinasa_Logo.png') }}">
            </div>&nbsp&nbsp

            <div class="vl">
                <style> 
                .vl {
                    border-left: 2px solid green;
                    height: 400px;
                    margin-left:30px
                    }
                </style>
            </div>

            <div class="widget-content-wrapper">
                    <div class="col-lg-12" >
                        <div class="card-header">
                            <ul class="nav nav-justified" >
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">LOGIN </a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">REGISTER</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-eg7-0" role="tabpanel" >
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <tbody>

                                            <div class="card card-cascade narrower">
                                            

                                            <div class="px-4">

                                            <div class="table-wrapper">
                                                <!--Table-->
                                                <table class="table table-hover mb-0">

                                                <!--Table body-->
                                                <tbody>
                                                    <form method="POST" action="{{ route('login') }}" >
                                                        @csrf
                                                        </br>
                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                                                placeholder="Enter your mail address"
                                                                style="border-radius:20px; font-size:13px">

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="current-password" style="border-radius:20px; font-size:13px">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-6 offset-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                    <label class="form-check-label" for="remember">
                                                                        {{ __('Remember Me') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div></br>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                                <button type="submit" class="btn btn-success" style="background-color: #008a74; border-radius:50px; width:200px">
                                                                    {{ __('Login') }}
                                                                </button>

                                                                @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div></br></br>
                                                    </form></br>
                                                </tbody>
                                            </table>
                                                          
                                </div>

                                <div class="tab-pane" id="tab-eg7-1" role="tabpanel"> 
                                <div class="table-wrapper">
                                                    <!--Table-->
    <table class="table table-hover mb-0">

                                                    <!--Table body-->
                                                    <tbody>
                                                        <form method="POST" action="{{ route('register') }}">
                                                            @csrf
                                                            

                                                            <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                                                    placeholder="Enter your name"
                                                                    style="border-radius:20px; font-size:13px">

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                                                    placeholder="Enter your mail address"
                                                                    style="border-radius:20px; font-size:13px">

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                                                    placeholder="Enter your password"
                                                                    style="border-radius:20px; font-size:13px">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                                                    placeholder="Confirm your password"
                                                                style="border-radius:20px; font-size:13px">
                                                                </div>
                                                            </div></br>
                                                            
                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-success" style="background-color: #008a74; border-radius:50px; width:200px; float: right">
                                                                        {{ __('Register') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </br>
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



@endsection
