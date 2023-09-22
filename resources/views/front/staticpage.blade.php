@extends('layouts.front')
@section('css')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
          <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
             <div class="blog_single mb-4">
                <div class="page_title blog_title mb-5">
                   <h1 class=" text-center text-dark pb-3">{{$page->name}}</h1>
                </div>
                <div class="description">
                    {!! $page->description !!}
                </div>
             </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
@endsection

