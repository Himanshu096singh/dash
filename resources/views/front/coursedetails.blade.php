@extends('layouts.front')
@section('css')
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<style>
html{scroll-behavior:smooth}
.clr-default{color:#cf3e5f;}
.slider__container {width:100%;position:relative;}
.slick-list {perspective:1px;}
.slick-track {will-change:transform,transition;}
.slider__items {display:flex;}
.course_section {margin: 30px 0px;padding:30px 0px;}
.course_section hr {max-width:80px;margin-left: 0;height:4px !important;}
.included .includedlist {padding: 10px 5px;color: black;font-weight: 500;}
.side_info {border: 1px solid rgb(221, 221, 221);border-radius: 12px;padding: 24px;box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px;}
.course_sidebar{top:200px;position:sticky;}
.course_sidebar .side_info h3 {padding: 10px;font-size: 22px;font-weight: bold;letter-spacing: 1.2px;
    margin-bottom:20px;border-bottom:2px solid;}
.courseinfolist ul li:before,.curriculam ul li:before {font-family: 'Font Awesome 5 Free';content: "\f14a";color: #cf3e5f;padding-right: 6px;font-weight: 600;}
.courseinfolist ul li {color: black;margin-bottom: 10px;}
.dailyschedule ul, li {list-style: none;padding: 0;}
.dailyschedule .container {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 padding: 0 1rem;
	 background: linear-gradient(45deg, #209cff, #68e0cf);
	 padding: 3rem 0;
}
.dailyschedule .wrapper {
	 background: #eaf6ff;
	 padding: 2rem;
	 border-radius: 15px;
}
.dailyschedule .sessions {
	 margin-top: 2rem;
	 border-radius: 12px;
	 position: relative;
}
.dailyschedule li {
	 padding-bottom: 1.5rem;
	 border-left: 1px solid #cf3e5f;
	 position: relative;
	 padding-left: 20px;
	 margin-left: 10px;
}
.dailyschedule li:last-child {
	 border: 0px;
	 padding-bottom: 0;
}
.dailyschedule li:before {
	 content: '';
	 width: 15px;
	 height: 15px;
	 background: white;
	 border: 1px solid #cf3e5f;
	 box-shadow: 3px 3px 0px #ff829f;
	 box-shadow: 3px 3px 0px #ff829f;
	 border-radius: 50%;
	 position: absolute;
	 left: -10px;
	 top: 0px;
}
.dailyschedule .time {
	 color: #2a2839;
	 font-family: 'Poppins', sans-serif;
	 font-weight: 500;
}
@media screen and (min-width: 601px) {
	.dailyschedule .time {
		font-size: 0.9rem;
	}
}
@media screen and (max-width: 600px) {
	.dailyschedule .time {
		margin-bottom: 0.3rem;
		font-size: 0.85rem;
	}
}
.dailyschedule p {
	 color: #4f4f4f;
	 font-family: sans-serif;
	 line-height: 1.5;
	 margin-top: 0.4rem;
}
@media screen and (max-width: 600px) {
	.dailyschedule p{
		font-size: 0.9rem;
	}
}
.topscrollbox {
    background: #f0f0f0;
    position:sticky;
    top: 100px;
    z-index:9;
}
.topscrollbox ul li {
    padding: 6px;
    margin: 2px;
    border-radius: 8px;
    font-size:14px;
    font-weight:500;
}
.topscrollbox ul li.active{
    background:#cf3e5f;
    color:white;
}
.slider__item img {
    padding:6px;
}
.single_classes .faq{
    box-shadow:none;
}
.curriculam ul li {
    color:#323232;
}
.curriculam .card-body{
    padding:15px 40px !important;
    
    font-size:16px;
}
.faq-title:after {
    font-family: 'Font Awesome 5 Free';
    content: "\f077";
    
    font-size: 14px;
    position: absolute;
    right: 20px;
}
h5.faq-title.collapsed:after {
    content: "\f078";
}
</style>
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
            <li class="list-inline-item active" onclick="clicktoscroll('introduction')">
                Overview
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('included')">
                Inclusions
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('curriculam')">
                Curriculam
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('schedule')">
                Schedule
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('upcoming-batches')">
                Course Dates
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('accomodation')">
                Accomodation
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('testimonials')">
                Testimonials
            </li>
            <li class="list-inline-item" onclick="clicktoscroll('faq')">
                FAQ's
            </li>
    
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
                        	<a href="#" class="btn btn-default btn-sm" type="button"  data-toggle="modal" data-target="#enquiryForm">Enquiry Now</a>
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
                                        <span>USD {{$course->privateroom}} </span>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <div id="introduction" class="course_section introduction">
                        <h3>About the course</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
                        <div class="classes_desc"> 
                            {!! $course->description !!}
                            <div style="overflow-x:auto;" class="wtable pt20">
                                <table class="table table-striped">
                                <tr>
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

                    <div id="included" class="course_section included">
                        <h3>What is included</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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

                    <div id="curriculam" class="course_section curriculam">
                        <h3>Curriculam</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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

                    <div id="schedule" class="course_section dailyschedule">
                        <h3>Daily Schedule</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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

                    <div id="upcoming-batches" class="course_section batches">
                        <h3>Course Dates</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
                        <div class="classes_desc"> 
                            <p class="mb-3">
                                This yoga certification course will be assessed by practical exam, theoretical exam, written assessment, classroom participation, and observation during the class.
                            </p>
                            <div style="overflow-x:auto;" class="wtable pt20">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">Month</th>
                                          <th scope="col">Available Seats</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Feb - 25 Feb 2023	</td>
                                            <td>3 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 Mar - 25 Mar 2023	</td>
                                            <td>4 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 Apr - 25 Apr 2023	</td>
                                            <td>3 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 May - 25 May 2023	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 June - 25 June 2023	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 July - 25 July 2023	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 August - 25 August 2023	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 September - 25 September	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 October - 25 October	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 November - 25 November	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 December - 25 December	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                        <tr>
                                            <td>1 January - 25 January	</td>
                                            <td>5 seats left</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="accomodation" class="course_section accomodation">
                        <h3>Accomodation & Food</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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

                    <div id="testimonials" class="course_section testimonial">
                        <h3>Our Testimonials</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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

                    <div id="faq" class="course_section faq">
                        <h3>Frequently Asked Questions</h3>
                        <hr style="background:#cf3e5f;height:2px"/>
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
                                        ${{$course->privateroom}} USD
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">Private Room </span><br/>
                                        ${{$course->shared2room}} USD
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold">Private Room </span><br/>
                                        ${{$course->shared3room}} USD
                                    </td>
                                    <td>
                                        <span class="font-weight-bold">Private Room </span><br/>
                                        ${{$course->shared6room}} USD
                                    </td>
                                </tr>
                            </table>  
                            </div>
                            <div class="action_btn d-flex justify-content-between">
                                <a class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px"> Book Now </a>
                                <a class="btn btn-default d-inline-block m-1 mb-3 px-2 font-weight-normal" style="width:150px"> Enquiry Now </a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
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
        function clicktoscroll(getid) {
            console.log(this);
            let e = document.getElementById(getid);
            let position = e.getBoundingClientRect();
            window.scrollTo(position.left, position.top + window.scrollY - 150);
        }
        var headings = $(".single_classes").find(".course_section");

        $(window).scroll(function(e){
            var windscroll = $(window).scrollTop();
            if (windscroll >= 100) {
                headings.each(function(i) {
                    
                    if ($(this).position().top <= windscroll - 20) {
                        $('.topscrollbox li.active').removeClass('active');
                        $('.topscrollbox li').eq(i).addClass('active');
                    }
                });

            } else {

                $('.topscrollbox li.active').removeClass('active');
                $('.topscrollbox li:first').addClass('active');
            }
        }).scroll();
        </script>
@endsection
