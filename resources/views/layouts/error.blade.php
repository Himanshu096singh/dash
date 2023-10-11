<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset($setting->fevicon)}}">
    <title>404 Page Not Found</title>
    <meta name="description" content="Page Not Found" />
    
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  
    <style>
    </style>
    @section('css')
    @show
    @include('front.include.schema')
    {!! $code->header !!}
</head>

<body>
    <div id="preloader">
        <div class="loading_wrap">
            <img src="{{asset('assets/images/loading_logo.png')}}" alt="logo">
        </div>
    </div>
    <header class="header_wrap dark_skin main_menu_uppercase main_menu_weight_600 menu_style1">
        <div class="container s">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="{{route('home')}}">
                    <img class="logo_light" src="{{asset($setting->logo)}}" alt="{{$setting->logoalt}}" width="110px">
                    <img class="logo_dark" src="{{asset($setting->logo)}}" alt="{{$setting->logoalt}}" width="110px">
                    <img class="logo_default" src="{{asset($setting->logo)}}" alt="{{$setting->logoalt}}" width="110px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <a class="dropdown-item nav-link active nav_item"  href="{{route('home')}}" >Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Yoga Courses</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    @foreach($courselist as $list)
                                        <li><a class="dropdown-item nav-link nav_item" href="{{url($list->slug)}}">{{$list->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Workshop</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="#">Mindfullness</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="dropdown-item nav-link nav_item" href="{{route('blog')}}">Blog</a></li> 
                        <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">About</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('about')}}">About Us</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('testimonial')}}">Testimonials</a></li> 
                                </ul>
                            </div>
                        </li>
                        <li><a class="dropdown-item nav-link nav_item" href="{{route('contact')}}">Contct Us</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                        <div class="search-overlay">
                            <div class="search_wrap">
                                <form>
                                    <div class="rounded_input">
                                        <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    </div>
                                    <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryForm">
    Launch demo modal
    </button> -->
    <!-- Modal -->
    <div class="modal fade " data-backdrop="static" id="enquiryForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-0" id="exampleModalScrollableTitle">Enquiry Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-12">
                    <div class="form h-100">
                        <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                <label for class="col-form-label">Name *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                <label for class="col-form-label">Email *</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <label for class="col-form-label">Country</label>
                                    <input type="text" class="form-control country" id="country_selector" name="country_selector_code" data-countrycodeinput="1" placeholder="Selected country code will appear here" />
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                <label for class="col-form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-5">
                                    <label for class="col-form-label">Courses</label>
                                    <select class="form-control" name="country" id="country">
                                        <option> Select Course </option>
                                        <option> option2 </option>
                                        <option> option3 </option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Message *</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                <input type="button" value="Send Message" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                                <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <footer class="footer_dark background_bg overlay_bg_80" data-img-src="assets/images/footer_bg2.jpg">
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_logo">
                            <a href="{{route('home')}}"><img alt="{{$setting->alt}}" src="{{asset($setting->logo)}}"></a>
                        </div>
                        <div class="footer_desc">
                            <p>{{$setting->disclaimer}}</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <h5 class="widget_title3">Quick Links</h5>
                        <ul class="list_none widget_links links_style2">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <li><a href="{{route('testimonial')}}">Testimonials</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                         </ul>
                    </div>
                    <div class="col-lg-3 col-md-7">
                        <h5 class="widget_title3">Our Course</h5>
                        <ul class="list_none widget_links links_style2">
                            @foreach($courselist as $list)
                                <li><a href="{{url($list->slug)}}">{{$list->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <h5 class="widget_title3">Get in Touch</h5>
                        <div class="footer_desc">
                            <ul class="contact_info list_none">
                                <li>
                                    <span class="fa fa-map-marker-alt "></span>
                                    <address>{{$setting->address}}</address>
                                </li>
                                <li>
                                    <span class="fa fa-mobile-alt"></span>
                                    <a href="tel:{{$setting->usmobile}}">{{$setting->usmobile}}</a>
                                </li>
                                <li>
                                    <span class="fa fa-envelope"></span>
                                    <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="bottom_footer border_top_transparent">
                        <div class="row">
                            <div class="col-md-7">
                                <p class="copyright m-md-0 text-center text-md-left">Copyright © {{Date('Y')}} - <a href="{{route('home')}}" class="text_default">Heart Of Yoga</a></p>
                            </div>
                            <div class="col-md-5">
                                <ul class="list_none footer_link text-center text-md-right">
                                    @foreach($staticpage as $list)
                                        <li><a href="{{url($list->slug)}}">{{$list->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script> 
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
 
</body>
</html>