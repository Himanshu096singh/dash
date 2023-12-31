@extends('layouts.front')
@section('css')
@endsection

@section('content')
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center headertitlebox">
            	<div class="page-title">
            		<h1>{{$blog->name}}</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" ><a href="{{route('blog')}}">Blog</a></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BREADCRUMB -->

<section>
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
            	<div class="single_post">
                    <div class="blog_img">
                        <img class="rounded" src="{{asset($blog->image)}}" alt="{{$blog->alt}}">
                    </div>
                    <div class="single_post_content">
                        <div class="blog_text">
                            <h2 class="blog_title">{{$blog->name}}</h2>
                            {{-- <ul class="list_none blog_meta">
                                <li><a href="#"><i class="far fa-calendar"></i>{{$blog->created_at->format('M, d Y')}} </a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                            </ul> --}}
                            <div class="blog_desc mt-5">
                                {!! $blog->description !!}
                            </div>
                        	<div class="border-top border-bottom blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                	<div class="col-md-9 mb-3 mb-md-0">
                                        <div class="tags">
                                            @php
                                                $newStr = explode(",", $blog->tags);
                                            @endphp
                                            @foreach($newStr as $arrlist)
                                            <a href="#">{{$arrlist}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-md-right">
                                    	<div class="share">
                                            <ul class="list_none social_icons">

                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url('blog/'.$blog->slug)}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?url={{url('blog/'.$blog->slug)}}" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?url={{url('blog/'.$blog->slug)}}" class="sc_linkedin"><i class="ion-social-linkedin"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post_navigation border-bottom pb-5">
                        <div class="row align-items-center justify-content-between">
                            @if($blog->previous)
                            <div class="col-auto">
                                <a href="{{url('blog/'.$blog->previous->slug)}}">
                                    <div class="d-flex align-items-center">
                                        <i class="ion-ios-arrow-thin-left mr-2"></i>
                                        <div>
                                            <span>previous Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @if($blog->next)
                            <div class="col-auto">
                                <a href="{{url('blog/'.$blog->next->slug)}}">
                                    <div class="d-flex align-items-center flex-row-reverse text-right">
                                        <i class="ion-ios-arrow-thin-right ml-2"></i>
                                        <div>
                                            <span>Next Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
            	@include('front.include.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
@endsection
