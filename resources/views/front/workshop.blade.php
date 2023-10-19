@extends('layouts.front')
@section('css')
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<style>
   html{scroll-behavior:smooth}
   .secleftimg img{object-fit: cover;width: 100%;height: 100%;}
   .clr-default {color: #cf3e5f;}
   .workshop_details .workshoplist{padding: 10px 5px;color: black;font-weight: 500;}
   .side_info {border: 1px solid rgb(221, 221, 221);border-radius: 12px;padding: 24px;box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px;}
   .course_sidebar{top:200px;position:sticky;}
   .course_sidebar .side_info h3 {padding: 10px;font-size: 22px;font-weight: bold;letter-spacing: 1.2px;margin-bottom:20px;border-bottom:2px solid;}
   .workshopsideinfo tr td span:before, .modules ul li:before{font-family: 'Font Awesome 5 Free';content: "\f14a";color: #cf3e5f;padding-right: 6px;font-weight: 600;}
   .workshopsideinfo tr td{font-size:15px;padding:10px;}
   .modules .card-body {padding: 15px 40px !important;}
   .modules ul li{list-style:none;color:black;line-height:30px;}
</style>
@endsection
@section('content')
<section>
   <div class="container">
      <div class="row">
         <div class="head text-center mb-3">
            <h1 class="text-uppercase">{{$workshop->name}}</h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 px-1 py-1 secleftimg">
            <img src="{{asset($workshop->image)}}" class="rounded" width="100%" alt="{{$workshop->alt}}">
         </div>
         <div class="col-md-6 px-1 py-1 secrightimg">
            <div class="row m-0">
               <div class="col-md-6 px-1 pb-1 pt-0">
                  <img src="{{asset($workshop->image2)}}" class="rounded" width="100%" alt="{{$workshop->alt2}}">
               </div>
               <div class="col-md-6 px-1 pb-1 pt-0">
                  <img src="{{asset($workshop->image3)}}" class="rounded" width="100%" alt="{{$workshop->alt3}}">
               </div>
               <div class="col-md-6 px-1 pt-2">
                  <img src="{{asset($workshop->image4)}}" class="rounded" width="100%" alt="{{$workshop->alt4}}">
               </div>
               <div class="col-md-6 px-1 pt-2">
                  <img src="{{asset($workshop->image5)}}" class="rounded" width="100%" alt="{{$workshop->alt5}}">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="single_classes">
               <div id="about" class="mb-5 workshop">
                  <h3>About </h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_detail">
                     {!! $workshop->about !!}
                     <div class="countent_detail_meta">
                        <ul>
                           <li>
                              <div class="classes_days">
                                 <label>Duration: </label>
                                 <span>{{$workshop->duration}}</span>
                              </div>
                           </li>
                           <li>
                              <div class="classes_time">
                                 <label>No of sessions: </label>
                                 <span>{{$workshop->session}} </span>
                              </div>
                           </li>
                           <li>
                              <div class="classes_date">
                                 <label>Online Workshop: </label>
                                 <span>${{number_format($workshop->onlineprice, 2); }} USD</span>
                              </div>
                           </li>
                           <li>
                              <div class="classes_location">
                                 <label>In-Person Workshop: </label>
                                 <span>${{number_format($workshop->inpersonprice, 2); }} USD</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               @if(count($workshop->except)>0)
               <div id="expect" class="mb-5 workshop expect">
                  <h3>What to expect</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="workshop_details">
                     <div class="row">
                        @foreach($workshop->except as $list)
                        <div class="workshoplist">
                           <i class="fa fa-check mx-2 clr-default"> </i>
                           {{$list->except}}
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               @endif
               @if(count($workshop->modules)>0)
               <div id="modules" class="mb-5 workshop modules">
                  <h3>Modules</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_desc">
                     <div class="faq" id="accordion">
                        @foreach($workshop->modules as $index=>$list)
                        <div class="card">
                           <div class="card-header" id="faqHeading-1">
                              <div class="mb-0">
                                 <h5 class="faq-title mb-0" data-toggle="collapse" data-target="#curriculam-{{$index+1}}" data-aria-expanded="true" data-aria-controls="curriculam-{{$index+1}}">
                                    {{$list->question}}
                                 </h5>
                              </div>
                           </div>
                           <div id="curriculam-{{$index+1}}" class="collapse" aria-labelledby="faqHeading-{{$index+1}}" data-parent="#accordion">
                              <div class="card-body">
                                 {!! $list->answer !!}
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               @endif
               @if(count($workshop->resources)>0)
               <div id="expect" class="mb-5 workshop expect">
                  <h3>Additional Resources</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="workshop_details">
                     <div class="row">
                        <p>To enhance practical exercises and experiential learning get access</p>
                        @foreach($workshop->resources as $list)
                        <div class="workshoplist">
                           <i class="fa fa-check mx-2 clr-default"> </i>
                           {{$list->resources}}
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               @endif
               @if(count($workshop->testimonial)>0)
               <div id="testimonials" class="mb-5 workshop testimonial">
                  <h3>Our Testimonials</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_desc">
                     <div class="" id="testimonial_lists">
                        @foreach($workshop->testimonial as $list)
                        <div class="testimonial_style1">
                           <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20" style="background: #cf3e5f;padding: 2px;">
                           <div class="testimonial_box p-3" >
                              <div class="testi_desc mb-4">
                                 <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                 <p class="p-1">{{$list->review}}</p>
                              </div>
                              <div class="testi_meta d-flex justify-content-center">
                                 <div class="testi_user text-left align-self-center">
                                    <h5 class=" h6 mb-0 ">- {{$list->name}}</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               @endif    
            </div>
         </div>
         <div class="col-lg-4 pt-3 pt-lg-0">
            <div class="course_sidebar">
               <div class="side_info">
                  <h3 class="text-center">Overview</h3>
                  <div class="courseinfolist">
                     <div style="overflow-x:auto;" class="wtable pt20">
                        <table class="table table-borderless workshopsideinfo" style="font-size:14px;">
                           <tr>
                              <td>
                                 <span class="font-weight-bold">Duration: </span> {{$workshop->duration}}
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="font-weight-bold">Session: </span> {{$workshop->session}}
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="font-weight-bold">Online Workshop: </span> ${{number_format($workshop->onlineprice, 2); }} USD
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="font-weight-bold">In-Person Workshop:  </span> ${{number_format($workshop->inpersonprice, 2); }} USD
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div class="action_btn d-flex justify-content-between">
                        <a href="" class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px"> Book Now </a>
                        <a class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px" data-toggle="modal" data-target="#enquiryFormWorkshop"> Enquiry Now </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="modal fade " data-backdrop="static" id="enquiryFormWorkshop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="hidden" name="type" id="enquirytype" value="1">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for class="col-form-label mb-0">Name *</label>
                                <input type="text" class="form-control" name="name" id="enquiryname" placeholder="Your name" >
                                <small> <span id="errorname" class="text-danger"></span> </small>   
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for class="col-form-label mb-0 ">Email *</label>
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
                                <label for class="col-form-label mb-0">Workshop</label>
                                <select class="form-control" name="course" id="enquirycourse">
                                    <option value=""> Select Workshop </option>
                                    @foreach($workshoplist as $list)
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
                                <label for class="col-form-label mb-0">I Want Attended</label>
                                <select class="form-control" name="room" id="enquiryroom">
                                    <option value="">Select </option>
                                    <option value="Online Workshop">Online Workshop</option>
                                    <option value="In Person Workshop"> In-Person Workshop </option>
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
@endsection
@section('js')
@endsection
