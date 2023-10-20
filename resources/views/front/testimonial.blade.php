@extends('layouts.front')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/binouze/lightboxjs/src/lightboxjs.min.css" type="text/css" />
@endsection

@section('content')
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-12 text-center headertitlebox">
             <div class="page-title">
                <h1>Testimonial</h1>
             </div>
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </section>
 <!-- END SECTION BREADCRUMB -->
 <section class="small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
                <div class="heading_s2">
                    <h3>What Our Students Say About Us</h3>
                    <div class="m-auto title_icon"><i class="flaticon-lotus"></i></div> 
                </div>
                
            </div>
        </div>

        @if(count($video)>0)
            <div class="row mb-5">
                @foreach($video as $list)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="video-testimonial-block">
                            <div class="lightboxjs-link" data-width="1000" data-height="600" data-url="https://www.youtube.com/embed/{{$list->youtube}}">
                                <div class="video">
                                    <div class="video-thumbnail"><img src="https://img.youtube.com/vi/{{$list->youtube}}/mqdefault.jpg" alt="video testimonial" class="img-fluid"></div>
                                </div>
                                <a href="#" class="video-play"></a>
                            </div>
                        </div>
                        <div class="testi_meta d-flex justify-content-start">
                            <div class="testimonial_img mr-3">
                                <img class="rounded-circle" src="{{asset($list->image)}}" alt="{{$list->name}}" style="width:60px">
                            </div>
                            <div class="testi_user text-left align-self-center">
                                <h5 class=" h6 mb-0 ">{{$list->name}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="row mt-5">
        	<div class="col-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
            	@foreach($testimonial as $list)
                    <div class="testimonial_style1">
                        <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20" style="background: #cf3e5f;padding: 2px;">
                        <div class="testimonial_box p-5" >
                            
                            <div class="testi_desc mb-4">
                                <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                <p class="p-2">{{$list->review}}</p>
                            </div>
                            <div class="testi_meta d-flex justify-content-start">
                                <div class="testimonial_img mr-3">
                                    <img src="{{asset($list->image)}}" alt="{{$list->name}}" style="width:60px" >
                                </div>
                                <div class="testi_user text-left align-self-center">
                                    <h5 class=" h6 mb-0 ">{{$list->name}}</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/binouze/lightboxjs/src/lightboxjs.min.js"></script>
@endsection
