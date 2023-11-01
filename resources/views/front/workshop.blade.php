@extends('layouts.front')
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
                           <a href="{{url($workshop->slug.'/booking')}}" class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px"> Book Now </a>
                           <a class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px" data-toggle="modal" data-target="#enquiryFormWorkshop"> Enquiry Now </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @include('front.include.workshopEnquiryModal')
@endsection
@section('js')
@endsection
