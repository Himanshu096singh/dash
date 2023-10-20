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
                         <input type="hidden" name="type" id="enquirytype" value="0">
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
 