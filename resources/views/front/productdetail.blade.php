@extends('layouts.front')
@section('css')
<style>
   div.tab-pane img{max-width: 100% !important;height: auto !important;}
</style>
@endsection
@section('content')
<div class="row">
   <div class="col-md-9">
      <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
         <div class="row mb-3">
            <div class="col-md-4"> 
               <img src="{{asset($product->image)}}" alt="{{$product->alt}}" class="img-fluid rounded-2 pb-3">
            </div>
            <div class="col-md-8">
               <div class="blog_breadcrumb">
                  <ul class="list-inline" vocab="http://schema.org/" typeof="BreadcrumbList">
                     <li class="list-inline-item text-dark" property="itemListElement" typeof="ListItem">
                        <a href="{{route('home')}}" class="text-decoration-none"  property="item" typeof="WebPage"> <span property="name">Home</span> </a>
                     </li>
                     <li class="list-inline-item" property="itemListElement" typeof="ListItem">
                        <a href="{{url($category->slug)}}" class="text-decoration-none"  property="item" typeof="WebPage"> <span property="name">{{$category->name}}</span> </a>
                     </li>
                  </ul>
               </div>
               <h1 class="h3 text-dark">{{$product->name}}</h1>
               <div class="product-review pb-3">
                  <i class="fas fa-star color-{{$category->slug}}"></i>
                  <i class="fas fa-star color-{{$category->slug}}"></i>
                  <i class="fas fa-star color-{{$category->slug}}"></i>
                  <i class="fas fa-star color-{{$category->slug}}"></i>
                  <i class="fas fa-star color-{{$category->slug}}"></i>
                  <span class="ms-3 fs-13"> 4.5 / 18 Rating</span>
               </div>
               <div class="row brand_blog_info">
                  <div class="col-6 "><a href="{{route('support')}}" class="btn btn-success "><span class="text-light fs-12">Support Team</span></a></div>
                  <div class="col-6"><a id="" class="btn btn-info openMyForm222"><span class="text-light">Fix Your Issue</span></a></div>
               </div>
            </div>
         </div>
         <div class="product_desc">
            <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link color-{{$category->slug}} active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description </button>
                  <button class="nav-link color-{{$category->slug}}" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#how-to-setup" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">How To Setup</button>
               </div>
            </nav>
            <div class="tab-content py-3 px-2" id="nav-tabContent">
               <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="nav-home-tab">
                  {!! $product->description !!}
               </div>
               <div class="tab-pane fade" id="how-to-setup" role="tabpanel" aria-labelledby="nav-profile-tab">
                  {!! $product->setup !!}
               </div>
            </div>
            @if(count($product->faqs ) > 0)
            <!-- Product FAQs Starts ------------------------->
            <div id="question-answer" class="brand_faqs">
               <h2> Frequently Asked Questions </h2>
               <hr>
               <div>
                  @foreach($product->faqs as $key => $item)
                  <div class="brand_faqs_qa bg-white">
                     <div class="faqs_question mb-3">
                        <h6><span class="badge bg-{{$category->slug}}"> Question </span></h6>
                        <h3>{{ $item->question }}</h3>
                     </div>
                     <div class="faqs_answer">
                        {!! $item->answer !!}
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <!-- Product FAQs Ends ------------------------->
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
