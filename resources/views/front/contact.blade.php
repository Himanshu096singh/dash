@extends('layouts.front')
@section('css')
<style>
    .testi_desc .p-2{line-height:26px;text-align: left;letter-spacing:1.2px;font-size:16px;color:#131313;text-shadow: 1px 1px 1px #d0d0d0;}
    .testimonial_box{background: linear-gradient(112deg, #ffffff 50%, #ffbfcdd6 50%);}
    .video-testimonial-block { position: relative; width: auto; height: 206px; overflow: hidden; margin-bottom: 30px; }
    .video-testimonial-block .video-thumbnail { height: 100%; width: 100%; position: absolute; z-index: 1; background-size: cover; top: 0; left: 0; }
    .video-testimonial-block .video iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0px; }
    .video-testimonial-block .video-play { position: absolute; z-index: 2; top: 50%; left: 50%; margin-left: -40px; margin-top: -18px; text-decoration: none; }
    .video-testimonial-block .video-play::before { content: "\f144"; font: normal normal normal 14px/1; font-family: 'Font Awesome\ 5 Free'; font-weight: 900; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 50px; color: #b3b5bc; }
    .video-testimonial-block .video-play:hover::before { color: #CF3E5F; }
</style>
@endsection
@section('content')
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="https://bestwebcreator.com/dhyana/demo/assets/images/breadcrumb_bg.jpg">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-12 text-center">
             <div class="page-title">
                <h1>Contact Us</h1>
             </div>
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </section>
 <section>
	<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s2">
                	<span class="sub_heading">Contact Us</span>
                	<h3>Get In touch</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <ul class="contact_info contact_info_style2 list_none">
                    @if($setting->usmobile)
                        <li>
                            <span class=""><i class="fa fa-phone"></i></span>
                            <a href="tel:{{$setting->usmobile}}">{{$setting->usmobile}}</a>
                        </li>
                    @endif
                    @if($setting->email)
                        <li>
                            <span class=""><i class="fa fa-envelope"></i></span>
                            <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                        </li>
                    @endif
                    @if($setting->email)
                    <li>
                        <span class=""><i class="fa fa-location-arrow"></i></span>
                        <address>{{$setting->address}}</address>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	@if(session()->has('succcess'))
                    <div class="alert alert-success">
                        {{ session()->get('succcess') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-error">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="field_form icon_form">
                    <form action="{{url('contactsubmit')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                            	<div class="form-input">
                                    <span>
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text" required="">
                                </div>
                             </div>
                            <div class="form-group col-lg-6">
                            	<div class="form-input">
                                    <span>
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                	<input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control country" id="country_selector" name="country_selector_code" data-countrycodeinput="1" placeholder="Selected country code will appear here" />
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    <span>
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required
                                    ="">
                                </div>
                            </div>
                               
                           
                            <div class="form-group col-12">
                            	<div class="form-input">
                                    <span>
                                        <i class="fa fa-folder"></i>
                                    </span>
                                	<input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                            	<div class="form-input">
                                    <span>
                                        <i class="fa fa-comments"></i>
                                    </span>
                                	<textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="5"></textarea>	
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION MAP -->
<div class="map_section">
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-12 p-0">
                <div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55235.59735395338!2d78.22932343533351!3d30.08774656495803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39093e67cf93f111%3A0xcc78804a6f941bfe!2sRishikesh%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1695739450557!5m2!1sen!2sin"  allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
