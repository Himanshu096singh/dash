@extends('layouts.front')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
@endsection
@section('content')
@if(count($course->media)>0)
<div class="slider__container">
   <div class="slider__items">
      @foreach($course->media as $list)
      <div class="slider__item">
         <img src="{{$list->image}}" alt="{{$list->alt}}">
      </div>
      @endforeach
   </div>
</div>
@endif
<div class="topscrollbox p-1 bg-gray">
    <div class="container">
        <ul class="list-inline text-center m-2">
            <li class="list-inline-item active" onclick="clicktoscroll('introduction', this)">
            Overview
            </li>
            @if(count($course->inclusion)>0)
               <li class="list-inline-item" onclick="clicktoscroll('included', this)">
                  Inclusions
               </li>
            @endif
            @if(count($course->curriculam)>0)
               <li class="list-inline-item" onclick="clicktoscroll('curriculam', this)">
                  Curriculam
               </li>
            @endif
            @if(count($course->schdule)>0)  
               <li class="list-inline-item" onclick="clicktoscroll('schedule', this)">
                  Schedule
               </li>
            @endif
            <li class="list-inline-item" onclick="clicktoscroll('upcoming-batches', this)">
                Course Dates
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('accomodation', this)">
                Accomodation
            </li>
            @if(count($course->testimonial)>0)
                <li class="list-inline-item" onclick="clicktoscroll('testimonials', this)"> Testimonials </li>
            @endif
            @if(count($course->faqs)>0)
                <li class="list-inline-item" onclick="clicktoscroll('faq', this)"> FAQ's </li>
            @endif
        </ul>
    </div>
</div>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="single_classes">
               <div class="classes_title">
                  <h1>{{$course->name}}</h1>
               </div>
               <div class="classes_img">
                  <img src="{{asset($course->image)}}" alt="{{$course->alt}}">
                  <div class="register_btn">
                     <a class="btn btn-default btn-sm" type="button"  data-toggle="modal" data-target="#enquiryForm">Enquiry Now</a>
                  </div>
               </div>
               <div class="classes_detail">
                  <div class="countent_detail_meta">
                     <ul>
                        <li>
                           <div class="classes_days">
                              <label>Days: </label>
                              <span>{{$course->duration}}</span>
                           </div>
                        </li>
                        <li>
                           <div class="classes_time">
                              <label>Hour: </label>
                              <span>{{$course->hour}} </span>
                           </div>
                        </li>
                        <li>
                           <div class="classes_date">
                              <label>Start Date: </label>
                              <span>April 14, 2024</span>
                           </div>
                        </li>
                        <li>
                           <div class="classes_location">
                              <label>Location: </label>
                              <span>Rishikesh</span>
                           </div>
                        </li>
                        <li>
                           <div class="classes_date">
                              <label>Price: </label>
                              <span>$ {{number_format($course->shared6room, 2); }} USD </span>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div id="introduction" class="course_section introduction">
                  <h3>About the course</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_desc">
                     {!! $course->description !!}
                     <div style="overflow-x:auto;" class="wtable pt20">
                        <table class="table">
                           <tr class="bg-grey">
                              <th>
                                 Style
                              </th>
                              <th>
                                 Skill Level
                              </th>
                           </tr>
                           <tr>
                              <td>
                                 <i class="fa fa-check mx-2 clr-default"> </i>Hatha Yoga
                              </td>
                              <td>
                                 <i class="fa fa-check mx-2 clr-default"> </i> Beginner
                              </td>
                           </tr>
                           <tr style="background: white;">
                              <td>
                                 <i class="fa fa-check mx-2 clr-default"> </i> Ashtanga Vinyasa
                              </td>
                              <td>
                                 <i class="fa fa-check mx-2 clr-default"> </i> Intermediate
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>

                @if(count($course->inclusion)>0)
                    <div id="included" class="course_section included">
                    <h3>What is included</h3>
                    <hr class="bg-default opacity-100" style="height:2px"/>
                    <div class="classes_desc">
                        <div class="row">
                            @foreach($course->inclusion as $list)
                            <div class="col-md-6 includedlist">
                            <i class="fa fa-check mx-2 clr-default"> </i> {{$list->inclusion}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                @endif
                @if(count($course->curriculam)>0)
                    <div id="curriculam" class="course_section curriculam">
                    <h3>Curriculam</h3>
                    <hr class="bg-default opacity-100" style="height:2px"/>
                    <div class="classes_desc">
                        <div class="faq" id="accordion">
                            @foreach($course->curriculam as $index=>$list)
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
                @if(count($course->schdule)>0)   
                    <div id="schedule" class="course_section dailyschedule">
                        <h3>Daily Schedule</h3>
                        <hr class="bg-default opacity-100" style="height:2px"/>
                        <div class="classes_desc">
                            <ul class="sessions mb-5" >
                                @foreach($course->schdule as $list)
                                <li>
                                <div class="time">{{$list->time}}</div>
                                <p>{{$list->task}}</p>
                                </li>
                                @endforeach
                            </ul>
                            <p> <span class="font-weight-bold"> NOTE: </span> Daily Schedule Might Be Rescheduled By Teachers.</p>
                        </div>
                    </div>
                @endif

                <div id="upcoming-batches" class="course_section batches">
                  <h3>Course Dates</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_desc">
                     <p class="mb-3">
                        This yoga certification course will be assessed by practical exam, theoretical exam, written assessment, classroom participation, and observation during the class.
                     </p>
                     <div style="overflow-x:auto;" class="wtable pt20">
                        @if(count($course->dates))
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th scope="col">Month</th>
                                 <th scope="col">Available Seats</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($course->dates as $list)
                              <tr>
                                 <td> {{$list->date}} </td>
                                 <td> {{$list->seats}} </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                        @endif
                     </div>
                  </div>
                </div>

                <div id="accomodation" class="course_section accomodation">
                  <h3>Accomodation & Food</h3>
                  <hr class="bg-default opacity-100" style="height:2px"/>
                  <div class="classes_desc">
                     <p class="mb-5">
                        This yoga certification course will be assessed by practical exam, theoretical exam, written assessment, classroom participation, and observation during the class.
                     </p>
                     <div class="accomdation-room mb-5">
                        <div class="row border-bottom pb-2 mb-4 ">
                           <div class="col-md-5">
                              <img src="https://nirvanayogaschoolindia.com/img/200/room1.webp" class="img-fluid rounded">
                           </div>
                           <div class="col-md-7">
                              <div>
                                 <h5>Private Rooms</h5>
                                 <p class="mb-0" style="font-size:14px;">This yoga certification course will be assessed by practical exam, theoretical exam, written assessment.</p>
                                 <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bed.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Bed</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/shower.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Shower</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/wifi.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Wifi</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bio.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Nature</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row border-bottom pb-2 mb-4 ">
                           <div class="col-md-5">
                              <img src="https://nirvanayogaschoolindia.com/img/200/room1.webp" class="img-fluid rounded">
                           </div>
                           <div class="col-md-7">
                              <div>
                                 <h5>Private Rooms</h5>
                                 <p class="mb-0" style="font-size:14px;">This yoga certification course will be assessed by practical exam, theoretical exam, written assessment.</p>
                                 <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bed.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Bed</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/shower.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Shower</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/wifi.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Wifi</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bio.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Nature</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row border-bottom pb-2 mb-4 ">
                           <div class="col-md-5">
                              <img src="https://nirvanayogaschoolindia.com/img/200/room1.webp" class="img-fluid rounded">
                           </div>
                           <div class="col-md-7">
                              <div>
                                 <h5>Private Rooms</h5>
                                 <p class="mb-0" style="font-size:14px;">This yoga certification course will be assessed by practical exam, theoretical exam, written assessment.</p>
                                 <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bed.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Bed</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/shower.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Shower</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/wifi.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Wifi</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bio.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Nature</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row border-bottom pb-2 mb-4 ">
                           <div class="col-md-5">
                              <img src="https://nirvanayogaschoolindia.com/img/200/room1.webp" class="img-fluid rounded">
                           </div>
                           <div class="col-md-7">
                              <div>
                                 <h5>Private Rooms</h5>
                                 <p class="mb-0" style="font-size:14px;">This yoga certification course will be assessed by practical exam, theoretical exam, written assessment.</p>
                                 <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bed.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Bed</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/shower.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Shower</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/wifi.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Wifi</span>
                                    </div>
                                    <div class="p-2 bd-highlight text-center">  
                                       <img src="assets/icons/bio.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Nature</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <h4> Meals </h4>
                     <p>
                        Meals at the Heart of Yoga, are thoughtfully prepared, emphasizing purity, simplicity, and balance. They typically consist of vegetarian fare with an emphasis on fresh fruits, vegetables, grains, nuts, lentils, legumes, rice, roti (made from wheat), bread, juices. These nutritious meals support the practice of yoga and promote overall well-being among students.
                     </p>
                     <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight text-center">  
                           <img src="assets/icons/dinner.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">3 Meals</span>
                        </div>
                        <div class="p-2 bd-highlight text-center">  
                           <img src="assets/icons/broccoli.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Vegetarian</span>
                        </div>
                        <div class="p-2 bd-highlight text-center">  
                           <img src="assets/icons/vegan.png" class="img-fluid" style="max-width:24px"> <br/> <span style="font-size:15px">Vegan</span>
                        </div>
                     </div>
                  </div>
                </div>

                @if(count($course->testimonial)>0)
                    <div id="testimonials" class="course_section testimonial">
                    <h3>Our Testimonials</h3>
                    <hr class="bg-default opacity-100" style="height:2px"/>
                    <div class="classes_desc">
                        <div class="" id="testimonial_lists">
                            @foreach($course->testimonial as $list)
                            <div class="testimonial_style1">
                            <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20" style="background: #cf3e5f;padding: 2px;">
                            <div class="testimonial_box p-3" >
                                <div class="testi_desc mb-4">
                                    <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                    <p class="p-1">{{$list->review}}</p>
                                </div>
                                <div class="testi_meta d-flex justify-content-center">
                                    <div class="testimonial_img mr-3">
                                        <img src="assets/images/client_img3.jpg" alt="client" style="width:60px">
                                    </div>
                                    <div class="testi_user text-left align-self-center">
                                        <h5 class=" h6 mb-0 ">{{$list->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                @endif

                @if(count($course->faqs)>0)
                    <div id="faq" class="course_section faq">
                        <h3>Frequently Asked Questions</h3>
                        <hr class="bg-default opacity-100" style="height:2px"/>
                        <div class="classes_desc">
                            <div class="faq" id="accordion">
                                @foreach($course->faqs as $index=>$list)
                                <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$index+1}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$index+1}}">
                                            <span class="badge">{{$index+1}}</span>{{$list->question}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$index+1}}" class="collapse " aria-labelledby="faqHeading-{{$index+1}}" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>{{$list->answer}}</p>
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
                  <h3 class="text-center">Course Details</h3>
                  <div class="courseinfolist">
                     <ul class="p-1">
                        <li class="list-unstyled" style="font-size:14px;">
                           <span class="font-weight-bold">Duration: </span> {{$course->duration}}
                        </li>
                        <li class="list-unstyled" style="font-size:14px;">
                           <span class="font-weight-bold" >Certification:</span>  {{$course->certification}}
                        </li>
                     </ul>
                     <div style="overflow-x:auto;" class="wtable pt20">
                        <table class="table table-borderless" style="font-size:14px;">
                           <tr>
                              <td>
                                 <span class="font-weight-bold">Private Room </span><br/>
                                 ${{number_format($course->privateroom, 2); }} USD
                              </td>
                              <td>
                                 <span class="font-weight-bold"> 2-Shared Room </span><br/>
                                 ${{number_format($course->shared2room, 2); }} USD
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="font-weight-bold"> 3-Shared Room </span><br/>
                                 ${{number_format($course->shared3room, 2); }} USD
                              </td>
                              <td>
                                 <span class="font-weight-bold"> 6-Shared Room </span><br/>
                                 ${{number_format($course->shared6room, 2); }} USD
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div class="action_btn d-flex justify-content-between">
                        <a href="{{url($course->slug."/booking")}}" class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px"> Book Now </a>
                        <a class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal"   type="button"  data-toggle="modal" data-target="#enquiryForm" style="width:150px"> Enquiry Now </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script>
    $('.slider__container').each(function(i){
        var $this = $(this);
        var $slides = $('.slider__items',this);
        var currentSlide = 1;
        var activeSlidesLength = 0;
        var slidePositions = {};
        var totalSlides = 0;
        var trackStart = 0;
        var lastSlideWidth = 0;
        var interval = null;
        var sliderSpeed = 5000; //ms for slide to scroll
        var tweenNext = '';
        var tweenPrev = '';
        var backClicked = false;
        var autoAdvance = true;
        $slides.on('init',function(e,slick){
            var $track = $('.slick-track',$this);
            function setSizeVars() {
                activeSlidesLength = 0;
                trackStart = $('.slick-slide',$this).first().outerWidth();
                slidePositions[1] = trackStart;
                $('.slick-slide:not(.slick-cloned)',$this).each(function(i){
                    var width = $(this).outerWidth();
                    activeSlidesLength += width;
                    slidePositions[i + 2] = trackStart + activeSlidesLength;
                    lastSlideWidth = width;
                    totalSlides = i + 2;
                });
            };
            setSizeVars();
            $(window).on('resize',function(){
                setSizeVars();
            });
            $track.css({'transform':'translate(-'+slidePositions[currentSlide]+'px,0,0)'});
            function goToNextSlide(transitionTime,transitionEasing) {
                if(currentSlide == totalSlides - 1) { 
                    var nextSlide = currentSlide + 1;
                    tweenNext = TweenLite.to($track, 0,{
                    x:-(slidePositions[1] - lastSlideWidth),
                    ease: Power0.easeNone,
                    onComplete: function(){
                        currentSlide = nextSlide;
                        goToNextSlide(transitionTime,transitionEasing);
                    }
                    });
                } else {
                    var nextSlide = (currentSlide == totalSlides ? 1 : currentSlide + 1);
                    tweenNext = TweenLite.to($track, transitionTime,{
                    x:-(slidePositions[nextSlide]),
                    ease: transitionEasing,
                    onComplete: function(){
                        currentSlide = nextSlide;
                        if (autoAdvance) {
                        goToNextSlide(sliderSpeed/1000, Power0.easeNone);
                        }
                    }
                    });
                }
            }
    
            setTimeout(function(){
            goToNextSlide(sliderSpeed/1000, Power0.easeNone);
            },1000);
    
            $this.hover(function() {
                tweenNext.pause();
            },function() {
                if (backClicked) {
                    goToNextSlide(sliderSpeed/1000, Power0.easeNone);
                } else {
                    tweenNext.play();
                }
                autoAdvance = true;
                backClicked = false;
            });
            
            $('.slider-next',$this).on('click',function(){
                goToNextSlide(0.2, Power1.easeInOut);
                autoAdvance = false;
            });
        });
        $slides.slick({
            infinite: true,
            variableWidth: true,
            arrows:false,
            accessibility:false,
            draggable:false,
            swipe:false,
            touchMove:false,
        });
        });
    </script>
    <script>
    function clicktoscroll(getid, clickedElement) {
      const listItems = document.querySelectorAll('ul.list-inline > li');
         listItems.forEach(item => item.classList.remove('active'));
         clickedElement.classList.add('active');
         let e = document.getElementById(getid);
         let position = e.getBoundingClientRect();
         window.scrollTo(position.left, position.top + window.scrollY - 150);
    }
   //  var headings = $(".single_classes").find(".course_section");
    
   //  $(window).scroll(function(e){
   //      var windscroll = $(window).scrollTop();
   //      if (windscroll >= 100) {
   //          headings.each(function(i) {
                
   //              if ($(this).position().top <= windscroll - 20) {
   //                  $('.topscrollbox li.active').removeClass('active');
   //                  $('.topscrollbox li').eq(i).addClass('active');
   //              }
   //          });
    
   //      } else {
    
   //          $('.topscrollbox li.active').removeClass('active');
   //          $('.topscrollbox li:first').addClass('active');
   //      }
   //  }).scroll();
    </script>
@endsection
