@extends('template.auth')
@section('title', 'Login')
@section('content')
    <style>
        #btn_submit {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        #btn_submit.isLoading {
            width: 50px;
            border-radius: 100vw;
        }

        .hide {
            display: none;
        }

    </style>
    <link href="{{ asset('style/css/stylelogin.css') }}" rel="stylesheet">
    <svg class="wavestop" xmlns="Screenshot-_102_.svg" viewBox="0 0 1440 320">
        <path fill="#000000" fill-opacity="1"
            d="">
        </path>
    </svg>
    <div class="container">
        <div class="row vertical-center">
            <div class="col-lg-5 col-md-8 col-sm-12  mx-auto" style="z-index: 1">
                <div class="glassmorphism card-signin my-5">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/logo/SKK_logo.jpg') }}" width="100" height="100"
                                        class="rounded-circle mx-auto" alt="logo" style="background-color: white;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="card-title text-center">Sewa Kamar Kost</h5>
                            </div>
                        </div>
                        <form onsubmit="return disableButton()" class="form-signin" action="/postLogin" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-label-group">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}" required autofocus>
                                        <label for="email">Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="password" name="password" autocomplete="new-password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}"
                                            required>
                                        <label for="password">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="w-100 d-flex justify-content-center">
                                        <button id="btn_submit" class="btn btn-lg btn-primary text-white fw-bold p-2"
                                            type="submit" style="border-radius: 2rem;">
                                            <div id="loading_submit" class="spinner-border hide" role="status"
                                                style="width: 15px; height: 15px">
                                            </div>
                                            <div id="text_submit">
                                                Login
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            {{-- <p class="text-center">Forgot Password? <a href="/forgot-password">go here</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="wavesbottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000000" fill-opacity="1"
            d="">
        </path>
    </svg>

    <script>
        function disableButton() {
            $("#loading_submit").removeClass("hide");
            $("#text_submit").addClass("hide");
            $("#btn_submit").addClass("isLoading").attr('disabled', 'disabled');
        }
    </script>
@endsection
