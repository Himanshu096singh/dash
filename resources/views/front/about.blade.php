@extends('layouts.front')
@section('css')
@endsection
@section('content')
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-12 text-center">
             <div class="page-title">
                <h1>About Us</h1>
             </div>
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </section>
 <!-- END SECTION BREADCRUMB -->
 <section style="padding:80px 0px 40px">
 <div class="container ">
     <div class="row justify-content-center text-center">
         <div class="col-xl-10 col-lg-10 col-md-10" >
             <span class="sub_heading">Welcome to Yoga School</span>
             <h1 class="text-uppercase mb-5" style="font-weight:600;letter-spacing:1.2px;">About Yoga School</h2>
             <p class="" style="font-size: 18px;
             line-height: 35px;text-align: justify; text-align-last: center; ">Welcome to our Heart of Yoga School in Rishikesh, the ultimate destination for yoga enthusiasts from all over the world. Situated in the serene and spiritual city of Rishikesh, also known as the yoga capital of India, our school offers a truly transformative experience for those seeking to deepen their practice. As one of the leading yoga schools in Rishikesh, we are dedicated to providing a holistic approach to yoga, focusing not only on the physical aspect but also on the mental and spiritual well-being of our students.</p>
         </div>
     </div>
 </div>
</section>

<section>
 <div class="container">
     <div class="row align-items-center">
         <div class="col-md-6 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
             <div class="video_box overlay_bg_30 mb-3 mb-sm-4 mb-md-0">
                 <img src="assets/images/about_video.jpg" alt="about_img11">
                 
             </div>
         </div>
         <div class="col-md-6 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 1;">
             <div class="heading_s2">
                 <h2 class="text-uppercase">Better Life With Perfect Body</h2>
             </div>
             <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
             <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
             <a class="btn btn-default btn-custom-white rounded-3 text-uppercase px-5" href="#" style="opacity: 1;">Emquiry Now </a>
         </div>
     </div>
 </div>
</section>

<section style="padding:80px 0px 40px">
 <div class="container ">
     <div class="row justify-content-center text-center">
         <div class="col-xl-12 col-lg-12 col-md-10" >
             <div class="mb-5">
                 <h2 class="text-uppercase mb-2" style="font-weight:600;letter-spacing:1.2px;">Vision & Mission</h2>
                 <p>Lorem Ipsum is not simply random text</p>
             </div>
             
            <div class="row ">
                 <div class="col-md-6 pr-5">
                     <h3 class="text-left border-bottom border-dark pb-3 font-weight-bold">Our Vision</h3>
                     <p class="text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 </div> 
                 <div class="col-md-6 pr-5">
                     <h3 class="text-left border-bottom border-dark pb-3 font-weight-bold">Our Mission</h3>
                     <p class="text-justify ">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 </div> 

            </div>
         </div>
     </div>
 </div>
</section>
<section class="pb_70">
	<div class="container">
        <div class="heading_s1">
            <h2 class="text-uppercase">
               Our Founders
            </h2>
        </div>
        <div class="row">
            @foreach($founder as $list)
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                        <div class="team_img">
                            <img src="{{asset($list->image)}}" alt="team1">
                            <ul class="list_none social_icons social_style1 rounded_social">
                                @if(isset($list->facebook))
                                    <li><a href="{{$list->facebook}}"><i class="ion-social-facebook"></i></a></li>
                                @endif
                                @if(isset($list->twitter))
                                    <li><a href="{{$list->twitter}}"><i class="ion-social-twitter"></i></a></li>
                                @endif
                                @if(isset($list->gmail))
                                    <li><a href="{{$list->gmail}}"><i class="ion-social-googleplus"></i></a></li>
                                @endif
                                @if(isset($list->instagram))
                                    <li><a href="{{$list->instagram}}"><i class="ion-social-instagram-outline"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="team_info text-center">
                            <div class="team_title">
                                <h5><a href="#">{{$list->name}}</a></h5>
                                <span>{{$list->position}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('js')
@endsection
