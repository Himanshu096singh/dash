<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset($setting->fevicon)}}">
    @if(isset($meta))
    <title>{{$meta['metatitle']}}</title>
    <meta name="description" content="{{$meta['metadescription']}}">
    <meta name="keywords" content="{{$meta['metakeywords']}}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{$setting->name}}" />
    <meta property="og:title" content="{{$meta['metatitle']}}" />
    <meta property="og:description" content="{{$meta['metadescription']}}" />
    <meta property="og:url" content="{{url()->full()}}" />
    <meta property="og:image" content="{{url('public/'.$meta['image'])}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{$meta['metatitle']}}">
    <meta name="twitter:description" content="{{$meta['metadescription']}}">
    <meta name="twitter:image" content="{{url('public/'.$meta['image'])}}">
    <meta name="twitter:site" content="{{$setting->name}}">
    @else
    <title>{{$setting->name}}</title>
    <meta name="description" content="{{$setting->name}}" />
    <meta name="keywords" content="{{$setting->name}}" />
    <meta property="og:title" content="{{$setting->name}}" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <meta property="og:image" content="{{asset($setting->logo)}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{$setting->name}}" />
    <meta name="twitter:title" content="{{$setting->name}}">
    <meta name="twitter:image" content="{{asset($setting->logo)}}">
    <meta name="twitter:site" content="{{$setting->name}}">
    @endif

    @if(isset($meta) && isset($meta['index']) && $meta['index']=='no')
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        <meta name="bingbot" content="noindex, nofollow" />
    @else
        <meta name="robots" content="{{ $setting->robots == 1 ? 'index, follow' : 'noindex, nofollow' }}" />
        <meta name="googlebot" content="{{ $setting->robots == 1 ? 'index, follow' : 'noindex, nofollow' }}" />
        <meta name="bingbot" content="{{ $setting->robots == 1 ? 'index, follow' : 'noindex, nofollow' }}" />
    @endif


    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="alternate" href="{{url()->current()}}" hreflang="x-default" />

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">	
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/country.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .formloader{top: 0;text-align: center;margin: auto;position: absolute;height: 100%;width: 100%;align-items: initial;display: flex;background: #dddddd47;z-index: 99;}
        .spinner-grow{margin:auto}
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
                        <div id="errorenquiry" class="alert alert-danger d-none">We encountered an error. Kindly re-submit the form, please.</div>
                        <div id="successenquiry" class="alert alert-success d-none"> Thank you for reaching out! Your message has been sent to our admin team, and we will get back to you soon.</div>
                        
                        <form class="mb-5" method="post" id="enquiryform" name="contactForm">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0">Name *</label>
                                    <input type="text" class="form-control" name="name" id="enquiryname" placeholder="Your name" >
                                    <small> <span id="errorname" class="text-danger"></span> </small>   
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0   ">Email *</label>
                                    <input type="text" class="form-control" name="email" id="enquiryemail" placeholder="Your email">
                                    <small> <span id="erroremail" class="text-danger"></span></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0">Country</label>
                                    <input type="text" class="form-control country" id="enquirycountry" name="country_selector_code" data-countrycodeinput="1" placeholder="Selected country code will appear here" />
                                    <small><span id="errorcountry" class="text-danger"> </span></small>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="enquiryphone" placeholder="Phone #">
                                    <small><span id="errorphone" class="text-danger"> </span></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for class="col-form-label mb-0">Courses</label>
                                    <select class="form-control" name="course" id="enquirycourse">
                                        <option value=""> Select Course </option>
                                        @foreach($courselist as $list)
                                            <option value="{{$list->name}}">  {{$list->name}} </option>
                                        @endforeach
                                    </select>
                                    <small><span id="errorcourse" class="text-danger"> </span></small>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0">Gender</label>
                                    <select class="form-control" name="gender" id="enquirygender">
                                        <option value=""> Select Gender </option>
                                        <option value="male"> Male </option>
                                        <option value="female"> Female </option>
                                    </select>
                                    <small><span id="errorgender" class="text-danger"> </span></small>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for class="col-form-label mb-0">Select Room type</label>
                                    <select class="form-control" name="room" id="enquiryroom">
                                        <option value=""> Select Room Type </option>
                                        <option value="Private Room"> Private Room </option>
                                        <option value="2 Shared Room"> 2 Shared Room </option>
                                        <option value="3 Shared Room"> 3 Shared Room </option>
                                        <option value="6 Shared Room"> 6 Shared Room </option>
                                    </select>
                                    <small><span id="errorroom" class="text-danger"> </span></small>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                <label for="message" class="col-form-label mb-0">Message *</label>
                                <textarea class="form-control" name="message" id="enquirymessage" cols="30" rows="4" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                <input type="button" onclick="return enquirysubmit()" value="Send Message" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                                <span class="submitting"></span>
                                </div>
                            </div>
                            
                        </form>
                        
                    </div>
                    <div id="enquiryloader" class="d-none formloader ">
                        <div class="spinner-grow text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
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
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script> 
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script> 
    <script src="{{asset('assets/js/parallax.js')}}"></script> 
    <script src="{{asset('assets/js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/country.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,3],
            itemsDesktopSmall:[980,2],
            itemsTablet:[768,2],
            itemsMobile:[650,1],
            pagination:true,
            navigation:false,
            slideSpeed:1000,
            autoPlay:true
        });
    });
    $("#enquirycountry").countrySelect({
        preferredCountries: []
    });
    $("#country_selector").countrySelect({
        preferredCountries: []
    });
    </script>
    <script>
        function nameValidate(nameval, errorname) {
            var nameRegex = /^[a-zA-Z0-9 ]{3,30}$/;
            if (nameval.value !== "" && nameRegex.test(nameval.value)) {
                errorname.innerHTML = "";
                errorname.style.borderColor = "#ccc";
                nameflag = true;
            } else {
                errorname.style.borderColor = "#d9534f";
                errorname.innerHTML = "*Please Enter your correct Name";
                nameflag = false;
            }
        }

        function emailValidate(email, emailErr) {
            var emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
            if (email.value !== "" && emailRegex.test(email.value)) {
                emailErr.innerHTML = "";
                email.style.borderColor = "#ccc";
                emailflag = true;
            } else {
                email.style.borderColor = "#d9534f";
                emailErr.innerHTML = "*Please Enter your correct Email";
                email.placeholder = '*Please Enter your correct Email';
                emailflag = false;
            }
        }

        function phoneValidate(phone, phoneErr) {
            var num = phone.value.length;
            const nb = phone.value;
            const exp1 = /[0-9]{9,12}$/;
            var val = 0;
            if ((!exp1.test(nb))) {
                val = 0;
            } else {
                val = 1;
            }
            if ((val == 1) && (num > 8) && (num < 14)) {
                phoneflag = true;
                phone.style.borderColor = "#ccc";
                phoneErr.innerHTML = "";
            } else if (phone.value === "") {
                phone.style.borderColor = "#d9534f";
                phoneErr.innerHTML = '*Please Enter your correct Number';
                phoneflag = false;
            } else {
                phone.style.borderColor = "#d9534f";
                phoneErr.innerHTML = '*Please Enter your correct Number';
                phoneflag = false;
            }
        }

        function courseValidate(course, errorcourse) {
            if (course.value !== "") {
                errorcourse.innerHTML = "";
                errorcourse.style.borderColor = "#ccc";
                courseflag = true;
            } else {
                errorcourse.style.borderColor = "#d9534f";
                errorcourse.innerHTML = "*Please Select Course";
                courseflag = false;
            }
        }
        function genderValidate(gender, errorgender) {
            if (gender.value !== "") {
                errorgender.innerHTML = "";
                errorgender.style.borderColor = "#ccc";
                genderflag = true;
            } else {
                errorgender.style.borderColor = "#d9534f";
                errorgender.innerHTML = "*Please Select Gender";
                genderflag = false;
            }
        }

        function roomValidate(room, errorroom) {
            if (room.value !== "") {
                errorroom.innerHTML = "";
                errorroom.style.borderColor = "#ccc";
                roomflag = true;
            } else {
                errorroom.style.borderColor = "#d9534f";
                errorroom.innerHTML = "*Please Select Room Type";
                roomflag = false;
            }
        }

        function enquirysubmit(){
            const name = document.querySelector("#enquiryname");
            const email = document.querySelector("#enquiryemail");
            const country = document.querySelector("#enquirycountry");
            const phone = document.querySelector("#enquiryphone");
            const course = document.querySelector("#enquirycourse");
            const gender = document.querySelector("#enquirygender");
            const room = document.querySelector("#enquiryroom");
            const message = document.querySelector("#enquirymessage");

            const errorname = document.querySelector("#errorname");
            const erroremail = document.querySelector("#erroremail");
            const errorcountry = document.querySelector("#errorcountry");
            const errorphone = document.querySelector("#errorphone");
            const errorcourse = document.querySelector("#errorcourse");
            const errorgender = document.querySelector("#errorgender");
            const errorroom = document.querySelector("#errorroom");
            const enqform = document.querySelector("#enquiryform");
            const successenquiry = document.querySelector("#successenquiry");
            const errorenquiry = document.querySelector("#errorenquiry");
            const enquiryloader = document.querySelector("#enquiryloader");

            nameValidate(name, errorname);
            emailValidate(email, erroremail);
            phoneValidate(phone, errorphone);
            courseValidate(course, errorcourse);
            genderValidate(gender, errorgender);
            roomValidate(room, errorroom);

            if (nameflag && emailflag && phoneflag  && courseflag && genderflag && roomflag ){
                console.log(name.value, email.value, phone.value, country.value,  gender.value, room.value, message.value )
                enquiryloader.classList.remove("d-none");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "/enquiry",
                    type: "POST",
                    data: { name: name.value, email: email.value, phone: phone.value, country: country.value, course:course.value, gender: gender.value, room: room.value, message: message.value },
                    success: function (data) {
                        if (data == true) {
                          enqform.classList.add("d-none");
                          enquiryloader.classList.add("d-none");
                          successenquiry.classList.remove("d-none");
                        } else {
                            enquiryloader.classList.add("d-none");
                            errorenquiry.classList.remove("d-none");
                        }
                    }
                });
            } else {
                console.log(0)
            }
        }
    </script>
    @section('js')
    @show
    {!! $code->footer !!}
    @if(!Route::is('support'))
    {!! $code->tawkto !!}
    @endif
</body>
</html>