@extends('layouts/main', ['activePage' => 'login', 'title' => 'Kosmos Rastreo'])

@section('content')
    <div class="full-page section-image" data-image="{{ asset('img/full-screen-image-2.jpg') }}">
        <div class="content pt-5">
            <div class="container mt-5">    
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="header text-center">
                                <img src="{{ asset('img/KosmosLogo.svg') }}" >
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-md-14">
                                            <input placeholder="Username or Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <div class="col-md-14">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" onclick= "showPasswordcalc()">
                                                    <span class="form-check-sign"></span>
                                                    {{ __('Show Password') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="remember"  id="remember">
                                                    <span class="form-check-sign"></span>
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <div class="container text-center" >
                                        <button type="submit" class="btn btn-warning btn-wd">{{ __('Sign In') }}</button>
                                    </div>
                                    <div class="container text-center">
                                        <a class="btn btn-link"  style="color:#23CCEF" href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });

        function showPassword(){
            var show = document.getElementById('password');
            if (show.type == 'password'){
                show.type = 'text';
            }else{
                show.type = 'password';
            }
        }



    </script>
@endpush