@extends('layouts.front')
@section('css')
<style>
    .formsstep select,.formsstep input[type="text"]{
       height: 48px;
       background: #f3f3f3;
       border: 1px solid black;
       border-radius: 3px;
       padding: 10px;
    }
    .formsstep textarea {
       height: 80px;
       background: #f3f3f3;
       border: 1px solid black;
       border-radius: 3px;
       padding: 10px;
    }
    .imgfullbox{width: 100%;overflow: hidden;height: 100%;}
    .imgfullbox img{object-fit: cover;width: 100%;height: 100%;}
 </style>
@endsection
@section('content')
<section style="padding-top:40px;">
    <div class="container">
       <div class="row mb-4">
          <div class="col-md-12"> 
             <div class="heading_s3 text-center"> 
                <h1 class="text-uppercase  " style="font-weight:600;letter-spacing:1.2px;">Application Form</h1>
                <div class="title_icon"><i class="flaticon-lotus"></i></div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <div class="product-image imgfullbox">
                <span class="pr_flash bg_green"></span>
                <img src="https://nirvanayogaschoolindia.com/admin/uploads/yoga/DSC00857%20(1).webp" alt="product">
             </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 formsstep">
            <form action="{{url('bookingform')}}" method="post">
               @csrf
               <div class="step1">
                  <div class="booking-course-title d-flex justify-content-between mb-4 border-bottom pb-2">
                     <div class="title">
                        <h3 class="h4 clr-default" > Program Details:</h3>
                     </div>
                     <div class="step">
                        <h4 class="h5 clr-default"> Step 1 - 3</h3>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Select Course: <span class="required">*</span></label>
                     <div class="custom_select">
                           <select id="bookingcourse" onchange = "roomselect()" name="courseid">
                              <option value="">Select Course...</option>
                              @foreach($courselist as $list)
                                 <option value="{{$list->id}}" {{$list->id == $course->id ? 'selected' : ''}}  >{{$list->name}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Choose Room: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="bookingroom" onchange="roomselect()" name="room">
                           <option value="">Select Room...</option>
                           <option value="privateroom">Private Room</option>
                           <option value="shared2room">2 Bed Room</option>
                           <option value="shared3room">3 Bed Room</option>
                           <option value="shared6room">6 Bed Room</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Select Date:<span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="bookingdate" name="date">
                           <option value="">Select Date...</option>
                           <option value="1">01 Feb - 02 March</option>
                           <option value="2">01 Feb - 02 March</option>
                           <option value="3">01 Feb - 02 March</option>
                           <option value="4">01 Feb - 02 March</option>
                           <option value="5">01 Feb - 02 March</option>
                           <option value="6">01 Feb - 02 March</option>
                           <option value="7">01 Feb - 02 March</option>
                           <option value="8">01 Feb - 02 March</option>
                        </select>
                     </div>
                  </div>
                  <div class="booking-course-title d-flex justify-content-between mb-4">
                     <div class="title">
                        <h3 class="h4 clr-default" > Fee : <span class="courseprice"> </span> USD</h3>
                     </div>
                  </div>
                  <div class="text-align-right">
                     <a class="btn btn-default" onclick="myFunctionStep1()">NEXT</a>
                  </div>
               </div>
               <div class="step2 d-none">
                  <div class="booking-course-title d-flex justify-content-between mb-4 border-bottom">
                     
                     <div class="title">
                        <h3 class="h4 clr-default" > Personal Information:</h3>
                     </div>
                     <div class="step">
                        <h3 class="h5 clr-default"> Step 2 - 3</h3>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Name: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Name *" id="bookingname" class="form-control" name="bookingname" type="text" >
                  </div>
                  <div class="form-group">
                     <label>Email: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Email *" id="bookingemail" class="form-control" name="email" type="text">
                  </div>
                  <div class="form-group">
                     <label>Country: <span class="required">*</span></label>
                     <input type="text" class="form-control country" id="bookingcountry" name="country_selector_code" data-countrycodeinput="1" placeholder="Selected country code will appear here" />
                  </div>
                  <div class="form-group">
                     <label>Contact Number: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Contact Number *" id="bookingphone" class="form-control" name="number" type="text">
                  </div>
                  <div class="form-group">
                     <label>Message: <span class="required">*</span></label>
                     <textarea required="required" placeholder="Message *" id="bookingmessage" class="form-control" name="message" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                     <label>Payment Mode: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="bookingpaymentmode" name="paymentmode">
                           <option value="">Choose Payment Mode</option>
                           <option value="full">Full Payment</option>
                           <option value="advance">Advance Payment</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group terms">
                     <label class="container_check mt-2"><input type="checkbox" name="terms" id="check" required=""><span id="error_p"> I Agree to  <a href="" target="_blank" title="Terms of Service" style="color:basecolor">Terms &amp; Conditions</a></span> 
                     </label>
                  </div>
                  <div class="booking-course-title d-flex justify-content-between mb-4">
                     <div class="title">
                        <h3 class="h4 clr-default" > Fee : <span class="courseprice"> </span> USD</h3>
                     </div>
                  </div>
                  <div class="form-group">
                     <a class="btn btn-default" onclick="myFunctionStep2()"> NEXT </a>
                  </div>
               </div>
               <div class="step3 d-none">
                  <div class="booking-course-title d-flex justify-content-between mb-4 border-bottom">
                     <div class="title">
                        <h3 class="h4 clr-default" > Choose your payment method:</h3>
                     </div>
                     <div class="step">
                        <h3 class="h5 clr-default"> Step 3 - 3</h3>
                     </div>
                  </div>
                  <div class="table-responsive order_table">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Course</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 200 Hour Yoga Teacher Training in Rishikesh India<br/>
                                 <span class="product-qty">Payment Mode:</span> Full Payment
                              </td>
                              <td>$899.00</td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td class="product-subtotal">Total</td>
                              <td class="product-subtotal">$899.00</td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <div class="row mt-5">
                     <div class="col-12">
                        <div class="payment_method">
                           <div class="custome-radio">
                              <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="0" checked>
                              <label class="form-check-label" for="exampleRadios4">Paytm</label>
                              <p data-method="paytm" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                           </div>
                           <div class="custome-radio">
                              <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="1">
                              <label class="form-check-label" for="exampleRadios5">Razorpay</label>
                              <p data-method="razorpay" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-default">Place Order</a>
                     </div>
                  </div>
               </div>
            </form>
          </div>
       </div>
    </div>
 </section>
 <!-- START FOOTER -->
@endsection
@section('js')
<script>
   $("#bookingcountry").countrySelect({
        preferredCountries: []
    });
   function bookingCoursefun(bookingfield){
      if (bookingfield.value !== "") {
         bookingfield.style.borderColor = "#ccc";
            return true;
         } else {
            bookingfield.style.borderColor = "#d9534f";
            return false;
      }
   }

   function bookingcheckbox(check){
      if(check.checked==true){
         check.style.borderColor = "#ccc";
            return true;
      } else {
         check.style.borderColor = "#d9534f";
            return false;
      }
   }
    function myFunctionStep1() {
         const bookingCourse = document.querySelector("#bookingcourse");
         const bookingRoom = document.querySelector("#bookingroom");
         const bookingDate = document.querySelector("#bookingdate");
         const courseflag = bookingCoursefun(bookingCourse)
         const roomflag = bookingCoursefun(bookingRoom)
         const dateflag = bookingCoursefun(bookingDate)
         if(courseflag && roomflag && dateflag){
            const step1 = document.querySelector(".step1");
            step1.classList.add("d-none");
            document.querySelector(".step2").classList.remove("d-none");
         } else {
            console.log(0);
         }
      
    }

    function myFunctionStep2() {
      console.log("btn2")
      const bookingName    = document.querySelector("#bookingname");
      const bookingEmail   = document.querySelector("#bookingemail");
      const bookingCountry = document.querySelector("#bookingcountry");
      const bookingPhone   = document.querySelector("#bookingphone");
      const bookingMessage = document.querySelector("#bookingmessage");
      const booingPaymentmode = document.querySelector("#bookingpaymentmode")
      const check = document.querySelector("#check")
      const step2 = document.querySelector(".step2");
      console.log(check);
      const nameflag    = bookingCoursefun(bookingName)
      const emailflag   = bookingCoursefun(bookingEmail)
      const countryflag = bookingCoursefun(bookingCountry)
      const phoneflag   = bookingCoursefun(bookingPhone)
      const messageflag = bookingCoursefun(bookingMessage)
      const paymentmodeflag = bookingCoursefun(booingPaymentmode)
      const checkflag = bookingcheckbox(check)
      
      if(nameflag && emailflag && countryflag && phoneflag && messageflag & paymentmodeflag & checkflag){
         console.log("test");
         step2.classList.add("d-none");
         document.querySelector(".step3").classList.remove("d-none");
      } 
   }

   function roomselect(){
      const room = document.querySelector("#bookingroom");
      const course = document.querySelector("#bookingcourse");
      const courseprice = document.querySelectorAll(".courseprice");
      const roomflag = bookingCoursefun(room);
      const courseflag = bookingCoursefun(course);
      if(roomflag && courseflag){
         const coursevalue = course.value;
         const roomvalue = room.value;
         $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         $.ajax({
            url: "/courseprice",
            type: "POST",
            data: { course: course.value, room: room.value},
            success: function (data) {
               for (const price of courseprice) {
                  price.innerHTML = data;
               }
               console.log(data);
               // if (data == true) {
                  
               // } else {
                  
               // }
            }
         });
      }else{
         console.log("please select your room");
      }
      
   }

   
 </script>
@endsection
