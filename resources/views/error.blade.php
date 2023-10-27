@extends('layouts.error')
@section('content')

<section>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="error_txt text-danger mb-5" style="font-size:120px">ERROR</div>
                <div class="heading_s2 mb-5">
                	<h4>oops! Something Gone Wrong. </h4> 
                    <p>Please check your security code, card details and connection and try again.</p>
                </div>
                <a href="{{route('home')}}" class="btn btn-outline-black">Back To Home</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

{{-- <script>
    setTimeout( ()=>{
        location.href="{{route('home')}}"
    }, 4000)
</script> --}}

@endsection
