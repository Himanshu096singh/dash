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
            <form action="{{url('bookingforms2')}}" method="post">
               @csrf
               <div class="step1">
                  <div class="form-group">
                     <label>Select Workshop: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="workshop" onchange="updateWorkshop()" name="workshopid">
                           <option value="">Select workshop...</option>
                           @foreach($workshoplist as $list)
                              <option value="{{$list->id}}" >{{$list->name}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>I want to attend: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="workshopattend" onchange="updateWorkshop()" name="attend">
                           <option value="">Select...</option>
                              <option value="onlineprice">Online Workshop</option>
                              <option value="inpersonprice">In Person Workshop</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Name: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Name *" id="workshopname" class="form-control" name="name" type="text" >
                  </div>
                  <div class="form-group">
                     <label>Email: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Email *" id="workshopemail" class="form-control" name="email" type="text">
                  </div>
                  <div class="form-group">
                     <label>Country: <span class="required">*</span></label>
                     <input type="text" class="form-control country" id="workshopcountry" name="country_selector_code" data-countrycodeinput="1" placeholder="Selected country code will appear here" />
                  </div>
                  <div class="form-group">
                     <label>Contact Number: <span class="required">*</span></label>
                     <input required="required" placeholder="Enter Contact Number *" id="workshopnumber" class="form-control" name="number" type="text">
                  </div>
                  <div class="form-group">
                     <label>Gender: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="workshopgender" name="gender">
                           <option value="">Select Gender...</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Payment Mode: <span class="required">*</span></label>
                     <div class="custom_select">
                        <select id="paymentmode" name="paymentmode" onchange="updateWorkshop()">
                           <option value="">Choose Payment Mode</option>
                           <option value="0">Full Payment</option>
                           <option value="1">Advance Payment</option>
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
                     <a class="btn btn-default" onclick="myFunctionStep1()"> NEXT </a>
                  </div>
               </div>
               <div class="step2 d-none">
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
                                 <span class="fw-bold"> Payment Mode: </span> <span class="paymentypetxt">Full Payment</span>
                              </td>
                              <td class="courseprice">$<span class="courseprice"></span></td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td class="product-subtotal">Total</td>
                              <td class="product-subtotal">$
                                 <span class="courseprice"> </span> </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <div class="row mt-5">
                     <div class="col-12">
                        <div class="payment_method">
                           <div class="custome-radio">
                              <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="0" checked>
                              <label class="form-check-label" for="exampleRadios4">Paypal</label>
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
   $("#workshopcountry").countrySelect({
        preferredCountries: []
    });
    function inputValidationfunc(field){
      if (field.value !== "") {
            field.style.borderColor = "#ccc";
            return true;
         } else {
            field.style.borderColor = "#d9534f";
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
         console.log("d");
         const workshopId     = document.querySelector("#workshop");
         const workshopAttend = document.querySelector("#workshopattend");
         const workshopName   = document.querySelector("#workshopname");
         const workshopEmail  = document.querySelector("#workshopemail");
         const workshopCountry = document.querySelector("#workshopcountry");
         const workshopNumber = document.querySelector("#workshopnumber");
         const workshopGender = document.querySelector("#workshopgender");
         const workshopMode   = document.querySelector("#paymentmode");
         const idflag      = inputValidationfunc(workshopId);
         const Attendflag  = inputValidationfunc(workshopAttend);
         const nameflag    = inputValidationfunc(workshopName);
         const emailflag   = inputValidationfunc(workshopEmail);
         const countryflag = inputValidationfunc(workshopCountry);
         const numberflag  = inputValidationfunc(workshopNumber);
         const genderflag  = inputValidationfunc(workshopGender);
         const modeflag    = inputValidationfunc(workshopMode);

         if(idflag && Attendflag && nameflag && emailflag && countryflag && numberflag && genderflag && modeflag){
            const step1 = document.querySelector(".step1");
            step1.classList.add("d-none");
            document.querySelector(".step2").classList.remove("d-none");
         } else {
            console.log(0);
         }
      
    }
    function myFunctionStep2() {
      const bookingName    = document.querySelector("#bookingname");
      const bookingEmail   = document.querySelector("#bookingemail");
      const bookingCountry = document.querySelector("#bookingcountry");
      const bookingPhone   = document.querySelector("#bookingphone");
      const bookingMessage = document.querySelector("#bookingmessage");
      const booingPaymentmode = document.querySelector("#bookingpaymentmode")
      const check = document.querySelector("#check")
      const step2 = document.querySelector(".step2");
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
    function updateWorkshop(){
      const workshop = document.querySelector("#workshop");
      const attend = document.querySelector("#workshopattend");
      const mode = document.querySelector("#paymentmode");
      const courseprice = document.querySelectorAll(".courseprice");
      const paymenttype = document.querySelector(".paymentypetxt");

      const workshopflag = inputValidationfunc(workshop);
      const attendflag = inputValidationfunc(attend);
      const modeflag = inputValidationfunc(mode);
      if(workshopflag && attendflag && modeflag){
         const workshopvalue = workshop.value;
         const attendvalue = attend.value;
         const modevalue = mode.value;
         $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         $.ajax({
            url: "/workshoppriceupdate",
            type: "POST",
            data: { workshopvalue: workshopvalue, attendvalue: attendvalue,mode: modevalue},
            success: function (data) {
               for (const price of courseprice) {
                  price.innerHTML = data;
               }
               paymenttype.innerHTML = paymenttype;
               console.log(data);
               // for (const price of courseprice) {
               //    price.innerHTML = data[roomvalue];
               // }
               // const datesArray = data.dates;
               // const dateSelect = document.getElementById('bookingdate');
               // dateSelect.innerHTML = '';
               // for (const dateObj of datesArray) {
               //    const option = document.createElement('option');
               //    option.value = dateObj.id; // You can set the value to something meaningful if needed
               //    option.text = dateObj.date;
               //    dateSelect.appendChild(option);
               // }
            }
         });
         // dateupdate(course.value);
      }else{
         console.log("Choose All Fields");
      }
    }
</script>
@endsection
