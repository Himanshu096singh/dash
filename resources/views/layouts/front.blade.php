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
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @foreach($mainCategory as $list)
        .bg-{{$list->slug}} {
            background: {{$list->color}}
        }
        .txt-clr-{{$list->slug}}{
            color: {{$list->color}}
        }

        @endforeach .decoration-none {
            text-decoration: none;
        }
    </style>
    @section('css')
    @show
    @include('front.include.schema')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" />
    {!! $code->header !!}
</head>
<body class="custom-background">
    <div class="bg-light container">
        <div class="p-3 px-5 text-center text-sm-start">
            <a href="{{route('home')}}">
                <img src="{{asset($setting->logo)}}" alt="{{$setting->logoalt}}" />
            </a>
        </div>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-{{isset($category) ? $category->slug : 'dark' }} px-5 position-relative">
                <a class="navbar-brand d-block d-sm-none fs-14" href="{{route('home')}}">{{$setting->name}}</a>
                <button class="navbar-toggler float-xs-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuItems">
                    <ul class="navbar-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <li class="nav-item d-flex justify-content-center align-items-center" itemprop="name">
                            <a class="nav-link {{Route::is('home') ? 'active':''}}" href="{{route('home')}}" itemprop="url">
                                <i class="fas fa-home text-white d-sm-block d-none"></i><span class="d-block d-sm-none text-white"> HOME </span>
                            </a>
                        </li>
                        @foreach($mainCategory as $list)
                            <li class="nav-item" itemprop="name">
                                <a class="nav-link {{request()->segment(1) == $list->slug  ? 'active':''}}" href="{{url($list->slug)}}" itemprop="url">{{$list->name}} </a>
                            </li>
                            @endforeach
                            <li class="nav-item" itemprop="name">
                                <a class="nav-link {{Route::is('support') ? 'active':''}}" href="{{route('support')}}" itemprop="url">Support </a>
                            </li>
                        
                    </ul>
                </div>
                <span class="searchBtn"><i class="fas fa-search text-white"></i></span>
            </nav>
        </header>
        @yield('content')
        <footer>
            <div class="row">
                <div class="col-md-12 pt-5 text-center">
                    <div class="footer_menu ">
                        <ul class="list-inline">
                            @foreach($staticpage as $list)
                            <li class="list-inline-item"><a class="text-decoration-none"
                                    href="{{url($list->slug)}}">{{$list->name}}</a></li>
                            @endforeach
                        </ul>
                        <hr />
                    </div>
                    <p> Copyright © {{Date('Y')}}. Powered by <a href="{{route('home')}}"
                            class="text-decoration-none">{{$setting->name}}</a> </p>
                </div>
            </div>
        </footer>
        <div class="container searchBox" style="display:none;">
            <div class="row">
                <div class="col-12">
                    <div class="searchBar w-100">
                        <div class="p-4 p-md-5">
                            <form>
                                <input type="text" placeholder="Search here..." class="searchInp" id="searchInp"
                                    autocomplete="off">
                            </form>
                        </div>
                        <span class="searchcloseBtn"><i class="fas fa-times"></i></span>
                        <span class="searchclearBtn" style="display:none;"><i class="fas fa-times"
                                style="color:#0196D6;"></i></span>
                        <div class="searchList" style="display:none;">
                            <ul class="list-unstyled px-4 pt-3 pb-4 px-md-5 pb-md-5 m-0 searchListBox"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Step form starts -->
    <div id="boxSpinner" style="display:none;z-index:9999;" class="fixed-top w-100">
        <div class="d-flex justify-content-center align-items-center"
            style="background-color: rgba(0,0,0,0.7);height: 100vh;">
            <div class="spinner-border text-light" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div id="myForm222" class="fixed-top w-100" style="display: none;">
        <div class="d-flex justify-content-center align-items-center"
            style="background-color: rgba(0,0,0,0.4);height: 100vh;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="form-box d-flex justify-content-center align-items-center">
                            <div class="w-100">
                                <div id="formBoxMain">
                                    <form>
                                        <div id="box1">
                                            <div class="p-sm-5 p-3">
                                                <p class="fs-4 fw-bold">Q1. Describe your issue?</p>
                                                <div class="row">
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp1" id="label1" class="label-box label-box1">
                                                            <div>
                                                                <img src="{{asset('assets/images/paperjam.png')}}"
                                                                    alt="Paper Jam in Printer" width="60px">
                                                                <input type="radio" value="Paper Jam in Printer"
                                                                    name="issue" class="checkbox-mine" id="inp1">
                                                                <p class="mb-0 label-text">Paper Jam in Printer</p>
                                                                <span class="check-icon">
                                                                    <i class="fas fa-check-circle check-mark"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp2" id="label1" class="label-box label-box1">
                                                            <div>
                                                                <img src="{{asset('assets/images/troubleshoot.png')}}"
                                                                    alt="Printer Troubleshooting" width="60px">
                                                                <input type="radio" value="Printer Troubleshooting"
                                                                    name="issue" class="checkbox-mine" id="inp2">
                                                                <p class="mb-0 label-text">Printer Troubleshooting</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp3" id="label1" class="label-box label-box1">
                                                            <div>
                                                                <img src="{{asset('assets/images/connect.png')}}"
                                                                    alt="Unable to Connect Printer" width="60px">
                                                                <input type="radio" value="Unable to Connect Printer"
                                                                    name="issue" class="checkbox-mine" id="inp3">
                                                                <p class="mb-0 label-text">Unable to Connect Printer</p>
                                                                <span class="check-icon">
                                                                    <i class="fas fa-check-circle check-mark"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp4" id="label1" class="label-box label-box1">
                                                            <div>
                                                                <img src="{{asset('assets/images/setting.png')}}"
                                                                    alt="Setting Up New Printer" width="60px">
                                                                <input type="radio" value="Setting Up New Printer"
                                                                    name="issue" class="checkbox-mine" id="inp4">
                                                                <p class="mb-0 label-text">Setting Up New Printer</p>
                                                                <span class="check-icon">
                                                                    <i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp5" id="label1" class="label-box label-box1">
                                                            <div>
                                                                <img src="{{asset('assets/images/offline.png')}}"
                                                                    alt="Other" width="60px">
                                                                <input type="radio" value="Other" name="issue"
                                                                    class="checkbox-mine" id="inp5">
                                                                <p class="mb-0 label-text">Other</p>
                                                                <span class="check-icon">
                                                                    <i class="fas fa-check-circle check-mark"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="box2" style="display: none;">
                                            <div class="p-sm-5 p-3">
                                                <p class="fs-4 fw-bold">Q2. Which device are you using?</p>
                                                <div class="row">
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp10" id="label1" class="label-box label-box2">
                                                            <div>
                                                                <input type="radio" value="Desktop" name="device"
                                                                    class="checkbox-mine" id="inp10">
                                                                <img src="{{ asset('upload/icon/form-icon/desktop.png') }}"
                                                                    alt="Desktop" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Desktop</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp9" id="label1" class="label-box label-box2">
                                                            <div>
                                                                <input type="radio" value="Laptop" name="device"
                                                                    class="checkbox-mine" id="inp9">
                                                                <img src="{{ asset('upload/icon/form-icon/laptop.png') }}"
                                                                    alt="Laptop" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Laptop</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp7" id="label1" class="label-box label-box2">
                                                            <div>
                                                                <input type="radio" value="Mobile" name="device"
                                                                    class="checkbox-mine" name="" id="inp7">
                                                                <img src="{{ asset('upload/icon/form-icon/mobile.png') }}"
                                                                    alt="Mobile" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Mobile</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp8" id="label1" class="label-box label-box2">
                                                            <div>
                                                                <input type="radio" value="Tablet" name="device"
                                                                    class="checkbox-mine" id="inp8">
                                                                <img src="{{ asset('upload/icon/form-icon/tablet.png') }}"
                                                                    alt="Tablet" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Tablet</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp17" id="label1" class="label-box label-box2">
                                                            <div>
                                                                <input type="radio" value="Other" name="device"
                                                                    class="checkbox-mine" id="inp17">
                                                                <img src="{{ asset('upload/icon/form-icon/desktop.png') }}"
                                                                    alt="Other" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Other</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="box3" style="display: none;">
                                            <div class="p-sm-5 p-3">
                                                <p class="fs-4 fw-bold">Q3. Which OS are you using?</p>
                                                <div class="row">
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp11" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="Mac" name="software"
                                                                    class="checkbox-mine" id="inp11">
                                                                <img src="{{ asset('upload/icon/form-icon/mac.png') }}"
                                                                    alt="Mac" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Mac</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp12" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="Windows" name="software"
                                                                    class="checkbox-mine" id="inp12">
                                                                <img src="{{ asset('upload/icon/form-icon/window.png') }}"
                                                                    alt="Windows" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Windows</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp13" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="Linux" name="software"
                                                                    class="checkbox-mine" id="inp13">
                                                                <img src="{{ asset('upload/icon/form-icon/linux.png') }}"
                                                                    alt="Linux" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Linux</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp14" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="Chromebook" name="software"
                                                                    class="checkbox-mine" id="inp14">
                                                                <img src="{{ asset('upload/icon/form-icon/chromebook.png') }}"
                                                                    alt="Chromebook" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Chromebook</p>
                                                                <span class="check-icon">
                                                                    <i class="fas fa-check-circle check-mark"></i>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp15" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="Android" name="software"
                                                                    class="checkbox-mine" id="inp15">
                                                                <img src="{{ asset('upload/icon/form-icon/android.png') }}"
                                                                    alt="Android" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">Android</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-6 my-2">
                                                        <label for="inp16" id="label1" class="label-box label-box3">
                                                            <div>
                                                                <input type="radio" value="iOS" name="software"
                                                                    class="checkbox-mine" id="inp16">
                                                                <img src="{{ asset('upload/icon/form-icon/ios.png') }}"
                                                                    alt="iOS" class="inp-img">
                                                                <p class="mb-0 mt-2 label-text">iOS</p>
                                                                <span class="check-icon"><i
                                                                        class="fas fa-check-circle check-mark"></i></span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="box4" style="display: none;">
                                            <div class="p-sm-5 p-3">
                                                <p class="fs-4 fw-bold">Q4. Your email?</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="inp18"
                                                            class="fs-5 mb-2 d-flex align-items-center"><i
                                                                class="fa fa-paper-plane color-mine"></i>&nbsp;Email:
                                                            <div class="err" id="mailErr"></div>
                                                        </label>
                                                        <input type="email" id="inp18"
                                                            placeholder="Kindly enter your email" class="input-feilds">
                                                    </div>
                                                    <div class="col-12 text-center mt-3">
                                                        <button type="button" class="btn-next-mine"
                                                            onclick="mailvalidate()">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="box5" style="display: none;">
                                            <div class="p-sm-5 p-3">
                                                <p class="fs-4 fw-bold">Q5. Your contact number?</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-lg-4 my-2">
                                                                <label for="inp19" class="fs-5 mb-2">
                                                                    <i
                                                                        class="fas fa-globe-europe color-mine"></i>&nbsp;Country
                                                                    Code:
                                                                </label>
                                                                <select id="inp19" class="input-feilds">
                                                                    <option value="+1 US">+1 US</option>
                                                                    <option value="+1 CA">+1 CA</option>
                                                                    <option value="+44 UK">+44 UK</option>
                                                                    <option value="+61 AU">+61 AU</option>
                                                                    <option value="+64 NZ">+64 NZ</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-8 my-2">
                                                                <label for="inp20"
                                                                    class="fs-5 mb-2 d-flex align-items-center">
                                                                    <i
                                                                        class="fas fa-phone-alt color-mine"></i>&nbsp;Number:
                                                                    <div class="err" id="numErr"></div>
                                                                </label>
                                                                <input type="number" id="inp20"
                                                                    placeholder="Kindly enter your number"
                                                                    class="input-feilds">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center mt-3">
                                                        <button type="button" onclick="formValidate()"
                                                            class="btn-next-mine">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="submitBox" style="display:none;">
                                    <div class="text-center p-sm-5 p-3">
                                        <img src="{{ asset('upload/icon/success-tick.gif') }}" alt="Form Submitted"
                                            width="200px">
                                        <p class="fs-2 fw-bold">THANK YOU!</p>
                                        <p>Dear User, we have received information about your problem, our team
                                            of experts on this matter will be shortly available for your help and
                                            reach out to you on the mobile number provided by you. Please answer
                                            all the calls which you receive.</p>
                                        <div class="row justify-content-center align-items-center mt-4">
                                            <div class="col-md-6 my-2">
                                                <a href="tel:+{{ $setting->usmobile }}"
                                                    class="text-dark decoration-none fw-bold">
                                                    <img src="{{ asset('upload/icon/usa.png') }}" alt="US Number"
                                                        width="35px"> +{{ $setting->usmobile }}</a><br>
                                                <a href="tel:+{{ $setting->ukmobile }}"
                                                    class="text-dark decoration-none fw-bold">
                                                    <img src="{{ asset('upload/icon/uk.png') }}" alt="UK Number"
                                                        width="35px"> +{{ $setting->ukmobile }}</a>
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <a href="#"
                                                    class="btn btn-success py-3 px-5 fs-6 fw-bold text-white d-inline-block mx-3 rounded-3"
                                                    id="bookConsult">
                                                    Book Free Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="consultBox" style="display:none;">
                                    <div class="p-sm-5 p-3">
                                        <h3 class="text-center mb-5 fs-3">Book Free Consultation </h3>
                                        <p class="fs-5">Your Email: <span class="fw-light" id="emailBox"></span></p>
                                        <p class="fs-5">Your Contact Number: <span class="fw-light"
                                                id="codeBox"></span>&nbsp;
                                            <span class="fw-light" id="numBox"></span>
                                        </p>
                                        <form onsubmit="return">
                                            <label for="dateInp"
                                                class="fs-6 fw-bold mt-4 mb-2 d-flex align-items-center">
                                                <i class="fas fa-calendar-check fs-4 color-mine"></i> &nbsp;Choose a
                                                Suitable Date:</label>
                                            <input class="p-2 d-block w-100 input-feilds" type="text" id="dateInp"
                                                data-date-format="dd-MM-yyyy" name="date" readonly>
                                            <label for="timeInp"
                                                class="fs-6 fw-bold mt-3 mb-2 d-flex align-items-center">
                                                <i class="fas fa-clock fs-4 color-mine"></i> &nbsp;Choose a Suitable
                                                Time:&nbsp;
                                                <span id="timeErr" class="err"></span>
                                            </label>
                                            <input class="p-2 d-block w-100 input-feilds" type="time" id="timeInp">
                                            <div class="text-center mt-4">
                                                <button type="button" onclick="validateTimeDate()"
                                                    class="btn-next-mine">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        input[type="time"] {
            position: relative;
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            display: block;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            background: transparent;
        }
    </style>
    <!-- Step form ends -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#dateInp').datepicker({
            startDate: new Date(),
            autoclose: true,
            todayHighlight: true,
        }).datepicker('update', new Date());
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    @section('js')
    @show
    {!! $code->footer !!}
    @if(!Route::is('support'))
    {!! $code->tawkto !!}
    @endif
</body>
</html>