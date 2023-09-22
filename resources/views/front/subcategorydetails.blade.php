@extends('layouts.front')
@section('css')
@endsection

@section('content')

<div class="row">
   <div class="col-md-9">
      <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
         <div class="brand mb-4">
            <div class="brand_title blog_title mb-5">
               <h1 class="text-center text-dark pb-3 text-uppercase">{{$category->name}} {{$subcategory->name}}</h1>
            </div>
            @if(count($subcategory->blogs)>0)
                <div class="brand_blog mb-5">
                    <div class="row">
                        <div class="mb-5">
                          <h2 class="h3"> Latest <span class="px-3 text-light bg-{{$category->slug}}">{{$category->name}} {{$subcategory->name}}</span> Blog </h2>
                        </div>
                        @foreach($subcategory->blogs as $list)
                            <div class="col-md-6">
                                <div class="brand_blog_box mb-3">
                                    <a href="{{$category->slug .'/'. $list->slug}}" title="{{$list->name}}">
                                        <img src="{{asset($list->image)}}" alt="{{$list->alt}}" class="img-fluid">
                                    </a>
                                    
                                    <div class="brand_blog_title p-3">
                                        
                                        <h3 class="p fw-bold pb-2">
                                          <a href="{{$list->slug}}" title="{{$list->name}}" class="text-muted text-decoration-none"> {{$list->name}} </a>
                                        </h3>
                                      <div class="row brand_blog_info">
                                        <div class="col-6 text-start"><span>Added to <span class="fw-bold">{{$category->name}}</span></span></div>
                                        <div class="col-6 text-end"><spanp> {{ $list->created_at->format('M, d Y') }} </spanp></div>
                                      </div>
                                      <hr>
                                      <span> <i class="fas fa-user"></i>  By {{$list->user->name}} </span>
                                    </div> 
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(count($subcategory->products)>0)
            <div class="brand_product latesthomeproduct mb-3">
                <div class="mb-5">
                  <h2 class="h3"> Latest <span class="px-3 text-light bg-{{$category->slug}}">{{$category->name}} {{$subcategory->name}}</span> Printer </h2>
                </div>
                <div class="row"> 
                    @foreach($subcategory->products as $list)
                        <div class="col-md-4 mb-3">
                            
                                <div class="position-relative product-image">
                                    <a href= "{{url($list->category->slug. "/" .$list->slug)}}" title="{{$list->name}}">
                                        <img src="{{asset($list->image)}}" alt="{{$list->alt}}" class="img-fluid rounded-2">
                                    </a>
                                    <a class="text-decoration-none position-absolute fs-6 badge bg-{{$list->category->slug}} product-brand-name text-uppercase fw-normal" href="#">  {{$list->category->name}} </a> 
                                </div>
                                <a href= "{{url($list->category->slug. "/" .$list->slug)}}" title="{{$list->name}}" class="text-decoration-none text-muted">
                                    <h3 class="fs-14 text-uppercase text-center pt-3 pb-0"> 
                                      {{$list->name}}
                                    </h3>
                                    <div class="product-review text-center">
                                      <i class="fas fa-star color-{{$list->category->slug}}"></i>
                                      <i class="fas fa-star color-{{$list->category->slug}}"></i>
                                      <i class="fas fa-star color-{{$list->category->slug}}"></i>
                                      <i class="fas fa-star color-{{$list->category->slug}}"></i>
                                      <i class="fas fa-star color-{{$list->category->slug}}"></i>
                                    </div>
                                </a>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            
            <div class="brand_description mb-5">
              <h2 class="h3"> About <span class="px-3 text-light bg-{{$category->slug}}">{{$category['name']}} {{$subcategory->name}}</span> </h2> 
              <hr>
              
              {!! $subcategory['description'] !!}
            </div>
           
            @if(count($subcategory->faq)>0)
                <div class="brand_faqs ">
                    <h2> Frequently Asked Questions </h2> 
                    <hr>
                    <div class="">
                        @foreach($subcategory->faq as $list)
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

