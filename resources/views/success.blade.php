@extends('layouts.front')
@section('content')

<section>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="text-success mb-5 display-1 mb-5 fw-bolder" >SUCCESS</div>
                <div class="heading_s2 mb-5">
                	<h4>Your booking has been confirmed. </h4> 
                    <p>Check your email for details.</p>
                </div>
                <a href="{{route('home')}}" class="btn btn-outline-black">Back To Home</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')


@endsection