@extends('layouts.front')
@section('css')
<style>
    .sidebar {top: 120px;height: 1020px;position: sticky;overflow: scroll;overflow-x: hidden;}
    .sidebar::-webkit-scrollbar {width: 5px;}
    .sidebar::-webkit-scrollbar-track {box-shadow: inset 0 0 5px grey; border-radius: 10px;}
    .sidebar::-webkit-scrollbar-thumb {background: #cf3e5f; border-radius: 10px;border-right: none;border-left: none;}
    .sidebar::-webkit-scrollbar-thumb:hover {background: #d02f55;}
</style>
@endsection
@section('content')
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-12 text-center">
             <div class="page-title">
                <h1>Blog</h1>
             </div>
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
             <div class="blog_list">
                <div class="row">
                    @foreach($blog as $list)
                        <div class="col-12">
                            <div class="blog_post box_shadow4">
                                <div class="blog_img">
                                    <a href="{{url('blog/'.$list->slug)}}">
                                        <img src="{{asset($list->image)}}" alt="{{$list->alt}}">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="{{url('blog/'.$list->slug)}}">{{ $list->title }}</a></h4>
                                    <ul class="list_none blog_meta">
                                    <li><a href="#"><img src="{{asset('assets/images/cl_teacher_img1.jpg')}}" alt="image"><span>yoga</span></a></li>
                                    <li><a href="#"><i class="far fa-calendar"></i>{{ $list->created_at->format('M, d Y') }} </a></li>
                                    </ul>
                                    <p class="text-capitalize">{{substr(strip_tags($list->description),180);}}...</p>
                                    <a href="{{url('blog/'.$list->slug)}}" class="blog_link">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
             </div>
             <!-- <div class="row">
                <div class="col-12 mt-3 mt-lg-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                    </ul>
                </div>
                </div> -->
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
