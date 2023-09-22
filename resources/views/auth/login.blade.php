@extends('layouts.app')

@section('content')
<section class="auth-height" id="login">
    <div class="row full-height-vh m-0">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card overflow-hidden">
                <div class="card-content">
                    <div class="card-body auth-img">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row m-0">
                                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3"><img alt="" class="img-fluid" height="230" src="{{ asset('back/img/login.png') }}" width="300"></div>
                                <div class="col-lg-6 col-12 px-4 py-3">
                                    <h4 class="mb-2 card-title">{{ config('app.name', 'Laravel') }}</h4>
                                    <p>Welcome back, please login to your account.</p>
                                        <div class="mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" placeholder="Username" type="email"  name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control mb-2 @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password"  autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    <div>
                                        <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
