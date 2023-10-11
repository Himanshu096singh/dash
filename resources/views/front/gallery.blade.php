@extends('layouts.front')
@section('css')
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<style>
    /* Override bootstrap column paddings */
.tz-gallery .row > div {padding: 2px;}
.tz-gallery .lightbox img {width: 100%;border-radius: 0;position: relative;}
.tz-gallery .lightbox:before {position: absolute;top: 50%;left: 50%;margin-top: -13px;margin-left: -13px;opacity: 0;color: #fff;font-size: 26px;font-family: 'Font Awesome 5 Free';content: '\f03e';
    pointer-events: none;z-index: 9000;transition: 0.4s;}
.tz-gallery .lightbox:after {position: absolute;top: 0;left: 0;width: 100%;height: 100%;opacity: 0;background-color: rgba(237, 71, 101, 0.677);content: '';transition: 0.4s;}
.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {opacity: 1;}
.baguetteBox-button {background-color: transparent !important;}
@media(max-width: 768px) {
    body {padding: 0;}
}
</style>
@endsection
@section('content')
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Gallery</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="tz-gallery">
                <div class="row">
                    @foreach($gallery as $list)
                        <div class="col-sm-12 col-md-4 p-2 ">
                            <div class="card p-3 rounded shadow">
                                <a class="lightbox " href="{{asset($list->image)}}">
                                    <img class="rounded" src="{{asset($list->image)}}" alt="{{$list->alt}}">
                                </a>
                                <div class="mt-2 pl-1">
                                    <p>{{$list->caption}}</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection
