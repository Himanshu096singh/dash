@extends('layouts.front')
@section('css')
@endsection

@section('content')
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center headertitlebox">
                <div class="page-title">
                    <h1>{{$page->name}}</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$page->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        </div>
    </section>
    <section style="padding:80px 0px 40px">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12">
                    <h2 class="text-uppercase mb-5" style="font-weight:600;letter-spacing:1.2px;">{{$page->name}}</h2>
                    <div class="desc">
                        {!! $page->description !!}
                    </div>
                </div>
            </div>
        </div>
       </section>

@endsection

@section('js')
@endsection

