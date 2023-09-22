@extends('layouts.front')
@section('css')
@endsection

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="main-content p-3 p-md-5 m-md-1"> 
        <h1 class="text-center">Help Guides by {{$setting->name}}</h1>
        <hr/> 
          <div class="latesthomeblog mt-5 mb-5">
            @foreach($blog as $key=>$list)
                <div class="bp-single mb-4">
                    <a href="{{url($list->category->slug. "/". $list->slug)}}" target="_blank" title="{{$list->name}}"> 
                    <h3 class="h4"> {{$list->name}}  </h3>
                        <p>
                            {!! substr(strip_tags($list->description),0,180) !!}...
                        </p>
                    </a>
                </div>
                @if($key==2)
                    <div class="gif_img">
                        <a href="{{route('support')}}">
                            <img class="img-fluid pb-3 cgif" src="{{asset('assets/images/printer-offline-gif-2.gif')}}" alt="Fix your pritner now">
                        </a>
                    </div>
                @endif
            @endforeach
            
          </div>
            @if(count($product)>0 )
            <div class="latesthomeproduct mb-3">
                <div class="mb-5 text-center">
                  <h2> Printer Models We Fix </h2>
                </div>
                <div class="row"> 
                @foreach($product as $list)
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
        </div>
    </div>
    <div class="col-md-3"> 
      @include('front.include.sidebar')
    </div>
</div>

@endsection

@section('js')
@endsection

