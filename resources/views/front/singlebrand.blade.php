@extends('layouts.front')
@section('css')
@endsection

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
            <div class="brand mb-4">
                <div class="brand_title blog_title mb-5">
                    <h1 class="text-center text-dark pb-3">{{$category->name}}</h1>
                </div>
                <div class="driver-download text-center m-2 mb-5 p-4 {{ ($category->formstatus == 1) ? 'd-block' : 'd-none' }} ">
                    <p>Download Printer Driver for Windows and Mac Devices</p>
                    <h2 class="h3"> Download Printer Driver </h2>
                    <div class="row my-4 p-2">
                        <div class="col-md-6">
                            <a href="https://wirelessprinter.online/support" class="text-decoration-none">
                                <div class="card bg-{{$category->slug}} p-4 d-flex align-items-center driver-btn">
                                    <div class="w-100">
                                        <div class=" text-light d-flex align-items-center m-0">
                                            <img src="{{ asset('upload/icon/window-logo.png') }}" alt="Window"
                                                width="55px" class="me-3 downloadLogo">
                                            <div class="text-white text-start">
                                                <div class="fw-bold d-flex align-items-center text-white">
                                                    Download <i class="fas fa-download text-light ms-1 fs-6"></i>
                                                </div>
                                                <p class="text-light mb-0"> Recommended For Most Users </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <p class="p-1 fs-14">2.0.1 | 2.0.1 | Stable Version</p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://wirelessprinter.online/support" class="text-decoration-none">
                                <div class="card bg-{{$category->slug}} p-4 d-flex align-items-center driver-btn">
                                    <div class="w-100">
                                        <div class=" text-light d-flex align-items-center m-0">
                                            <img src="{{ asset('upload/icon/macos-icon.jpg') }}"
                                                alt="Mac" width="55px" class="me-3 rounded-3 downloadLogo">
                                            <div class="text-white text-start">
                                                <div class="fw-bold d-flex align-items-center text-white"> Download <i class="fas fa-download text-light ms-1 fs-6"></i>
                                                </div>
                                                <p class="text-light mb-0"> Latest Features </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <p class="p-1 fs-14">2.0.1 | 2.0.1 | Stable Version</p>
                        </div>
                    </div>
                    <p class="mb-1">For information about supported releases, <a href="{{route('support')}}"
                            class="text-success fw-bold">Click Here</a>.</p>
                </div>
                @if(count($category->blogs)>0)
                    <div class="brand_blog mb-5">
                        <div class="row">
                            @foreach($category->blogs as $list)
                            <div class="col-md-6">
                                <div class="brand_blog_box mb-3">
                                    <a href="{{$category->slug .'/'. $list->slug}}" title="{{$list->name}}">
                                        <img src="{{asset($list->image)}}" alt="{{$list->alt}}" class="img-fluid">
                                    </a>
                                    <div class="brand_blog_title p-3">
                                        <h3 class="p fw-bold pb-2">
                                            <a href="{{$category->slug .'/'. $list->slug}}" title="{{$list->name}}"
                                                class="text-muted text-decoration-none"> {{$list->name}} </a>
                                        </h3>
                                        <div class="row brand_blog_info">
                                            <div class="col-6 text-start"><span>Added to <span
                                                        class="fw-bold">{{$category->name}}</span></span></div>
                                            <div class="col-6 text-end">
                                                <spanp> {{ $list->created_at->format('M, d Y') }} </spanp>
                                            </div>
                                        </div>
                                        <hr>
                                        <span> <i class="fas fa-user"></i> By {{$list->user->name}} </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if(isset($category['description']))
                <div class="brand_description mb-5">
                    <h2> {{$category['title']}} </h2>
                    <hr>
                    {!! $category['description'] !!}
                </div>
                @endif
                @if(count($category->faqs)>0)
                <div class="brand_faqs ">
                    <h2> Frequently Asked Questions </h2>
                    <hr>
                    <div>
                        @foreach($category->faqs as $list)
                        <div class="brand_faqs_qa bg-white">
                            <div class="faqs_question">
                                <h6><span class="badge bg-{{$category->slug}}"> Question </span></h6>
                                <h3>{{$list->question}}</h3>
                            </div>
                            <div class="faqs_answer">
                                {!! $list->answer !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-3">
        @include('front.include.sidebar')
    </div>
</div>
@endsection
@section('js')
@endsection