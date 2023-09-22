@extends('layouts.error')
@section('content')

<div class="row">
   <div class="col-md-12 p-5" >
        <div class="pagenotfound text-center">
            <img src="https://wirelessprinter.online/upload/medai/64900991a6ef4404.png" alt="404 page" class="img-fluid mb-3">
            <h1 class="mb-3"> Page Not Found</h1>
            <p> We're Sorry, the page you requested could not be found <br/> Please go back to the home</p>
            <a class="btn btn-info text-light" href="{{route('home')}}" >Back To Home</a>
        </div>
    </div>
</div>
@endsection

@section('js')

<script>
    const a = setTimeout( ()=>{
        location.href="{{route('home')}}"
    }, 4000)
</script>

@endsection