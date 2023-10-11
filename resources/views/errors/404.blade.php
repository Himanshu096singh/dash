@extends('layouts.error')
@section('content')

<section>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                <div class="error_txt text_default">404</div>
                <div class="heading_s2 mb-2">
                	<h5>oops! The page you requested was not found!</h5> 
                </div>
                <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                <a href="{{route('home')}}" class="btn btn-outline-black">Back To Home</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

<script>
    setTimeout( ()=>{
        location.href="{{route('home')}}"
    }, 4000)
</script>

@endsection